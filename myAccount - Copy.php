<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("include/banner.php");?>
<section id="content" role="main">
  <div class="wrapper">
            <aside class="side-column">
 				<div class="white-box">
                	<h2>Request A Quote</h2>		
                    <form id="requestFrm" name="requestFrm" method="post" action="/webformmailer.php" class="clearfix">
                    	<p>
                        	<label>Name</label>
                            <input type="text" class="textBox" name="FirstName">
                        </p>
                        <p>
                        	<label>Email</label>
                            <input type="text" class="textBox" name="Email">
                        </p>
                        <p>
                        	<label>Contact No.</label>
                            <input type="text" class="textBox" name="Contact No">
                        </p>
                                               <p>
                        <label>Enquiry</label> 
                        <textarea class="textBox" name="comments" cols="25" rows="10" placeholder="Type comments here."></textarea>
                        <input type="hidden" name="subject" value="Submission" />
                        <input type="hidden" name="redirect" value="thankyou.php" />
                        </p>
                        <input type="hidden" name="form_order" value="alpha"/> <input type="hidden" name="form_delivery" value="hourly_digest"/> <input type="hidden" name="form_format" value="html"/> 
                        <button class="read-more">Send Request</button>
                    </form>
                </div>	           				
                <figure>
                	<img src="images/panchkarma.jpg">
                    <figcaption>Panchkarma</figcaption>
                </figure>						
            </aside>
            <section class="mid-column2">
           	  <div id="product-wrapper" class="white-box clearfix">
                	<h2>My Account</h2>
                    <form name = "frmRegister" id="frmRegister" action="registeration/registerCheck.php" method="POST" onSubmit="return validateRegister(document.frmRegister);" >
                      <table width="660" border="0" cellspacing="0" cellpadding="0" class="color"><tr><td valign="middle"><table width="660" border="0" cellspacing="0" cellpadding="0" class="color">
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;First Name :</td>
                          <td valign="middle"><input type="text" name="txtFirstName" id="firstName" size="30" /></td>
                        </tr>
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;Last Name :</td>
                          <td valign="middle"><input type="text" name="txtLastName" id="lastName" size="30" /></td>
                        </tr>
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp; Email :</td>
                          <td valign="middle"><input type="text" name="txtEmail" id="email1" size="30" /></td>
                        </tr>
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;Password :</td>
                          <td valign="middle"><input type="password" name="txtPassword" id="cpassword" size="30" /></td>
                        </tr>
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;Confirm Password :</td>
                          <td valign="middle"><input type="password" name="txtConfirmPassword" id="confirmPassword" size="30" /></td>
                        </tr>
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;Contact No :</td>
                          <td valign="middle"><input type="text" name="txtContact" id="contact" size="30" /></td>
                        </tr>
                        <tr>
                          <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;Location Country :</td>
                          <td valign="middle"><select name="Country" id="country">
                              <option>--Select Country--</option>
                              <option>Australia</option>
                              <option>Austria</option>
                              <option>Canada</option>
                              <option>China</option>
                              <option>Egypt</option>
                              <option>France</option>
                              <option>Germany</option>
                              <option>India</option>
                              <option>Italy</option>
                              <option>Japan</option>
                              <option>London</option>
                              <option>Sri Lanka</option>
                              <option>United States</option>
                          </select></td>
                        </tr>
  <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;State :</td>
      <td valign="middle"><input type="text" name="txtState" id="state" size="30"/></td>
  <tr align="left" valign="middle">
  <tr>
    <td width="150" height="40" align="left" valign="middle">&nbsp;&nbsp;Address :</td>
    <td valign="middle"><textarea rows="5" cols="30" name="txtAddress" id="adderess"></textarea></td>
  </tr>
  <tr align="left" valign="middle">
    <td width="500" height="50" colspan="2"><br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="read-more" type="submit">Register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="read-more" value="Cancel" type="reset">Reset</button>
  </td>
  </tr>
                      </table></td>
  </tr>
                    </table>
</form>
 <br>

                   <!-- Other Products -----------------
                    <div class="divider clearfix"></div>
                    <figure>
                    	<figcaption>Beauti</figcaption>
                    	<img src="images/product.jpg">
                        <a href="#" class="read-more">Read More</a>
                    </figure>
                    <figure>
                    	<figcaption>Beauti</figcaption>
                        <img src="images/product.jpg">
                        <a href="#" class="read-more">Read More</a>
                    </figure>
                    <figure>
                    	<figcaption>Beauti</figcaption>
                        <img src="images/product.jpg">
                        <a href="#" class="read-more">Read More</a>
                    </figure>
                    -------------------------------------->
              </div>
                
                <article>
                	<h1 class="page-title">&nbsp;</h1>
              </article>
            </section>
    	</div>
    </section>
    
    <section class="mid-column2">
           	  <div id="product-wrapper" class="white-box clearfix">
              asdf
              </div>
	</section>
	    
<?php include("include/footer.php");?>
