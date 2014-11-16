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
    <title> : Magic Dietitian : Why Us ?</title>
    
    
    <!--script for marquee realpeople real story-->
    <link rel="stylesheet" href="colorbox.css" />   
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="jquery.colorbox.js"></script>
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
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:400,500,300">
    <link rel="stylesheet" href="css/ddlevelsmenu-base.css">
	<link rel="stylesheet" href="css/ddlevelsmenu-topbar.css">
	<link rel="stylesheet" href="css/ddlevelsmenu-sidebar.css">
   
    <script src="js/ddlevelsmenu.js"></script>
    <script src="lib/jquery.validate.js"></script>

    <script type="text/javascript" src="registeration/validation_new_user.js"></script>
    <script type="text/javascript" src="validation_student_login.js"></script> 

    <script src="js/jquery.easing.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	
    <!--boostrap script begins -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.min.css">
    <!--boostrap ends -->
	
</head>
<body>
<!--startupt signup form 
<script>
jQuery(document).ready(function(){
 $.colorbox({width:"auto", inline:true, href:"#signUpForm"});
});
</script>
<!-- ends -->
<!--code for php facebook like buttonj-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
          
            
            <div  class="header1" role="banner">
            	<hr>
				<h3 style="color:#0C3" > <span  style="color:#39C">Call</span> 99-99-899084</h3>
				<p style="color:#999" >for your free consultation</p>
                <hr>
			</div>
        </div>													
</header>

<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<section id="content" role="main">

        <div class="wrapper white-box">
   	  				<h2> Why Us ?</h2>
                    <!-- bootstrap carosuel start -->
                    	<div id="myCarousel" class="carousel slide">
                           <!-- Carousel indicators -->
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                              <li data-target="#myCarousel" data-slide-to="4"></li>
                              <li data-target="#myCarousel" data-slide-to="5"></li>
                              <li data-target="#myCarousel" data-slide-to="6"></li>
                              <li data-target="#myCarousel" data-slide-to="7"></li>
                              <li data-target="#myCarousel" data-slide-to="8"></li>
                           </ol>   
                           <!-- Carousel items -->
                           <div class="carousel-inner">
                              <div class="item active">
                                 <img  width="1000" src="image/why us/step -1.PNG">
                                 <div class="carousel-caption">Join with us now</div>
                              </div>
                              <div class="item">
                                  <img width="1000" src="image/why us/step -2.PNG">
                                 <div class="carousel-caption">The magic begins..</div>
                              </div>
                              <div class="item">
                                 <img width="1000" src="image/why us/step-3.PNG">
                                 <div class="carousel-caption">We set a timer so that we keep track.</div>
                              </div>
                              <div class="item">
			                    <img width="1000" src="image/why us/step4.PNG">
                                 <div class="carousel-caption">You achive your goal very fast.</div>
                              </div>
                              <div class="item">
                                 <img width="1000" src="image/why us/step5.PNG">
                                 <div class="carousel-caption">We do not put too much restriction on your food. So you are free to eat your favourite dishes.</div>
                              </div>
                              <div class="item">
                                 <img width="1000" src="image/why us/step-6.PNG">
                                 <div class="carousel-caption">We review your lifestyle, modify it, and prepare exclusive diet plans for you.</div>
                              </div>
                              <div class="item">
                                 <img width="1000" src="image/why us/step8.PNG">
                                 <div class="carousel-caption">That's why we are best among others.</div>
                              </div>
                              <div class="item">
                                 <img width="1000" src="image/why us/step9.PNG">
                                 <div class="carousel-caption">Some of our top achivers.</div>
                              </div>
                              <div class="item">
                                 <img width="1000" src="image/why us/step-10.PNG">
                                 <div class="carousel-caption">This Caption 3</div>
                              </div>
                           </div>
                           <!-- Carousel nav -->
                           <a class="carousel-control left" href="#myCarousel" 
                              data-slide="prev">&lsaquo;</a>
                           <a class="carousel-control right" href="#myCarousel" 
                              data-slide="next">&rsaquo;</a>
                        </div>
                    	<!--carosel ends -->
                    </div>
					
    	</div>
    
<?php include("include/prefooter.php");?>
<?php include("include/footer.php");?>
