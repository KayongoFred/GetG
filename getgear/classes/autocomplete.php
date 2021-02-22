<?php 
header('Content-Type: application/json');

  $host="localhost";
  $DBuser="root";
  $DBpassword="";
  $database="getgear";
  $mysqli=new mysqli($host, $DBuser, $DBpassword, $database);
  if(!$mysqli){
    die("Error: {$mysqli->errno}:{$mysqli->error}");
  }

  $name=$_REQUEST['name'];
  $return_arr = array();
  $query="SELECT * FROM items where item_name like '%{$name}%'";
  $process=$mysqli->query($query);
  if(!$process){
      die("Error:{$mysqli->errno}:{$mysqli->error}");
  }else{
    if($process->num_rows>0){
      while($r = $process->fetch_assoc()){
          $rows['results'][] = $r;
      }
    }
  }

echo json_encode($rows);

?>