
//checking login form
	function validateLogin()
	{
		//checking the textboxes are not blank
		if((document.getElementById('email').value == "")|| (document.getElementById('email').value == "Username"))
			{
				alert('Please enter valid email id');
				return false;
			
			}
		//checking the textboxes are not blank
		if((document.getElementById('password').value == "")|| (document.getElementById('password').value == "Password"))
			{
				alert('Please enter password ');
				return false;
			
			}
		else
		{
		
			return true;
		}
	}
