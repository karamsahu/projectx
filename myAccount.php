<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<section id="content" role="main">
  <div class="wrapper">
            <aside class="side-column">
 				<div class="white-box">
                	<h2>Request A Quote</h2>		
                    <form id="requestFrm" name="requestFrm" method="post" action="/webformmailer.php" class="clearfix">
                    	<p>
                        	<label>Name</label>
                            <input type="text" class="textBox" name="FirstName" required="">
                        </p>
                        <p>
                        	<label>Email</label>
                            <input type="text" class="textBox" name="Email" required="">
                        </p>
                        <p>
                        	<label>Contact No.</label>
                            <input type="text" class="textBox" name="Contact No" required="">
                        </p>
                                               <p>
                        <label>Enquiry</label> 
                        <textarea class="textBox" name="comments" cols="20" rows="10" placeholder="Type comments here."></textarea>
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
                	<h2>New User ? Register Now !</h2
 					><br>
                    <div id="signUpForm" >
	<style>
    /*
http://www.freshdesignweb.com/beautiful-registration-form-with-html5-and-css3.html
*/

.form{
	background:#f1f1f1; width:688px; margin:0 auto; padding-left:50px; padding-top:20px;
}
.form fieldset{border:0px; padding:0px; margin:0px;}
.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:Arial, Helvetica;}

.form input[type="text"] { width: 400px; }
.form input[type="email"] { width: 400px; }
.form input[type="password"] { width: 400px; }
.form input.birthday{width:60px;}
.form input.birthyear{width:120px;}
.form label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }
.form label.month {width: 135px;}
.form input, textarea { background-color: rgba(255, 255, 255, 0.4); border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: Keffeesatz, Arial; color: #4b4b4b; font-size: 14px; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
.form input:focus, textarea:focus { border: 1px solid #ff5400; background-color: rgba(255, 255, 255, 1); }
.form .select-style {
  -webkit-appearance: button;
  -webkit-border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  -webkit-padding-end: 20px;
  -webkit-padding-start: 2px;
  -webkit-user-select: none;
  background-image: url(images/select-arrow.png), 
    -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
  background-position: center right;
  background-repeat: no-repeat;
  border: 0px solid #FFF;
  color: #555;
  font-size: inherit;
  margin: 0;
  overflow: hidden;
  padding-top: 5px;
  padding-bottom: 5px;
  text-overflow: ellipsis;
  white-space: nowrap;}
.form .gender {
  width:410px;
  }
.form input.buttom{ background: #4b8df9; display: inline-block; padding: 5px 10px 6px; color: #fbf7f7; text-decoration: none; font-weight: bold; line-height: 1; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999; -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222; border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;}
.form input.buttom:hover	{ background-color: #2a78f6; }

    </style>
    
        <div  class="form">
                    <form id="contactform">
                
                    <p class="contact"><label for="name">Name</label></p> 
                    <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
                     
                    <p class="contact"><label for="email">Email</label></p> 
                    <input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                    
                    <p class="contact"><label for="username">Create a username</label></p> 
                    <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"> 
                     
                    <p class="contact"><label for="password">Create a password</label></p> 
                    <input type="password" id="password" name="password" required=""> 
                    <p class="contact"><label for="repassword">Confirm your password</label></p> 
                    <input type="password" id="repassword" name="repassword" required=""> 
            
                   <fieldset>
                     <label>Birthday</label>
                      <label class="month"> 
                      <select class="select-style" name="BirthMonth">
                      <option value="">Month</option>
                      <option  value="01">January</option>
                      <option value="02">February</option>
                      <option value="03" >March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12" >December</option>
                      </label>
                     </select>    
                    <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required=""></label>
                    <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required=""></label>
                  </fieldset>
      
                <select class="select-style gender" name="gender">
                <option value="select">i am..</option>
                <option value="m">Male</option>
                <option value="f">Female</option>
                <option value="others">Other</option>
                </select><br><br>
                
                <p class="contact"><label for="phone">Mobile phone</label></p> 
                <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
                <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
       </form> 
        </div>  
	</div>

              </div>
                
                <article>
                	<h1 class="page-title">&nbsp;</h1>
              </article>
            </section>
    	</div>
    </section>
    
    <section class="mid-column2">
           	 
	</section>
	    
<?php include("include/footer.php");?>
