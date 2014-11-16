<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("classes/DbHandler.php")?> 
<style>
#testimonial {
	width:280px;
	background-color: #FFF;
	padding:15px; float:
	left;
	background-color:#F9F9F9;
	margin:10px;
}
#t-head {
	margin-bottom:10px;
	font-family: Tahoma, Geneva, sans-serif;
}

#t-head  h2{
	color:#666;
	}
#t-head p{
	color:#06C;
	font-weight:bold;
	margin:0;
	}
	
#t-pic img{
	 max-width:280px;
	}	
#t-content {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 15px;
	font-style: italic;
}
</style>
<?php 
$db = new DbHandler();
$db->connect();
$testimonialQry = "SELECT * FROM `achivers`";
$db->select($testimonialQry);
?>   
<section id="content" role="main">
        <div class="wrapper white-box">   	  
        	<h2>Success Stories</h2> 
<?php
foreach ($db->achiverObject as $achiver) {
    $data = $achiver->getPicture();
   ?> <div id="testimonial">
    	<!-- div for image data-->
        <div id="t-pic">
             <?php echo '<img src="' . $data . '"/>'; ?>    
        </div>
        
         <!-- div for content data-->
        <div id="t-content">
        	<br/>   
     		<p>            
	         <?php echo  $achiver->getProblem() ; ?>
             <?php echo  $achiver->getSolution() ; ?>	
             <?php echo  $achiver->getMessage() ; ?>
        	 <?php echo  $achiver->getAchievement() ; ?></p>
             <br/>
        </div>
        
        <!-- div for profile data-->
        <div id="t-head">
            <div class="header1"><?php echo  $achiver->getLocation()." ".$achiver->getAge() ; ?> 26yr</p></div>
            <p><?php echo  $achiver->getFirstName()." ".$achiver->getLastName()  ; ?>
			
            <!--<a href="#" class="read-more" style="float:right;">Read More</a> -->
      </div>
     </div>
             
 <?php } ?>
   	</div>	
 </section>      
            
<?php include("include/footer.php");?>
