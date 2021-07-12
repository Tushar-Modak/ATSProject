<?php 
  session_start();
  $rid=$_GET['id'];
  require_once('db.php');
  
  $sql = "DELETE FROM restaurent WHERE Id=$rid";
  $result = mysqli_query($con,$sql);
  $ind = 0;
  header('location:admin_restaurant.php')

 
  ?>