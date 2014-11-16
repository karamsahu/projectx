<aside class="banner-right">
           	  <div class="box consultant">
                    <h2>For Consultant</h2>
                    <form class="clearfix">
                    	<p><input type="radio" name="radio"> <label>Male</label></p>
                        <p><input type="radio" name="radio"> <label>Female</label></p>
                        <p class="no-margin-right"><a class="btn" href="myAccount.php">Register</a></p>
                    </form>
                </div>
                <div class="box member-login">
                
                <script type="text/javascript"> 
				
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
  </script>              
                    <h2>Member Login</h2>
                    <form class="clearfix" name="member-login" action="include/banner/login1.php" id="member-login" method="post" onSubmit="return validateLogin(document.frmlogin);">
                        <input type="text" class="textBox" name="txtemail" id="email" value="Username" onBlur="if(this.value=='') this.value='Username';" onFocus="if(this.value=='Username') this.value='';">
                        <input type="password" class="textBox" name="txtpassword" id="password" value="Password" onBlur="if(this.value=='') this.value='Password';" onFocus="if(this.value=='Password') this.value='';">
                        <button type="submit" class="btn">Submit</button>
                    </form>
                </div>
                <div class="box">
                	<p><b>Contact Us : </b>(10:00 am - 8:00pm)</p>
                    +91 99-99-899084
                    <p>  dr@magicdietitian.com</p> 
                    <p>  info@magicdietitian.com</p>  
            	</div>        
            </aside>
        </div>	
    </section>