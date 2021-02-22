<?php
$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

$host="localhost";
  $DBuser="root";
  $DBpassword="";
  $database="getgear";
  $mysqli=new mysqli($host, $DBuser, $DBpassword, $database);
  if(!$mysqli){
    die("Error: {$mysqli->errno}:{$mysqli->error}");
  }

  $return_arr = array();
  $query="SELECT * FROM delivary_data";
  $process=$mysqli->query($query);
  header("Content-type: text/xml");
  if(!$process){
      die("Error:{$mysqli->errno}:{$mysqli->error}");
  }else{
    if($process->num_rows>0){
      while($row = $process->fetch_assoc()){
        // Add to XML document node
        $node = $dom->createElement("marker");
        $newnode = $parnode->appendChild($node);

        $newnode->setAttribute("id", $row['id']);
        $newnode->setAttribute("name", $row['contact_name']);
        $newnode->setAttribute("address", $row['google_location'].", ".$row['unit']);
        $newnode->setAttribute("lat", $row['latitude']);
        $newnode->setAttribute("lng", $row['longtude']);
        $newnode->setAttribute("type", "restaurant");
      }
      echo $dom->saveXML();
    }
  }
?>