<?php
session_start();
$rid=$_GET['id'];
require_once('db.php');
$sql="DELETE FROM users WHERE ID=$rid";
$result=mysqli_query($con,$sql);
$ind=0;
header('location:admin_user.php')

?>