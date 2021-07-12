<?php 
  session_start();
  require_once('db.php');
  $sql = "SELECT * FROM users";
  $result = mysqli_query($con,$sql);
  $ind = 0;
  
  while($row = mysqli_fetch_assoc($result))
  {
    $outputFirstname[$ind] = $row['First'];
    $outputLastname[$ind] = $row['Last'];
    $outputEmail[$ind] = $row['Email'];
    $outputUsername[$ind] = $row['UserName'];
    $outputPassword[$ind] = $row['pass'];
    $rmvid[$ind]=$row['Id'];
    
    $ind++;
    
  }
  ?>

<!DOCTYPE html>
<html>
<head>
  
	<title>Admin_User</title>
	
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
     		     
     		     margin-left: 1%; 
           }
           .innerpanel
          {
            width:98.8%;
            border:1px solid #FD9653;
            border-radius: 2px;
            height: auto;
            float: left;
            margin-left: .5%;
            margin-right:.5%;
            margin-top: .5%;
          }
          .innerpanelinfo
          {
           width: 90%;
           font-family: courier;
           font-weight: bold;
           text-align: center;
           float: left;

          }
          .innerpanelinfo2
          {
           font-family: courier;
           font-weight: bold;
           float: left;

          }



          .rmvimg{
            width:2%;
            height: 10%;
            float:right;
            margin-top: 0.5%;
            margin-right: 0.5%;
            cursor: pointer;

          }

           .leftpaneldiv{

            background-color: #e6e6e6;  
                
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

          <div class="leftpaneldiv">
           <br/>
  			   <img src="Fav/user.png" class="leftpanelpic">
  			   <p class="text">User</p>
           <br/>
          </div>
  			
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
         <?php for($i=0;$i<$ind;$i++)
       {?>
        <div class="innerpanel">
         <table class="innerpanelinfo2">
           <tr>
            <td >Name</td>
            <td> :</td>
            <td colspan="3"><?php echo $outputFirstname[$i]." ".$outputLastname[$i];?></td>
          </tr>

          <tr>
            <td >Email</td>
            <td> :</td>
            <td colspan="3"><?php echo $outputEmail[$i];?></td> 
          </tr>
          <tr>
            <td >Username</td>
            <td> :</td>
            <td colspan="3"><?php echo $outputUsername[$i];?></td> 
          </tr>
          <tr>
            <td >Password</td>
            <td> :</td>
            <td colspan="3"><?php echo $outputPassword[$i];?></td> 
          </tr>

          </table>
          <div>
          <a href="user_delete.php?id=<?php echo $rmvid[$i]?>">
            <img src="Fav/cancel.png" class="rmvimg" id="<?php $rmvid[$i]?>">
          </a>
          </div>
        </div>
        <?php } ?>
 
  	 </div>
  	</body>
  	</html>