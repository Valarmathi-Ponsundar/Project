<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="mecproject";#Changing lines give database name

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


session_start();
 $error="";
if(isset($_POST['submit']))
{
	if(empty($_POST['email']) || empty($_POST['password']))
	{
		$error="Both the fields required";
	}
	else
	{
		$mail=$_POST['email'];
		$pwd=$_POST['password'];
		
		$mail=stripcslashes($mail);
		$pwd=stripcslashes($pwd);

		$mail= mysqli_real_escape_string($conn, $mail);
		$pwd= mysqli_real_escape_string($conn, $pwd);
		
        $sql="SELECT id FROM user where email='$mail' and pwd='$pwd'";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1)
        {
        	$_SESSION['email']= $mail;
        	header("location:m-home.php");
        	#include 'm-home.php';
        }
        else
        {	
        	#header("location:m-login.php");
        	include 'm-login.php';
        	echo $error='<script> alert("Incorrect mail id and password") </script>';
        	
        	

        	
        }

	}
}
?>











