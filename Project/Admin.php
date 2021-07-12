<!DOCTYPE html>
<html>
<head>
  
	<title>Menu</title>
	
	    <style>
          .header {
  		   background-color: #ffffff;
  		   height: 50px;
  		   width: 100%;
  		   border:1px solid #FD9653;
           }

          .body {
  			background-color: #e6e6e6;

      	   }

      	  .headerimg{
      	  	margin-top: 0.5%;
            margin-left: 1%;
            cursor:pointer;
    		width:40px;
   		 	height:30px;
   		 	float: left;
		   }

		  .headerqoutes{
  			
   			float: left;
   			font-family: Comic Sans MS;
   			color: #FD9653;
   			margin-left: 40%;
   			
		   }

		   .admin{
             float: right;
             font-family: courier;
             color: #FD9653;
             font-weight: bold;
             margin-right: 2%;

		   }

		   .text{
             font-family: courier;
             color: #FD9653;
             font-weight: bold;
             margin-left: 10%;
             margin-bottom: 0%;
             margin-top: 0%;
             


		   }

		   .leftpanel{
             background-color:#ffffff;
      		 color:#FD9653;
      		 width:20%;
      		 height: auto;
      		 border:1px solid #FD9653;
     		 border-radius:2px; 
     		 float: left;
     		 
           }

           .leftpanelpic
           {
           	 width:10%;
           	 height: 5%;
           	 margin-left: 10%;
           	 margin-top: 1%;
           	 cursor: pointer;
           }

           .bodypanel{
             background-color:#ffffff;
      		 color:#FD9653;
      		 width:78.7%;
      		 height: auto;
      		 border:1px solid #FD9653;
     		 border-radius:2px; 
     		 float: left;
     		 padding-top:2%;
     		 margin-left: 1%; 
           }





		</style>
</head>

	<body class="body">
  		<div class="header">
    		<a href="Home.php">
    			<img src="ATS1.png" class="headerimg">
    		</a>

    		<p class="headerqoutes">Good Food Good Mood</p>

    		<p class="admin">Admin</p>
  		</div>
        <br/>
  		<div class="leftpanel">
  			<a href="admin_user.php">
  			<br/>
  			<img src="Fav/user.png" class="leftpanelpic">
  			</a>
  			<p class="text">User</p>
  			<br/>

  			<a href="admin_restaurant.php">
  			<br/>
  			 <img src="Fav/restaurant.png" class="leftpanelpic">
  			</a>
  			<p class="text">Restaurant</p>
  			<br/>

  			<a href="admin_order.php">
  			<br/>
  			 <img src="Fav/order.png" class="leftpanelpic">
  			</a>
  			<p class="text">Order</p>
  			<br/>

  			<a href="admin_others.php">
  			<br/>
  			 <img src="Fav/other.png" class="leftpanelpic">
  			</a>
  			<p class="text">Others</p>
  			<br/>
  		</div>

  		<div class="bodypanel">
  			
  		</div>
  	</body>
  	</html>