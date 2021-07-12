<?php
session_start();
require_once('db.php');
	
  $ind = $_GET['w2'];
  $sql = "DELETE FROM favorite where RestaurentId = $ind";
  mysqli_query($con,$sql);
	
?>