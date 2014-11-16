<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Magic dietitian is dedicated to provide best diet plans and health advice. Apart from effective diet plans, we also offer wide range of beauty product and health product which are 100% ayurvedic and herbal. The young dietitian has passion towards her profession and dedicated her best that she earned with experience. The sole idea behind this website is to get the best out of what you eat that helps in building strong Health and strong immunity. There are different diet plan available for different categories like, slimming-diet, weight-gain-diet, diet for diabetic person, pregnancy diet, diet for obese person and so on. We also offer Corporate diet plans and easy to follow diet.">
    <meta name="keywords" content="diet, personal diet, therputic diet, sliming diet, deititian in delhi, dietitian in india, best dietitian in delhi, best diet to loose weight, best diet to reduce stress, diet for dibetic , diet for constipation, healthy diet, natural diet, deit, dit, best diet plan, diet for kids, recepie, breakfast , lunch, dietitian, dietician, health doctor, diet for good sking, diet for cancer patieint, diet for heart problems, best diet in delhi ncr, free diet, diet to get slim , what to eat to loose weight, what to eat to gain weight, diet for hair loss, diet for hair grey, white hari, falling hair, healty memory diet, low calorie diet">
    
    <meta name="Author" content="Geetika Chopra" />
    <meta name="Language" content="English" />
    <meta name="robots" content="Index, follow" />
    <meta name="revisit-after" content="4 days" />
    <meta name="generator" content="Dreamweaver">
    <meta name="copyright" content="Magicdietitian.com">
    <meta name="reply-to" content="info@magicdietitian.com">
    <title> : Magic Dietitian : Home </title>
    <!--script for marquee realpeople real story-->
    <link rel="stylesheet" href="colorbox.css" />       
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:400,500,300">
    <link rel="stylesheet" href="css/ddlevelsmenu-base.css">
	<link rel="stylesheet" href="css/ddlevelsmenu-topbar.css">
	<link rel="stylesheet" href="css/ddlevelsmenu-sidebar.css">
	<!--
   	<script src="jquery.colorbox.js"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
    		$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1',transition:"none", width:"75%", height:"75%"});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"400", height:"200"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
    
    <script src="connect.facebook.net/en_US/all.js"></script>
  
    <script src="js/ddlevelsmenu.js"></script>
	<!-- 
    <script src="lib/jquery.validate.js"></script>
   <script type="text/javascript" src="registeration/validation_new_user.js"></script>
    <script type="text/javascript" src="validation_student_login.js"></script> 
   
   -->
    <script src="js/jquery.easing.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	
	<script>
        $(function(){
            $('#slides').slides({
                preload: true,
                preloadImage: 'images/loading.gif',
                play: 4000,
                pause: 2000,
                hoverPause: true
            });
        });
    </script>

	
</head>

<body>
<!--startupt signup form -->
<?php 
if(!isset($_SESSION['subscribed'])){
	echo'<script>
jQuery(document).ready(function(){
 $.colorbox({width:"auto", inline:true, href:"#signUpForm"});
});
</script>';
	}
?>

<!-- ends -->

<!--code for php facebook like button-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<header id="header">
    	<div class="wrapper">
        	<div class="logo" role="banner">
            <br>
            	<a href="index.php"><img style="width:200px" src="images/magic-dietitian-logo.jpg" alt="Magic Dietitian"></a> 
            </div>
            
            <div class="logo" role="banner">
            <br>
            	&nbsp;&nbsp;<a href="index.php"><img style="margin-left:75px;" src="images/banner-mid-fill.jpg" alt="Magic Dietitian"></a> 
            </div>
          
            <br><br>
            <div  class="header1" role="banner">
            	<hr>
                <br>
<h2 style="color:#0C3" > <span  style="color:#39C">Call</span> 9910139363</h2>
				<h2 style="color:#0C3" > <span  style="color:#39C">Dial</span> 9582438498</h2>
				<p style="color:#999" >for your free consultation</p>
                <br>
                <hr>
			</div>
        </div>													
</header>
<div style='display:none'>
<div id="signUpForm" >
	<style>
.form{
	background:#f1f1f1; width:470px; margin:0 auto; padding-left:50px; padding-top:20px;
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
    <!--
    <script>
    	$(document).ready(function() {

			//callback handler for form submit
				$("#signUpForm").submit(function(e)
				{
				    e.preventDefault(); //STOP default action
				    var postData = $(this).serializeArray();
				    var formURL = $(this).attr("action");
				    $.ajax(
				    {
				        url : formURL,
				        type: "POST",
				        data : postData,
				        success:function(data, textStatus, jqXHR) 
				        {
				            //data: return data from server a
				            //$("#result").html(data);
							alert(data);
				        },
				        error: function(jqXHR, textStatus, errorThrown) 
				        {
				            //if fails  
				            alert("Error"+textStatus);
				        }
				    });
				    e.unbind(); //unbind. to stop multiple form submit.
				});
				 
				$("#signUpForm").submit(); //Submit  the FORM
		});
    </script>
-->
        <div  class="form">
                    <form id="signUpForm" action="signup.php" method="post">
                <h1>Get 100% Free Diet Plan. Now !</h1> 
                <hr>
                <br>
                    <p class="contact"><label for="name">Name</label></p> 
                    <input id="name" name="name" placeholder="First and last name" required  type="text" /> 
                     
                    <p class="contact"><label for="email">Email</label></p> 
                    <input id="email" name="email" placeholder="example@domain.com" required type="email" /> 
                   <br>
                   <fieldset>
                     <label>Birthday</label><br>
                      <label class="month"></label> 
                          <select class="select-style" name="BirthMonth">
                              <option value="">-Select-</option>
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
                          </select>    
                    <label>Day<input class="birthday" maxlength="2" name="BirthDay"  placeholder="Day" required></label>
                    <label>Year <input class="birthyear" maxlength="4" name="BirthYear" placeholder="Year" required></label>
                  </fieldset>
                    <select class="select-style gender" name="gender">
                        <option value="select">i am..</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="others">Other</option>
                    </select><br><br>
                
                <p class="contact"><label for="phone">Mobile phone</label></p> 
                <input id="phone" name="phone" placeholder="phone number" required type="text" /> <br>
                <input class="buttom" name="submit" id="submit" tabindex="5" value="Subscribe!" type="submit" /> 	 
       </form> 
        </div>  
	</div>
</div>

<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("include/banner.php");?>
<?php include("include/content.php");?>
<?php include("include/prefooter.php");?>
<?php include("include/footer.php");?>
