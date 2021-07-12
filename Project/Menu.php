<?php  
session_start();
	$restid =$_GET['linkid'];
	require_once('db.php');
	  
	$sql = "SELECT * FROM restaurent where Id= '$restid'";
	
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$restname = $row['Name'];
  $restid = $row['Id'];
  
	
	$sql = "SELECT * FROM manu where RestaurentName = '$restname'";
	
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$ind=0;
	$manulist =0;
	$numofitem =1;
	
	
	while($row = mysqli_fetch_assoc($result))
	{
		$outputmanu[$ind] = $row['FoodType'];
		$outputitem[$ind] = $row['FoodManu'];
		$outputprice[$ind] = $row['Price'];
		$outputid[$ind] = $row['Id'];

		$ind++;
		
	}
	
	for($i=1;$i<$ind;$i++)
	{
		
		if($outputmanu[$i]!=$outputmanu[$i-1])
		{
			$outputnumofitem[$manulist]=$numofitem;
			$aladarestname[$manulist]=$outputmanu[$i-1];
			$manulist++;
			
			$numofitem=0;
		}
		if($i==$ind-1&&($outputmanu[$i]==$outputmanu[$i-1]))
		{
			
			$outputnumofitem[$manulist]=$numofitem+1;
			$aladarestname[$manulist]=$outputmanu[$i-1];
			$manulist++;
		}
		$numofitem++;
	}
	$j=0;
	$v5=0;
	$v6=-1;
	$inc = 0;
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="commonpage.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		
		
		
		
		.leftpanel{
      background-color:white;
      color:#FD9653;
      margin-left: 5%;
      margin-top: 4.3%;
      width:200px;
      height: auto;
      border:1px solid #FD9653;
      border-radius:4px; 
      float: left;
    }

    .namebar{
      background-color: #ffffff;
      color:#FD9653;
      text-align: center;
      border:2px solid #FD9653;
      border-radius:4px;
      margin-left: 19.2%;
      margin-top: 1%; 
      width:650px;

    }

		.midpanel{
      background-color:white;
      color:#FD9653;
      margin-left: 1%;
      margin-top: 0%;
      width:650px;
      height: auto;
      border:1px solid white;
      border-radius:4px;
      float: left; 
    }

    .menuitem{
      color: #FD9653;
      margin-left: 2%;
      margin-top: 2%;
      font-weight: bold;
      font-family: courier;
      float: left;
      width: 50%;

    }
    .menuprice{
      color: #FD9653;
      margin-left: 10%;
      margin-top: 2%;
      font-family: courier;
      float: left;
      width: 23%;
    }

    .menuadd{
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
      margin-left: 2%;
      margin-top: 1.6%;
      margin-bottom: 2%;


    }

    .orderpanel{
      background-color:white;
      color:#FD9653;
      margin-left: 1%;
      margin-top: 0%;
      width:350px;
      height: auto;
      border:1px solid #FD9653;
      border-radius:4px;
      float: left; 
    }
	.orderpanel2{
      background-color:white;
      color:#FD9653;
      margin-left: 0%;
      margin-top: 0%;
      width:350px;
      height: auto;
      border:1px solid #FD9653;
      border-radius:4px;
      float: left; 
    }
	.orderlist{
      background-color:white;
      color:#FD9653;
      margin-left: 5%;
      margin-top: 0%;
      width:310px;
	  
      height: auto;
      border:1px solid #FD9653;
      border-radius:4px;
      float: left; 
    }

    .orderitem{
      color: #FD9653;
      margin-left: 2%;
      margin-top: 2%;
      font-weight: bold;
      font-family: courier;
      float: left;
      width: 50%;
    }
	.orderitem2{
      color: #FD9653;
      margin-left: 6.2%;
      margin-top: 2%;
      font-weight: bold;
      font-family: courier;
      float: left;
      width: 50%;
    }

    .orderamount{
      color: #FD9653;
      margin-left: 10%;
      margin-top: 2%;
      font-family: courier;
      float: left;
      width: 25%;
    }

    .total{
      color: #FD9653;
      margin-left: 2%;
      margin-top: 2%;
      font-weight: bold;
      font-family: courier;
      float: left;
      width: 50%;
    }

    .totalamount{
      color: #FD9653;
      margin-left: 10%;
      margin-top: 2%;
      font-family: courier;
      float: left;
      width: 25%;
      font-weight: bold;
    }

    .orderremove{
      width: 5%;
      height: 5%;
      margin-left: 5%;
      margin-top: 3%;
      margin-bottom: 6%;
      cursor: pointer;
    
      
    }


		.inmidpanel
		{
      background-color:white;
			color:#FD9653;
			width:100%;
			height: auto;
      margin-bottom: 2px;
			border:1px solid #FD9653;
			border-radius:4px;
			float: bottom; 

		}

		table{
			color:#FD9653;
			font-family: courier;
	
		}

		  .godiv{
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
        margin-bottom: 5%;

		}

		.menuname
		{
			color:#FD9653;
			font-family: courier;
			text-align: center;
			font-weight: bold;
		}

		hr{
			color: #FD9653;
			border: 2px solid #FD9653;
      border-radius: 50%;
      margin-top: 0px;
      margin:10px;
    }
    
    hr.hr1{
      color: #FD9653;
      border: 1px solid #FD9653;
      border-radius: 0%;
    }

    hr.hr2{
      margin-top: 42%;
      color: #FD9653;
      border: 1px solid #FD9653;
      border-radius: 0%;
    }		


    .cancelbtn{
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
      margin-left: 2%;
      margin-bottom: 5%;
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
var cnt =1;
var totalprice=0;
function orderFunction(v6,v7,id,varinc) {
	
	
	var menu = document.getElementById(v6).innerHTML;
	var price = document.getElementById(v7).innerHTML;

	var new_item = document.createElement('p');
	new_item.setAttribute("class", "orderitem");
	new_item.setAttribute("id", cnt + 'item');
	new_item.innerHTML = menu;
  
  	var new_price = document.createElement('p');
	new_price.setAttribute("class", "orderamount");
	new_price.setAttribute("id", cnt+'price');
  totalprice=totalprice+price;
	new_price.innerHTML = price;
  var p5=document.getElementById('subtotalorderprice').innerHTML;
  p5 = parseInt(p5);
  price = parseInt(price);
  p5 = p5 + price;
  
	
	var new_img = document.createElement('img');
	new_img.src="Fav/cancel.png";
	new_img.setAttribute("class", "orderremove");
	new_img.setAttribute("ID",cnt+"+"+'img'+id+"*"+price);
	new_img.setAttribute("onclick", "deletefunction(this)");
  
	document.getElementById("orderdiv").append(new_item);
	document.getElementById("orderdiv").append(new_price);
	document.getElementById("orderdiv").append(new_img);


  document.getElementById("subtotalorderprice").innerHTML= p5;
  document.getElementById("totalorderprice").innerHTML= p5+50;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
   //document.getElementById("delivery").innerHTML = this.responseText;
  }
  };
    xhttp.open("GET", "orderupdate.php?q="+"&w2=" + cnt + "&w3=" + id, true);
    xhttp.send();
  	
  	cnt++;

  	
  	
  }

/*function deletefunction(d){
            var dd =d.getAttribute("ID");
			var fields = dd.split('+');

			var text = fields[0]+'item';
			
			document.getElementById(text).remove();
			var textprice =fields[0]+'price';
			
			document.getElementById(textprice).remove();
			var textimg = d.getAttribute("ID");
			document.getElementById(textimg).remove();
        }
		
		
		*/
		
function deletefunction(d) {
var xhttp = new XMLHttpRequest();
var dd =d.getAttribute("ID");
var fields = dd.split('+');

var text = fields[0]+'item';
var orderid = fields[0];
var fields3 = dd.split('*');
var p5 = fields3[1];
p5 = parseInt(p5);
document.getElementById(text).remove();
var textprice =fields[0]+'price';
var p6=document.getElementById('subtotalorderprice').innerHTML;
p6  = parseInt(p6);
p5 =  p6- p5;
document.getElementById('subtotalorderprice').innerHTML= p5;
document.getElementById('totalorderprice').innerHTML = p5+50;
document.getElementById(textprice).remove();
var textimg = d.getAttribute("ID");
document.getElementById(textimg).remove();
 xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
 //document.getElementById("delivery").innerHTML = this.responseText;
}
};
  xhttp.open("GET", "deleteorder.php?q="+"&w2=" + orderid, true);
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

  		<div class="leftpanel">
  <center>
  <table>
    <b><p>Category</p></b>
    <hr>
  	<tr>
  	  <td><input type="checkbox" name="all" checked="checked"><b>All</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="mealdeal"><b>Meal deal</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="chicken"><b>Chicken</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="mutton"><b>Mutton</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="burger"><b>Burger</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="snack"><b>Snacks</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="familypack"><b>Family Pack</b></td>
  	</tr>

  	<tr>
  	  <td><input type="checkbox" name="drinks"><b>Drinks</b></td>
  	</tr>

  	<tr>
  	  <td><input class="godiv" type="submit" name="go" value="GO"></td>
  	</tr>
  </table>
  </center>

  </div>
  
  <div>
    <h4 class="namebar"><b><?php echo $restname ?></b></h4>
  </div>
  
  <div class="midpanel">
  <?php for($p2 = 0;$p2 < $manulist;$p2++) 
  {?>
  
  	<div class="inmidpanel">
	
  		<h5 class="menuname"><?php echo $aladarestname[$p2];?></h5>
  		<hr>
		<?php for($k=0;$k < $outputnumofitem[$p2];$k++) {?>
      <p class="menuitem" id=<?php echo $v5?>><?php echo $outputitem[$j];?></p>
      <p class="menuprice" id=<?php echo $v6?>><?php echo $outputprice[$j];?></p>
      <input type="button" name="add" value="Add" class="menuadd" onclick="orderFunction(<?php echo $v5?>,<?php echo $v6?>,<?php echo $outputid[$j]?>,<?php echo $inc?>)">
		<?php $j++;$v5++;$v6--;} ?>
	  
  </div>
	<?php ;} ?>
  </div>
  

  <form>
  <div class="orderpanel">
     <center><p><b>Your order</p></b></center>
      <hr>
	  <div class="orderlist" id ="orderdiv">
	  <p class="orderitem"></p>
	  <P class="orderamount"></p>
	  <img  class="orderremove" onclick="deletefunction()"></img>
	  </div>
	  
	  <div class="orderpanel2">
      

      <h5 class="orderitem2">Subtotal</h5>
      <h5 class="orderamount" id = "subtotalorderprice">0</h5>

      <p class="orderitem2" id ="delivery">Delivery Fee</p>
      <p class="orderamount">50.00</p>
      <p class="orderitem2">Vat(15%)</p>
      <p class="orderamount">0.00</p>
      
      <hr class="hr2">

      <h5 class="orderitem2">Total</h5>
      <h5 class="orderamount" id = "totalorderprice">0.00</h5>
	
      
       <a href="orderwithaddress.php"><input type="button" name="order" value="Order" class="orderbtn"></a>
	   </div>

  </div>
  </form>

		
	</body>

</html>