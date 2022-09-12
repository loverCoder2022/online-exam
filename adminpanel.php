<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>online test</title>
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
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark row " style="font-weight: bold;">
	
 
	<div class=" col-4 col-sm-4 col-lg-6 col-md-6 " >
		<a href="" class="navbar-brand logo">Online test</a>
	</div>
	<div class="col-4 col-sm-4 col-lg-3 col-md-3" style="font-size: 28px; color: red;">
	 <?php 
    if (isset($_SESSION['email'])) {
       ?>
       <span class="fa fa-user" style="">&nbsp;&nbsp;Hello, <?php echo $_SESSION['name']; ?></span>
       <?php
    }
	 ?>
		
	</div>
	<div class="col-4 col-sm-4 col-lg-3 col-md-3">
	<a href="logout.php" class="btn btn-primary btn-md" style="float: right;">Logout</a>	
	</div>
</nav>
</body>
</html>