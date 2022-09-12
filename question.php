
<?php session_start(); 
 //if (!isset($_SESSION['name '])) {
 //header("location:index.php");
//}
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
 <style type="text/css">
 	  
 	*{
 		margin: 0px;
 		padding: 0px;
 		
 	}
  body{
    background-color: #A9A9A9;
    
  }
  input[type=radio]{
 cursor: pointer;
 	 }

 </style>
  

</head>
<body>
<script type="text/javascript">
   
  $(document).ready(function(){
     load_data();
    
       function load_data(question)
       {
           
        $.ajax({
          url: 'page.php',
          type: 'post',
          data:{question:question},
           
          success: function(data)
          {
             
              $('#pagination-data').html(data) ;
              

          }
            


        })
       }
        
      $(document).on("click" ,".page_link",function(){
           var page=$(this).attr("id");
           load_data(page);
      }); 
  });
</script>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark row fixed-top " style="font-weight: bold;">
	
 
	<div class=" col-4 col-sm-4 col-lg-6 col-md-6 " >
		<a href="" class="navbar-brand logo">Online test</a>
	</div>
	<div class="col-4 col-sm-4 col-lg-3 col-md-3" style="font-size: 28px; color: red;">
    <div id="timer">
      <span id="time"><script type="text/javascript">var timeleft=2*60;</script></span>
    </div>
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
 
 
<div class="container" style="margin-top: 79px; ">

 
	 
	 		 

	 			 
	 				 <?php
if (isset($_REQUEST['tid'])) 
{
	 $tid=$_REQUEST['tid'];
	 $_SESSION['tid']=$tid;
	  
	 include_once('dbcon.php');
	    $q2="SELECT * FROM question WHERE tid='$tid'";
	    $run=mysqli_query($con,$q2);
         $row=mysqli_num_rows($run);
         $_SESSION['tquestion']=$row;
        
         
	   
    while ($data=mysqli_fetch_array($run))

    {
    	$cans=$data['c_ans'];
      
        $_SESSION['ans']=$cans;

    	$count=1;
      ?>
      <form class="" action="answer.php" method="post">
                 
           
        <table class="table table-borderd  " >
          <tr >
          	<thead class="bg-danger">
            <th><?php echo "Q"." ".$count." "."".$data['qu'];?></th>
            </thead>
          </tr>
          <tbody class="bg-info">
          <?php  if( isset($data['ans1']) || isset($data['ans2']) || isset($data['ans3']) ||isset($data['ans4'])) {
           ?>
             
          <tr>
              <td>&nbsp;a&emsp;<input type="radio" id="r1"value="0" name="<?php echo $data['qid'];?>"/>&emsp;<?php echo $data['ans2'];?> </td>
             
            </tr>
            
            
                      
                       
                <tr>
              
              <td>&nbsp;b&emsp;<input type="radio" id="r2" value="1" name="<?php echo $data['qid'];?>" >&emsp;<?php echo $data['ans2'];?></td>
               </tr>
                 
                               <tr>
              <td>&nbsp;c&emsp;<input type="radio" id="r3" value="2" name="<?php echo $data['qid'];?>">&emsp;<?php echo $data['ans3'];?></td>
              </tr>
               
               
              <tr>
                <td>&nbsp;d&emsp;<input type="radio" id="r4" value="3" name="<?php echo $data['qid'];?>">&emsp;<?php echo $data['ans4'];?></td>
            </tr>
              
             
                 
              <?php 
           
          } 

                else{

              ?>
             
             

               <tr>
               <td>
               <input  type="radio" value="no_attempt" name="<?php echo $data['qid'];?> " style="display:none;" checked= "checked" > 
            
           <?php }?>
       </td>
       </tr>
          </tbody>
        </table>

       
      
      <?php 
    }
}
 ?>
<center> <input type="submit"  value="submit" class="btn btn-success btn-lg "  ></center>
</form>

 <?php
  ?>
</div>
<?php
if (isset($_SESSION['tquestion'])) 
{
	  for($i=1; $i <=$_SESSION['tquestion']; $i++) 
	  { 
	 echo "<div class='' style='display:inline;' >
	 <span><a href=''  class='btn btn-danger bt-md'>$i</a></span>
	 </div>";
	 
}
}

 ?>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$("")
 	});
 </script>
</body>
</html>