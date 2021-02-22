<?php
class peele {
public static function create_tables(){
		$query="create table if not exists users(
		id int auto_increment not null,
		full_name char(100) not null,
		email char(100) not null,
		age char(100) not null,
		sex char(100) not null,
		prevlage char(100) not null,
		organization char(100) not null,
		phone char(100) not null,
		password char(100) not null,
		avator TEXT,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists questions(
		id int auto_increment not null,
		question TEXT not null,
		description TEXT,
		bitmap TEXT,
		audioFile TEXT,
		healthCenter TEXT not null,
		userEmail TEXT not null,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists srhr_questions(
		id int auto_increment not null,
		question TEXT not null,
		description TEXT,
		userEmail TEXT not null,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists sessions(
		id int auto_increment not null,
		session TEXT not null,
		total_paticipants int,
		male_paticipants int,
		female_paticipants int,
		venue TEXT not null,
		bitmap TEXT not null,
		userEmail TEXT not null,
		time timestamp NOT NULL default CURRENT_TIMESTAMP,
		primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists request_topics(
		id int auto_increment not null,
		question TEXT not null,
		description TEXT not null,
		bitmap1 TEXT not null,
		bitmap2 TEXT not null,
		bitmap3 TEXT,
		bitmap4 TEXT,
		userEmail TEXT not null,
		topic TEXT not null,
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

		$query="create table if not exists requests(
			id int auto_increment not null,
			email char(100) not null,
			prevlage char(100) not null,
			organization char(100) not null,
			primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists hospitals(
			id int auto_increment not null,
			hospital char(100) not null,
			email char(100),
			phone1 char(100),
			phone2 char(100),
			website char(100),
			primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists organizations(
			id int auto_increment not null,
			name char(100) not null,
			email char(100),
			phone1 char(100),
			phone2 char(100),
			website char(100),
			password char(100) not null,
			primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists people_posts(
			id int auto_increment not null,
			email char(100),
			subject TEXT,
			description TEXT,
			time timestamp NOT NULL default CURRENT_TIMESTAMP,
			primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists people_post_comments(
			id int auto_increment not null,
			post_id char(100),
			email char(100),
			comment TEXT,
			time timestamp NOT NULL default CURRENT_TIMESTAMP,
			primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

		$query="create table if not exists people_post_likes(
			id int auto_increment not null,
			post_id char(100),
			email char(100),
			time timestamp NOT NULL default CURRENT_TIMESTAMP,
			primary key(id)
		)";
		$result=DB::query($query);
		if(!$result){
			return false;
		}

  }

	public static function add_topic_data($question, $description, $bitmap1, $bitmap2, $bitmap3, $bitmap4, $userEmail, $topic){
		$result=DB::query("INSERT INTO request_topics(question, description, bitmap1, bitmap2, bitmap3, bitmap4, userEmail, topic) VALUES('".DB::esc($question)."', '".DB::esc($description)."', '".DB::esc($bitmap1)."', '".DB::esc($bitmap2)."', '".DB::esc($bitmap3)."', '".DB::esc($bitmap4)."', '".DB::esc($userEmail)."', '".DB::esc($topic)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
	}

  public static function login($email, $pass){
    $password=MD5($pass);
    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."' && password='".DB::esc($password)."'");
    $roww = mysqli_fetch_array($result);
    if($roww){
      return "true";
    }else {
      return "false";
    }
  }

  public static function signup($full_name, $email, $prevlage, $organization, $phone, $password, $age, $sex){
		if ($prevlage==="Peer Educator Or Community Member") {
			peele::addRequest($email, $prevlage, $organization);
		}
		$prevlage="Patient";
    $pass=MD5($password);
    $result=DB::query("INSERT INTO users(full_name, email, prevlage, organization, phone, password, age, sex) VALUES('".DB::esc($full_name)."', '".DB::esc($email)."', '".DB::esc($prevlage)."', '".DB::esc($organization)."', '".DB::esc($phone)."', '".DB::esc($pass)."', '".DB::esc($age)."', '".DB::esc($sex)."')");
	if(!$result){
		return "false";
	}else{
		return "true";
	}
  }

	private static function checkHospital($hospital){
		$result=DB::query("SELECT* FROM hospitals WHERE hospital='".DB::esc($hospital)."'");
		$roww = mysqli_fetch_array($result);
    if(!$roww){
			$result=DB::query("INSERT INTO hospitals(hospital) VALUES('".DB::esc($hospital)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
    }
	}

	private static function checkUser($email){
		$result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
		$roww = mysqli_fetch_array($result);
    if(!$roww){
			return true;
    }
	}

  public static function add_doctor($full_name, $email, $prevlage, $organization, $phone, $password, $age, $sex){
    $pass=MD5($password);
		peele::checkHospital($organization);
		if(peele::checkUser($email)){
	    $result=DB::query("INSERT INTO users(full_name, email, prevlage, organization, phone, password, age, sex) VALUES('".DB::esc($full_name)."', '".DB::esc($email)."', '".DB::esc($prevlage)."', '".DB::esc($organization)."', '".DB::esc($phone)."', '".DB::esc($pass)."', '".DB::esc($age)."', '".DB::esc($sex)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}else {
			return "exist";
		}
  }

	private static function addRequest($email, $prevlage, $organization){
		$result=DB::query("INSERT INTO requests(email, prevlage, organization) VALUES('".DB::esc($email)."', '".DB::esc($prevlage)."', '".DB::esc($organization)."')");
		if(!$result){
		return "false";
		}else{
		return "true";
		}
	}

  public static function check_prevlage($email, $pass){
	  if(peele::login($email, $pass)){
		$password=MD5($pass);
		$result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."' && password='".DB::esc($password)."'");
		$data['USE'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
				$sample_array['prevlage'] = $roww["prevlage"];
				$sample_array['name'] = $roww["full_name"];
				array_push($data['USE'], $sample_array);
			}
		}
		return json_encode($data);
	  }else{
		  return "Invalid User";
	  }
  }



  public static function check_user_prevlage($email, $pass){
	  if(peele::login($email, $pass)){
		$password=MD5($pass);
		$result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."' && password='".DB::esc($password)."'");
		$data['USE'] = array();
		while($roww = mysqli_fetch_array($result)){
		return $roww["prevlage"];
		}
	  }else{
		  return "Invalid User";
	  }
  }

	public static function askDoc($question, $description, $bitmap, $audioFile, $healthCenter, $userEmail){
		$result=DB::query("INSERT INTO questions(question, description, bitmap, audioFile, healthCenter, userEmail) VALUES('".DB::esc($question)."', '".DB::esc($description)."', '".DB::esc($bitmap)."', '".DB::esc($audioFile)."', '".DB::esc($healthCenter)."', '".DB::esc($userEmail)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
		}

		public static function askAboutSrhr($question, $description, $userEmail){
			$result=DB::query("INSERT INTO srhr_questions(question, description, userEmail) VALUES('".DB::esc($question)."', '".DB::esc($description)."', '".DB::esc($userEmail)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function reportSession($session, $total_paticipants, $male_paticipants, $female_paticipants, $venue, $bitmap, $userEmail){
			$result=DB::query("INSERT INTO sessions(session, total_paticipants, male_paticipants, female_paticipants, venue, bitmap, userEmail) VALUES('".DB::esc($session)."', '".DB::esc($total_paticipants)."', '".DB::esc($male_paticipants)."', '".DB::esc($female_paticipants)."', '".DB::esc($venue)."', '".DB::esc($bitmap)."', '".DB::esc($userEmail)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function questionRequest($request){
			$result=DB::query("SELECT * FROM request_topics WHERE topic='".DB::esc($request)."'");
	    $data['TOPICS'] = array();
	    while($roww = mysqli_fetch_array($result)){
	      $sample_array = array();
	      if($roww){
					$sample_array['ID'] = $roww['id'];
					$sample_array['QUESTION'] = $roww['question'];
					$sample_array['DESCRIPTION'] = $roww['description'];
					$sample_array['TOPIC'] = $roww['topic'];
					$sample_array['BITMAP1'] = $roww['bitmap1'];
					$sample_array['BITMAP2'] = $roww['bitmap2'];
					$sample_array['BITMAP3'] = $roww['bitmap3'];
					$sample_array['BITMAP4'] = $roww['bitmap4'];
					$sample_array['EMAIL'] = $roww['userEmail'];
					$sample_array['AVATOR'] = peele::get_avator($roww[$roww['userEmail']]);
					$sample_array['NAME'] = peele::get_name($roww['userEmail']);

	        array_push($data['TOPICS'], $sample_array);
	        }
	      }
	      return json_encode($data);
	  }

		public static function questionRequestAll(){
			$result=DB::query("SELECT * FROM request_topics ORDER BY id DESC LIMIT 30");
			$data['TOPICS'] = array();
			while($roww = mysqli_fetch_array($result)){
				$sample_array = array();
				if($roww){
					$sample_array['ID'] = $roww['id'];
					$sample_array['QUESTION'] = $roww['question'];
					$sample_array['DESCRIPTION'] = $roww['description'];
					$sample_array['TOPIC'] = $roww['topic'];
					$sample_array['BITMAP1'] = $roww['bitmap1'];
					$sample_array['BITMAP2'] = $roww['bitmap2'];
					$sample_array['BITMAP3'] = $roww['bitmap3'];
					$sample_array['BITMAP4'] = $roww['bitmap4'];
					$sample_array['EMAIL'] = $roww['userEmail'];
					$sample_array['AVATOR'] = peele::get_avator($roww[$roww['userEmail']]);
					$sample_array['NAME'] = peele::get_name($roww['userEmail']);

					array_push($data['TOPICS'], $sample_array);
					}
				}
				return json_encode($data);
		}

		public static function uTopics($email){
			$result=DB::query("SELECT * FROM request_topics WHERE userEmail='".DB::esc($email)."' ORDER BY id DESC LIMIT 30");
			$data['TOPICS'] = array();
			while($roww = mysqli_fetch_array($result)){
				$sample_array = array();
				if($roww){
					$sample_array['ID'] = $roww['id'];
					$sample_array['QUESTION'] = $roww['question'];
					$sample_array['DESCRIPTION'] = $roww['description'];
					$sample_array['TOPIC'] = $roww['topic'];
					$sample_array['BITMAP1'] = $roww['bitmap1'];
					$sample_array['BITMAP2'] = $roww['bitmap2'];
					$sample_array['BITMAP3'] = $roww['bitmap3'];
					$sample_array['BITMAP4'] = $roww['bitmap4'];
					$sample_array['EMAIL'] = $roww['userEmail'];
					$sample_array['AVATOR'] = peele::get_avator($roww[$roww['userEmail']]);
					$sample_array['NAME'] = peele::get_name($roww['userEmail']);

					array_push($data['TOPICS'], $sample_array);
					}
				}
				return json_encode($data);
		}


		public static function get_problems($dector_email){
			$organization=peele::get_organization($dector_email);
			$result=DB::query("SELECT * FROM questions WHERE healthCenter='".DB::esc($organization)."' ORDER BY id DESC LIMIT 20");
		    $data['PROBLEMS'] = array();
		    while($roww = mysqli_fetch_array($result)){
		      $sample_array = array();
		      if($roww){
						$sample_array['ID'] = $roww['id'];
						$sample_array['TITLE'] = $roww['question'];
						$sample_array['DESCRIPTION'] = $roww['description'];
						$sample_array['QN_BITMAP'] = $roww['bitmap'];
						$sample_array['PATIENT_NAME'] = peele::get_name($roww['userEmail']);
						$sample_array['QN_AUDIO'] = $roww['audioFile'];

		        array_push($data['PROBLEMS'], $sample_array);
		        }
		      }
		      return json_encode($data);
		}

		public static function get_name($email){
		    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["full_name"];
	  	}

		public static function get_organization($email){
		    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["organization"];
	  	}

		public static function get_avator($email){
	    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
	    $roww = mysqli_fetch_array($result);
	    return $roww["avator"];
	  }

		public static function get_reciever_email($post_id){
			$result=DB::query("SELECT * FROM questions WHERE id='$post_id'");
			$roww = mysqli_fetch_array($result);
			return $roww['userEmail'];
	  }

		public static function saveReply($post_id, $message, $sender_email, $reciever_email, $time){
			$chat_id=peele::getChatID($sender_email, $reciever_email);
			$result=DB::query("INSERT INTO messages(post_id, message, sender_email, reciever_email, chat_id) VALUES('".DB::esc($post_id)."', '".DB::esc($message)."', '".DB::esc($sender_email)."', '".DB::esc($reciever_email)."', '".DB::esc($chat_id)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		private static function get_phone($email){
	    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
	    $roww = mysqli_fetch_array($result);
	    return $roww["phone"];
	  }

		private static function countUnread($sender_email, $reciever_email){
			$result=DB::query("SELECT COUNT(seen) AS TOTAL FROM messages WHERE seen='false' AND reciever_email='".DB::esc($sender_email)."' AND sender_email='".DB::esc($reciever_email)."'");
	    $roww = mysqli_fetch_array($result);
	    return $roww["TOTAL"];
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

		public static function getChats($doctor_email){
			$result=DB::query("SELECT * FROM messages WHERE (reciever_email='$doctor_email' OR sender_email='$doctor_email') AND id IN(SELECT MAX(id) FROM messages GROUP BY chat_id) ORDER BY id DESC");
	    $data['CHATS'] = array();
	    while($roww = mysqli_fetch_array($result)){
	      $sample_array = array();
	      if($roww){
					$sample_array['ID'] = $roww['post_id'];
					$sample_array['BUFFER'] = $roww['message'];
					$sample_array['DATES'] = $roww['time'];

					if ($roww['sender_email']===$doctor_email) {
						$sample_array['TOTAL'] = peele::countUnread($doctor_email, $roww['reciever_email']);
						$sample_array['EMAIL'] = $roww['reciever_email'];
						$sample_array['AVATOR'] = peele::get_avator($roww['reciever_email']);
						$sample_array['FULL_NAME'] = peele::get_name($roww['reciever_email']);
					}else {
						$sample_array['EMAIL'] = $roww['sender_email'];
						$sample_array['AVATOR'] = peele::get_avator($roww['sender_email']);
						$sample_array['FULL_NAME'] = peele::get_name($roww['sender_email']);
						$sample_array['TOTAL'] = peele::countUnread($doctor_email, $roww['sender_email']);
					}

	        array_push($data['CHATS'], $sample_array);
				}
	      }
	      return json_encode($data);
		}

		public static function getConversation($sender_email, $reciever_email){
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
				peele::markseen($sender_email, $reciever_email);
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

		public static function sendMessage($post_id, $message, $sender_email, $reciever_email, $time){
			$chat_id=peele::getChatID($sender_email, $reciever_email);
			$result=DB::query("INSERT INTO messages(post_id, message, sender_email, reciever_email, chat_id) VALUES('".DB::esc($post_id)."', '".DB::esc($message)."', '".DB::esc($sender_email)."', '".DB::esc($reciever_email)."', '".DB::esc($chat_id)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function checkNewMessage($sender_email, $reciever_email){
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
				peele::markseen($sender_email, $reciever_email);
				return json_encode($data);
		}

		public static function checkNewMessageOnList($sender_email){
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
				peele::markseenall($sender_email);
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

		public static function get_topic_problems($dector_email, $topic){
			$result=DB::query("SELECT * FROM questions WHERE question='$topic' ORDER BY id DESC LIMIT 20");
	    $data['PROBLEMS'] = array();
	    while($roww = mysqli_fetch_array($result)){
	      $sample_array = array();
	      if($roww){
					$sample_array['ID'] = $roww['id'];
					$sample_array['TITLE'] = $roww['question'];
					$sample_array['DESCRIPTION'] = $roww['description'];
					$sample_array['QN_BITMAP'] = $roww['bitmap'];
					$sample_array['PATIENT_NAME'] = peele::get_name($roww['userEmail']);
					$sample_array['QN_AUDIO'] = $roww['audioFile'];

	        array_push($data['PROBLEMS'], $sample_array);
	        }
	      }
	      return json_encode($data);
		}

		public static function getHospitals(){
			$result=DB::query("SELECT * FROM hospitals");
	    $data['HOSPITALS'] = array();
	    while($roww = mysqli_fetch_array($result)){
	      $sample_array = array();
	      if($roww){
					$sample_array['HOSPITAL'] = $roww['hospital'];

	        array_push($data['HOSPITALS'], $sample_array);
	        }
	      }
	      return json_encode($data);
	  }

		public static function admins_and_doctors($topic){
			$result=DB::query("SELECT * FROM users WHERE prevlage='".DB::esc($topic)."'");
			$data['USERS'] = array();
			while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				if ($roww["avator"]===NULL) {
					$sample_array['BITMAP'] = "profile.png";
				}else {
					$sample_array['BITMAP'] = $roww["avator"];
				}
					$sample_array['NAME'] = $roww["full_name"];
					$sample_array['EMAIL'] = $roww["email"];
					$sample_array['PHONE'] = $roww["phone"];
					$sample_array['SEX'] = $roww["sex"];
					$sample_array['PREVLAGE'] = $roww["prevlage"];
					$sample_array['ORGANIZATION'] = $roww["organization"];

					array_push($data['USERS'], $sample_array);
				}
			}
			return json_encode($data);
		}

		private static function get_prevlege($email){
	    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
	    $roww = mysqli_fetch_array($result);
	    return $roww["prevlage"];
	  }

		private static function checkRequest($email){
			$result=DB::query("SELECT * FROM requests WHERE email = '".DB::esc($email)."'");
			$roww = mysqli_fetch_array($result);
	    	return $roww["email"];
		}

		public static function get_peer_educators(){
			$result=DB::query("SELECT * FROM users ORDER BY id DESC");
			$data['USERS'] = array();
			while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
				if (peele::checkRequest($roww["email"])) {
					if (peele::get_avator($roww["email"])===NULL) {
						$sample_array['BITMAP'] = "profile.png";
					}else {
						$sample_array['BITMAP'] = peele::get_avator($roww["email"]);
					}
						$sample_array['NAME'] = peele::get_name($roww["email"]);
						$sample_array['EMAIL'] = $roww["email"];
						$sample_array['PHONE'] = peele::get_phone($roww["email"]);
						$sample_array['PREVLAGE'] = peele::get_prevlege($roww["email"]);
						array_push($data['USERS'], $sample_array);
					}
				}
			}
			return json_encode($data);
		}

		public static function delete_doctor_admin($email){
			$result=DB::query("DELETE FROM users WHERE email='".DB::esc($email)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function delete_peer_educator($email){
			$result=DB::query("DELETE FROM users WHERE email='".DB::esc($email)."'");
			if(!$result){
				return "false";
			}else{
				$result=DB::query("DELETE FROM requests WHERE email='".DB::esc($email)."'");
				if(!$result){
					return "false";
				}else{
					return "true";
				}
			}
		}

		public static function approve_peer_educator($userEmail){
			$result=DB::query("UPDATE users SET prevlage='Peer Educator Or Community Member' WHERE email='".DB::esc($userEmail)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

	  public static function add_admin($full_name, $email, $prevlage, $phone, $password, $age, $sex){
	    $pass=MD5($password);
			if(peele::checkUser($email)){
		    $result=DB::query("INSERT INTO users(full_name, email, prevlage, organization, phone, password, age, sex) VALUES('".DB::esc($full_name)."', '".DB::esc($email)."', '".DB::esc($prevlage)."', 'PEELE', '".DB::esc($phone)."', '".DB::esc($pass)."', '".DB::esc($age)."', '".DB::esc($sex)."')");
				if(!$result){
					return "false";
				}else{
					return "true";
				}
			}else {
				return "exist";
			}
	  }

		public static function update_prevlages($user_email, $prevlege){
			$result=DB::query("UPDATE users SET prevlage='".DB::esc($prevlege)."' WHERE email='".DB::esc($user_email)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function updatePassword($user_email, $oldPass, $newPass){
			$nPass=MD5($newPass);
			if(peele::login($user_email, $oldPass)==="true"){
				$result=DB::query("UPDATE users SET password='".DB::esc($nPass)."' WHERE email='".DB::esc($user_email)."'");
				if(!$result){
					return "false";
				}else{
					return "true";
				}
			}else {
				echo "invalid User";
			}
		}

		public static function save_prifile_picture($user_email, $imageName){
			$result=DB::query("UPDATE users SET avator='".DB::esc($imageName)."' WHERE email='".DB::esc($user_email)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}


		public static function delete_post($post_id){
			$result=DB::query("DELETE FROM request_topics WHERE id='".DB::esc($post_id)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}


		public static function update_topic_data($question, $description, $id, $topic){
			$result=DB::query("UPDATE request_topics SET question='".DB::esc($question)."', description='".DB::esc($description)."', topic='".DB::esc($topic)."' WHERE id='".DB::esc($id)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}


		public static function peer_search($sample){
			$result=DB::query("SELECT * FROM request_topics WHERE question LIKE '%".$sample."%'");
		    $data['SAMPLE'] = array();
		    while($roww = mysqli_fetch_array($result)){
			    $sample_array = array();
		      	if($roww){
					$sample_array['DATA'] = $roww['question'];
		        	array_push($data['SAMPLE'], $sample_array);
		        }
	      	}
	      	return json_encode($data);
		}

		public static function peer_full_search($sample){
			$result=DB::query("SELECT * FROM request_topics WHERE question LIKE '%".$sample."%'");
		    $data['TOPICS'] = array();
			while($roww = mysqli_fetch_array($result)){
				$sample_array = array();
				if($roww){
					$sample_array['ID'] = $roww['id'];
					$sample_array['QUESTION'] = $roww['question'];
					$sample_array['DESCRIPTION'] = $roww['description'];
					$sample_array['TOPIC'] = $roww['topic'];
					$sample_array['BITMAP1'] = $roww['bitmap1'];
					$sample_array['BITMAP2'] = $roww['bitmap2'];
					$sample_array['BITMAP3'] = $roww['bitmap3'];
					$sample_array['BITMAP4'] = $roww['bitmap4'];

					array_push($data['TOPICS'], $sample_array);
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
					$sample_array['ORGANIZATION'] = $roww["organization"];

					array_push($data['USERS'], $sample_array);
				}
			}
			return json_encode($data);
		}

		private static function count_patients(){
			$result=DB::query("SELECT COUNT(id) AS TOTAL FROM users WHERE prevlage='Patient'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		private static function count_peers(){
			$result=DB::query("SELECT COUNT(id) AS TOTAL FROM users WHERE prevlage='Peer Educator Or Community Member'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		private static function count_doctors(){
			$result=DB::query("SELECT COUNT(id) AS TOTAL FROM users WHERE prevlage='Doctor'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		private static function count_admins(){
			$result=DB::query("SELECT COUNT(id) AS TOTAL FROM users WHERE prevlage='Admin'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["TOTAL"];
		}

		public static function count_users(){
			$patients=peele::count_patients();
			$peers=peele::count_peers();
			$doctors=peele::count_doctors();
			$admins=peele::count_admins();
			$data = [
			'patients' => $patients,
			'peers' => $peers,
			'doctors' => $doctors,
			'admins' => $admins
			];
			return json_encode($data);
		}

		public static function get_org($email){
		    $result=DB::query("SELECT* FROM users WHERE email='".DB::esc($email)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["organization"];
	  	}

		public static function get_reports(){
			$result=DB::query("SELECT * FROM sessions ORDER BY id DESC");
			$data['REPORTS'] = array();
			while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
					$sample_array['NAME'] = peele::get_name($roww["userEmail"]);
					$sample_array['SESSION'] = $roww["session"];
					$sample_array['PATICIPANTS'] = $roww["total_paticipants"];
					$sample_array['MALE_COUNT'] = $roww["male_paticipants"];
					$sample_array['FEMALE_COUNT'] = $roww["female_paticipants"];
					$sample_array['VENUE'] = $roww["venue"];
					$sample_array['IMAGE'] = $roww["bitmap"];
					$sample_array['TIME'] = $roww["time"];
					$sample_array['ORG'] = peele::get_org($roww["userEmail"]);


					array_push($data['REPORTS'], $sample_array);
				}
			}
			return json_encode($data);
		}

		public static function checkOrg($name){
		    $result=DB::query("SELECT* FROM organizations WHERE name='".DB::esc($name)."'");
		    $roww = mysqli_fetch_array($result);
		    return $roww["name"];
	  	}

		public static function add_organizations($name, $email, $phone1, $phone2, $website, $password){
			if(peele::checkOrg($name)!==$name){
		    $result=DB::query("INSERT INTO organizations(name, email, phone1, phone2, website, password) VALUES('".DB::esc($name)."', '".DB::esc($email)."', '".DB::esc($phone1)."', '".DB::esc($phone2)."', '".DB::esc($website)."', '".DB::esc($password)."')");
				if(!$result){
					return "false";
				}else{
					return "true";
				}
			}else {
				return "exist";
			}
	  }

		public static function get_organizations(){
			$result=DB::query("SELECT * FROM organizations ORDER BY id DESC");
			$data['ORGS'] = array();
			while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
					$sample_array['ID'] = $roww['id'];
					$sample_array['NAME'] = $roww["name"];
					$sample_array['EMAIL'] = $roww["email"];
					$sample_array['PHONE1'] = $roww["phone1"];
					$sample_array['PHONE2'] = $roww["phone2"];
					$sample_array['WEBSITE'] = $roww["website"];

					array_push($data['ORGS'], $sample_array);
				}
			}
			return json_encode($data);
		}

		public static function update_organizations($name, $email, $phone1, $phone2, $website, $password){
			$mainName=$name;
		    $result=DB::query("UPDATE organizations SET name='".DB::esc($name)."', email='".DB::esc($email)."', phone1='".DB::esc($phone1)."', phone2='".DB::esc($phone2)."', website='".DB::esc($website)."', password='".DB::esc($password)."' WHERE name='".DB::esc($mainName)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
	  	}

		public static function delete_organizations($name){
			$result=DB::query("DELETE FROM organizations WHERE name='".DB::esc($name)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

		public static function get_doctors(){
			$result=DB::query("SELECT * FROM users WHERE prevlage='Doctor' ORDER BY id DESC LIMIT 12");
			while($roww = mysqli_fetch_array($result)){
				if($roww){
					$full_name=$roww["full_name"];
					$organization=$roww["organization"];
					?>
					<div class="slide">
					    <p1><?php echo $full_name; ?></br><?php echo $organization; ?></p1>
					    <?php
					    if (peele::get_avator($roww["email"])===NULL) {
							?><img src="../app/classes/fileload/profile.png"/><?php
						}else {
							?><img src="../app/classes/fileload/<?php echo peele::get_avator($roww["email"]); ?>"/><?php
						}
					     ?>
					</div>
					<?php
				}
			}
		}

		public static function get_hospitals(){
			$result=DB::query("SELECT * FROM hospitals ORDER BY id DESC");
			$data['HOSPITALS'] = array();
			while($roww = mysqli_fetch_array($result)){
			$sample_array = array();
			if($roww){
					$sample_array['HOSPITAL'] = $roww['hospital'];

					array_push($data['HOSPITALS'], $sample_array);
				}
			}
			return json_encode($data);
		}

		public static function delete_hospital($name){
			$result=DB::query("DELETE FROM hospitals WHERE hospital='".DB::esc($name)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}

	public static function add_people_posts($email, $subject, $description){
		$result=DB::query("INSERT INTO people_posts(email, subject, description) VALUES('".DB::esc($email)."', '".DB::esc($subject)."', '".DB::esc($description)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
	}

	public static function add_people_post_comments($post_id, $email, $comment){
		$result=DB::query("INSERT INTO people_post_comments(post_id, email, comment) VALUES('".DB::esc($post_id)."', '".DB::esc($email)."', '".DB::esc($comment)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
	}

	public static function check_people_post_likes($post_id, $email){
		$result=DB::query("SELECT* FROM people_post_likes WHERE post_id='".DB::esc($post_id)."' AND email='".DB::esc($email)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["post_id"];
	}

	public static function add_people_post_likes($post_id, $email){
		if (self::check_people_post_likes($post_id, $email)===$post_id) {
			$result=DB::query("DELETE FROM people_post_likes WHERE post_id='".DB::esc($post_id)."' AND email='".DB::esc($email)."'");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}else{
			$result=DB::query("INSERT INTO people_post_likes(post_id, email) VALUES('".DB::esc($post_id)."', '".DB::esc($email)."')");
			if(!$result){
				return "false";
			}else{
				return "true";
			}
		}
	}

	private static function count_post_likes($post_id){
		$result=DB::query("SELECT COUNT(id) AS TOTAL FROM people_post_likes WHERE post_id='".DB::esc($post_id)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["TOTAL"];
	}

	private static function count_post_comments($post_id){
		$result=DB::query("SELECT COUNT(id) AS TOTAL FROM people_post_comments WHERE post_id='".DB::esc($post_id)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["TOTAL"];
	}

	public static function get_people_posts(){
		$result=DB::query("SELECT * FROM people_posts ORDER BY id DESC LIMIT 20");
		$data['POSTS'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
				$sample_array['ID'] = $roww['id'];
				$sample_array['BITMAP'] = peele::get_avator($roww["email"]);
				$sample_array['ORG'] = peele::get_org($roww["userEmail"]);
				$sample_array['NAME'] = peele::get_name($roww["email"]);
				$sample_array['DATE'] = $roww["date"];
				$sample_array['EMAIL'] = $roww["email"];
				$sample_array['SUBJECT'] = $roww["subject"];
				$sample_array['DESCRIPTION'] = $roww["description"];
				$sample_array['POST_LIKES'] = self::count_post_likes($roww['id']);
				$sample_array['POST_COMMENTS'] = self::count_post_comments($roww['id']);

				array_push($data['POSTS'], $sample_array);
			}
		}
		return json_encode($data);
	}

	public static function get_people_post_comments($post_id){
		$result=DB::query("SELECT * FROM people_post_comments WHERE post_id='".DB::esc($post_id)."' ORDER BY id DESC LIMIT 20");
		$data['COMMENTS'] = array();
		while($roww = mysqli_fetch_array($result)){
		$sample_array = array();
		if($roww){
				$sample_array['ID'] = $roww['id'];
				$sample_array['EMAIL'] = $roww["email"];
				$sample_array['POST_ID'] = $roww["post_id"];
				$sample_array['COMMENT'] = $roww["comment"];
				$sample_array['BITMAP'] = peele::get_avator($roww["email"]);
				$sample_array['ORG'] = peele::get_org($roww["email"]);
				$sample_array['NAME'] = peele::get_name($roww["email"]);
				$sample_array['DATE'] = $roww["date"];

				array_push($data['COMMENTS'], $sample_array);
			}
		}
		return json_encode($data);
	}
}
?>
