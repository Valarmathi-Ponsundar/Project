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
$user_check=$_SESSION['email'];
$ses_sql=mysqli_query($conn, "SELECT name FROM user WHERE email='$user_check'");
$row= mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$login_user= $row['name'];

?>