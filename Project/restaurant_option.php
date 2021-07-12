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
             height:500px;
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
             height:100px;  
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
          	width: 50px;
          	height: 30px;
          	color:#ffffff;
            background-color: #FD9653;
            font-family: courier;
            margin-right:1%;
            border:1px solid #FD9653;
            border-radius: 2px;
            float: right;


          }

          .menutxt{
          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            text-align: center;
            font-weight: bold;
            margin-top: 20%;

          }

          .addmenubar{

          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            font-weight: bold;
            margin-top: 1%;
            margin-left: 1%;
            margin-right: 5%;
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

          	width:25%;
          	color:#FD9653;
            background-color: #ffffff;
            font-family: courier;
            margin-top: 1%;
            margin-left: 1%;
            margin-right: 4%;
            border:1px solid #FD9653;
            float: left;
          }
        
          .addmenubtn{

          	width: 50px;
          	height: 30px;
          	color:#ffffff;
            background-color: #FD9653;
            font-family: courier;
            margin-right:0.5%;
            margin-top:0.3%;
            border:1px solid #FD9653;
            border-radius: 2px;
            float: right;

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
      
      
      <p class="namepanel">EDIT INFORMATION</p>   
      <div class="panel">
        <div class="divpic">
      	 <div class="changepic">
          <img src="coverpic/kfc.png" width="90px" height="88px">   
         </div>


         <div>
         	<input type="file" name="picupload" class="picup">
         </div>
        </div> 

         <div class="divpic1">
         	<form method="post">
         		<table>
         			<tr>
         				<td><p class="basicinfo">Name - </p></td>
         				<td><input type="text" name="name" placeholder="KFC"  class="editinfo"></td>
         			</tr>

         			<tr>
         				<td><p class="basicinfo">Opening time - </p></td>
         				<td><input type="text" name="open" placeholder="10AM"  class="editinfo"></td>
         				
         			</tr>

         			<tr>
         				<td><p class="basicinfo">Closing time - </p></td>
         				<td><input type="text" name="close" placeholder="10PM"  class="editinfo"></td>
         				
         			</tr>
         		</table>
         		<input type="submit" name="save" value="Save" class="save">
         		
         	</form>
         </div>

         <p class="menutxt">MENU EDIT</p>
         <hr>

         <div class="divmenu">
         	<form>
         	 <p class="addmenubar">Add menu 1-</p>
         	 <p class="addmenu">Name: </p>
         	 <input type="text" name="mname" class="addmenu1">
         	 <p class="addmenu">Price: </p>
         	 <input type="text" name="mprice" class="addmenu1">
         	 <input type="submit" name="madd1" value="Add" class="addmenubtn">

         	</form>
         </div>

         <div class="divmenu">
         	<form>
         	 <p class="addmenubar">Add menu 2-</p>
         	 <p class="addmenu">Name: </p>
         	 <input type="text" name="mname" class="addmenu1">
         	 <p class="addmenu">Price: </p>
         	 <input type="text" name="mprice" class="addmenu1">
         	 <input type="submit" name="madd1" value="Add" class="addmenubtn">

         	</form>
         </div>

         <div class="divmenu">
         	<form>
         	 <p class="addmenubar">Add menu 3-</p>
         	 <p class="addmenu">Name: </p>
         	 <input type="text" name="mname" class="addmenu1">
         	 <p class="addmenu">Price: </p>
         	 <input type="text" name="mprice" class="addmenu1">
         	 <input type="submit" name="madd1" value="Add" class="addmenubtn">

         	</form>
         </div>

         <div class="divmenu">
         	<form>
         	 <p class="addmenubar">Add menu 4-</p>
         	 <p class="addmenu">Name: </p>
         	 <input type="text" name="mname" class="addmenu1">
         	 <p class="addmenu">Price: </p>
         	 <input type="text" name="mprice" class="addmenu1">
         	 <input type="submit" name="madd1" value="Add" class="addmenubtn">

         	</form>
         </div>

         <div class="divmenu">
         	<form>
         	 <p class="addmenubar">Add menu 5-</p>
         	 <p class="addmenu">Name: </p>
         	 <input type="text" name="mname" class="addmenu1">
         	 <p class="addmenu">Price: </p>
         	 <input type="text" name="mprice" class="addmenu1">
         	 <input type="submit" name="madd1" value="Add" class="addmenubtn">

         	</form>
         </div>
         

          
      </div>
     
   </body>
 </html>