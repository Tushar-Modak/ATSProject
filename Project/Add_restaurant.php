<?php
  session_start();
  require_once('db.php');
  
  if(isset($_POST["save"]))
  {
        
        $sql = "INSERT INTO restaurent VALUES(null,'$_POST[name]','200','50','Junkfood','$_POST[picupload]','$_POST[open]','$_POST[close]','$_POST[city]','$_POST[area]')";
        mysqli_query($con,$sql);
        if($_POST["name"])
         {
          $sql = "INSERT INTO manu VALUES(null,'$_POST[name]','$_POST[ftype1]','$_POST[mname1]','$_POST[mprice1]')";
           mysqli_query($con,$sql);
          $sql = "INSERT INTO manu VALUES(null,'$_POST[name]','$_POST[ftype2]','$_POST[mname2]','$_POST[mprice2]')";
           mysqli_query($con,$sql);
          $sql = "INSERT INTO manu VALUES(null,'$_POST[name]','$_POST[ftype3]','$_POST[mname3]','$_POST[mprice3]')";
           mysqli_query($con,$sql); 
         }
  }

?>

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

        .namepanel{
        	 background-color:#FD9653;
             color:#ffffff;
             width:50%;
             height:20px;
             font-family: courier;
             font-weight: bold;
             text-align: center;
             margin-left: 25%;
             margin-top: 1%;
             margin-bottom: .5%;
             border:2px solid #FD9653;
             border-radius:4px; 

             

        }

        

        .panel{
             background-color:#ffffff;
             color:#FD9653;
             width:60%;
             height:auto;
             margin-left: 20%;
             margin-top: 0%;
             border:1px solid #FD9653;
             border-radius:4px; 
             float: bottom;
             
           }

         .changepic{
         	float: left;
         	margin-left: .5%;
         	margin-top: .5%;
         	margin-right: 0%;
         	border:1px solid #FD9653;
           }

          .divpic{

          	background-color:#ffffff;
             color:#FD9653;
             width:45%;
             height:100px;  
             margin-top: 0%; 
             margin-right: 5%; 
             
             float: left;


           }

          .divpic1
          {
             background-color:#ffffff;
             color:#FD9653;
             width:50%;
             height:200px;  
             margin-top: 0%; 
             margin-right: 0%; 
             float: left;
          }
          

          .basicinfo
          {
          	color:#FD9653;
          	margin-top: 0%;
          	font-family: courier;
          	float: left;
          }

          .editinfo
          {
          	width: 310px;
          	color:#FD9653;
          	margin-bottom: 5%;
          	font-family: courier;
          	float: left;
          	background-color:#ffffff;
          	border:1px solid #FD9653;

          }

         .picup
          {
            color:#ffffff;
            background-color: #FD9653;
            font-family: courier;
            margin-top: 18%;
          }

          .save{
          	width: 98%;
          	height: 10%;
          	color:#ffffff;
            background-color: #FD9653;
            font-family: courier;
            margin-right:1%;
            margin-left: 1%;
            margin-bottom: 1%;
            border:1px solid #FD9653;
            border-radius: 2px;
            float: bottom;
            cursor: pointer;


          }

          .menutxt{
          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            text-align: center;
            font-weight: bold;
            margin-top: 25%;

          }

          .addmenubar{

          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            font-weight: bold;
            margin-top: 1%;
            margin-left: 2%;
            margin-right: 2%;
            float: left;
          }
          
          .addmenu{

          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            margin-top: 1%;
            margin-left: 1%;
            border:1px solid #FD9653;
            float: left;
          }

          .addmenu1{

          	width:18%;
          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            margin-top: 1%;
            margin-left: 1%;
            margin-right: 2%;
            border:1px solid #FD9653;
            float: left;
          }
        
          
          hr{
			    color: #FD9653;
			    border: 2px solid #FD9653;
     	   	border-radius: 50%;
      		margin-top: 0px;
      		margin:10px;
          }

          .divmenu
          {
          	width: 100%;
          	height: 50px;
          	background-color: #ffffff;
          	float:bottom;
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
      
      <form method="post">

      <p class="namepanel">ADD NEW RESTAURANT</p>   
      <div class="panel">
        <div class="divpic">
      	 <div class="changepic">
          <img src="Fav/shop.png" width="90px" height="88px">   
         </div>

         <div>
         	<input type="file" name="picupload" class="picup" >
         </div>
        </div> 

         <div class="divpic1">
         		<table>
         			<tr>
         				<td><p class="basicinfo">Name - </p></td>
         				<td><input type="text" name="name" id="n" class="editinfo" required="required"></td>
         			</tr>

              <tr>
                <td><p class="basicinfo">City - </p></td>
                <td><input type="text" name="city" id="c" class="editinfo" required="required"></td>
                
              </tr>

              <tr>
                <td><p class="basicinfo">Area - </p></td>
                <td><input type="text" name="area" id="a" class="editinfo" required="required"></td>
                
              </tr>

         			<tr>
         				<td><p class="basicinfo">Opening time - </p></td>
         				<td><input type="text" name="open" id="ot" class="editinfo" required="required"></td>
         				
         			</tr>

         			<tr>
         				<td><p class="basicinfo">Closing time - </p></td>
         				<td><input type="text" name="close" id="ct" class="editinfo" required="required"></td>
         				
         			</tr>
         		</table>
         		</div>
         	

         

         <p class="menutxt">ADD MENU</p>
         <hr>
         
         <div class="divmenu">

         	 <p class="addmenubar">Add menu 1-</p>
         	 <p class="addmenu">Name: </p>
         	 <input type="text" name="mname1" class="addmenu1" required="required">
           <p class="addmenu">Type: </p>
           <input type="text" name="ftype1" class="addmenu1" required="required">
         	 <p class="addmenu">Price: </p>
         	 <input type="text" name="mprice1" class="addmenu1" required="required">

         </div>

         <div class="divmenu">

           <p class="addmenubar">Add menu 2-</p>
           <p class="addmenu">Name: </p>
           <input type="text" name="mname2" class="addmenu1" required="required">
           <p class="addmenu">Type: </p>
           <input type="text" name="ftype2" class="addmenu1" required="required">
           <p class="addmenu">Price: </p>
           <input type="text" name="mprice2" class="addmenu1" required="required">

         </div>


         <div class="divmenu">

           <p class="addmenubar">Add menu 3-</p>
           <p class="addmenu">Name: </p>
           <input type="text" name="mname3" class="addmenu1" required="required">
           <p class="addmenu">Type: </p>
           <input type="text" name="ftype3" class="addmenu1" required="required">
           <p class="addmenu">Price: </p>
           <input type="text" name="mprice3" class="addmenu1" required="required">

         </div>

         
          <input type="submit" name="save" value="Save" class="save">
        
      
      </form>

       
      </div>



     
   </body>
 </html>