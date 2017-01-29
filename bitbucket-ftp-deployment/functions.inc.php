<?php
function logIt($text,$save=true,$slug=null) {
	$msg = date("d.m.Y, H:i:s",time()) .': '.$text."\n";
	if(!$save) return $msg;
        logMsg($msg, $slug);
}
function logMsg($text,$slug=null) {
        if($slug){
            $logdatei=fopen("logs/".$slug.".txt","a");
        } else {
            $logdatei=fopen("logfile.txt","a");
        }
	fputs($logdatei,$text);
	fclose($logdatei);
}
function upload_payload($payload) {
        global $bitbucket_credentials;
	$bitbucket_username = $bitbucket_credentials['melbrins@gmail.com'];
	$bitbucket_password = $bitbucket_credentials['hcx2wpaw'];

	$json = stripslashes($payload);
	$data = json_decode($json);
	$slug = $data->repository->slug;
	$uri = $data->repository->absolute_url;

	$commit_data = array();
	foreach($data->commits as $commit) {
		$branch = $commit->branch;
		$node = $commit->node;
                if(!$branch) continue;
		if(!array_key_exists($branch, $commit_data)) {
			$commit_data[$branch] = array();
		}
		foreach($commit->files as $file) {
			$commit_data[$branch][] = array($node, $file);
		}
	}
	$black_list = include 'blacklist.inc.php';
	$logMsg = '';
	foreach($commit_data as $branch=>$data) {
		list($ftp_host,$ftp_user,$ftp_pass,$ftp_path) = get_ftpdata($slug, $branch);
		$logMsg .= logIt('Connecting to branch '.$branch.' at '.$ftp_host.'/'.$ftp_user,false);
		if(substr($ftp_path,0,1)!='/') $ftp_path = '/'.$ftp_path;
		if(substr($ftp_path, strlen($ftp_path)-1,1)!='/') $ftp_path = $ftp_path.'/';
		$conn_id = ftp_connect($ftp_host);
		$login_result = ftp_login($conn_id, $ftp_user, $ftp_pass);
		foreach($data as $step) {
			list($node,$file) = $step;
			$path = $file->file;
			$is_ignored = false;
			foreach ($black_list['items'] as $item) {
				if(strpos($path, $item) !== false && array_search($path, $black_list['exceptions'])===false){
					$is_ignored = true;
					break;
				}
			}
			if($is_ignored){
				$logMsg .= logIt('Ignored '.$ftp_path.$path,false);			
				continue;
			}
			if ($file->type=="removed") {
				ftp_delete($conn_id, $ftp_path.$path);
				$logMsg .= logIt('Removed '.$ftp_path.$path,false);
			}else{
				$url = "https://api.bitbucket.org/1.0/repositories".$uri."raw/".$node."/".$file->file;
				$dirname = dirname($path);
				$chdir = @ftp_chdir($conn_id, $ftp_path.$dirname);
				if($chdir == false){
					if(make_directory($conn_id, $ftp_path.$dirname)){
						$logMsg .= logIt('Created new directory '.$dirname,false);
					} else {
						$logMsg .= logIt('Error: failed to create new directory '.$dirname,false);
					}
				}
				$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_USERPWD, "$bitbucket_username:$bitbucket_password");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);

				$data = curl_exec($ch);

				curl_close($ch);

				$temp = tmpfile();
				fwrite($temp, $data);
				fseek($temp, 0);

				ftp_fput($conn_id, $ftp_path.$path, $temp, FTP_BINARY);

				fclose($temp);

				$logMsg .= logIt('Uploaded: '.$ftp_path.$path,false);
			}
		}
		ftp_close($conn_id);
	}
	logMsg($logMsg, $slug);
}
function get_ftpdata($git_slug, $branch) {
	$proj = get_project($git_slug);
	return get_branch_ftp_data($proj, $branch);
}
function get_branch_ftp_data($project, $wantedBranch) {
	foreach($project['branches'] as $branch=>$data) {
		if(strtolower($branch) == strtolower($wantedBranch)) {
			$type = strtolower($data['type']);
			switch($type) {
				case 'ftp':
					return array($data['ftp_host'],$data['ftp_user'],$data['ftp_pass'],$data['ftp_path']);
			}
		}
	}
	logIt('error: did not find ftp data for project="'.$project['git_slug'].'" for branch="'.$wantedBranch.'"',true,$project['git_slug']);
	exit();
}
function get_project($git_slug) {
	global $projects;
	foreach($projects as $proj) {
		if(strtolower($proj['git_slug']) == strtolower($git_slug)) return $proj;
	}
	logIt('error: get_project found nothing for git_slug="'.$git_slug.'"',true,$git_slug);
	exit();
}
function make_directory($ftp_stream, $dir){
	if (ftp_is_dir($ftp_stream, $dir) || @ftp_mkdir($ftp_stream, $dir)) return true;
	if (!make_directory($ftp_stream, dirname($dir))) return false;
	return ftp_mkdir($ftp_stream, $dir);
}

function ftp_is_dir($ftp_stream, $dir){
	$original_directory = ftp_pwd($ftp_stream);
	if ( @ftp_chdir( $ftp_stream, $dir ) ) {
		ftp_chdir( $ftp_stream, $original_directory );
		return true;
	} else {
		return false;
	}
}
?>