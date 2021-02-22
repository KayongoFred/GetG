<?php
/**
 * Created by Wagaana Alex
 */
class GetGear {
	
	public static function create_tables(){
		$query="create table if not exists users(
		userid int auto_increment not null,
		userName char(100) not null,
		full_name char(100) not null,
		email char(100),
		phone char(100),
		sex char(100),
		prevlage char(100),
		password char(100) not null,
		avator TEXT,
		nationality varchar(100),
		nin varchar(100),
		birthday varchar(100),
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(userid)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists item_category(
		id int auto_increment not null,
		categoryName char(100) not null,
		avator TEXT,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists messages(
		id int auto_increment not null,
		post_id int,
		chat_id int,
		message TEXT not null,
		sender_email TEXT not null,
		reciever_email TEXT not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		seen TEXT,
		avator TEXT,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists item_images(
		id int auto_increment not null,
		item_id char(100) not null,
		image_name char(100) not null,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists cart(
		id int auto_increment not null,
		item_id char(100) not null,
		user_id char(100) not null,
		gearDate char(100) not null,
		count char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists items(
		item_id int auto_increment not null,
		item_name char(100) not null,
		item_price char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		user_id char(100) not null,
		category_id char(100) not null,
		item_qty char(100),
		item_description TEXT not null,
		status TEXT,
		publisher char(100) not null,
		purpose char(100) not null,
		primary key(item_id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists booked(
		id int auto_increment not null,
		item_id char(100) not null,
		quantity char(100) not null,
		user_id char(100) not null,
		amount_paid char(100) not null,
		status char(100) DEFAULT 'Processing',
		transaction_type char(100) not null,
		gearDate char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists comments(
		comment_id int auto_increment not null,
		item_id char(100) not null,
		user_id char(100) not null,
		comment TEXT not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(comment_id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists comment_response(
		id int auto_increment not null,
		comment_id char(100) not null,
		user_id char(100) not null,
		resonse TEXT not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists delivary_data(
		id int auto_increment not null,
		user_id char(100) not null,
		contact_name char(100) not null,
		phone char(100) not null,
		google_location TEXT not null,
		latitude char(100) not null,
		longtude char(100) not null,
		unit TEXT not null,
		state char(100) not null,
		city char(100) not null,
		country char(100) not null,
		zip char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists notifications(
		id int auto_increment not null,
		user_id char(100) not null,
		notification TEXT not null,
		status char(100),
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists ratting(
		id int auto_increment not null,
		user_id char(100) not null,
		item_id char(100) not null,
		rate char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists ads(
		id int auto_increment not null,
		image TEXT not null,
		ad_url TEXT not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists inquiries(
		id int auto_increment not null,
		message TEXT not null,
		user_id char(100) not null,
		item_id char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists transportationCost(
		id int auto_increment not null,
		cost char(100) DEFAULT '800',
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists dollarRate(
		id int auto_increment not null,
		cost char(100) not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists payments(
		id int auto_increment not null,
		amount_paid char(100) not null,
		item_id char(100) not null,
		user_id char(100) not null,
		date_required char(100) not null,
		days_needed char(100) not null,
		status char(100),
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}
	}

	public static function google($id, $email, $name, $image){
			$password=MD5($id);
		    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
		    $roww = mysqli_fetch_array($result);
		    if($roww){
		      	return $roww["prevlage"];
		    }else {
		      	$result=DB::query("INSERT INTO users(userName, full_name, email, prevlage, password) VALUES('".DB::esc($email)."', '".DB::esc($name)."', '".DB::esc($email)."', 'User', '".DB::esc($password)."')");
				if(!$result){
					return "false";
				}else{
					$post='1';
					$msg='Welcome to Get Gear, You are free to contact me from here in case of anything';
					$sender='sanigetmultimedia@gmail.com';
					$tt='00:00:00';
					self::sendMessage($post, $msg, $sender, $email, $tt);

					return "User";
				}
		    }
		}

	private static function get_name($email){
		    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["full_name"];
	    }

	private static function get_id_name($userid){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($userid)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["full_name"];
	    }

	private static function get_user_id($userName){
		    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($userName)."' OR phone='".DB::esc($userName)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["userid"];
	    }

		public static function get_avator($email){
			$user_id=self::get_user_id($email);
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($user_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["avator"];
	    }

		public static function get_phone($email){
			$user_id=self::get_user_id($email);
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($user_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["phone"];
	    }

		public static function get_email($email){
			$user_id=self::get_user_id($email);
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($user_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["email"];
	    }

		public static function fetchFullNameF($email){
			$user_id=self::get_user_id($email);
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($user_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["full_name"];
	    }

		public static function get_client_email($user_id){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($user_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["email"];
	    }

		public static function get_item_category($category_id){
		    $result=DB::query("SELECT* FROM item_category WHERE id='".DB::esc($category_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["categoryName"];
	    }

		public static function get_item_category_id($category){
		    $result=DB::query("SELECT* FROM item_category WHERE categoryName='".DB::esc($category)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["id"];
	    }

		public static function get_item_image($item_id){
		    $result=DB::query("SELECT* FROM item_images WHERE item_id='".DB::esc($item_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["image_name"];
	    }

		public static function get_item_name($item_id){
		    $result=DB::query("SELECT* FROM items WHERE item_id='".DB::esc($item_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["item_name"];
	    }

		private static function countUnread($sender_email, $reciever_email){
			$result=DB::query("SELECT COUNT(seen) AS TOTAL FROM messages WHERE seen='false' AND reciever_email='".DB::esc($sender_email)."' AND sender_email='".DB::esc($reciever_email)."'");
	    	$roww = mysqli_fetch_array($result);
	    	return $roww["TOTAL"];
		}

		public static function get_id_avator($userid){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($userid)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["avator"];
	    }

		public static function get_item_description($item_id){
		    $result=DB::query("SELECT* FROM items WHERE item_id='".DB::esc($item_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["item_description"];
	    }

		public static function get_item_price($item_id){
		    $result=DB::query("SELECT* FROM items WHERE item_id='".DB::esc($item_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["item_price"];
	    }

		public static function get_item_owner($item_id){
		    $result=DB::query("SELECT* FROM items WHERE item_id='".DB::esc($item_id)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["user_id"];
	    }

		public static function getChats($email){
			$user_email=self::get_email($email);
			$result=DB::query("SELECT * FROM messages WHERE (reciever_email='$user_email' OR sender_email='$user_email') AND id IN(SELECT MAX(id) FROM messages GROUP BY chat_id) ORDER BY id DESC");
	    	$data['CHATS'] = array();
	    	while($roww = mysqli_fetch_array($result)){
	      	$sample_array = array();
	      	if($roww){
					$sample_array['ID'] = $roww['post_id'];
					$sample_array['BUFFER'] = $roww['message'];
					$sample_array['DATES'] = $roww['time'];

					if ($roww['sender_email']===$user_email) {
						$sample_array['TOTAL'] = self::countUnread($user_email, $roww['reciever_email']);
						$sample_array['EMAIL'] = $roww['reciever_email'];
						$sample_array['AVATOR'] = self::get_avator($roww['reciever_email']);
						$sample_array['FULL_NAME'] = self::get_name($roww['reciever_email']);
					}else {
						$sample_array['EMAIL'] = $roww['sender_email'];
						$sample_array['AVATOR'] = self::get_avator($roww['sender_email']);
						$sample_array['FULL_NAME'] = self::get_name($roww['sender_email']);
						$sample_array['TOTAL'] = self::countUnread($user_email, $roww['sender_email']);
					}

	        	array_push($data['CHATS'], $sample_array);
			}
	      }
	      return json_encode($data);
		}

		public static function getConversation($email, $reciever_email){
			$sender_email=self::get_email($email);
			$result=DB::query("SELECT* FROM messages where (reciever_email='$sender_email' AND sender_email='$reciever_email') OR (reciever_email='$reciever_email' AND sender_email='$sender_email')");
			$data['CONVERSATIONS'] = array();
			while($roww = mysqli_fetch_array($result)){
				$sample_array = array();
				if($roww){
					$sample_array['ID'] = $roww['post_id'];
					$sample_array['BUFFER'] = $roww['message'];
					$sample_array['DATES'] = $roww['time'];
					$sample_array['EMAILS'] = $roww['sender_email'];

					array_push($data['CONVERSATIONS'], $sample_array);
					}
				}
				self::markseen($sender_email, $reciever_email);
				return json_encode($data);
		}

		private static function markseen($sender_email, $reciever_email){
			$result=DB::query("UPDATE messages SET seen='true'  WHERE reciever_email='$sender_email' AND sender_email='$reciever_email'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function sendMessage($post_id, $message, $email, $reciever_email, $time){
			$sender_email=self::get_email($email);
			$chat_id=self::getChatID($sender_email, $reciever_email);
			$result=DB::query("INSERT INTO messages(post_id, message, sender_email, reciever_email, chat_id) VALUES('".DB::esc($post_id)."', '".DB::esc($message)."', '".DB::esc($sender_email)."', '".DB::esc($reciever_email)."', '".DB::esc($chat_id)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function checkNewMessage($email, $reciever_email){
			$sender_email=self::get_email($email);
			$result=DB::query("SELECT* FROM messages WHERE seen IS NULL AND (reciever_email='$sender_email' AND sender_email='$reciever_email')");
			$data['CONVERSATIONS'] = array();
			while($roww = mysqli_fetch_array($result)){
				$sample_array = array();
				if($roww){
					$sample_array['ID'] = $roww['post_id'];
					$sample_array['BUFFER'] = $roww['message'];
					$sample_array['DATES'] = $roww['time'];
					$sample_array['EMAILS'] = $roww['sender_email'];

					array_push($data['CONVERSATIONS'], $sample_array);
					}
				}
				self::markseen($sender_email, $reciever_email);
				return json_encode($data);
		}

		public static function checkNewMessageOnList($email){
			$sender_email=self::get_email($email);
			$result=DB::query("SELECT * FROM messages WHERE seen IS NULL AND reciever_email='$sender_email'");
			$data['CONVERSATIONS'] = array();
			while($roww = mysqli_fetch_array($result)){
				$sample_array = array();
				if($roww){
					$sample_array['ID'] = $roww['post_id'];
					$sample_array['BUFFER'] = $roww['message'];
					$sample_array['DATES'] = $roww['time'];
					$sample_array['EMAILS'] = $roww['sender_email'];

					array_push($data['CONVERSATIONS'], $sample_array);
					}
				}
				self::markseenall($sender_email);
				return json_encode($data);
		}

		private static function markseenall($sender_email){
			$result=DB::query("UPDATE messages SET seen='true'  WHERE reciever_email='$sender_email'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

	private static function getChatID($sender_email, $reciever_email){
		$result=DB::query("SELECT * FROM messages WHERE (reciever_email='$sender_email' AND sender_email='$reciever_email') OR (reciever_email='$reciever_email' AND sender_email='$sender_email')");
		$roww = mysqli_fetch_array($result);
			//$retn=$roww["chat_id"];
		if ($roww["chat_id"]<=0) {
			$result=DB::query("SELECT * FROM messages ORDER BY chat_id DESC");
			$roww = mysqli_fetch_array($result);
			return $roww["chat_id"]+1;
		}else {
				return $roww["chat_id"];
		}
	}


	private static function getUserId($userName){
		$result=DB::query("SELECT* FROM users WHERE email='".DB::esc($userName)."' OR phone='".DB::esc($userName)."'");
	    $roww = mysqli_fetch_array($result);
	    return $roww["userid"];
	}

	public static function getRecomendedItems(){
		$result=DB::query("SELECT* FROM items WHERE item_id IN(SELECT MAX(item_id) FROM items WHERE status IS NULL AND purpose='For Hire' GROUP BY category_id) ORDER BY RAND() DESC");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getFeaturedItems(){
		$result=DB::query("SELECT* FROM items WHERE status IS NULL AND purpose='For Hire' ORDER BY RAND() DESC LIMIT 50");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getCategorizedItems($category){
		$category_id=self::get_item_category_id($category);
		$result=DB::query("SELECT* FROM items WHERE category_id = '".DB::esc($category_id)."' AND status IS NULL AND purpose='For Hire' ORDER BY item_id ASC LIMIT 60");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function saveMyOrder($item_id, $quantity, $user_id, $amount_paid, $transaction_type, $hireDate, $hireDays){
		$result=DB::query("INSERT INTO booked(item_id, status, quantity, user_id, amount_paid, transaction_type, gearDate) VALUES('".DB::esc($item_id)."', 'Processing', '".DB::esc($hireDays)."', '".DB::esc($user_id)."', '".DB::esc($amount_paid)."', '".DB::esc($transaction_type)."', '".DB::esc($hireDate)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
	}

	public static function saveMyPayment($amount_paid, $item_id, $user_id, $date_required, $days_needed){
		$result=DB::query("INSERT INTO payments(amount_paid, item_id, user_id, date_required, days_needed, deliveryFee) VALUES('".DB::esc($amount_paid)."', '".DB::esc($item_id)."', '".DB::esc($user_id)."', '".DB::esc($date_required)."', '".DB::esc($days_needed)."', '0.0')");
		if(!$result){
			return "false";
		}else{
			///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            $item_name = self::get_item_name($item_id);
            $item_description = self::get_item_description($item_id);
            $client_email = self::get_client_email(self::get_item_owner($item_id));
            $client_name = self::fetchFullNameF($client_email);
			$post='1';
			$msg='Hello!, '.$client_name.". Your Item Named ".$item_name." with description \"".$item_description."\" has been hired by someone for ".$days_needed." day(s) on ".$date_required." please delver the equipment on time.";
			$sender='sanigetmultimedia@gmail.com';
			$tt='00:00:00';
			self::saveNotification($msg, $client_email);
			self::sendMessage($post, $msg, $sender, $client_email, $tt);

			$full_name=self::get_id_name($user_id);
			$client_email=self::get_client_email($user_id);
			$msg2='Hello!, '.$full_name.". Your order for ".$item_name." with description \"".$item_description."\" has been placed for ".$days_needed." day(s) on ".$date_required." please pick the equipment on time.";
			self::saveNotification($msg2, $client_email);
			self::sendMessage($post, $msg2, $sender, $client_email, $tt);
			return "true";
		}
	}

	public static function saveBooking($item_id, $quantity, $userName, $amount_paid, $transaction_type, $hireDate, $hireDays){
		$user_id=self::get_user_id($userName);
		self::DeleteCart($item_id, $userName);
		for ($i = 0; $i < $hireDays; $i++) {
			$sample_array = array();
			$EndDateTime = DateTime::createFromFormat('d/m/Y', $hireDate);
			$EndDateTime->modify('+'.$i.' days');
			$checkDate = $EndDateTime->format('d/m/Y');
			self::saveMyOrder($item_id, $quantity, $user_id, $amount_paid, $transaction_type, $checkDate, $hireDays);
		}
		if(self::saveMyPayment($amount_paid, $item_id, $user_id, $hireDate, $hireDays)=="true"){
			return "Your order is placed";
		}
	}

	public static function getItemImages($item_id){
		$result=DB::query("SELECT* FROM item_images WHERE item_id = '".DB::esc($item_id)."' LIMIT 4");
		$data['IMAGES'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['IMAGE'] = $roww['image_name'];
				array_push($data['IMAGES'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getItemComments($item_id){
		$result=DB::query("SELECT* FROM comments WHERE item_id = '".DB::esc($item_id)."'");
		$data['COMMENTS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['comment_id'];
				$sample_array['ITEM_ID'] = $roww['item_id'];
				$sample_array['FULL_NAME'] = self::get_id_name($roww['user_id']);
				$sample_array['COMMENT'] = $roww['comment'];
				$sample_array['TIME'] = $roww['time'];
				$image=self::get_id_avator($roww['user_id']);
				if (!$image) {
					$sample_array['IMAGES'] = 'user.png';
				}else{
					$sample_array['IMAGES'] = $image;
				}
				array_push($data['COMMENTS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getFiveStars($item_id){
		$result=DB::query("SELECT COUNT(rate) AS total FROM ratting WHERE item_id = '".DB::esc($item_id)."' AND rate='5.0'");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	public static function getFourStars($item_id){
		$result=DB::query("SELECT COUNT(rate) AS total FROM ratting WHERE item_id = '".DB::esc($item_id)."' AND rate='4.0'");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	public static function getThreeStars($item_id){
		$result=DB::query("SELECT COUNT(rate) AS total FROM ratting WHERE item_id = '".DB::esc($item_id)."' AND rate='3.0'");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	public static function getTwoStars($item_id){
		$result=DB::query("SELECT COUNT(rate) AS total FROM ratting WHERE item_id = '".DB::esc($item_id)."' AND rate='2.0'");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	public static function getOneStars($item_id){
		$result=DB::query("SELECT COUNT(rate) AS total FROM ratting WHERE item_id = '".DB::esc($item_id)."' AND rate='1.0'");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	private static function checkCart($item_id, $user_id, $gearDate){
		$result=DB::query("SELECT * FROM cart WHERE item_id = '".DB::esc($item_id)."' AND user_id = '".DB::esc($user_id)."' AND gearDate = '".DB::esc($gearDate)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["gearDate"];
	}

	public static function getItemRatting($item_id){
		$data['RATTING'] = array();
		$sample_array = array();
		$sample_array['FIVE'] = self::getFiveStars($item_id);
		$sample_array['FOUR'] = self::getFourStars($item_id);
		$sample_array['THREE'] = self::getThreeStars($item_id);
		$sample_array['TWO'] = self::getTwoStars($item_id);
		$sample_array['ONE'] = self::getOneStars($item_id);
		array_push($data['RATTING'], $sample_array);
		return json_encode($data);
	}

	public static function saveCart($item_id, $userName, $gearDate, $finalCount){
		$user_id=self::get_user_id($userName);
		if (self::checkCart($item_id, $user_id, $gearDate)===$gearDate) {
			return "This gear exists in your cart";
		}else{
			$result=DB::query("INSERT INTO cart(item_id, user_id, gearDate, count) VALUES('".DB::esc($item_id)."', '".DB::esc($user_id)."', '".DB::esc($gearDate)."', '".DB::esc($finalCount)."')");
			if(!$result){
				return "false";
			}else{
				$notification="You have added ".self::get_item_name($item_id)." to cart, please pay for this gear in time before someone else takes it, thank you.";
				self::saveNotification($notification, $userName);
				return "Your gear is added to cart";
			}
		}
	}

	public static function getUserItems($userName, $status){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT* FROM booked WHERE user_id = '".DB::esc($user_id)."' AND status = '".DB::esc($status)."' GROUP BY item_id, gearDate");
		$data['ORDERS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ITEM_ID'] = $roww['item_id'];
                $sample_array['QUANTITY'] = $roww['quantity'];
                $sample_array['USER_ID'] = $roww['user_id'];
                $sample_array['AMOUNT'] = $roww['amount_paid'];
                $sample_array['TRANSACTION'] = $roww['transaction_type'];
                $sample_array['TIME'] = $roww['gearDate'];
                $sample_array['ITEM_NAME'] = self::get_item_name($roww['item_id']);
                $sample_array['STATUS'] = $roww['status'];
                $sample_array['IMAGES'] = self::get_item_image($roww['item_id']);
                $sample_array['ITEM_DESCRIPTION'] = self::get_item_description($roww['item_id']);

				array_push($data['ORDERS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function GetUserStoreItems($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT* FROM items WHERE user_id = '".DB::esc($user_id)."'");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function GetAds(){
		$result=DB::query("SELECT* FROM ads ORDER BY id DESC LIMIT 4");
		$data['ADS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['id'];
				$sample_array['IMAGES'] = $roww['image'];
				$sample_array['URLS'] = $roww['ad_url'];

				array_push($data['ADS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function GetCart($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT* FROM cart WHERE user_id = '".DB::esc($user_id)."' ORDER BY id DESC");
		$data['CART'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['CART_ID'] = $roww['id'];
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['USER_ID'] = $roww['user_id'];
                $sample_array['ITEM_NAME'] = self::get_item_name($roww['item_id']);
                $sample_array['ITEM_DESCRIPTION'] = self::get_item_description($roww['item_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);
				$sample_array['ITEM_PRICE'] = self::get_item_price($roww['item_id']);
				$sample_array['DATE'] = $roww['gearDate'];
				$sample_array['COUNT'] = $roww['count'];

				array_push($data['CART'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function DeleteCart($item_id, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("DELETE FROM cart WHERE user_id = '".DB::esc($user_id)."' AND item_id='".DB::esc($item_id)."'");
		if ($result) {
			return "Cart deleted.";
		}else{
			return "Failed to delete cart.";
		}
	}

	public static function UpdatePrice($item_id, $itemprice){
		$result=DB::query("UPDATE items SET item_price = '".DB::esc($itemprice)."' WHERE item_id = '".DB::esc($item_id)."'");
		if ($result) {
			return "Item Price Updated.";
		}else{
			return "Failed to update price.";
		}
	}

	public static function DeleteUserItem($item_id, $user_id){
		$result=DB::query("DELETE FROM items WHERE user_id = '".DB::esc($user_id)."' AND item_id = '".DB::esc($item_id)."'");
		if ($result) {
			return "true";
		}else{
			return "Failed to delete item.";
		}
	}

	public static function ItemTaken($item_id){
		$result=DB::query("UPDATE items SET status = 'taken' WHERE item_id = '".DB::esc($item_id)."'");
		if ($result) {
			return "true";
		}else{
			return "Failed to update item.";
		}
	}

	public static function setBookedItemStatus($item_id, $status, $hireDate, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("UPDATE booked SET status = '".DB::esc($status)."' WHERE item_id = '".DB::esc($item_id)."' AND user_id = '".DB::esc($user_id)."' AND gearDate = '".DB::esc($hireDate)."'");
		if ($result) {
			return "true";
		}else{
			return "Failed to set item status.";
		}
	}

	public static function saveInquiry($message, $item_id, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("INSERT INTO inquiries(message, item_id, user_id) VALUES('".DB::esc($message)."', '".DB::esc($item_id)."', '".DB::esc($user_id)."')");
		if($result){
			return "true";
		}else{
			return "Failed to send your message";
		}
	}

	public static function saveComment($comment, $item_id, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("INSERT INTO comments(comment, item_id, user_id) VALUES('".DB::esc($comment)."', '".DB::esc($item_id)."', '".DB::esc($user_id)."')");
		if($result){
			return "true";
		}else{
			return "Failed to send your message";
		}
	}

	public static function SetItemRating($rating, $item_id, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("INSERT INTO ratting(rate, item_id, user_id) VALUES('".DB::esc($rating)."', '".DB::esc($item_id)."', '".DB::esc($user_id)."')");
		if($result){
			return "true";
		}else{
			return "Failed to rate this item";
		}
	}

	public static function ActivateGear($item_id){
		$result=DB::query("UPDATE items SET status = NULL WHERE item_id = '".DB::esc($item_id)."'");
		if ($result) {
			return "true";
		}else{
			return "Failed to update item.";
		}
	}

	public static function GetUserProfile($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT* FROM users WHERE userid = '".DB::esc($user_id)."'");
		$data['PROFILE'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['userid'];
				$sample_array['FULL_NAME'] = $roww['full_name'];
                $sample_array['USER_EMAIL'] = $roww['email'];
                $sample_array['PHONE'] = $roww['phone'];
				$sample_array['SEX'] = $roww['sex'];
				$sample_array['AVATOR'] = $roww['avator'];
				$sample_array['BIRTHDAY'] = $roww['birthday'];

				array_push($data['PROFILE'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function save_prifile_picture($user_id, $imageName){
		$result=DB::query("UPDATE users SET avator='".DB::esc($imageName)."' WHERE userid='".DB::esc($user_id)."'");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
	}

	public static function UpdateUserProfile($fullName, $phoneNumber, $user_email, $gender, $birthday, $user_id){
		$result=DB::query("UPDATE users SET full_name='".DB::esc($fullName)."', phone='".DB::esc($phoneNumber)."', email='".DB::esc($user_email)."', sex='".DB::esc($gender)."', birthday='".DB::esc($birthday)."' WHERE userid='".DB::esc($user_id)."'");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}

	public static function SaveNewUserProfile($fullName, $phoneNumber, $user_email, $gender, $birthday, $imageName){
			$password=MD5($phoneNumber.$birthday);
		    $result=DB::query("SELECT* FROM users WHERE phone='".DB::esc($phoneNumber)."'");
		    $roww = mysqli_fetch_array($result);
		    if($roww){
		      	$result=DB::query("UPDATE users SET full_name='".DB::esc($fullName)."', phone='".DB::esc($phoneNumber)."', email='".DB::esc($user_email)."', sex='".DB::esc($gender)."', birthday='".DB::esc($birthday)."', avator='".DB::esc($imageName)."' WHERE userid='".DB::esc($user_id)."'");
				if($result){
					return "true";
				}else{
					return "false";
				}
		    }else {
		      	$result=DB::query("INSERT INTO users (prevlage, userName, full_name, phone, email, sex, birthday, avator, password) VALUES('User', '".DB::esc($phoneNumber)."', '".DB::esc($fullName)."', '".DB::esc($phoneNumber)."', '".DB::esc($user_email)."', '".DB::esc($gender)."', '".DB::esc($birthday)."', '".DB::esc($imageName)."', '".DB::esc($password)."')");
				if(!$result){
					return "false";
				}else{
					$post='1';
					$msg='Welcome to Get Gear, You are free to contact me from here in case of anything';
					$sender='sanigetmultimedia@gmail.com';
					$tt='00:00:00';
					self::sendMessage($post, $msg, $sender, $email, $tt);

					return "true";
				}
		    }
	}

	public static function count_cart($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT COUNT(time) AS total FROM cart WHERE user_id = '".DB::esc($user_id)."' ");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	public static function count_notifications($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT COUNT(id) AS total FROM notifications WHERE user_id = '".DB::esc($user_id)."' AND status IS NULL");
		$roww = mysqli_fetch_array($result);
		return $roww["total"];
	}

	public static function getUserCategorizedItems($category, $user_id){
		$category_id=self::get_item_category_id($category);
		$result=DB::query("SELECT* FROM items WHERE category_id = '".DB::esc($category_id)."' AND user_id = '".DB::esc($user_id)."' AND status IS NULL AND purpose='For Hire' ORDER BY item_id DESC LIMIT 24");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getExchangeRate(){
		$result=DB::query("SELECT * FROM dollarRate ORDER BY id DESC LIMIT 1");
		$data['EXCHANGE'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['COST'] = $roww['cost'];

				array_push($data['EXCHANGE'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function ClearNotifications($user_email){
		$user_id=self::get_user_id($user_email);
		$result=DB::query("UPDATE notifications SET status='seen' WHERE user_id='".DB::esc($user_id)."'");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}

	public static function checkItemAvailability($item_id, $gearDate, $finalCount){
		$data['BUSY_DATES'] = array();
		for ($i = 0; $i <= $finalCount; $i++) {
			$sample_array = array();
			$EndDateTime = DateTime::createFromFormat('d/m/Y', $gearDate);
			$EndDateTime->modify('+'.$i.' days');
			$checkDate = $EndDateTime->format('d/m/Y');

			if (self::get_gearDate_test($item_id, $checkDate)===$checkDate) {
				$sample_array['BUSY_DATE'] = $checkDate;
				array_push($data['BUSY_DATES'], $sample_array);
			}
		}
		return json_encode($data);
	}

	private static function get_gearDate_test($item_id, $gearDate){
		$result=DB::query("SELECT* FROM booked WHERE gearDate='".DB::esc($gearDate)."' AND item_id='".DB::esc($item_id)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["gearDate"];
	}

	public static function SaveCartData($transaction_type, $transaction_amount, $jsonData, $userName){
		$jsonArray = json_decode($jsonData);
		$registrationIDs = array($jsonArray);
		$registrationID = $registrationIDs[0];

		for ($i=0; $i < sizeof($registrationID); $i++) {
			$testId=$registrationID[$i];
			$result=DB::query("SELECT* FROM cart WHERE id='".DB::esc($testId)."'");
			$roww = mysqli_fetch_array($result);
			$item_id=$roww['item_id'];
			$user_id=$roww['user_id'];
			$hireDate=$roww['gearDate'];
			$hireDays=$roww['count'];
			$item_price=self::get_item_price($roww['item_id']);
			$amount_paid=$item_price*$hireDays;
			$quantity="1";
			self::saveBooking($item_id, $quantity, $userName, $amount_paid, $transaction_type, $hireDate, $hireDays);
		}
		$notification="You have booked item(s) worthy UGX ".$transaction_amount.", please pick your gear(s) from our office in time, thank you.";
		self::saveNotification($notification, $userName);

		return "Your order has been placed.";
	}

	public static function SearchItems($key){
		$result=DB::query("SELECT * FROM items WHERE status IS NULL AND purpose='For Hire' AND item_name LIKE '%{$key}%'");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function SearchUserStoreItems($userName, $key){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT* FROM items WHERE user_id = '".DB::esc($user_id)."' AND item_name LIKE '%{$key}%' ORDER BY item_id DESC");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function get_users(){
		$result=DB::query("SELECT * FROM users");
		$data['USERS'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
			$sample_array['NAME'] = $roww["full_name"];
			$sample_array['EMAIL'] = $roww["email"];
			$sample_array['PHONE'] = $roww["phone"];
			$sample_array['SEX'] = $roww["sex"];
			$sample_array['PREVLAGE'] = $roww["prevlage"];
			$sample_array['NATIONALITY'] = $roww["nationality"];

			array_push($data['USERS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function dashboard_login($email, $pass){
	    $password=MD5($pass);
	    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."' && password='".DB::esc($password)."'");
	    $roww = mysqli_fetch_array($result);
	    if($roww){
      		return "true";
	    }else {
	      	return "false";
	    }
  	}

	public static function WebLogIn($email, $password){
		if(self::dashboard_login($email, $password)==="true"){
            setcookie("getgear_user_email", $email, time() + (86400 * 30), "/");
	        setcookie("getgear_user_password", $password, time() + (86400 * 30), "/");
            return "true";
		}else{
			return "false: Email :".$email." Password:".$password;
		}
	}

	public static function getProfile($email){
  		$full_name=self::get_name($email);
  		$avator=self::get_avator($email);
  		$data = [
		'name' => $full_name,
		'avator' => $avator
		];
		return json_encode($data);
  	}

  	public static function get_categories(){
  		$result=DB::query("SELECT * FROM item_category");
		$data['CATEGORIES'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
			$sample_array['CATEGORY'] = $roww["categoryName"];

			array_push($data['CATEGORIES'], $sample_array);
			}
		}
		return json_encode($data);
  	}

  	public static function getNotifications($userName){
		$user_id=self::get_user_id($userName);
  		$result=DB::query("SELECT * FROM notifications WHERE user_id='".DB::esc($user_id)."' ORDER BY id DESC");
		$data['NOTIFICATIONS'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
			$sample_array['NOTIFICATION'] = $roww["notification"];
			$sample_array['STATUS'] = $roww["status"];

			array_push($data['NOTIFICATIONS'], $sample_array);
			}
		}
		return json_encode($data);
  	}

	public static function saveNotification($notification, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("INSERT INTO notifications(notification, user_id) VALUES('".DB::esc($notification)."', '".DB::esc($user_id)."')");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}

		private static function count_all_user(){
			$result=DB::query("SELECT COUNT(userid) AS TOTAL FROM users WHERE prevlage='User'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		private static function count_admins(){
			$result=DB::query("SELECT COUNT(userid) AS TOTAL FROM users WHERE prevlage='Admin'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		private static function count_items(){
			$result=DB::query("SELECT COUNT(item_id) AS TOTAL FROM items");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		private static function count_sellers(){
			$result=DB::query("SELECT COUNT(user_id) AS TOTAL FROM items GROUP BY user_id");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		public static function count_users(){
			$allusers=self::count_all_user();
			$admins=self::count_admins();
			$items=self::count_items();
			$sellers=self::count_sellers();
			$data = [
			'allusers' => $allusers,
			'admins' => $admins,
			'items' => $items,
			'sellers' => $sellers
			];
			return json_encode($data);
		}

		public static function get_orders_phone($userid){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($userid)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["phone"];
	    }

		public static function get_orders_email($userid){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($userid)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["email"];
	    }

		public static function get_order_avator($userid){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($userid)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["avator"];
	    }

		public static function get_order_name($userid){
		    $result=DB::query("SELECT* FROM users WHERE userid='".DB::esc($userid)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["full_name"];
	    }

	public static function getClientsOrders(){
		$result=DB::query("SELECT* FROM booked GROUP BY item_id, gearDate");
		$data['ORDERS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['id'];
				$sample_array['ITEM_ID'] = $roww['item_id'];
                $sample_array['QUANTITY'] = $roww['quantity'];
                $sample_array['USER_ID'] = $roww['user_id'];

                if ($roww['transaction_type']==="Mobile Money" || $roww['transaction_type']==="Cash") {
                	$sample_array['AMOUNT'] = "UGX".$roww['amount_paid'];
                }elseif ($roww['transaction_type']==="PayPal") {
                	$sample_array['AMOUNT'] = "$".$roww['amount_paid'];
                }
                $sample_array['TRANSACTION'] = $roww['transaction_type'];

                $sample_array['DATE'] = $roww['gearDate'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['TIME'] = $roww['time'];

                $sample_array['IMAGES'] = self::get_item_image($roww['item_id']);
                $sample_array['ITEM_NAME'] = self::get_item_name($roww['item_id']);
                $sample_array['ITEM_DESCRIPTION'] = self::get_item_description($roww['item_id']);
				$sample_array['ITEM_PRICE'] = self::get_item_price($roww['item_id']);

                $sample_array['CLIENT_PHONE'] = self::get_orders_phone($roww['user_id']);
                $sample_array['CLIENT_EMAIL'] = self::get_orders_email($roww['user_id']);
                $sample_array['CLIENT_AVATOR'] = self::get_order_avator($roww['user_id']);
                $sample_array['CLIENT_NAME'] = self::get_order_name($roww['user_id']);

				array_push($data['ORDERS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getMyClientsOrders($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT* FROM booked WHERE user_id='".DB::esc($user_id)."' GROUP BY item_id, gearDate");
		$data['ORDERS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ITEM_ID'] = $roww['item_id'];
                $sample_array['QUANTITY'] = $roww['quantity'];
                $sample_array['USER_ID'] = $roww['user_id'];

                if ($roww['transaction_type']==="Mobile Money" || $roww['transaction_type']==="Cash") {
                	$sample_array['AMOUNT'] = "UGX".$roww['amount_paid'];
                }elseif ($roww['transaction_type']==="PayPal") {
                	$sample_array['AMOUNT'] = "$".$roww['amount_paid'];
                }
                $sample_array['TRANSACTION'] = $roww['transaction_type'];

                $sample_array['DATE'] = $roww['gearDate'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['TIME'] = $roww['time'];

                $sample_array['IMAGES'] = self::get_item_image($roww['item_id']);
                $sample_array['ITEM_NAME'] = self::get_item_name($roww['item_id']);
                $sample_array['ITEM_DESCRIPTION'] = self::get_item_description($roww['item_id']);
				$sample_array['ITEM_PRICE'] = self::get_item_price($roww['item_id']);

                $sample_array['CLIENT_PHONE'] = self::get_orders_phone($roww['user_id']);
                $sample_array['CLIENT_EMAIL'] = self::get_orders_email($roww['user_id']);
                $sample_array['CLIENT_AVATOR'] = self::get_order_avator($roww['user_id']);
                $sample_array['CLIENT_NAME'] = self::get_order_name($roww['user_id']);

				array_push($data['ORDERS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getMyItemData($item_id){
		$result=DB::query("SELECT * FROM items WHERE item_id='".DB::esc($item_id)."' LIMIT 1");
		$data['ITEMS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['ITEM_DESC'] = $roww['item_description'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['ITEM_IMAGE'] = self::get_item_image($roww['item_id']);

                $sample_array['CLIENT_PHONE'] = self::get_orders_phone($roww['user_id']);
                $sample_array['CLIENT_EMAIL'] = self::get_orders_email($roww['user_id']);
                $sample_array['CLIENT_AVATOR'] = self::get_order_avator($roww['user_id']);
                $sample_array['CLIENT_NAME'] = self::get_order_name($roww['user_id']);

				array_push($data['ITEMS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function getAllMyItemData(){
		$result=DB::query("SELECT * FROM items");
		$data['ORDERS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ITEM_ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];
				$sample_array['ITEM_PRICE'] = $roww['item_price'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CAT_ID'] = $roww['category_id'];
				$sample_array['ITEM_QTY'] = $roww['item_qty'];
				$sample_array['ITEM_DESCRIPTION'] = $roww['item_description'];
                $sample_array['STATUS'] = $roww['status'];
				$sample_array['PURPOSE'] = $roww['purpose'];
				$sample_array['CATEGORY'] = self::get_item_category($roww['category_id']);
				$sample_array['IMAGES'] = self::get_item_image($roww['item_id']);

                $sample_array['CLIENT_PHONE'] = self::get_orders_phone($roww['user_id']);
                $sample_array['CLIENT_EMAIL'] = self::get_orders_email($roww['user_id']);
                $sample_array['CLIENT_AVATOR'] = self::get_order_avator($roww['user_id']);
                $sample_array['CLIENT_NAME'] = self::get_order_name($roww['user_id']);
				$sample_array['DATE'] = $roww['time'];

				array_push($data['ORDERS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function SaveOwnerBooking($item_id, $userName, $gearDate, $finalCount){
		$amount_paid="0.0";
		$transaction_type="Mobile Money";
		return self::saveBooking($item_id, $finalCount, $userName, $amount_paid, $transaction_type, $gearDate, $finalCount);
	}

	public static function getPaymentsNotifications(){
		$result=DB::query("SELECT * FROM payments ORDER BY id DESC LIMIT 60");
		$data['NOTIFICATIONS'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ITEM_ID'] = $roww['item_id'];
				$sample_array['ITEM_NAME'] = $roww['item_name'];//
				$sample_array['ITEM_PRICE'] = $roww['amount_paid'];
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['DATE_REQURED'] = $roww['date_required'];
				$sample_array['ITEM_QTY'] = $roww['days_needed'];
                $sample_array['STATUS'] = $roww['status'];
                $sample_array['ITEM_NAME'] = self::get_item_name($roww['item_id']);
                $sample_array['CLIENT_NAME'] = self::get_order_name($roww['user_id']);
				$sample_array['DATE'] = $roww['time'];

				array_push($data['NOTIFICATIONS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function clearDashboardNotifications(){
		$result=DB::query("UPDATE payments SET status='Seen'");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}

	private static function get_category_count($categoryId){
		$result=DB::query("SELECT COUNT(item_id) AS TOTAL FROM items WHERE category_id='".DB::esc($categoryId)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["TOTAL"];
	}

	public static function categoryCount(){
		$result=DB::query("SELECT * FROM item_category");
		$data['CATEGORIES'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
			$sample_array['CATEGORY'] = $roww["categoryName"];
			$sample_array['CATEGORY_COUNT'] = self::get_category_count($roww["id"]);

			array_push($data['CATEGORIES'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function delete_item($item_id){
		$result=DB::query("DELETE FROM items WHERE item_id = '".DB::esc($item_id)."'");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}

	public static function GetPopularCategories(){
		$result=DB::query("SELECT * FROM item_category");
		$data['CATEGORIES'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['id'];//
				$sample_array['CATEGORY'] = $roww['categoryName'];
				$sample_array['AVATOR'] = $roww['avator'];
				
				array_push($data['CATEGORIES'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function DeleteNotifications($user_email){
		$user_id=self::get_user_id($user_email);
		$result=DB::query("DELETE FROM notifications WHERE user_id='".DB::esc($user_id)."'");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}public static function getTransportationCost(){
		$result=DB::query("SELECT * FROM transportationCost ORDER BY id DESC LIMIT 1");
		$data['TRANSPORT'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['COST'] = $roww['cost'];

				array_push($data['TRANSPORT'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function UpdateTransportationCost($cost){
		$result=DB::query("UPDATE transportationCost SET cost='".DB::esc($cost)."'");
		if(!$result){
			return "false ".$wholesale_description;
		}else{
			return "true";
		}
	}

	public static function UpdateDollarRate($cost){
		$result=DB::query("UPDATE dollarRate SET cost='".DB::esc($cost)."'");
		if(!$result){
			return "false ".$wholesale_description;
		}else{
			return "true";
		}
	}

	public static function updatePassword($user_email, $oldPass, $newPass){
		$nPass=MD5($newPass);
		$user_id=self::get_user_id($user_email);
		if(self::WebLogIn($user_email, $oldPass)==="true"){
			$result=DB::query("UPDATE users SET password='".DB::esc($nPass)."' WHERE userid='".DB::esc($user_id)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}else {
			echo "invalid User";
		}
	}

	public static function sendBulkNotifications($notification){
		$result=DB::query("SELECT * FROM users");
		while($roww = mysqli_fetch_array($result)){
			self::saveNotification($notification, $roww["email"]);
		}
		return "true";
	}

	public static function updateCategoryName($id, $name){
		$result=DB::query("UPDATE item_category SET categoryName='".DB::esc($name)."' WHERE id='".DB::esc($id)."'");
		if(!$result){
			return "false ".$wholesale_description;
		}else{
			return "true";
		}
	}

	public static function getAllAddresses(){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT * FROM delivary_data");
		// Start XML file, create parent node
		$doc = domxml_new_doc("1.0");
		$node = $doc->create_element("markers");
		$parnode = $doc->append_child($node);

		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				  $node = $doc->create_element("marker");
				  $newnode = $parnode->append_child($node);

				  $newnode->set_attribute("id", $roww['id']);
				  $newnode->set_attribute("name", $roww['contact_name']);
				  $newnode->set_attribute("address", $roww['google_location'].", ".$roww['unit']);
				  $newnode->set_attribute("lat", $roww['latitude']);
				  $newnode->set_attribute("lng", $roww['longtude']);
				  $newnode->set_attribute("type", $roww['phone']);
				
				array_push($data['ADDRESSES'], $sample_array);
			}
		}
		
		$xmlfile = $doc->dump_mem();
		return $xmlfile;
	}

	public static function DeleteAddress($phone_number, $address, $unit_apt, $userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("DELETE FROM delivary_data WHERE user_id = '".DB::esc($user_id)."' AND phone = '".DB::esc($phone_number)."' AND google_location = '".DB::esc($address)."' AND unit = '".DB::esc($unit_apt)."'");
		if($result){
			return "true";
		}else{
			return "false";
		}
	}


	public static function getUserAddresses($userName){
		$user_id=self::get_user_id($userName);
		$result=DB::query("SELECT * FROM delivary_data WHERE user_id='".DB::esc($user_id)."'");
		$data['ADDRESSES'] = array();
		while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				$sample_array['ID'] = $roww['id'];//
				$sample_array['USER_ID'] = $roww['user_id'];
				$sample_array['CLIENT_NAME'] = $roww['contact_name'];
				$sample_array['LOCATION'] = $roww['google_location'];
				$sample_array['LATITUDE'] = $roww['latitude'];
				$sample_array['LONGTUDE'] = $roww['longtude'];
				$sample_array['UNIT'] = $roww['unit'];
				$sample_array['STATE'] = $roww['state'];
				$sample_array['CITY'] = $roww['city'];
				$sample_array['ZIP'] = $roww['zip'];
				$sample_array['COUNTRY'] = $roww['country'];
				$sample_array['DATE'] = $roww['time'];
				$sample_array['PHONE'] = $roww['phone'];
				
				array_push($data['ADDRESSES'], $sample_array);
			}
		}
		return json_encode($data);
	}


	public static function saveUserAddress($userName, $contact_name, $google_location, $latitude, $longtude, $unit, $state, $city, $country, $zip, $phone){
		$user_id=self::get_user_id($userName);

		$result=DB::query("INSERT INTO delivary_data (user_id, contact_name, google_location, latitude, longtude, unit, state, city, country, zip, phone) VALUES('".DB::esc($user_id)."', '".DB::esc($contact_name)."', '".DB::esc($google_location)."', '".DB::esc($latitude)."', '".DB::esc($longtude)."', '".DB::esc($unit)."', '".DB::esc($state)."', '".DB::esc($city)."', '".DB::esc($country)."', '".DB::esc($zip)."', '".DB::esc($phone)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
		}
	}
}
?>