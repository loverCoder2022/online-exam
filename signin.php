<?php
session_start();
include_once('dbcon.php');
  
$name=$_POST['user'];
$name=ucwords($name);
$name=trim($name);
 
$college=$_POST['college'];
$college=ucwords($college);
$college=trim($college);
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$email=trim($email);
 
$gender=$_POST['gender'];
 $gender=ucwords($gender);

$password=$_POST['password'];
$password = trim($password);
$password = md5($password);

$sql="SELECT * FROM user WHERE email='$email'";
$run=mysqli_query($con,$sql);
$row=mysqli_num_rows($run);
 
if ($row==1) {
    $_SESSION['msg']="Email allready use?";
    header("location:index.php");
	 }
	 else{
$q="INSERT INTO user( name,college,gender,email,password,mobile) VALUES( '$name','$college','$gender','$email','$password','$mobile')";
$run=mysqli_query($con,$q);
if ($run)
 {
	$_SESSION['email']=$email;
	$_SESSION['name']=$name;

 header('location:test.php');
}
}
 
?>
