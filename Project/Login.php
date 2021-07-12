<?php
  session_start();
  $error='';
  if(isset($_POST['login']))
  {
		require_once('db.php');
	  
		$sql = "SELECT * FROM users WHERE Email = '$_POST[email]' and pass = '$_POST[password]'";
		
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_assoc($result);
		
		if(!$row)
		{
			$error="*You Have Entered Wrong Username or Password";
			
			
		}
		else
		{
			$_SESSION["email"] = $_POST[email];
			$_SESSION["password"] = $_POST[password];
			header('location:Home.php');
		}
		
  
  }

 
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>

	    .body {
            background-color: #e6e6e6;
            

	    }
		.div1 {
            margin: 5px auto;
            width: 500px;
            height: 800px;
            margin-top: 150px;
            background-color: #ffffff;
		}

		.div2{
			padding: 5px;
		}

		input[type=text], input[type=password] {
    		width: 100%;
    		padding: 8px 20px;
    		margin: 8px 0;
    		display: inline-block;
    		border: 2px solid #e6e6e6;
    		box-sizing: border-box;
    		font-family: courier;
    		font-size: 15px;

        }
        .button1{
            width: 150px;
            height: 30px;
            border-radius: 2px;
            cursor: pointer;
            background-color: #ffffff;
            border: 2px solid #e6e6e6;
            font-family: courier;
            font-weight: bold;
            color:  #FD9653;

        }
        .button1:hover{
        	background-color: #e6e6e6;
        }

        .footer{
        	width: 86%;
        	height: 18px;
    		  padding: 8px 20px;
    		  margin: 2px auto;
    		  border: 2px solid #e6e6e6;
    		  background-color: #e6e6e6;

        }

        .button2
        {
        	width:100%;
        	height:20px;
        	background-color:#ffffff; 
        	font-family: courier;
          font-weight: bold;
        	cursor: pointer;
          color:  #FD9653;

        }

        .button2:hover{
        	background-color: #e6e6e6;
        }



        .img{
          margin-top:5px;
          margin-left: 80px
        }


	</style>

</head>
 <body class="body">
  <div class="div1">


   <form class="div2" method="post">
   	<img class ="img" src="ATS.png">
   	 <br/>
   	  <label style="font-family: courier;">Sign in with your username and password</label>
   	  <br/><br/>
  	  <input type="text" name="email" placeholder="EMAIL" required>
  	  <br/>
  	  <input type="password" name="password" placeholder="PASSWORD" required>
	  <p><?php echo $error ?></p>
  	  <br/>
  	  <input class="button1" type="submit" name="login" value="Login">
  	  <input type="checkbox" name="checkbox"><label style="font-family: courier">Remember me!</label>
  	  <br/>
  	  
   </form>
   <a class="div2" style="font-family: cursive;color: #FD9653" href="">Can't access your account?</a>
   <br/><br/>

   <form method="post" action="Signup.php">
    <div class="footer">
   	 <input class="button2" type="submit" name="signup" value="Create New Account">
    </div> 
   </form>  

  </div>
</body>
</html>