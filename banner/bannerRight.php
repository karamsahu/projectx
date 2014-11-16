
<script>


$(document).ready(function()
{
	
$("#login-button").click(function()
{
	$("#member-login").submit(function(e)
	{
		var postData = $(this).serializeArray();
		$("#simple-msg").html("Signing in, pleasee wait...");
		var formURL = $(this).attr("action");
		$.ajax(
		{
			url : formURL,
			type: "POST",
			data : postData,
			success:function(data, textStatus, jqXHR) 
			{
				alert(data);
				if(data==1){
					$("#simple-msg").html("You are not registered member. Please register.");
				}else if(data==2){
					$("#simple-msg").html("Invalid password, try again.");
				}else if(data==3){
					$("#simple-msg").html("You are now logged in, please logout after use.");
					$("#email").hide();
					$("#password").hide();
					$("#login-button").html("Logout");	
				}
				
			},
			error: function(jqXHR, textStatus, errorThrown) 
			{
				$("#simple-msg").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
			}
		});
	    e.preventDefault();	//STOP default action
	    e.unbind();
	});
		
	$("#member-login").submit(); //SUBMIT FORM
});

});
</script>
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
            <h2>Member Login</h2><div id="simple-msg"></div>
            
            <form class="clearfix" name="member-login" action="include/banner/login1.php" id="member-login" metho"post">
              <input type="email" class="textBox" name="txtemail" id="email"  required="" placeholder="Email Id">
              <input type="password" class="textBox" name="txtpassword" id="password"  required="" placeholder="Password">
              <button type="submit" class="btn" id="login-button">Submit</button>
            </form>
        </div>
        
        <div class="box">
            <p><b>Contact Us : </b>(10:00 am - 8:00pm)</p>
            +91 99-99-899084
            <p>dr@magicdietitian.com</p> 
            <p>info@magicdietitian.com</p>  
        </div>        
    </aside>

</div>	
</section>