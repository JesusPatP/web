<?php 
//Primary paths
//define("ROOT_PATH_OTHER", 'http://' . $_SERVER["DOCUMENT_ROOT"] . '/webroot/mysite/');

//define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
define('ROOT_PATH_RESOURCES', '/'.'tech_department/');
//Test path
define('ROOT_PATH', 'c://xampp/htdocs/tech_department/');
//ASSET
define('ASSET_PATH', ROOT_PATH.'asset/');
define('ASSET_STATIC_PATH', ASSET_PATH.'static/');
//Img
define('IMG_PATH', ASSET_STATIC_PATH.'img/');
//CSS
define('CSS_PATH', ASSET_STATIC_PATH.'css/');
//JS
define('JS_PATH', ASSET_STATIC_PATH.'js/');
//BOOTSTRAP
define('BOOTSTRAP_PATH', ASSET_STATIC_PATH.'js/');
//CONTROLLER
define('CONTROLLER_PATH', ROOT_PATH.'controller/');
//Model
define('MODEL_PATH', ROOT_PATH.'model/');
//View
define('VIEW_PATH', ROOT_PATH.'view/');

//Dashboard
define('DASHBOARD_PATH', VIEW_PATH.'dashboard/');
define('DASHBOARD_DASH_PATH', DASHBOARD_PATH.'dashboard.php');
define('DASHBOARD_FOOTER_PATH', DASHBOARD_PATH.'footer.php');
define('DASHBOARD_HEAD_PATH', DASHBOARD_PATH.'head.php');

//Home
define('HOME_PATH', VIEW_PATH.'home/');

//Head
define('HEAD_PATH', VIEW_PATH.'head/');
define('HEAD_FOOTER_PATH', HEAD_PATH.'footer.php');
define('HEAD_HEAD_PATH', HEAD_PATH.'head.php');
define('HEADER_HEAD_PATH', HEAD_PATH.'header.php');
//Sig-in
define('SIGNIN_PATH', HOME_PATH.'signin.php');
define('SIGNIN_IMG_PATH', IMG_PATH.'sign-in/');
define('SIGNIN_IMG_1_PATH', SIGNIN_IMG_PATH.'undraw_launching_re_tomg.svg');
define('SIGNIN_IMG_2_PATH', SIGNIN_IMG_PATH.'logo.png');

?>