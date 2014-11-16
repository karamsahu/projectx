<?php
session_start();
if(!$_SESSION['username'])
	{
		header('Location: login.php ');
	}
 ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Add Testimonial</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/
javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<link href="admin.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
        <script type="text/javascript">
            function searchData(value){
                $.post("result.php",{keyword:value}, function(data){
                    $("#results").html(data);
                });
            }
			
         </script>
        <script type="text/javascript">
        	function validate(){
				
				var fn = document.getElementsByName('txtFirstName');
				alert(fn);
				var ln = document.getElementsByName('txtLastName').value;
				var achv = document.getElementsByName('txtAchievement').value;
				var age= document.getElementsByName('txtAge').value;
				var loc = document.getElementsByName('txtLocation').value;
				var msg = document.getElementsByName('txtMessage').value;
				var problem= document.getElementsByName('txtProblem').value;
				var sol =document.getElementsByName('txtSolution').value;
				var file = document.getElementsByName('file').value;
				if(fn||ln||achv||age||loc||msg||problem||sol||file==""){
					alert("Missing values in form ");
					}
				
				}
        </script>
         
<style type="text/css">
    
	input{
		height:30px;
		margin-bottom:5px;
		width:400px;
		padding:2px;
		margin-top:5px;
		}
	.content{
        width:900px;
        margin:0 auto;
    }
    #searchid
    {
        width:500px;
        border:solid 1px #000;
        padding:10px;
        font-size:14px;
    }
    #result
    {
        position:absolute;
        width:500px;
        padding:10px;
        display:none;
        margin-top:-1px;
        border-top:0px;
        overflow:hidden;
        border:1px #CCC solid;
        background-color: white;
    }
    .show
    {
        padding:10px;
        border-bottom:1px #999 dashed;
        font-size:15px;
        height:50px;
    }
    .show:hover
    {
        background:#4c66a4;
        color:#FFF;
        cursor:pointer;
    }
	

</style>
</head>
<body>
<div class="admin">
	<h1>Welcome to Admin Section</h1>
    <div id="content_wrapper">
        <div id="menu">
            <?php include('include/panelMenu.php'); ?>
            <?php include('include/manageTestimonialMenu.php'); ?>
            
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
          <h1>:: Achivers - Testimonial ::</h1>
          <div id="panel-form">
            <form id="testimonialForm" action="saveTestimonial.php" enctype="multipart/form-data" method="post" onSubmit="validate()">
        	<ul>
                <li><input type="text" name="txtFirstName" placeholder="Firts Name"/></li>
                <li><input type="text" name="txtLastName" placeholder="Last Name"/></li>
                <li><input type="text" name="txtLocation" placeholder="Where do you live ?"/></li>
                <li><input type="text" name="txtAge" placeholder="Age"/></li>
                <li><input  type="text" name="txtProblem" placeholder="Why you joined us ?"/></li>
                <li><input type="text" name="txtSolution" placeholder="How we helped you ?"/></li>
                <li><input type="text" name="txtMessage" placeholder="Tell us about ur satisfactin."/></li>
                <li><input type="text" name="txtAchievement" placeholder="What have you Acnived ?"/></li>
                <li><input type="file" name="file" placeholder="upload image"/></li>
              <li><input type="submit" value="Save" /> <input type="reset" value="Clear" /></li>
        	</ul>
            </form>
          </div>
        </div>
      <br class="clearfix">
  </div>
</div>
</body>
</html>	