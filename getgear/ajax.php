<?php

// Database Configuration. Add your details below.

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

	// Connecting to the database.
	DB::init($dbOptions);
	GetGear::create_tables();

	$response = array();
  	$user_email=$_COOKIE["getgear_user_email"];
  	$user_password=$_COOKIE["getgear_user_password"];

	switch($_GET['action']){

		case 'google':
			$id=utf8_decode(urldecode($_GET['id']));
			$email=utf8_decode(urldecode($_GET['email']));
			$name=utf8_decode(urldecode($_GET['name']));
			$image=utf8_decode(urldecode($_GET['image']));
			$response = GetGear::google($id, $email, $name, $image);
		break;

		case 'getChats':
			$user_email=utf8_decode(urldecode($_GET['user_email']));
			$response = GetGear::getChats($user_email);
			break;

		case 'getConversation':
			$sender_email=utf8_decode(urldecode($_GET['user_email']));
			$reciever_email=utf8_decode(urldecode($_GET['target_email']));
			$response=GetGear::getConversation($sender_email, $reciever_email);
			break;

		case 'sendMessage':
			$post_id="1";
			$message=utf8_decode(urldecode($_GET['message']));
			$sender_email=utf8_decode(urldecode($_GET['sender_email']));
			$reciever_email=utf8_decode(urldecode($_GET['patient']));
			$time=utf8_decode(urldecode($_GET['time']));
			$response = GetGear::sendMessage($post_id, $message, $sender_email, $reciever_email, $time);
			break;

		case 'checkNewMessage':
			$sender_email=utf8_decode(urldecode($_GET['user_email']));
			$reciever_email=utf8_decode(urldecode($_GET['target_email']));
			$response = GetGear::checkNewMessage($sender_email, $reciever_email);
			break;

		case 'checkNewMessageOnList':
			$sender_email=utf8_decode(urldecode($_GET['user_email']));
			$response = GetGear::checkNewMessageOnList($sender_email);
			break;

		case 'getRecomended':
			$response = GetGear::getRecomendedItems();
			break;

		case 'getFeatured':
			$response = GetGear::getFeaturedItems();
			break;

		case 'getCategorizedItems':
			$category=utf8_decode(urldecode($_GET['category']));
			$response = GetGear::getCategorizedItems($category);
			break;

		case 'saveBooking':
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$quantity=utf8_decode(urldecode($_GET['quantity']));
			$user_id=utf8_decode(urldecode($_GET['user_id']));
			$amount_paid=utf8_decode(urldecode($_GET['amount_paid']));
			$transaction_type=utf8_decode(urldecode($_GET['transaction_type']));
			//$category=utf8_decode(urldecode($_GET['category']));
			$hireDate=utf8_decode(urldecode($_GET['hireDate']));
			$hireDays=utf8_decode(urldecode($_GET['hireDays']));
			$response = GetGear::saveBooking($item_id, $quantity, $user_id, $amount_paid, $transaction_type, $hireDate, $hireDays);
			break;

		case 'getItemImages':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$response = GetGear::getItemImages($item_id);
			break;

		case 'getItemComments':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$response = GetGear::getItemComments($item_id);
			break;

		case 'getItemRatting':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$response = GetGear::getItemRatting($item_id);
			break;

		case 'saveCart':
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$userName=utf8_decode(urldecode($_GET['user_id']));
			$finalCount=utf8_decode(urldecode($_GET['finalCount']));
			$gearDate=utf8_decode(urldecode($_GET['gearDate']));
			$response=GetGear::saveCart($item_id, $userName, $gearDate, $finalCount);
			break;

		case 'getMyOrders':
			$userName=utf8_decode(urldecode($_GET['userName']));
			$status=utf8_decode(urldecode($_GET['status']));
			$response=GetGear::getUserItems($userName, $status);
			break;

		case 'getMyItem':
			$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::GetUserStoreItems($userName);
			break;

		case 'getAds':
			$response=GetGear::GetAds();
			break;

		case 'getCart':
			$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::GetCart($userName);
			break;

		case 'deleteCart':
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::DeleteCart($item_id, $userName);
			break;

		case 'updatePrice':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$itemprice=utf8_decode(urldecode($_GET['itemprice']));
			$response=GetGear::UpdatePrice($item_id, $itemprice);
			break;

		case 'delete_user_item':
			$user_id=utf8_decode(urldecode($_GET['user_id']));
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$response=GetGear::DeleteUserItem($item_id, $user_id);
			break;

		case 'itemTaken':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$response=GetGear::ItemTaken($item_id);
			break;

		case 'setItemStatus':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$status=utf8_decode(urldecode($_GET['status']));
            $hireDate=utf8_decode(urldecode($_GET['date']));
            $userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::setBookedItemStatus($item_id, $status, $hireDate, $userName);
			break;

		case 'leaveMessage':
			$message=utf8_decode(urldecode($_GET['message']));
		 	$item_id=utf8_decode(urldecode($_GET['itemId']));
		  	$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::saveInquiry($message, $item_id, $userName);
			break;

		case 'leaveComment':
			$message=utf8_decode(urldecode($_GET['message']));
		 	$item_id=utf8_decode(urldecode($_GET['itemId']));
		  	$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::saveComment($message, $item_id, $userName);
			break;

		case 'setItemRating':
			$rating=utf8_decode(urldecode($_GET['rate']));
		 	$item_id=utf8_decode(urldecode($_GET['itemId']));
		  	$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::SetItemRating($rating, $item_id, $userName);
			break;

		case 'activateGear':
			$item_id=utf8_decode(urldecode($_GET['itemId']));
			$response=GetGear::ActivateGear($item_id);
			break;

		case 'getUserProfile':
		  	$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::GetUserProfile($userName);
			break;

		case 'save_prifile_picture':
			$imageName=utf8_decode(urldecode($_GET['imageName']));
			$user_id=utf8_decode(urldecode($_GET['user_id']));
			$response=GetGear::save_prifile_picture($user_id, $imageName);
			break;

		case 'update_user_profile':
			$fullName=utf8_decode(urldecode($_GET['fullName']));
            $phoneNumber=utf8_decode(urldecode($_GET['phoneNumber']));
            $user_email=utf8_decode(urldecode($_GET['user_email']));
            $gender=utf8_decode(urldecode($_GET['gender']));
            $birthday=utf8_decode(urldecode($_GET['birthday']));
            $user_id=utf8_decode(urldecode($_GET['user_id']));
            $response=GetGear::UpdateUserProfile($fullName, $phoneNumber, $user_email, $gender, $birthday, $user_id);
			break;

		case 'save_new_user_profile':
			$fullName=utf8_decode(urldecode($_GET['fullName']));
            $phoneNumber=utf8_decode(urldecode($_GET['phoneNumber']));
            $user_email=utf8_decode(urldecode($_GET['user_email']));
            $gender=utf8_decode(urldecode($_GET['gender']));
            $birthday=utf8_decode(urldecode($_GET['birthday']));
			$imageName=utf8_decode(urldecode($_GET['imageName']));
            $response=GetGear::SaveNewUserProfile($fullName, $phoneNumber, $user_email, $gender, $birthday, $imageName);
			break;

		case 'get_avator':
		  	$userName=utf8_decode(urldecode($_GET['user_email']));
			$response=GetGear::get_avator($userName);
			break;

		case 'count_cart':
		  	$userName=utf8_decode(urldecode($_GET['user_email']));
			$response=GetGear::count_cart($userName);
			break;

		case 'count_notifications':
		  	$userName=utf8_decode(urldecode($_GET['user_email']));
			$response=GetGear::count_notifications($userName);
			break;

		case 'getUserCategorizedItems':
			$category=utf8_decode(urldecode($_GET['category']));
			$user_id=utf8_decode(urldecode($_GET['user_id']));
			$response=GetGear::getUserCategorizedItems($category, $user_id);
			break;

		case 'getExchangeRate':
			$response=GetGear::getExchangeRate();
			break;

		case 'ClearNotifications':
		  	$userName=utf8_decode(urldecode($_GET['user_email']));
			$response=GetGear::ClearNotifications($userName);
			break;

		case 'checkItemAvailability':
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$gearDate=utf8_decode(urldecode($_GET['gearDate']));
			$finalCount=utf8_decode(urldecode($_GET['finalCount']));
			$response=GetGear::checkItemAvailability($item_id, $gearDate, $finalCount);
			break;

		case 'saveCartData':
			$transaction_type=utf8_decode(urldecode($_GET['transaction_type']));
			$transaction_amount=utf8_decode(urldecode($_GET['transaction_amount']));
			$jsonData=utf8_decode(urldecode($_GET['jsonData']));
			$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::SaveCartData($transaction_type, $transaction_amount, $jsonData, $userName);
			break;

		case 'search_items':
			$key=utf8_decode(urldecode($_GET['key']));
			$response=GetGear::SearchItems($key);
			break;

		case 'searchMyItems':
			$userName=utf8_decode(urldecode($_GET['userName']));
			$key=utf8_decode(urldecode($_GET['key']));
			$response=GetGear::SearchUserStoreItems($userName, $key);
			break;

		case 'get_users':
			$response=GetGear::get_users();
			break;

		case 'login':
			$password=$_GET['password'];
			$email=$_GET['email'];
			$response=GetGear::WebLogIn($email, $password);
		break;

		case 'unlock':
			$password=$_GET['password'];
			if(GetGear::dashboard_login($user_email, $password)==="true"){
	            setcookie("getgear_user_email", $user_email, time() + (86400 * 30), "/");
		        setcookie("getgear_user_password", $password, time() + (86400 * 30), "/");
               	$response="true";
			}else{
				$response="false";
			}
		break;

		case 'getProfile':
			$response=GetGear::getProfile($_COOKIE["getgear_user_email"]);
		break;

		case 'get_categories':
			$response=GetGear::get_categories();
			break;

		case 'getNotifications':
		  	$userName=utf8_decode(urldecode($_GET['user_email']));
			$response=GetGear::getNotifications($userName);
			break;

		case 'count_users':
			$response=GetGear::count_users();
			break;

		case 'getClientsOrders':
			$response=GetGear::getClientsOrders();
			break;

		case 'getMyClientsOrders':
		  	$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::getMyClientsOrders($userName);
			break;

		case 'getMyItemData':
		  	$item_id=utf8_decode(urldecode($_GET['item_id']));
			$response=GetGear::getMyItemData($item_id);
			break;

		case 'getAllMyItemData':
			$response=GetGear::getAllMyItemData();
			break;

		case 'saveOwnerBooking':
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$userName=utf8_decode(urldecode($_GET['user_id']));
			$finalCount=utf8_decode(urldecode($_GET['finalCount']));
			$gearDate=utf8_decode(urldecode($_GET['gearDate']));
			$response=GetGear::SaveOwnerBooking($item_id, $userName, $gearDate, $finalCount);
			break;

		case 'getPaymentsNotifications':
			$response=GetGear::getPaymentsNotifications();
			break;

		case 'clearDashboardNotifications':
			$response=GetGear::clearDashboardNotifications();
			break;

		case 'categoryCount':
			$response=GetGear::categoryCount();
			break;

		case 'delete_item':
			$item_id=utf8_decode(urldecode($_GET['item_id']));
			$response=GetGear::delete_item($item_id);
			break;

		case 'getPopularCategories':
			$response=GetGear::GetPopularCategories();
			break;

		case 'DeleteNotifications':
		  	$userName=utf8_decode(urldecode($_GET['user_email']));
			$response=GetGear::DeleteNotifications($userName);
			break;

		case 'getTransportationCost':
			$response=GetGear::getTransportationCost();
			break;

		case 'UpdateTransportationCost':
			$cost=utf8_decode(urldecode($_GET['cost']));
			$response=GetGear::UpdateTransportationCost($cost);
			break;

		case 'UpdateDollarRate':
			$cost=utf8_decode(urldecode($_GET['cost']));
			$response=GetGear::UpdateDollarRate($cost);
			break;

		case 'updatePassword':
			$user_email=$_COOKIE["getgear_user_email"];
			$oldPass=utf8_decode(urldecode($_GET['oldPass']));
			$newPass=utf8_decode(urldecode($_GET['newPass']));
			$response=GetGear::updatePassword($user_email, $oldPass, $newPass);
			break;

		case 'sendBulkNotifications':
			$notification=utf8_decode(urldecode($_GET['notification']));
			$response=GetGear::sendBulkNotifications($notification);
			break;

		case 'updateCategoryName':
			$id=utf8_decode(urldecode($_GET['id']));
			$name=utf8_decode(urldecode($_GET['name']));
			$response=GetGear::updateCategoryName($id, $name);
			break;

		case 'getAllAddresses':
			$response=GetGear::getAllAddresses();
			break;

		case 'saveAddresses':
			$userName=utf8_decode(urldecode($_GET['userName']));
			$contact_name=utf8_decode(urldecode($_GET['contact_name']));
			$phone=utf8_decode(urldecode($_GET['phone']));
			$google_location=utf8_decode(urldecode($_GET['google_location']));
			$latitude=utf8_decode(urldecode($_GET['latitude']));
			$longtude=utf8_decode(urldecode($_GET['longtude']));
			$unit=utf8_decode(urldecode($_GET['unit']));
			$state=utf8_decode(urldecode($_GET['state']));
			$city=utf8_decode(urldecode($_GET['city']));
			$country=utf8_decode(urldecode($_GET['country']));
			$zip=utf8_decode(urldecode($_GET['zip']));
			$response=GetGear::saveUserAddress($userName, $contact_name, $google_location, $latitude, $longtude, $unit, $state, $city, $country, $zip, $phone);
			break;

		case 'getAddresses':
			$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::getUserAddresses($userName);
			break;

		case 'deleteAddress':
			$phone_number=utf8_decode(urldecode($_GET['phone_number']));
			$address=utf8_decode(urldecode($_GET['address']));
			$unit_apt=utf8_decode(urldecode($_GET['unit_apt']));
			$userName=utf8_decode(urldecode($_GET['userName']));
			$response=GetGear::DeleteAddress($phone_number, $address, $unit_apt, $userName);
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
