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

require "classes/connect_class.php";
require "classes/acc.php";

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
	peele::create_tables();

	$response = array();
  $user_email=$_COOKIE["peele_user_email"];
  $user_password=$_COOKIE["peele_user_password"];

	// Handling the supported actions:

	switch($_GET['action']){

		case 'login':
			$password=utf8_decode(urldecode($_GET['password']));
			$email=utf8_decode(urldecode($_GET['email']));
			$response = peele::login($email, $password);
		break;

		case 'signup':
			$full_name=$_GET['full_name'];//
			$password=$_GET['password'];//
			$email=$_GET['email'];//
			$sex=$_GET['sex'];//
			$age=$_GET['age'];//
			$phone=$_GET['phone'];//
			$prevlage=$_GET['prevlage'];//
			$organization=$_GET['organization'];//
			$response = peele::signup($full_name, $email, $prevlage, $organization, $phone, $password, $age, $sex);
		break;

		case 'check_prevlage':
			$password=$_GET['password'];
			$email=$_GET['email'];
			$response = peele::check_prevlage($email, $password);
		break;

		case 'askDoc':
			$question=utf8_decode(urldecode($_GET['question']));
			$description=utf8_decode(urldecode($_GET['description']));
			$bitmap=utf8_decode(urldecode($_GET['bitmap']));
			$audioFile=utf8_decode(urldecode($_GET['audioFile']));
			$healthCenter=utf8_decode(urldecode($_GET['healthCenter']));
			$userEmail=utf8_decode(urldecode($_GET['userEmail']));
			$response=peele::askDoc($question, $description, $bitmap, $audioFile, $healthCenter, $userEmail);
			break;

		case 'askAboutSrhr':
			$question=utf8_decode(urldecode($_GET['question']));
			$description=utf8_decode(urldecode($_GET['description']));
			$userEmail=utf8_decode(urldecode($_GET['userEmail']));
			$response=peele::askAboutSrhr($question, $description, $userEmail);
			break;

		case 'reportSession':
			$session=utf8_decode(urldecode($_GET['session']));
			$total_paticipants=utf8_decode(urldecode($_GET['total_paticipants']));
			$male_paticipants=utf8_decode(urldecode($_GET['male_paticipants']));
			$female_paticipants=utf8_decode(urldecode($_GET['female_paticipants']));
			$venue=utf8_decode(urldecode($_GET['venue']));
			$bitmap=utf8_decode(urldecode($_GET['bitmap']));
			$userEmail=utf8_decode(urldecode($_GET['userEmail']));
			$response=peele::reportSession($session, $total_paticipants, $male_paticipants, $female_paticipants, $venue, $bitmap, $userEmail);
			break;

		case 'topics':
			$request=utf8_decode(urldecode($_GET['request']));
			$response=peele::questionRequest($request);
			break;

		case 'problems':
			$dector_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::get_problems($dector_email);
			break;

		case 'saveReply':
			$post_id=utf8_decode(urldecode($_GET['post_id']));
			$message=utf8_decode(urldecode($_GET['message']));
			$sender_email=utf8_decode(urldecode($_GET['sender_email']));
			$reciever_email=peele::get_reciever_email($post_id);
			$time=utf8_decode(urldecode($_GET['time']));
			$response=peele::saveReply($post_id, $message, $sender_email, $reciever_email, $time);
			break;

		case 'getChats':
			$dector_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::getChats($dector_email);
			break;

		case 'getConversation':
			$sender_email=utf8_decode(urldecode($_GET['user_email']));
			$reciever_email=utf8_decode(urldecode($_GET['target_email']));
			$response=peele::getConversation($sender_email, $reciever_email);
			break;

		case 'sendMessage':
			$post_id=utf8_decode(urldecode($_GET['post_id']));
			$message=utf8_decode(urldecode($_GET['message']));
			$sender_email=utf8_decode(urldecode($_GET['sender_email']));
			$reciever_email=utf8_decode(urldecode($_GET['patient']));
			$time=utf8_decode(urldecode($_GET['time']));
			$response=peele::sendMessage($post_id, $message, $sender_email, $reciever_email, $time);
			break;

		case 'checkNewMessage':
			$sender_email=utf8_decode(urldecode($_GET['user_email']));
			$reciever_email=utf8_decode(urldecode($_GET['target_email']));
			$response=peele::checkNewMessage($sender_email, $reciever_email);
			break;

		case 'checkNewMessageOnList':
			$sender_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::checkNewMessageOnList($sender_email);
			break;

		case 'get_topic_problems':
			$topic=utf8_decode(urldecode($_GET['request']));
			$dector_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::get_topic_problems($dector_email, $topic);
			break;

		case 'add_doctor':
			$full_name=$_GET['full_name'];
			$email=$_GET['email'];
			$prevlage=$_GET['prevlage'];
			$hospital=$_GET['hospital'];
			$phone=$_GET['phone'];
			$password=$_GET['password'];
			$age=$_GET['age'];
			$sex=$_GET['sex'];
			$response=peele::add_doctor($full_name, $email, $prevlage, $hospital, $phone, $password, $age, $sex);
			break;

		case 'getHospitals':
			$response=peele::getHospitals();
			break;

		case 'topicsAll':
			$response=peele::questionRequestAll();
			break;

	 case 'uTopics':
	 		$email=utf8_decode(urldecode($_GET['request']));
			$response=peele::uTopics($email);
			break;

		case 'add_topic_data':
			$question=utf8_decode(urldecode($_GET['question']));
			$description=utf8_decode(urldecode($_GET['description']));
			$bitmap1=utf8_decode(urldecode($_GET['bitmap1']));
			$bitmap2=utf8_decode(urldecode($_GET['bitmap2']));
			$bitmap3=utf8_decode(urldecode($_GET['bitmap3']));
			$bitmap4=utf8_decode(urldecode($_GET['bitmap4']));
			$userEmail=utf8_decode(urldecode($_GET['userEmail']));
			$topic=utf8_decode(urldecode($_GET['topic']));
			$response=peele::add_topic_data($question, $description, $bitmap1, $bitmap2, $bitmap3, $bitmap4, $userEmail, $topic);
			break;

		case 'get_admin_and_doctors':
			$topic=utf8_decode(urldecode($_GET['request']));
			$response=peele::admins_and_doctors($topic);
			break;

		case 'get_peer_educators':
			$response=peele::get_peer_educators();
			break;

		case 'get_reports':
			$response=peele::get_reports();//
			break;

		case 'get_users':
			$response=peele::get_users();
			break;

		case 'count_users':
			$response=peele::count_users();
			break;

		case 'delete_doctor_admin':
			$userEmail=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::delete_doctor_admin($userEmail);
			break;

		case 'delete_peer_educator':
			$userEmail=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::delete_peer_educator($userEmail);
			break;

		case 'approve_peer_educator':
			$userEmail=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::approve_peer_educator($userEmail);
			break;

		case 'add_admin':
			$full_name=$_GET['full_name'];
			$email=$_GET['email'];
			$prevlage=$_GET['prevlage'];
			$phone=$_GET['phone'];
			$password=$_GET['password'];
			$age=$_GET['age'];
			$sex=$_GET['sex'];
			$response=peele::add_admin($full_name, $email, $prevlage, $phone, $password, $age, $sex);
			break;

		case 'update_prevlages':
			$prevlege=utf8_decode(urldecode($_GET['prevlege']));
			$user_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::update_prevlages($user_email, $prevlege);
			break;

		case 'updatePassword':
			$oldPassword=utf8_decode(urldecode($_GET['oldPassword']));
			$newPassword=utf8_decode(urldecode($_GET['newPassword']));
			$user_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::updatePassword($user_email, $oldPassword, $newPassword);
			break;

		case 'save_prifile_picture':
			$imageName=utf8_decode(urldecode($_GET['imageName']));
			$user_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::save_prifile_picture($user_email, $imageName);
			break;

		case 'get_avator':
			$user_email=utf8_decode(urldecode($_GET['user_email']));
			$response=peele::get_avator($user_email);
			break;

		case 'delete_post':
			$post_id=utf8_decode(urldecode($_GET['post_id']));
			$response=peele::delete_post($post_id);
			break;

		case 'update_topic_data':
			$question=utf8_decode(urldecode($_GET['question']));
			$description=utf8_decode(urldecode($_GET['description']));
			$id=utf8_decode(urldecode($_GET['id']));
			$topic=utf8_decode(urldecode($_GET['topic']));
			$response=peele::update_topic_data($question, $description, $id, $topic);
			break;

		case 'peer_search':
			$sample=utf8_decode(urldecode($_GET['sample']));
			$response=peele::peer_search($sample);
			break;

		case 'peer_full_search':
			$sample=utf8_decode(urldecode($_GET['sample']));
			$response=peele::peer_full_search($sample);
			break;

		case 'add_organizations':
			$name=utf8_decode(urldecode($_GET['name']));
			$email=utf8_decode(urldecode($_GET['email']));
			$phone1=utf8_decode(urldecode($_GET['phone1']));
			$phone2=utf8_decode(urldecode($_GET['phone2']));
			$website=utf8_decode(urldecode($_GET['website']));
			$password=utf8_decode(urldecode($_GET['password']));
			$response=peele::add_organizations($name, $email, $phone1, $phone2, $website, $password);
			break;

		case 'update_organizations':
			$name=utf8_decode(urldecode($_GET['name']));
			$email=utf8_decode(urldecode($_GET['email']));
			$phone1=utf8_decode(urldecode($_GET['phone1']));
			$phone2=utf8_decode(urldecode($_GET['phone2']));
			$website=utf8_decode(urldecode($_GET['website']));
			$password=utf8_decode(urldecode($_GET['password']));
			$response=peele::update_organizations($name, $email, $phone1, $phone2, $website, $password);
			break;

		case 'delete_organizations':
			$name=utf8_decode(urldecode($_GET['name']));
			$response=peele::delete_organizations($name);
			break;

		case 'get_organizations':
			$response=peele::get_organizations();
			break;

		case 'get_hospitals':
			$response=peele::get_hospitals();
			break;

		case 'delete_hospital':
			$name=utf8_decode(urldecode($_GET['name']));
			$response=peele::delete_hospital($name);
			break;

		case 'add_people_posts':
			$email=utf8_decode(urldecode($_GET['email']));
			$subject=utf8_decode(urldecode($_GET['subject']));
			$description=utf8_decode(urldecode($_GET['description']));
			$response=peele::add_people_posts($email, $subject, $description);
			break;

		case 'add_people_post_comments':
			$post_id=utf8_decode(urldecode($_GET['post_id']));
			$email=utf8_decode(urldecode($_GET['email']));
			$comment=utf8_decode(urldecode($_GET['comment']));
			$response=peele::add_people_post_comments($post_id, $email, $comment);
			break;

		case 'add_people_post_likes':
			$post_id=utf8_decode(urldecode($_GET['post_id']));
			$email=utf8_decode(urldecode($_GET['email']));
			$response=peele::add_people_post_likes($post_id, $email);
			break;

		case 'get_people_posts':
			$response=peele::get_people_posts();
			break;

		case 'get_people_post_comments':
			$post_id=utf8_decode(urldecode($_GET['post_id']));
			$response=peele::get_people_post_comments($post_id);
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
