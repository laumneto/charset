<?php

define('VERSION', 'PRO v5.0');

error_reporting(NULL);


//start session & handle logout
session_destroy();
session_start();


//echo '<pre>';
    //print_r($_SESSION);
    //echo '</pre>';


if(isset($_GET["logout"]) && $_GET["logout"] == 1){
	session_destroy();
	//session_start();
}

require_once "configuration.php";

if(gatorconf::get('use_database')){
	require_once "./include/common/mysqli.php";
}

require_once "./include/common/phpass.php";
require_once "./include/file-gator.php";

$app = new gator();
$app->init();

