<?php
  session_start();
  $flag=0;
  if(!is_null ($_SESSION["email"]))
  {
	  $flag=1;
  }
  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides1 {display:none}
.mySlides2 {display:none}
.mySlides3 {display:none}
.mySlides4 {display:none}

/* Slideshow container */
.slideshow-container1 {
  max-width: 100%;
  max-height: 200px;
  position: relative;
  margin: 0;

}
.slideshow-container2 {
  max-width: 100%;
  max-height: 200px;
  position: relative;
  margin: 0;

}

.slideshow-container3 {
  max-width: 100%;
  max-height: 200px;
  position: relative;
  margin: 0;

}

.slideshow-container4 {
  max-width: 100%;
  max-height: 200px;
  position: relative;
  margin: 0;

}

.imgslide{
  width: 25%;
  height: 220px;
  position: relative;
  margin: 0;
  float: left;
  border:2px solid #FD9653;

}
.fixedimg{
  width:100%;
  height:350px;
  border:2px solid #FD9653;
}

.searchdiv{
   width: 800px;
   height: 60px;
   background-color:#FD9653; 
   border-radius: 10px;
   text-align: left;

}

.godiv{
   width: 50px;
   height: 25px;
   background-color:#ffffff; 
   border-radius: 10px;
   float: left;
   font-family: courier;
   color: #FD9653;
   margin-left: 50px;
   margin-top: 18px; 
   cursor: pointer;
   font-weight: bold;
   border:2px solid #ffffff;

}

.searchtxt{
  margin-left: 20px;
  margin-top: 20px;  
  font-family: courier;
  color: #ffffff;
  text-align: left;
  float: left;
  font-weight: bold;


}

select{
margin-left: 30px;
margin-top: 18px;   
width: 200px;
border: 2px solid #e6e6e6;
font-family: courier;
font-size: 15px;
float: left;
color:#FD9653;
font-weight: bold;
cursor: pointer;
}

.headerimg{
  margin-left: 10px;
  cursor:pointer;
  width:40px;
  height:20px;
}

.headerbtn{
   width: 100px;
   height: 30px;
   float: right;
   background-color: #FD9653;
   border:2px solid #FD9653;
   border-radius: 5px;
   font-family: courier;
   font-weight: bold;
   color: #ffffff;
   cursor: pointer; 
}

.headerhelp{
   width: 120px;
   height: 30px;
   float: right;
   font-family: courier;
   color: #FD9653;
   margin-top: 0px;
   margin-bottom: 20px;
   margin-right: 30px;

}

.headerqoutes{
   width: 400px;
   height: 30px;
   float: right;
   font-family: Comic Sans MS;
   color: #FD9653;
   margin-top: 0px;
   margin-bottom: 20px;
   margin-right: 170px;

}

hr { 
    border: 3px solid #FD9653;
    border-radius: 50%;
}

.body {
background-color: #e6e6e6;

      }

.div1 {
margin: 5px auto;
width: 400px;
height: 500px;
margin-top: 150px;
background-color: #ffffff;
}

.nametag{
  width:25%;
  color: #FD9653;
  text-align: center;
  font-family: courier;
  cursor: pointer;
  float:left;
  margin-bottom: 10px;

}

.header {
 background-color: #ffffff;
 padding: 20px;
}


/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #e6e6e6;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #e6e6e6;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body class="body">
  <div class="header">
    <a href="Home.php">
    <img src="ATS1.png" class="headerimg">
	
    </a>
	<?php if($flag==1)
	{?>
	<input type="button" name="Signout" value="Sign out" class="headerbtn">
	<?php }
	else 
	{?>
	<a href="Login.php">
    <input type="button" name="signin" value="Sign in" class="headerbtn">
	<?php }?>
    <p class="headerhelp"><b>Need Help?</b> Call <b>1234567</b></p>
    <p class="headerqoutes">Good Food Good Mood</p>
  </div >

  <div>
  <img src="ATSfood.jpg" class="fixedimg">
  <center>
    <div class="searchdiv">
     <form >
         <p class="searchtxt">Select your Location </p>
         <select name="City">
              <option value="dhk">Dhaka</option>
              <option value="ctg">Chittagong</option>
              <option value="raj">Rajshahi</option>
              <option value="khul">Khulna</option>
           
         </select>

         <select name="Area">
            <option value="ctg">Adabor</option>
            <option value="khul">Banani</option>
            <option value="raj">Badda</option>
            <option value="khul">Gulshan1</option>
            <option value="khul">Gulshan2</option>
         </select>
        
         <input type="submit" name="go" value="GO" class="godiv">

      </form>
    </div>
  </center>
</div>

<hr>

<!--fastfood slide-->
<div class="slideshow-container1" >

<div class="mySlides1 fade">
  <img class="imgslide" src="slidefast/food1.jpg">
</div>

<div class="mySlides1 fade">
  <img class="imgslide" src="slidefast/food2.jpg">
</div>

<div class="mySlides1 fade">
  <img class="imgslide" src="slidefast/food3.jpg">
</div>

<div class="mySlides1 fade">
  <img class="imgslide" src="slidefast/food4.jpg">
</div>

<div class="mySlides1 fade">
  <img class="imgslide" src="slidefast/food5.jpg">
</div>
</div>

<!--coffee slide-->
<div class="slideshow-container2">

<div class="mySlides2 fade">
  <img class="imgslide" src="slidecof/food1.jpg">
</div>

<div class="mySlides2 fade">
  <img class="imgslide" src="slidecof/food2.jpg">
</div>

<div class="mySlides2 fade">
  <img class="imgslide" src="slidecof/food3.jpg">
</div>

<div class="mySlides2 fade">
  <img class="imgslide" src="slidecof/food4.jpg">
</div>

<div class="mySlides2 fade">
  <img class="imgslide" src="slidecof/food5.jpg">
</div>

</div>


<!--indian food slide-->
<div class="slideshow-container3">

<div class="mySlides3 fade">
  <img class="imgslide" src="slideind/food1.jpg">
</div>

<div class="mySlides3 fade">
  <img class="imgslide" src="slideind/food2.jpg">
</div>

<div class="mySlides3 fade">
  <img class="imgslide" src="slideind/food3.jpg">
</div>

<div class="mySlides3 fade">
  <img class="imgslide" src="slideind/food4.jpg">
</div>

<div class="mySlides3 fade">
  <img class="imgslide" src="slideind/food5.jpg">
</div>

</div>


<!--thaifood slide-->
<div class="slideshow-container4">

<div class="mySlides4 fade">
  <img class="imgslide" src="slidethai/food1.jpg">
</div>

<div class="mySlides4 fade">
  <img class="imgslide" src="slidethai/food2.jpg">
</div>

<div class="mySlides4 fade">
  <img class="imgslide" src="slidethai/food3.jpg">
</div>

<div class="mySlides4 fade">
  <img class="imgslide" src="slidethai/food4.jpg">
</div>

<div class="mySlides4 fade">
  <img class="imgslide" src="slidethai/food5.jpg">
</div>

</div>



<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!--nametag-->
<a href="category.php">
<div class="nametag">
  <b>Fast food</b>
</div>
</a>

<!--nametag-->
<a href="category.php">
<div class="nametag">
  <b>Coffee</b>
</div>
</a>

<!--nametag-->
<a href="category.php">
<div class="nametag">
  <b>Indian</b>
</div>
</a>

<!--nametag-->
<a href="category.php">
<div class="nametag">
  <b>Thai</b>
</div>
</a>


<script>
var slideIndex = 0;
showSlides();



function showSlides() {
    var i;
    var slides1 = document.getElementsByClassName("mySlides1");
    var slides2 = document.getElementsByClassName("mySlides2");
    var slides3 = document.getElementsByClassName("mySlides3");
    var slides4 = document.getElementsByClassName("mySlides4");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides1.length; i++) {
       slides1[i].style.display = "none";  
       slides2[i].style.display = "none"; 
       slides3[i].style.display = "none";  
       slides4[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides1.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
        
    }
    slides1[slideIndex-1].style.display = "block";
    slides2[slideIndex-1].style.display = "block";  
    slides3[slideIndex-1].style.display = "block";
    slides4[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</body>
</html> 
