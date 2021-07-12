<!DOCTYPE html>
<html>
<head>
  
	<title>Admin_order</title>
	
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

           .leftbodypanel{
           background-color:#ffffff;
      		 color:#FD9653;
      		 width:38.8%;
      		 height: auto;
      		 border:1px solid #FD9653;
     		   border-radius:2px; 
     		   float: left;
     		   margin-left: 1%; 
          }

          .leftbodyname{
            background-color: #FD9653;
            width:38.8%;
            margin-left: 1%;
            margin-right: 1%;
            margin-top: 0%;
            margin-bottom: 0.5%;
            color:#ffffff;
            font-family: courier;
            font-weight: bold;
            border:1px solid #FD9653;
            border-radius:2px; 
            float: left;
            text-align: center;

          }

          .rightbodypanel{
           background-color:#ffffff;
           color:#FD9653;
           width:38.8%;
           height: auto;
           border:1px solid #FD9653;
           border-radius:2px; 
           float: left;
           margin-left: 1%; 
          }

          .rightbodyname{
            background-color: #FD9653;
            width:38.8%;
            margin-bottom: 0.5%;
            margin-top: 0%;
            color:#ffffff;
            font-family: courier;
            font-weight: bold;
            border:1px solid #FD9653;
            border-radius:2px; 
            float: left;
            text-align: center;

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
           width: 24%;
           font-family: courier;
           font-weight: bold;
           float: left;
           overflow-x:auto;
           text-align: center;
           
          }
          .divininfo{
            float:bottom;
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

        <div class="leftpaneldiv"> 
  			<br/>
         <img src="Fav/order.png" class="leftpanelpic">
  			 <p class="text">Order</p>
        <br/>
        </div>

        <a href="admin_others.php">
        <br/> 
  			 <img src="Fav/other.png" class="leftpanelpic">
        </a>
  			<p class="text">Others</p>
        <br/>
  			

  		</div>
      
        <p class="leftbodyname">Delivered Orders</p>
        <p class="rightbodyname">Pending Orders</p>

  		<div class="leftbodypanel">
        <div class="innerpanel">
          <div style="overflow-x:auto;">
          <table >
           <tr>
            <td class="innerpanelinfo">Name </td>
            <td class="innerpanelinfo">Menu ddddddddddddddddddddddddddddddddddddd sdddddddddddddddddddddddd </td>
            <td class="innerpanelinfo">Price</td>
            <td class="innerpanelinfo">Address </td>
           </tr>
          </table>
         </div>
              
        </div>
        <div class="innerpanel">
          <div style="overflow-x:auto;">
          <table >
           <tr>
            <td class="innerpanelinfo">Name </td>
            <td class="innerpanelinfo">Menu ddddddddddddddddddddddddddddddddddddd sdddddddddddddddddddddddd </td>
            <td class="innerpanelinfo">Price</td>
            <td class="innerpanelinfo">Address </td>  
           </tr>
          </table>
         </div>
          
        </div>
        <div class="innerpanel">
          <div style="overflow-x:auto;">
          <table >
           <tr>
            <td class="innerpanelinfo">Name </td>
            <td class="innerpanelinfo">Menu ddddddddddddddddddddddddddddddddddddd sdddddddddddddddddddddddd </td>
            <td class="innerpanelinfo">Price</td>
            <td class="innerpanelinfo">Address </td> 
           </tr>
          </table>
         </div>
          
        </div>

  		</div>



      <div class="rightbodypanel">
         <div class="innerpanel">
          <div style="overflow-x:auto;">
          <table >
           <tr>
            <td class="innerpanelinfo">Name </td>
            <td class="innerpanelinfo">Menu ddddddddddddddddddddddddddddddddddddd sdddddddddddddddddddddddd </td>
            <td class="innerpanelinfo">Price</td>
            <td class="innerpanelinfo">Address </td>
           </tr>
          </table>
         </div>
              
        </div>
        <div class="innerpanel">
          <div style="overflow-x:auto;">
          <table >
           <tr>
            <td class="innerpanelinfo">Name </td>
            <td class="innerpanelinfo">Menu ddddddddddddddddddddddddddddddddddddd sdddddddddddddddddddddddd </td>
            <td class="innerpanelinfo"></td>
            <td class="innerpanelinfo">Address </td>  
           </tr>
          </table>
         </div>
          
        </div>
        <div class="innerpanel">
          <div style="overflow-x:auto;">
          <table >
           <tr>
            <td class="innerpanelinfo">Name </td>
            <td class="innerpanelinfo">Menu ddddddddddddddddddddddddddddddddddddd sdddddddddddddddddddddddd </td>
            <td class="innerpanelinfo"></td>
            <td class="innerpanelinfo">Address </td> 
           </tr>
          </table>
         </div>  
        </div>
      </div>
        
        
      </div>
  	</body>
  	</html>