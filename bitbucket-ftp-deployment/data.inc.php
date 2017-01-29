<?php
$bitbucket_credentials = array(
    'username' => 'melbrins@gmail.com',
    'password' => 'hcx2wpaw'
);

$projects = array(
	array(
		'git_slug'=>'bitbucket-ftp-deploy',
		'branches'=>array(
			'master'=>array(
				'type'=>'ftp',
				'ftp_host'=>'ftp.melbrins.com',
				'ftp_user'=>'melbrins',
				'ftp_pass'=>'hcx2wpaw',
				'ftp_path'=>'/www/',
			),
			'beta'=>array(
				'type'=>'ftp',
				'ftp_host'=>'ftp.melbrins.com',
				'ftp_user'=>'melbrins',
				'ftp_pass'=>'hcx2wpaw',
				'ftp_path'=>'/www/beta/',
			),
		),
	),
);
?>