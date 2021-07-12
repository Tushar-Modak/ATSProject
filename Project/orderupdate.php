<?php 
$ind = $_GET['w2'];
$ind3 = $_GET['w3'];

session_start();

$userEmail = $_SESSION["email"];
require_once('db.php');
$sql = "SELECT * FROM manu WHERE Id = '$ind3'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);


  $restname = $row['RestaurentName'];
  $foodmanu = $row['FoodManu'];
  $price = $row['Price'];
//$sql = "INSERT INTO orderdetails VALUES ( null, '$restname', 'csdc', 'dcds', 'sdf', 'fvfv')";
$sql = "INSERT INTO orderdetails VALUES (null, '$restname', '$foodmanu' , '$price', '$userEmail', '$ind3', '$ind')";
mysqli_query($con,$sql);

?>