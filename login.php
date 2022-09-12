<?php
session_start();
if (isset($_SESSION['email']) )
{
session_destroy();
}
	include_once "dbcon.php";
$email=$_POST['loginemail'];
$email=trim($email);
$pass=$_POST['loginpass'];
$pass=trim($pass);
$pass=md5($pass);

$qu="SELECT * FROM user WHERE email='$email' AND password='$pass'";
$run=mysqli_query($con,$qu);

$row=mysqli_num_rows($run);
if ($row==1) {
	while ($data=mysqli_fetch_array($run))
	 {
		$_SESSION['name']=$data['name'];			
	}
	$_SESSION['email']=$email;
	header("location:test.php");
}
else
{
	?>
	<script>
	alert('Wrong Email and password !');
	 window.open('index.php','_self');
	</script>
	<?php

}

  ?>