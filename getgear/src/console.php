<?php
class peeleWeb{
	public static  function post_solution(){
    if (isset($_FILES['files'])) {
	        $errors = [];
	        $userName=$_POST["user_email"];
	        $item_description=$_POST["answer"];
	        $categoryName=$_POST["topic"];
			$publisher=$_COOKIE["getgear_user_email"];
            $item_name=$_POST["itemName"];
            $itemPrice=$_POST["itemPrice"];
            $purpose=$_POST["purpose"];
            $item_qty="1";
			$item_id=self::saveItem($item_name, $itemPrice, $userName, $categoryName, $item_qty, $item_description, $publisher, $purpose);

			if ($item_id!=="false") {
		        $path = '../classes/fileload/';
				$extensions = ['jpg', 'jpeg', 'png', 'gif'];
				
		        $all_files = count($_FILES['files']['tmp_name']);
		        $names = array();
		        for ($i = 0; $i < $all_files; $i++) {  
					$file_name = $_FILES['files']['name'][$i];
					$file_tmp = $_FILES['files']['tmp_name'][$i];
					$file_type = $_FILES['files']['type'][$i];
					$file_size = $_FILES['files']['size'][$i];
					$file_ext = strtolower(end(explode('.', $file_name)));
					$newName=$publisher."_".round(microtime(true)) . $file_name;
					$file = $path. $newName;
					$names[$i]=$newName;
					if (!in_array($file_ext, $extensions)) {
						$errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
					}
					if ($file_size > 2097152) {
						$errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
					}
					if (empty($errors)) {
						move_uploaded_file($file_tmp, $file);
					}
					if ($errors) print_r($errors);
			    }

				$arrlength = count($names);
				for ($i=0; $i<$arrlength; $i++){
					self::saveImage($item_id, $names[$i]);
				}
			}else{
				return "Failed to save Item, try again";
			}
		}
    }

	private static function get_item_id($publisherEmail){
		$publisher=self::get_user_id($publisherEmail);
		$result=DB::query("SELECT* FROM items WHERE publisher='".DB::esc($publisher)."' ORDER BY item_id DESC");
		$roww = mysqli_fetch_array($result);
		return $roww["item_id"];
	}

	private static function get_category_id($categoryName){
		$result=DB::query("SELECT* FROM item_category WHERE categoryName='".DB::esc($categoryName)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["id"];
	}

	private static function get_user_id($userName){
		$result=DB::query("SELECT* FROM users WHERE email='".DB::esc($userName)."' OR phone='".DB::esc($userName)."'");
		$roww = mysqli_fetch_array($result);
		return $roww["userid"];
	}

    private static function saveImage($item_id, $names){
		$result=DB::query("INSERT INTO item_images(item_id, image_name) VALUES('".DB::esc($item_id)."', '".DB::esc($names)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
    }

    private static function saveItem($item_name, $item_price, $userName, $categoryName, $item_qty, $item_description, $publisherEmail, $purpose){
		$user_id=self::get_user_id($userName);
		$publisher=self::get_user_id($publisherEmail);
		$category_id=self::get_category_id($categoryName);
		$result=DB::query("INSERT INTO items(item_name, item_price, user_id, category_id, item_qty, item_description, publisher, purpose) VALUES('".DB::esc($item_name)."', '".DB::esc($item_price)."', '".DB::esc($user_id)."', '".DB::esc($category_id)."', '".DB::esc($item_qty)."', '".DB::esc($item_description)."', '".DB::esc($publisher)."', '".DB::esc($purpose)."')");
		if(!$result){
			return "false";
		}else{
			return self::get_item_id($publisherEmail);
		}
    }

    public static function logout(){
      unset($_COOKIE["getgear_user_email"]);
      unset($_COOKIE["getgear_user_password"]);
      setcookie("getgear_user_email", "", time() - 3600, "/");
      setcookie("getgear_user_password", "", time() - 3600, "/");
  	}

    private static function saveAd($image, $ad_url){
		$result=DB::query("INSERT INTO ads(image, ad_url) VALUES('".DB::esc($image)."', '".DB::esc($ad_url)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
    }

  	public static  function post_ad(){
	    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
		  	$uploads_dir = '../classes/fileload/';
		  	$extensions = ['jpg', 'jpeg', 'png', 'gif'];
		 	$tmp_name = $_FILES['image']['tmp_name'];
		 	$pic_name = $_FILES['image']['name'];
		 	$publisher=$_COOKIE["getgear_user_email"];
		 	$ad_url=$_POST['link'];
		 	$errors = [];
		 	$file_ext = strtolower(end(explode('.', $pic_name)));
			$newName=$publisher."_".round(microtime(true)) . $pic_name;

			if (!in_array($file_ext, $extensions)) {
				$errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
			}

			if ($file_size > 2097152) {
				$errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
			}

			if (empty($errors)) {
		  		move_uploaded_file($tmp_name, $uploads_dir.$newName);
		  		self::saveAd($newName, $ad_url);
			}
		}else{
		    echo "Image not uploaded successfully.";
		}
    }

  	public static  function post_category(){
	    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
		  	$uploads_dir = '../classes/fileload/';
		  	$extensions = ['jpg', 'jpeg', 'png', 'gif'];
		 	$tmp_name = $_FILES['image']['tmp_name'];
		 	$pic_name = $_FILES['image']['name'];
		 	$publisher=$_COOKIE["getgear_user_email"];
		 	$ad_url=$_POST['category'];
		 	$errors = [];
		 	$file_ext = strtolower(end(explode('.', $pic_name)));
			$newName=$publisher."_".round(microtime(true)) . $pic_name;

			if (!in_array($file_ext, $extensions)) {
				$errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
			}

			if ($file_size > 2097152) {
				$errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
			}

			if (empty($errors)) {
		  		move_uploaded_file($tmp_name, $uploads_dir.$newName);
		  		self::saveCategory($newName, $ad_url);
			}
		}else{
		    echo "Image not uploaded successfully.";
		}
    }

    private static function saveCategory($image, $categoryName){
		$result=DB::query("INSERT INTO item_category(avator, categoryName) VALUES('".DB::esc($image)."', '".DB::esc($categoryName)."')");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
    }

	public static  function update_item(){
    if (isset($_FILES['files'])) {
	        $errors = [];
	        $userName=$_POST["user_email"];
	        $item_description=$_POST["answer"];
	        $categoryName=$_POST["topic"];
			$publisher=$_COOKIE["getgear_user_email"];
            $item_name=$_POST["itemName"];
            $itemPrice=$_POST["itemPrice"];
            $itemID=$_POST["item_id"];
            $purpose=$_POST["purpose"];
            $item_qty="1";
            self::deleteItemImages($itemID);
			$item_id=self::saveUpdate($item_name, $itemPrice, $userName, $categoryName, $item_qty, $item_description, $publisher, $itemID, $purpose);

			if ($item_id!=="false") {
		        $path = '../classes/fileload/';
				$extensions = ['jpg', 'jpeg', 'png', 'gif'];
				
		        $all_files = count($_FILES['files']['tmp_name']);
		        $names = array();
		        for ($i = 0; $i < $all_files; $i++) {  
					$file_name = $_FILES['files']['name'][$i];
					$file_tmp = $_FILES['files']['tmp_name'][$i];
					$file_type = $_FILES['files']['type'][$i];
					$file_size = $_FILES['files']['size'][$i];
					$file_ext = strtolower(end(explode('.', $file_name)));
					$newName=$publisher."_".round(microtime(true)) . $file_name;
					$file = $path. $newName;
					$names[$i]=$newName;
					if (!in_array($file_ext, $extensions)) {
						$errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
					}
					if ($file_size > 2097152) {
						$errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
					}
					if (empty($errors)) {
						move_uploaded_file($file_tmp, $file);
					}
					if ($errors) print_r($errors);
			    }

				$arrlength = count($names);
				for ($i=0; $i<$arrlength; $i++){
					self::saveImage($item_id, $names[$i]);
				}
			}else{
				return "Failed to save Item, try again";
			}
		}
    }

    public static function saveUpdate($item_name, $itemPrice, $userName, $categoryName, $item_qty, $item_description, $publisher, $item_id, $purpose){
    	$user_id=self::get_user_id($userName);
		$publisher=self::get_user_id($publisherEmail);
		$category_id=self::get_category_id($categoryName);

		$result=DB::query("UPDATE items SET item_name='".DB::esc($item_name)."', item_price='".DB::esc($itemPrice)."', user_id='".DB::esc($user_id)."', category_id='".DB::esc($category_id)."', item_qty='".DB::esc($item_qty)."', item_description='".DB::esc($item_description)."', publisher='".DB::esc($publisher)."', purpose='".DB::esc($purpose)."' WHERE item_id='".DB::esc($item_id)."'");
		if(!$result){
			return "false";
		}else{
			return $item_id;
		}
    }

    public static function deleteItemImages($item_id){
		$result=DB::query("DELETE FROM item_images WHERE item_id='".DB::esc($item_id)."'");
		if(!$result){
			return "false";
		}else{
			return "true";
		}
    }

    public static function updateCategoryAvator(){
    	if (is_uploaded_file($_FILES['image']['tmp_name'])) {
		  	$uploads_dir = '../classes/fileload/';
		  	$extensions = ['jpg', 'jpeg', 'png', 'gif'];
		 	$tmp_name = $_FILES['image']['tmp_name'];
		 	$pic_name = $_FILES['image']['name'];
		 	$publisher=$_COOKIE["getgear_user_email"];
		 	$id=$_POST['id'];
		 	$errors = [];
		 	$file_ext = strtolower(end(explode('.', $pic_name)));
			$newName=$publisher."_".round(microtime(true)) . $pic_name;

			if (!in_array($file_ext, $extensions)) {
				$errors[] = 'Extension not allowed: ' . $file_name . ' ' . $file_type;
			}

			if ($file_size > 2097152) {
				$errors[] = 'File size exceeds limit: ' . $file_name . ' ' . $file_type;
			}

			if (empty($errors)) {
		  		move_uploaded_file($tmp_name, $uploads_dir.$newName);
		  		self::updateCategoryImage($newName, $id);
			}
		}else{
		    echo "Image not uploaded successfully.";
		}
    }

    private static function updateCategoryImage($newName, $id){
    	$result=DB::query("UPDATE item_category SET avator='".DB::esc($newName)."' WHERE id='".DB::esc($id)."'");
		if(!$result){
			return "false ".$wholesale_description;
		}else{
			return "true";
		}
    }
}
?>