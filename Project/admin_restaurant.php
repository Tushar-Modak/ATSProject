<?php 
  session_start();
  
  require_once('db.php');
  $sql = "SELECT * FROM restaurent";
  $result = mysqli_query($con,$sql);
  $ind = 0;
  $optid=0;
  
  
  while($row = mysqli_fetch_assoc($result))
  {
    $outputName[$ind] = $row['Name'];
    $outputImgsrc[$ind] = $row['imgsrc'];
    $outputId[$ind] = $row['Id'];
    $outputstart[$ind] = $row['startTime'];
    $outputend[$ind] = $row['endTime'];

    $rmvid[$ind]=$row['Id'];
    $ind++;
    $optid++; 
  }
  
  ?>

<!DOCTYPE html>
<html>
<head>
  
  <title>Admin_restaurant</title>


  
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

           

           .leftpaneldiv{

            background-color: #e6e6e6;       
           }
           .bodypanel
           {
            margin-left: 1%;
            margin-top: .5%;
            float: left;
            width: 78.8%;
            height: auto;
            
           }

           .inbodypanel
           {
            background-color:white;
            color:#FD9653;
            margin-bottom: 2px;
            width:100%;
            height: 100px;
            border:1px solid #FD9653;
            border-radius:2px;
            float: bottom; 


          }

          .inpanelimg{
            width: 90px;
            height: 88px;
            border-radius: 4px;
            margin-left: 5px;
            margin-top: 5px;
            float: left;

          }

          

          .inpanelname
           {
            width:400px;
            height:10px;
            margin-left: 2%;
            margin-top: 1%;
            font-family: courier;
            color:#FD9653;
            font-weight: bold;
            float: left;

            }

          .optionimg{
            width:5%;
            height: 50%;
            float: right;
            cursor: pointer;
            margin-right: 2%;
            margin-top: 2.4%;
          }

          .addbtn
          {
             background-color:#FD9653;
             color:#ffffff;
             width:78.8%;
             height: auto;
             border:2px solid #FD9653;
             border-radius:2px; 
             float: left;
             margin-left: 1%;
             font-family: courier;
             font-weight: bold;
             cursor: pointer;

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
        <div>
        <div class="leftpanel">

        <a href="admin_user.php">
        <br/>
         <img src="Fav/user.png" class="leftpanelpic">
        </a>
        <p class="text">User</p>
        <br/> 
        
        <div class="leftpaneldiv">
        <br/>
         <img src="Fav/restaurant.png" class="leftpanelpic">
         <p class="text">Restaurant</p>
        <br/>
        </div>
        
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

      <div >
        <a href="Add_restaurant.php">
         <input type="button" name="addnew" value="Add New Restaurant" class="addbtn">
       </a>
      </div>

      <div class="bodypanel">
        <?php for($i=0;$i<$ind;$i++)
       {?>

        <div class="inbodypanel">
          <div class="inpanelimg">
            <img src="<?php echo $outputImgsrc[$i];?>" width="90px" height="88px">
          </div>
         <h3 class="inpanelname"><?php echo $outputName[$i];?></h3>
         <a href="restaurant_option.php?id=<?php echo $outputId[$i] ?>">
          <img src="Fav/option.png" class="optionimg" id=<?php $outputId[$i]?>>
         </a>
         <a href="restaurant_delete.php?id=<?php echo $rmvid[$i] ?>">
          <img src="Fav/cancel.png" class="optionimg" id=<?php $rmvid[$i]?>>
         </a>
        </div>

        <?php }?>
    </div>
    
</div>
    </body>
    </html>