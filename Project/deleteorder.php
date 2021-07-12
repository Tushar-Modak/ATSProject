<?php
session_start();

  require_once('db.php');
  $ind = $_GET['w2'];
 echo $ind;
  $sql = "DELETE FROM orderdetails where orderid = $ind";
  mysqli_query($con,$sql);
//date_default_timezone_set("Asia/Dhaka");
//echo date('h:i:s');
	
?>