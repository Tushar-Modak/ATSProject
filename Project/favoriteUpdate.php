<?php
session_start();

  require_once('db.php');
  $ind = $_GET['w2'];
  $sql = "SELECT * FROM restaurent where Id = $ind";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $i = 0;
  $restaurentName = $row['Name'];
  $em = $_SESSION["email"];
  $sql = "INSERT INTO favorite VALUES (null, '$restaurentName', '$em' , '$ind')";
  mysqli_query($con,$sql);
//date_default_timezone_set("Asia/Dhaka");
//echo date('h:i:s');
	
?>