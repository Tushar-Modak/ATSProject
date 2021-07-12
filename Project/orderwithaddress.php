<?php  
session_start();
require_once('db.php');
$sql = "SELECT * FROM orderdetails where Id>0";
$result = mysqli_query($con,$sql);
$val ="xa";
$i =0;
while($row = mysqli_fetch_assoc($result))
{
  var_dump($row);
  
}



?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="commonpage.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		
		
		
		.panel{
      width:40%;
      height: 400px;
      margin-left: 30%;
      margin-top: 5%;
      background-color: #ffffff;
      border: 1px solid #FD9653;
      border-radius: 2px;
    }

    .innerpanel
    {
      width:100%;
      height: 70px;
      margin-left: 0%;
      margin-top: 40%;
      background-color: #ffffff;
      border-radius: 2px;
      

    }

    .font{
      font-family: courier;
      color:#FD9653;
      font-weight: bold;
      margin-left: 1%;
      margin-top: 1%;
      float: left;
    }

    .address{
      width:70%;
      height:55%;
      color: #ffffff;
      font-family: courier;
      float: left;
      margin-left: 2%;
      margin-top: 1%;
      background-color: #FD9653;
      max-height:55%;
      max-width: 70%;


    }
		
    .cell{
      width:70%;
      height:30px;
      color: #ffffff;
      font-family: courier;
      float: left;
      margin-left: 2%;
      margin-top: 1%;
      background-color: #FD9653;
      border:1px solid #FD9653;


    }

    .confirm{
      width: 70%;
      height:30px;
      color: #ffffff;
      font-family: courier;
      float: left;
      margin-left: 15%;
      margin-top: 0%;
      background-color: #FD9653;
      border:1px solid #FD9653;
      cursor: pointer;


    }
    .orderbtn{
      width: 70px;
      height: 25px;
      background-color:#FD9653; 
      border-radius: 4px;
      font-family: courier;
      color: #ffffff;
      float: bottom; 
      cursor: pointer;
      font-weight: bold;
      border:2px solid #FD9653;
      margin-left: 53%;
      margin-bottom: 5%;
    }

		
</style>

<script>

</script>
		
</head>

	<body class="body">
  		<div class="header">
    		<a href="Home.php">
    			<img src="ATS1.png" class="headerimg">
    		</a>

    		<a href="Login.php">
    			<input type="button" name="signin" value="Sign in" class="headerbtn">
    		</a>

    		<p class="headerhelp"><b>Need Help?</b> Call <b>1234567</b></p>
    		<p class="headerqoutes">Good Food Good Mood</p>
  		</div>

  		
  
  
  <form>
<div class="panel">
  <p class="font">Address: </p>
  <textarea  class="address" required>
  </textarea>
  <div class="innerpanel">
   <p class="font">Cell no: </p>
   <input type="text" name="cell" class="cell" required>
   <p id = "cellphone"></p>
  </div>

  <input type="submit" name="confirm" value="Confirm" class="confirm">
</div>
</form>
  

 

		
	</body>

</html>