	
 	
function validateRegister()
	{
		//checking the first name are not blank
		
		if(document.getElementById('firstName').value == "")
			{
				alert('First Name cannot be blank');
				return false;
			
			}
			
			//checking the last name are not blank
		
		if(document.getElementById('lastName').value == "")
			{
				alert('Last Name cannot be blank');
				return false;
			
			}
		
		//checking the email are not blank
		
		
			var x=document.forms["frmRegister"]["email1"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
			  {
			  alert("Not a valid e-mail address");
			  return false;
			  }
			
			
		//checking the password are not blank
		
		if(document.getElementById('cpassword').value == "")
			{
				alert('Password cannot left blank');
				return false;
			
			}
			
			//checking the conform password are not blank
			
		if(document.getElementById('confirmPassword').value == "")
			{
				alert('Confirm Password cannot left blank');
				return false;
			
			}
		var pass = document.getElementById('cpassword').value; 
		var cpass = document.getElementById('confirmPassword').value;
		
		
		if( pass != cpass )
			{
				alert('Password do not mached');
				return false;
			
			}
			
			//checking the contact are not blank
			
		if( document.frmRegister.contact.value == "" ||
           isNaN( document.frmRegister.contact.value ) ||
           document.frmRegister.contact.value.length != 10 )
           {
     			alert( "Please provide a contact in the Numeric format." );
     			document.frmRegister.contact.focus() ;
     			return false;
   		   }
			

			
			//checking the country are not blank
			
			if(document.getElementById('country').value == "--Select Country--")
			{
				alert('please country select');
				return false;
			
			}
			
			//checking the state are not blank
			
			if(document.getElementById('state').value == "")
			{
				alert('state cannot be blank');
				return false;
			
			}
			
			//checking the adderess are not blank
			
			if(document.getElementById('adderess').value == "")
			{
				alert('adderess cannot be blank');
				return false;
			
			}
			
		
		else
		{
		
			return true;
		}
	}