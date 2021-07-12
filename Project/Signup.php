<?php
	session_start();
	$emailError='';
	$firstError='';
	$lastError='';
	$usernameError='';
	$passError='';
	$message = '';
	
	if(isset($_POST["create"]))
	{
		
		$email = $_POST["email"];
		$first = $_POST["firstname"];
		$last  =  $_POST["lastname"];
		$username = $_POST["username"];
		$pass = $_POST["password"];
		$conPass = $_POST["cpass"];
		$flag = 0;
		
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  $emailError="*Email Is Not Valid";
		  $flag = 1;
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
		  $firstError = "*Only letters and white space allowed"; 
		  $flag = 1;
		}
		if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
		  $lastError = "*Only letters and white space allowed"; 
		  $flag = 1;
		}
		if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
		  $usernameError = "*Only letters , Numbers and white space allowed"; 
		  $flag = 1;
		}
		if($pass !=$conPass)
		{
			$passError = "*Password Didn't match with confirm password";
			$flag = 1;
			
		}
		else if(strlen($pass)<8)
		{
			$passError = "*Password length should be at least eight character";
			$flag = 1;
		}
		if($flag==0)
		{
			require_once('db.php');
			
			//INSERT
			$sql = "SELECT * FROM users WHERE Email='$_POST[email]'";
			$result = mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($result);
			
			if(!$row)
			{
				$sql = "INSERT INTO users VALUES(null,'$_POST[firstname]', '$_POST[lastname]','$_POST[email]','$_POST[username]','$_POST[password]','User')";
				mysqli_query($con,$sql);
				$message="Successfully signed up";
				
			}
			else
			{
				$emailError="*You Have A Account In Same Email Address";
			}
			
			
		}
		//return;
		
		
	}

 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<script language="JavaScript" type="text/javascript">
	validate_func()
	{
		alert("Hello");
		document.getElementById('pr').innerHTML = "cutmarani";
	}
	</script>
	<style>

	    .body {
            background-color: #e6e6e6;

	    }
		.div1 {
            margin: 5px auto;
            width: 600px;
            height: 1050px;
            margin-top: 50px;
            background-color: #ffffff
		}

		.div2{
			padding: 20px;
		}

		input[type=text], input[type=password] {
    		width: 60%;
    		padding: 8px 20px;
    		margin: 5px 0;
    		display: inline-block;
    		border: 2px solid #e6e6e6;
    		box-sizing: border-box;
    		font-family: courier;
    		font-size: 15px;

        }
        .button1{
            width: 100%;
            height: 30px;
            border-radius: 2px;
            cursor: pointer;
            background-color: #ffffff;
            border: 2px solid #e6e6e6;
            font-family: courier;
            font-weight: bold;
            color: 	#FD9653;

        }
        .button1:hover{
        	background-color: #e6e6e6;
        }


        .img{
          margin-top:5px;
          margin-left: 130px
        }


	</style>

</head>
 <body class="body">
  <div class="div1">


   <form class="div2" method="post">
   	<img class ="img" src="ATS.png">
   	 <br/>
   	  <label style="font-family: courier;">Create Account</label>
   	  <br/><br/>
	 <div>
	 <center>
  	 <input type="text" name="firstname" id="firstname" placeholder="Firstname" required>
	 <p id="first"><?php echo $firstError ?> </p>
	 <input type="text" name="lastname" id="lastname" placeholder="Lastname" required>
	 <p id="last"><?php echo $lastError ?> </p>
  	 <input type="text" name="email" id="email" placeholder="Email" required> 
	 <p id="erroremail"><?php echo $emailError ?></p>
	 <input type="text" name="username" id="username" placeholder="Username" required>
	 <p id="errorusername"><?php echo $usernameError ?> </p>
  	 <input type="password" name="password" id="password" placeholder="Password" required> 
	 <p id="pass"> <?php echo $passError ?></p>
	 <input type="password" id="conpassword" name="cpass" placeholder="Confirm password" required>
	 <p id="conpass"> </p>
	 </div>
	 </center>
  	  <input class="button1" type="submit" name="create" onclick="validate_func(this.form)" value="Create your ATS account">
  	  <br/>
	  <p><?php echo $message?> </p>
      <br/><br/>
	  
	  <p id ="pr">paici re</p>
      
  	  <label class="div2" style="font-family: cursive">Already have an account?</label><a class="div2" style="font-family: cursive;color: #FD9653" href="Login.php" >Sign in</a>
  	  
   </form>
  

    

  </div>
</body>
</html>