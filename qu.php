<!DOCTYPE html>
<html>
<head>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>online test</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" id="question_show">
 

</div>

<center><button type="button" class="btn btn-lg btn-danger" id="next">next</button></center>
     <?php if(isset($_REQUEST['tid'])) 
{
	$tid=$_REQUEST['tid'];
	 
}
  ?>
  <center><input type="submit" name="ok" value="submit" id="submit"></center>
<script type="text/javascript">
   
  $(document).ready(function(){
     
  $('#next').on('click',function(){

 
   $.ajax({
          url: 'fetch_question.php',
          type: 'post',
          data:{question:<?php echo $tid ?>},
           
          success: function(data)
          {
             
              $('#question_show').html(data) ;
              

          }
            

  })
     
            
            


        });
       
      
    
});
</script>
</body>
</html>