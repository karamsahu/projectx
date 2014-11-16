<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("include/banner.php");?>
<section id="content" role="main">
  <div class="wrapper">
            <aside class="side-column">
 				<div class="white-box">
                	<h2>Our Products</h2>
                	<ul>
                    	<li><a href="beautyProducts.php">Beauty</a></li>
                        <li><a href="healthProducts.php">Health</a></li>
                        <li><a href="diabeticProducts.php">Diabetic</a></li>
                        
                    </ul>
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
	    
<?php include("include/footer.php");?>
