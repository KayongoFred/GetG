<?php
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
  $uploads_dir = './fileload/';
  $tmp_name = $_FILES['image']['tmp_name'];
  $pic_name = $_FILES['image']['name'];
   move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
}else{
    echo "Image not uploaded successfully.";
}

if (is_uploaded_file($_FILES['audio']['tmp_name'])) {
  $uploads_dir = './fileload/';
  $tmp_name = $_FILES['audio']['tmp_name'];
  $pic_name = $_FILES['audio']['name'];
   move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
}else{
    echo "Audio not uploaded successfully.";
}

if (is_uploaded_file($_FILES['pic']['tmp_name'])) {
  $uploads_dir = './fileload/';
  $tmp_name = $_FILES['pic']['tmp_name'];
  $pic_name = $_FILES['pic']['name'];
   move_uploaded_file($tmp_name, $uploads_dir.$pic_name);
}else{
    echo "Audio not uploaded successfully.";
}
?>
