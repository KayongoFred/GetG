<?php
// Database Configuration. Add your details below .

$dbOptions = array(
	'db_host' => 'localhost',
	'db_user' => 'root',
	'db_pass' => '',
	'db_name' => 'requests'
);

// Database Config End

require "classes/connect_class.php";
require "classes/acc.php";

try{

	// Connecting to the database
	DB::init($dbOptions);
	AD::create_tables();

	$response = array();

	// Handling the supported actions:

	switch($_GET['action']){

		case 'add_request':
			$request=utf8_decode(urldecode($_GET['request']));
			$response = AD::add_request($request);
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
