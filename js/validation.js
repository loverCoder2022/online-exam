 $(document).ready(function(){
	$('#userform').submit(function(){
		var user=$('#user').val();
		 
		 
		 
		var email=$('#email').val();
		var mobile=$('#mobile').val();
		var college=$('#college').val();
		var pass=$('#pass').val();
		var cpass=$('#cpass').val();
		//user name validation
		if  (user=="") 
		{
			$('#user').focus();
		      
			$('#emptyfield').html(" <b>please fill user name</b>");
			return false;
			
		}
	  if  (user.length<3) 
		{
			$('#user').focus();
		      
			$('#emptyfield').html(" <b>name length must be 2 charcter greater</b>");
			return false;
			
		}
		 
	   if (college=="") 
	   {
	   	$('#college').focus();
	   	$('#emptyfield').html(" <b>please fill college name</b>");
	   	return  false

	   }
		   if (gender==0) 
	   {
	   	$('#gender').focus();
	   	$('#emptyfield').html(" <b>please select gender/b>");
	   	return  false

	   }
		 
		 
			  if (email=="") 
		{
			$('#email').focus();
		    
			$('#emptyfield').html(" please fill  email ");
			return false;
			
		}
		  var pattern= /^[a-zA-Z_]{3,15}+[0-9]$/;
		  if (!pattern.test(email)) 
		  {
		  	$('#emptyfield').html(" email not valid format");
		  

		  }
			  if (mobile==" ") 
		{
			$('#mobile').focus();
		    
			$('#emptyfield').html(" please fill mobile number");
			return false;
			
		} 
		else
		{
		var pat=/^[6789][0-9]{10}&/;
			  if (!(pat.test(mobile))) 
		{
			$('#mobile').focus();
		    
			$('#emptyfield').html(" please fill valid mobile number");
			return false;
			
		}
	}
		 
		// password validation
		  if (pass=="") 
		{
			$('#pass').focus();
		    
			$('#emptyfield').html(" please fill field required");
			return false;
			
		}
		  if (cpass=="") 
		{
			$('#cpass').focus();
		    
			$('#emptyfield').html(" please fill field required");
			return false;
			
		}
			 if (pass!=cpass ) 
		{
			$('#cpass').focus();
		    
			$('#emptyfield').html(" password no mach");
		 
			return false;
			
		}

		return true;
	});
// function for only number input	 
$('#mobile').keypress(function(event)
{
   var char= event.which;
  
   if (char>=48 && char<=57)
   {
        return true;

   }
   else{
   return false;
}
});
// function accept only alphapets
$('#user,#college').keypress(function(event)
{
var char= event.which;
  
   if (((char>64 && char<91)||char==32)||(char==32 ||(char>96 && char<123) ))
   {
        return true;

   }
 else
 {
 	  return false;
 }
});

});