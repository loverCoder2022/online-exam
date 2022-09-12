<?php session_start();
/*if (!isset($_SESSION['email '])) {
 header("location:index.php");
}*/
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>online test</title>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 
<title>Online test </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 <style type="text/css">
 	  
 	*{
 		margin: 0px;
 		padding: 0px;
 		overflow: hidden;
 	}
  body{
    background-color: #A9A9A9;
  }
 	div{
 		width: 100%;
 	}
  .table th{
    padding: 60px;
  }
   
 .table{
  margin-left: 35px;
 }

 </style>

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
<br>
<br>
<div class="container" style="background-color: #fff;">
  <div class="row">
    <table class="table table-striped table-responsive " >
      <thead>
        <th>S.n</th>
        <th>Subject</th>
        <th>Total qustion</th>
        <th>Marks</th>
        <th>Time</th>
        <th>Action</th>
      </thead>
      <tbody>
        <?php
        include_once('dbcon.php');
        $count=1;
        $q1="SELECT * FROM test";
        $run=mysqli_query($con,$q1);
        if ($run) {
          while ($data=mysqli_fetch_array($run)) {

            ?>
            <tr class="text-center">
            <td><?php echo $count; ?></td>
            <td><?php echo $data["subject"]; ?></td>
            <td><?php echo $data["tquestion"]; ?></td>
            <td><?php echo $data["tnumber"]; ?></td>
            <td><?php echo $data["time"]; ?></td>
            <td><a class="btn btn-success btn-md" name="submit" id="submit" href="qu.php?tid=<?php echo $data["tid"];?>">start</a></td>
            </tr>
            <?php
             $count++;
          }
          }  
        ?>
      </tbody>
    </table>
    
  </div>
</div>
<!-- ######################footer###########################-->
<footer> 
  <div class=" container-fluid fixed-bottom bg-dark"> 
    <div class="row text-center ">
      <div class="col-lg-3 col-md-3 col-sm-3 col-6">
        <a href="#" class="btn btn-primary ">Home</a>
      </div>
      <div class="  col-md-3 col-sm-3 col-6">
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#adminlogin">History</a>
      </div>
      <div class="  col-md-3 col-sm-3 col-6">
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#developer">Ranking</a>
      </div>
      <div class="  col-md-3 col-sm-3 col-6">
        <a href="#" class="btn btn-info">feedbak</a>
      </div>
    </div> 
  </div>
 </footer>
	
    
 
 </body>
</html>