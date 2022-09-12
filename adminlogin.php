<?php
 if(isset($_REQUEST['submit']))

{
	include_once "dbcon.php";

$email=$_POST['adminemail'];
 
$pass=$_POST['adminpass'];
 
 

$qu="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
 
$run=mysqli_query($con,$qu);

$row=mysqli_num_rows($run);
if ($row==1) 
{
	while ($data=mysqli_fetch_array($run))
	 {
		$_SESSION['name']=$data['name'];			
	}
	 $_SESSION['email']= $email;
	header("location:adminpanel.php");
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
}
  ?>