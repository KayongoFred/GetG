<?php

// Database Configuration. Add your details below

$dbOptions = array(
	'db_host' => 'localhost',
	'db_user' => 'root',
	'db_pass' => '',
	'db_name' => 'getgear'
);

// Database Config End

error_reporting(E_ALL ^ E_NOTICE);

require "../classes/connect_class.php";
require "../classes/acc.php";
require "console.php";

session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){

	// If magic quotes is enabled, strip the extra slashes
	array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
	array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{

	// Connecting to the database
	DB::init($dbOptions);

	$response = array();
  	$user_email=$_COOKIE["getgear_user_email"];
  	$user_password=$_COOKIE["getgear_user_password"];

	// Handling the supported actions:
	switch($_POST['action']){

		case 'post_solution':
    		$response=peeleWeb::post_solution();
		break;

		case 'post_ad':
			$response=peeleWeb::post_ad();
		break;

		case 'post_category':
			$response=peeleWeb::post_category();
			break;

		case 'update_item':
    		$response=peeleWeb::update_item();
			break;

		case 'updateCategoryAvator':
			$response=peeleWeb::updateCategoryAvator();
			break;

		default:
			throw new Exception('Wrong action');
	}
	echo $response;
}

catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}
?>