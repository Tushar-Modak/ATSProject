<?php 
	session_start();
	$_SESSION['favorite'] = array();
	require_once('db.php');
	$sql = "SELECT * FROM restaurent";
	$result = mysqli_query($con,$sql);
	$ind = 0;
	$userEmail = $_SESSION["email"];
	while($row = mysqli_fetch_assoc($result))
	{
		$outputName[$ind] = $row['Name'];
		$outputMinorder[$ind] = $row['MinimumOrder'];
		$outputDeliveryfee[$ind] = $row['DeliveryFee'];
		$outputImgsrc[$ind] = $row['imgsrc'];
		$outputId[$ind] = $row['Id'];
		
		$ind++;
		
	}
	for($i=0;$i<$ind;$i++)
	{
		$sql = "SELECT * FROM favorite WHERE UserEmail = '$userEmail' and RestaurentName = '$outputName[$i]'";
		$result = mysqli_query($con,$sql);
		$fl=0;
		while($row = mysqli_fetch_assoc($result))
		{
			
			
			$_SESSION["favorite"][$i]=2;
			
			$fl=1;
		}
		if($fl==0)
		{
			$clicked[$i]=0;
			$_SESSION["favorite"][$i]=3;
		}
			
		
		
	}
	$clickId=1;
	$clickId1=2;
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<link rel="stylesheet" type="text/css" href="commonpage.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>

	   
		
        .changesec{
			background-color:#FD9653;
			color:white;
			margin-left: 35%;
			margin-top: 5%;
			width:210px;
			height: 40px;
			float: left;
			 

		}

		.changebtn{
			background-color:#FD9653;
			color:white;
			width:70px;
			height: 40px;
			font-family: courier;
			font-weight: bold;
			border:1px solid white;
			float: left;
			cursor: pointer;

		}

		.searchpanel{
			
			margin-left: 3%;
			margin-top: 5%;
			width:385px;
			height: 40px;
			float: left;
			cursor: pointer;

		}

		.searchbar
		{
         background-color: #ffffff;
         color:#FD9653;
         width: 320px;
         height: 40px;
         float: left;
         font-family: courier;
         font-weight: bold;
         border:2px solid #FD9653;

		}

		.searchpic
		{
		 background-color: #ffffff;
     color:#FD9653;
     width: 65px;
     height: 40px;
     float: left;
     border:2px solid #FD9653;
     padding-left: 15px;
     padding-top: 3px;
		}

		.leftpanel{
			background-color:white;
			color:#FD9653;
			margin-left: 15%;
			margin-top: 1%;
			width:270px;
			height: 300px;
			border:1px solid #FD9653;
			border-radius:4px; 
			float: left; 


		}

		.midpanel{
			background-color:white;
			color:#FD9653;
			margin-left: 1%;
			margin-top: 1%;
			width:650px;
			height: 500px;
			border:1px solid white;
			border-radius:4px;
			float: left; 
		}

		.inmidpanel
		{
           	background-color:white;
			color:#FD9653;
			margin-bottom: 2px;
			width:100%;
			height: 100px;
			border:1px solid #FD9653;
			border-radius:4px;
			float: bottom; 
			position: relative;

		}

		.inpanelimg{
			width: 90px;
			height: 88px;
			border-radius: 4px;
			margin-left: 5px;
			margin-top: 5px;
			float: left;
			

		}

		.inpanelsec{
			width:540px;
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
            margin-left: 10px;
            margin-top: 5px;
            font-family: courier;
            color:#FD9653;
            font-weight: bold;
            float: left;

		}

		.inpanelinfo
		{
            width:200px;
            height:10px;
            margin-left: 10px;
            margin-top: 5px;
            font-family: courier;
            color:#FD9653;
            float: left;


		}

		.inpanelfav{
			width: 20px;
			height: 20px;
			margin-left: 65px;
			margin-top: 12px;
			cursor: pointer;


		}

		.showmenu{
			width:100px;
			height:30px;
			float: right;
			border-radius: 4px;
			background-color: #FD9653;
			color:white;
			border:2px solid #FD9653;
			font-family: courier;
			font-weight: bold;
			margin-right: 5px;
			margin-bottom: 10px;
			margin-top: -2px;
			cursor: pointer;

		}


		table{
			color:#FD9653;
			font-family: courier;
	
		}
		input[type="checkbox"]{
    
    		background-color: red;
    		color:white;
    		cursor: pointer;

        }

        .godiv{
   			width: 50px;
  			height: 25px;
  			background-color:#FD9653; 
   			border-radius: 4px;
   			font-family: courier;
   			color: #ffffff;
   			float: bottom; 
   			cursor: pointer;
   			font-weight: bold;
   			border:2px solid #FD9653;

}

		

	</style>

	<script type="text/javascript">
	var flag=0;
	var i;
	function change_favrite(str,flag,ID,restaurentId){
	var xhttp;
	var like=document.getElementById(ID);
	
	if(like.src == "http://localhost/project/Fav/like.png")
	{
		
		like.src = "Fav/liked.png";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			
		if (this.readyState == 4 && this.status == 200) {
			//alert("paici na jncjnc");
		  //document.getElementById("").innerHTML = this.responseText;
		  
		}
	  };
	  xhttp.open("GET", "favoriteUpdate.php?q="+str + "&w2=" + restaurentId, true);
	  xhttp.send();   
	}
	else if(like.src == "http://localhost/project/Fav/liked.png")
	{
		like.src = "Fav/like.png";
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			
		if (this.readyState == 4 && this.status == 200) {
			//alert("paici na jncjnc");
		  //document.getElementById("").innerHTML = this.responseText;
		  
		  
		}
	  };
	  xhttp.open("GET", "favoriteDelete.php?q="+str + "&w2=" + restaurentId, true);
	  xhttp.send();   
	}
}
function tabselecting(str,ID){
	var xhttp;
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		
	if (this.readyState == 4 && this.status == 200) {
	  document.getElementById("midpanelId").innerHTML = this.responseText;
	  
	  
	}
  };
  xhttp.open("GET", "tabselect.php?q="+str + "&w2=" + ID, true);
  xhttp.send();   
}
	
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

  <div class="changesec">
  	<input type="button" name="all" value="All" class="changebtn" onclick="tabselecting(this.value,2)">
  	<input type="button" name="open" value="Open" class="changebtn" onclick="tabselecting(this.value,3)">
  	<input type="button" name="closed" value="Closed" class="changebtn" onclick="tabselecting(this.value,4)">
  </div>

  <div class="searchpanel">
  	<input type="text" name="search" placeholder=" Search Food" class="searchbar">
  	  <div class="searchpic">
  	  	<img src="Fav/search.png" width="30px" height="30px">
  </div>
  	
  </div>

  <div class="leftpanel">
  <center>
  <table>
  	<br/>
  	<tr>
  	  <td><input type="checkbox" name="all" checked="checked"><b>All</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>American</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>Arab</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>Bangladeshi</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>Chainese</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>Indian</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>Italian</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="american"><b>Thai</b></td>
  	</tr>

  	<tr>
  	  <td><input class="godiv" type="submit" name="go" value="GO"></td>
  	</tr>

    
  </table>
  </center>

  </div>

  <div class="midpanel" id ="midpanelId">
	<?php for($i=1;$i<$ind;$i++)
	{?>
    <div class="inmidpanel">
	
    	<div class="inpanelimg">
    		<img src="<?php echo $outputImgsrc[$i];?>" width="90px" height="88px">
    	</div>

    	 <div class="inpanelsec">
    		<h3 class="inpanelname"><?php echo $outputName[$i];?></h3>
			<?php 
			if($_SESSION["favorite"][$i]==2)
			{?>
    		<img src="Fav/liked.png" class="inpanelfav" id=<?php echo $i?>  name = "2" onclick="change_favrite(this.value,<?php echo $_SESSION["favorite"][$i];?>,<?php echo $i?>,<?php echo $outputId[$i]?>)" ><?php }?>
			<?php 
			if($_SESSION["favorite"][$i]==3)
			{?>
    		<img src="Fav/like.png" class="inpanelfav" id=<?php echo $i?>  name = "3" onclick="change_favrite(this.value,<?php echo $_SESSION["favorite"][$i];?>,<?php echo $i?>,<?php echo $outputId[$i]?>)" ><?php }?>
			
			
    		<br/>
    		<p class="inpanelinfo">MINIMUM ORDER</p>
    		<p class="inpanelinfo">DELIVERY FEE</p>
			<p class="inpanelinfo">MINIMUM ORDER</p>
    		<p class="inpanelinfo">DELIVERY FEE</p>
			
    		<a href="Menu.php?linkid=<?php echo $outputId[$i]?>"><input type="button" name="showmenu" value="Show Menu" class="showmenu"></a>
    	 </div>
		 
	
  	
    </div>
	<?php }?>
    
  </div>

</body>
</html>
