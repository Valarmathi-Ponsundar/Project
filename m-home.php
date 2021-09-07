<?php
include 'check.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Web Project</title>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  
body{
  /* When your using background image for this page delete the 18 line code and uncomment the 11 line to 18 line */

 /* background-image: url('mec1.jpg');
   
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 100%;
  height: 100%;
 */
  background-color:#363738;/*#00e68a;*/
  font-family: "Roboto", sans-serif;

}
.nav{
  overflow: hidden;
  background-color:black/*#292F33*/;
}   
.nav a{
  overflow: hidden;
  background-color:black;/*#292F33;*/
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-size: 25px;
  text-decoration: none;
}
.nav a:hover{
  background-color: #ddd;
  color: black;
 
  
}
.nav a.active{
  background-color: #ff0055;
   color: white;
}

.dropdown {
  float: left;
  overflow: hidden;
  
}

.dropdown .dbtn {
  font-size: 22px;  
  border: none;
  padding: 14px 16px;
  background-color: inherit;
  color: white;
  font-size: 25px;
  /*margin-top: 5px;*/
}

.nav a:hover, .dropdown:hover .dbtn {
  background-color: #ddd;
  color: black;
}

.detail {
  display: none;
  position: absolute;
  background-color: #3b3a30;
  min-width: 149px;
  
}

.detail a {
  float: none;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.detail a:hover {
  background-color: #ddd;
  border: 2px solid black;
}

.dropdown:hover .detail {
  display: block; 
}
.section1, .section2{
min-height: 100vh;
display: flex;
text-transform: uppercase;
font-weight: 100;

}

.section1 {
  background-image: url('h3.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: 100% 100%;
  
}

.section3 {
background-color:#363738;
height: 300px;
}

.con1{
  float: left;
  width: 650px;
  font-size: 25px;
  text-align: left;
  color: white;
  overflow: hidden;
  margin-left: 40px;

}
.con2 {
  float: left;
   overflow: hidden;
  width: 400px;
  color: white;
 margin-left: 30px;
  font-size: 25px;
  text-align: center;
}
.con2 i{
  margin-top: 0px;
      font-size: 40px;
}
.section2{
  background-color: #fcf8ed;
}
.about1 img{
  float: left;
  width: 600px;
  height: 500px;
  margin-top: 35px;
  margin-left: 10px;
   
}
.about2{
  float: left;
 
  color: black;
  font-size: 30px;
  width: 600px;
  height: 600px;
  margin-left: 80px;
  margin-top: 50px;

}
.section4{
  overflow: hidden;
  background-color:#fcf8ed;
  height: 600px;
  
}
.why1{
  overflow: hidden;
  float: left;
  /*color: white;*/
  font-size: 30px;
  width: 500px;
  height: 500px;
  margin-left: 40px;
 
}
.why2 img{
  
  float: left;
  width: 700px;
  height: 500px;
  margin-left: 10px;
   
}
</style>
</head>
<body>

<div class="nav" id="nav">

  <p style="float: left;color: white;font-size: 30px;margin: 8px 0px 0px 5px;">Edu-Access</p>
  <a class="act active" href="#Home" style="margin-left: 50px;"><i class="fa fa-home" aria-hidden="true"></i>&ensp;Home</a>
  <a class="act" href="#About Us"><i class="fa fa-address-book" aria-hidden="true"></i>&ensp;About Us</a>
  
  <!--MEC Department and their Details-->
  <div class="dropdown">
    <button class="dbtn" style="font-family: Times-new-roman;"><i class="fa fa-bank" aria-hidden="true"></i>&ensp;MEC&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i> 
    </button>
    <div class="detail">
      <a href="m_cse1.html"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;CSE</a>
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;IT</a>
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;ECE</a>
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;EEE</a>
     
     </div>
  </div> 
  
  <!--MCE Department and their Details-->
  <div class="dropdown">
    <button class="dbtn" style="font-family: Times-new-roman;"><i class="fa fa-bank" aria-hidden="true"></i>&ensp;MCE&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i> 
    </button>
    <div class="detail">
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;CSE</a>
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;IT</a>
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;ECE</a>
      <a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;EEE</a>
     </div>
  </div>
  
  <a class="act" href="#Contact Us"><i class="fa fa-phone" aria-hidden="true"></i>&ensp;Contact Us</a>
  <a href="feedback.html"><i class="fa fa-commenting" aria-hidden="true"></i>&ensp;Feedback</a>
  
  <!--User Name And Log Out-->
   <div class="dropdown">
    <button class="dbtn" style="font-family: Times-new-roman;margin-left: 2px;"><i class="fa fa-user-circle-o" aria-hidden="true">&ensp;Profile</i> 
    </button>
    <div class="detail">
      <p style="color: white;font-size: 15px;">&nbsp;Hello!<em> <?php echo $login_user ?> </em></p>
      <a href="m-login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Log Out</a>
     </div>
  </div>
  
</div>
<section id="Home" class="section1">
 
<!--img src="home.jpg"-->
</section>
<section id="About Us"class="section2">
 

  <div class="about2">
  <b style="color: #c4560c;font-size:70px;"><u>About Us</u></b><br>
  <p>We are here to provide all study material for all engineering departments<br>
  This materials are prepared by the experts for easy to understand and grew up your knowledge.<br> 
You can access all study material for free and you can also downlode for free. </p>
</div>
 <div class="about1">
    <img src="a3.jpg">
  </div>

</section>
<section class="section4">
  <div class="why2">
  <img src="w4.jpg">
</div>
  <div class="why1">
  <h1><u style="color: #c4560c;font-size:70px;text-align: center;">Why US!</u></h1>
  <p>We know there are many difficulties to learn without any proper materials, we develop our materials to overcome these difficulties  across subjects. In this website , we provide studying materials for all engineering subjects for their respective departments. This materials are definitely useful to the students who is in need of proper materials...</p>
</div>

</section>


<section id="Contact Us"class="section3">
  <div class="con1">
    <h2 style="text-align: center;">Follow Us</h2>
    <p>You can shear your expirence in our feedback form.<br>
    You can get immediate responce for our side of your queries.</p>
  </div> 
  <div class="con2">
<h2>Get in Touch</h2>
<p>Join our Social Media list to stay up to date and get notices about our new releases!</p>
<i class="fa fa-linkedin" aria-hidden="true"></i>&emsp;<i class="fa fa-instagram" aria-hidden="true"></i>&emsp;<i class="fa fa-twitter-square" aria-hidden="true"></i>
</div>
</section>
</body>

<script>
var header = document.getElementById("nav");
var btns = header.getElementsByClassName("act");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</html>





























