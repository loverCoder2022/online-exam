<?php   session_start(); ?>
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
 

 	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/validation.js"></script>

 </head>
 <body>
 	<nav class="  navbar-expend-lg navbar-dark bg-dark "  style="font-weight: bold;">
 	  <div class="row">
 	  	<div class="col-6">
        <a href=""  class="navbar-brand logo" style="padding: 10px 0px 0px 15px;">Online Test</a >
 	   </div>
 	  	 <div class="col-6">
 	  	 	<a href="" class="btn btn-primary  pull-right btn-md  " data-toggle="modal" data-target="#login" id="userlogin" style="margin-right:  20px; "> login</a>
 	  	 </div>
 	  	
 	  </div>	
 	</nav>
 	<div class="bg container-fluid">
 		<div class="row">

 			<div class="col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
 			<div class=" card col-lg-4 col-md-5 col-sm-7 col-12 " style="margin-top: 20px; ">
 				<!--################ sign in##############-->
 				<div class="card-title text-center text-danger">
 					<h2 class="">Sign Up</h2>
 				</div>
 				<div class="card-body">
 					<form class="form-horizontal " role="form" action="signin.php" method="post" id="userform" >
 						<div class="form-group">
 						
 						<input type="text" name="user"   class="form-control" placeholder="Enter your name" autocomplete="off" id="user"  >
 					</div>
 					<div class="form-group">
 							<input type="text" name="college" placeholder="Enteur your college name" class="form-control " autocomplete="off" id="college" >

 						</div>
 						<div class="form-group">
 					
 							<select id="gender"  class="form-control" autocomplete="off" name="gender">
 								<option selected="on" value="0">Select Gender</option>
 								<option value="m">
 								Male	
 								</option>
 								<option value="f">Female</option>
 							</select>
                              </div>
                              <div class="form-group">
                              	<input type="text" name="email" class="form-control" placeholder="Enter your emial" autocomplete="off" id="email">
                              </div>
                              <div class="form-group">
                              	<input type="text" name="mobile" class="form-control" placeholder="Enter your Mobile number" autocomplete="off" id="mobile" >
                              </div>
                               <div class="form-group">
                              	<input type="password" name="password" class="form-control" placeholder="Enter your password" autocomplete="off" id="pass">
                              </div>
                               <div class="form-group">
                              	<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" autocomplete="off" id="cpass">
                              </div>
                           
                              <div class="form-group text-center   ">
                              	<input type="submit" name="signin" class="form-control  btn-primary  "  value="Sign up"  / >
                                
                                       <span class="text-danger text-center" id="emptyfield"><?php 
                                       if (isset($_SESSION['msg'])) {
                                        
                                       
                                       echo $_SESSION['msg'];
                                       session_destroy();} ?></span>
                              </div>
 					</form>
 				</div>
 			</div>
 			<div class="col-lg-7  col-md-6 col-sm-4">
        
      </div>
 		</div>
 	</div>

 	<footer> 
 	<div class=" container-fluid "> 
 		<div class="row text-center ">
 			<div class="col-lg-3 col-md-3 col-sm-3 col-6">
 				<a href="#" class="btn btn-primary ">About us</a>
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3 col- 6">
 				<a href="#" class="btn btn-success" data-toggle="modal" data-target="#adminlogin">Admin login</a>
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3 col-6">
 				<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#developer">Devloper</a>
 			</div>
 			<div class="col-lg-3 col-md-3 col-sm-3 col-6">
 				<a href="#" class="btn btn-info">feedback</a>
 			</div>
 		</div> 
 	</div>
 </footer>
 <!--############### start modal for developer##################-->
 <div class="modal fade  " id="developer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Developer</h4>
        <button type="button" class="close" data-dismiss="modal"> &times;  </button>
        
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-lg-4 col-12 col-sm-12">
		 <img src="image/sagar.jpg" width=100 height=100 alt="sagar" class="img  img-responsive border border-circle">
		 </div>
		 <div class="col-lg-8 col-12 col-sm-12">
      <h3 style="font-family:'typo'; color: red;">Sagar kumar</h3>
    <h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9520492362</h4>
    <h4 style="font-family:'typo' ">sagarbhuiyar2017@gmail.com</h4>
    <h4 style="font-family:'typo' ">Govt. polytechnic Bijnor,Bijnor </h4></div></div>
    </p>
      </div>
    <div class="modal-footer">
      <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 <!--############### start modal for Admin login##################-->
 <div class="modal fade  " id="adminlogin">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title text-center">Admin Login</h4>
        <button type="button" class="close" data-dismiss="modal"> &times;  </button>
       
      </div>
    
      <div class="modal-body">
        
     <form class="form-horizontal" action="adminlogin.php" method="post">
       <div class="form-group" >
         <input type="text" name="adminemail" placeholder="Enter Admin  email" class="form-control">
       </div>
       <div class="form-group">
         <input type="password" name="adminpass" placeholder="Enter Password" class="form-control">
       </div>
        
        
       
        
   
   </div>
  
    <div class="modal-footer">
       <input type="submit" name="submit" value="adminlogin" class=" btn btn-primary " style="margin-right: auto;" >
      <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

 <!--############### start modal for user login ##################-->
 <div class="modal fade  " id="login">
  <div class="modal-dialog" style="font-weight: bold;">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title text-center"> Login</h4>
        <button type="button" class="close" data-dismiss="modal"> &times;  </button>
       
      </div>
    
      <div class="modal-body">
        
     <form class="form-horizontal" action="login.php" method="post" role="form">
       <div class="form-group" >
         <input type="email" name="loginemail" placeholder="Enter email id" class="form-control" required>
       </div>
       <div class="form-group">
         <input type="password" name="loginpass" placeholder="Enter Password" class="form-control" required>
       </div>
        
        
       
        
   
   </div>
  
    <div class="modal-footer">
       <input type="submit" name="login" value="login" class=" btn btn-primary " style="margin-right: auto;" >
      <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>

      
      
      </div>
      <a href="forget_password.php" style="margin:0px auto;">Forget Password?</a>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




 </body>
 </html>