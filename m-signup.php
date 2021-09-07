<?php
$name1=$_POST['name'];
$roll=$_POST['rollno'];
$mail=$_POST['s_email'];
$pwd=$_POST['s_password1'];
$cpwd=$_POST['s_password2'];
$phone=$_POST['mobileno'];
$dob=$_POST['dob'];
$cname=$_POST['s_vaccines'];

echo "<lable>Name of the user :</lable>".$name1."<br>";
echo "<lable>Roll NO :</lable>".$roll."<br>";
echo "<lable>Email :</lable>".$mail."<br>";
echo "<lable>Pasword :</lable>".$pwd."<br>";
echo "<lable>C_Pasword :</lable>".$cpwd."<br>";
echo "<lable>Phone no :</lable>".$phone."<br>";
echo "<lable>dob :</lable>".$dob."<br>";
echo "<lable>College name :</lable>".$cname."<br>";


?>