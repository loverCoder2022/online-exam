<?php   
$output='';
if (isset($_REQUEST['question'])) 
{ 
         $tid=$_REQUEST['question'];
             
	include_once "dbcon.php";
	 
	     $run=mysqli_query($con,"SELECT * FROM question WHERE tid='$tid' ORDER BY RAND() LIMIT 1  ");
	     $row=mysqli_num_rows($run);
	           
	    $output.=' 
           <form action="answer.php" method="post">
        <table class="table table-striped table-borderd">';
        while($data=mysqli_fetch_assoc($run)) 
        {
        	 $output.='
                <tr>
                <thead>
                <th>'.$data["qu"].'</th>
                </thead>
                </tr>
                
                <tbody>
                 <tr><td> <input type="radio" name="'.$data["qid"].'">'.$data["ans1"].'</td></tr>
               <tr><td> <input type="radio" name="'.$data["qid"].'">'.$data["ans2"].'</td></tr>
                <tr><td> <input type="radio" name="'.$data["qid"].'">'.$data["ans3"].'</td></tr>
                <tr> <td> <input type="radio" name="'.$data["qid"].'">'.$data["ans4"].'</td></tr>
                </tbody>
               
                

        	 ';
        }
        $output.='</form></table>';
        
  
//$total_page= ceil($total_records/$record_per_page);
  
echo $output;
}

?>