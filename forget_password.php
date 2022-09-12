<!DOCTYPE html>
<html>
<head>
	<title>Online test</title>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 
<title>Online test </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css">
    <!--FONT-->
      <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/css/mdb.min.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/style.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
    
<!-- JQuery -->

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.0/js/mdb.min.js"></script>
<style type="text/css">
	body{
		background-image: url("image/cb.jpg") ;
		background-repeat: no-repeat;
	  background-attachment: fixed;


	}
	@media (min-width:576px)
	{
	.fa{
		position: absolute;  
		top: 78px;
		left: 450px;
		cursor: pointer;
		font-size: 25px;
	}

}
@media (max-width: 575px)
{
	.fa
	{
		display: none;
	}
}
</style>

</head>
</head>
<body>
<nav class="  navbar-expend-lg navbar-dark bg-dark fixed-top"  style="font-weight: bold;">
 	  <div class="row">
 	  	<div class="col-6">
        <a href=""  class="navbar-brand logo" style="padding: 10px 0px 0px 15px;">Online Test</a >
 	   </div>
 	  	 <div class="col-6">
 	  	 	<a href="index.php" class="btn btn-primary  pull-right btn-md  "  style="margin-right:  20px; "> Home</a>
 	  	 </div>
 	  	
 	  </div>	
 	</nav>
 	<br><br>
 	
 		<div class="modal-dialog"  >
 			<div class="modal-content" style="font-weight: bold;">
 				<div class="modal-header">
 					<div class="modal-title">
 						<h3>Forget password</h3>
 					</div>
 					</div>
 					<div class="modal-body">
 						<form class=" form form-horizontal" action=" " method="post" role="form" >
 							<div class="form-group">
 								<input type="email" name = "email" placeholder="Enter Your E-mail" class="form-control" required>
 							</div>
 							<div class="form-group">
 								<input type="password" name="pass" placeholder="Enter Your password" class="form-control" required id="pass">
 								<span class="fa fa-eye" id="eye" onclick="togglePass()"></span>
 							</div>
 						
 						<div class="form-group">
 								<input type="password" name="cpass" placeholder="confirm password" class="form-control" required id="cpass">
 							</div>
 					</div>
 				<div class="modal-footer">
 					<input type="submit" name="forget" class="btn btn-primary" value="update" style="margin:0px auto;" >
 				</div>
 				</form>
 			</div>
 		</div>
 	   <script type="text/javascript">
     var pass =document.getElementById('pass');
var eye =document.getElementById('eye');

function togglePass()
{
  eye.style.color="red";
  var pass =document.getElementById('pass');
   var cpass =document.getElementById('cpass');
  
   if ((pass.type === "password")&&(cpass.type === "password")) {
    eye.style.color="red";
        pass.type = "text";
        cpass.type="text";
    } else {
       eye.style.color="black";
        pass.type = "password";
        cpass.type="password"
    }
  }
  $(document).ready(function(){
  	$('form').submit(function(){
  	 var pass =$('#pass').val();
   var cpass =$('#cpass').val();	
 if (pass!=cpass) {
 	alert('your password not match !');
 }

});
  	

  });
   </script> 
 	 
</body>
</html>
<?php

if (isset($_REQUEST['forget'])) {

	include_once "dbcon.php";
	ini_set("display_errors", 0);
	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	 $pass=trim($pass);
	 $pass=md5($pass);
	 $sql="SELECT id,email  FROM user WHERE email='$email' ";

	 	 $run=mysqli_query($con,$sql);
	 	 while ($data=mysqli_fetch_array($run) )
	 	 {
	 	    $id=$data['id'];
	 	    $uemail=$data['email'];
	 	     
	 	 }
     
	 
	 $q="UPDATE user SET password='$pass' WHERE id='$id'";
	 
	 $run=mysqli_query($con,$q);
	 
	 if ($email==$uemail) {
	 	?>
	 	<script type="text/javascript">
	 		alert("your password update successfully update !");
	 		window.open('index.php','_self');
	 	</script>
	 	<?php
	 }
	 else
	 {
	  	?>
	 	<script type="text/javascript">
	 		alert("your email id not correct !");
	 		window.open('forget_password.php','_self');
	 	</script>
	 	<?php	
	 }

}


?>