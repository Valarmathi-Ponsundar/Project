<!DOCTYPE html>
<html>
<head>
	<title>Log in Page</title>
<style>
body{
	/* Background image edit line */
	background-image: url('b3.jpg');
    background-attachment: fixed;
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  

}
.logo{
	float: left;
	width: 600px;
}
.logo p{
	margin-left: 225px;
	color:  #000099;
	margin-top: 0px;
	font-size: 40px;
	
}
img{
	float: left;
	margin-left: 100px;
	margin-top: 0px;
	width: 150px;
}

.form{
	 
	background-color: #d98758;/*#d5e1df;*/
	margin-left: 850px;
	margin-top: 120px;
	width: 400px;
	height: 350px;
	border:none;
	border-radius: 10px;
	opacity: 80%;

	
}
form{
	text-align: center;
	margin-top: 100;
}
input{
	margin-top: 8px;
	width: 370px;
	height: 50px;
	border-radius: 15px;
	
}
input[type=email],[type=password]{
	margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  background: #fdebc3;

}
input[placeholder]{
	padding: 4px 2px;
	font-size: 18px;
}
input[type=submit]{
	background: #034f84;
	color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 18px;
}
input[type=submit]:hover {
  background-color: #3B5998;
}
a{
	text-decoration: none;
}
hr{
	width: 370px;
}
.new{
	margin-top: 15px;
	margin-left: 100px;
	background: #964033;
	color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px; 
  width: 180px;
  height: 50px;
}
.new:hover{
	background: #ff3333;
}
.error{
		
	visibility: hidden;
}
</style>
</head>
<body>
<div class="logo" style="margin-top: 0px;">	<img src="m4.jpg"><h1><p>MUTHAYAMMAL<br>ENGINEERING<br>INSTITUTIONS</p></h1></div>
<div class="form">
	<form method="POST" action="verfi.php">
	<input type="email" name="email" placeholder=" E-Mail" required><br>
	<input type="password" name="password" placeholder="Password" required><br>
	<input type="submit" name="submit" value="Log in"><br><br>
	<a href="#">Forgotten Password?</a><br>
	
	<hr>
</form>
	<button class="new" onclick="location.href='m_signup.html';">Create New Account</button>
</div>
<div class="error"> <?php  echo $error ?> </div>
</body>
</html>