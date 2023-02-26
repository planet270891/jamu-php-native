<?php

define('DB_HOST', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "jamu_ci");
define('PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

$HTTP = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$FULL_URL = $HTTP . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$BASE_URL = isset($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] . '/' : '';
$URI = explode("/", str_replace($BASE_URL, NULL, $FULL_URL));

$controller = isset($URI[1]) && $URI[1] != null ? $URI[1] : "home";
$method = isset($URI[2]) && $URI[2] != null ? $URI[2] : null;
$parameter = isset($URI[3]) && $URI[3] != null ? $URI[3] : null;

if(file_exists('controllers/'.strtolower($controller).'.php')){
	require_once(PATH.'controllers/'.strtolower($controller).'.php');
}else{
	die('Page not found');
}



