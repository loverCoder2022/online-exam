
 

<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>online test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 <style>
 tr,th{
 	padding-left: 200px;
 }
</style>

</head>
<body>


<?php
session_start();
include_once('dbcon.php');
 $answer=implode('',$_POST );
 ini_set("display_errors", 0);
 
$right=0;
$wrong=0;
$no_answer=0;
 
  $q3="SELECT qid,c_ans FROM question WHERE tid='$_SESSION[tid]'";
 

	    $run=mysqli_query($con,$q3);

	   $row=mysqli_num_rows($run);
	   

    while ($data=mysqli_fetch_array($run))
    {
    	   
    	 
    	if ($data['c_ans']==$_POST[$data['qid']]) {

    		 $right++;
    	}
    	elseif ($_POST[$data['qid']]=='') {
    		 $no_answer++;
    	}
    	else
    	{
    		$wrong++;
    	}

    	 
       
    }
    
    $total=$right+$no_answer+$wrong;
   $total_mark=4*$total;
   $mark=4*$right;
      
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark row text-center fixed-top" style="font-weight: bold;">
	
 
	<div class=" col-4 col-sm-4 col-lg-3 col-md-3 " >
		<a href="#" class="navbar-brand logo" style="float: left;">Online test</a>
	</div>
	<div class="col-4 col-sm-4 col-lg-6 col-md-6" style="font-size: 28px; color: red;">
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

 
<div class="jumbotron " style="background-color: #696969;">
	 <h1 class="text-center " style="font-size: 45px; color: #fff;"><span>Your result <button type="button" class="btn btn-lg btn-primary" id="print" style="float: right;">Print</button>
	 	<button type="button" class="btn btn-lg btn-danger" id="close" style="float: left;">Close</button></span></h1>
</div>
<div class= " container stable-responsive" style="margin-top: 50px;">
  <table class="table table-striped" style="font-size: 30px; font-weight: bold;">
      
       <tbody class="text-danger">
         <tr >
           <td>Total no of questions.</td>
           <td><?php echo $total;   ?></td>
         </tr>
         <tr>
           <td>Total marks</td>
           <td><?php echo $total_mark;  ?></td>
         </tr>
         <tr>
           <td>your right question </td>
           <td><?php echo $right;    ?></td>
         </tr>
         <tr>
           <td>your  wrong question </td>
           <td><?php echo $wrong;   ?></td>
         </tr>
         <tr>
           <td>your  non attemped question </td>
           <td><?php echo  $no_answer;    ?></td>
         </tr>
         <tr>
           <td>your   marks </td>
           <td><?php echo $mark    ?></td>
         </tr>
         <tr>
           <td>your   persentage </td>
           <td><?php echo ($mark*100)/$total_mark."%" ?></td>
         </tr>

       </tbody>
     
  </table>
</div>
  
	<script type="text/javascript">
		$(document).ready(function(){
          $('#print').click(function(){
          	window.print();
          });
          $('#close').click(function(){
          	 Close();
          });
		});
	</script>
</body>
</html>
<?php  
 header('Refresh: 5;url=index.php');
 ?>