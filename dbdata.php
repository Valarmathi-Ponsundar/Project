<?php

#syntax
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="mecproject";#Changing lines give database name

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

#user define values
$name1=$_POST['name'];
$roll=$_POST['rollno'];
$mail=$_POST['s_email'];
$pwd=$_POST['s_password1'];
$cpwd=$_POST['s_password2'];
$phone=$_POST['mobileno'];
$dob=$_POST['dob'];
$cname=$_POST['s_vaccines'];


$sql2 = "INSERT INTO user (name,rollno,email,pwd,cpwd,mobile,dob,cname)
VALUES ('$name1', '$roll','$mail','$pwd','cpwd','$phone','$dob','$cname')";

#syntax
if (mysqli_query($conn, $sql2)) {
  #echo "Table is inserted successfully";
	include 'm-login.php';
	echo $error='<script> alert("Your datas are recorded successfully") </script>';

} else {
  echo "Error creating table: " . mysqli_error($conn);
}
?>