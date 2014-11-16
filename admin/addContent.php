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

<title>managehome</title>

<link href="admin.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        
        <script type="text/javascript">
            function searchData(value){
                $.post("result.php",{keyword:value}, function(data){
                    $("#results").html(data);
                });
            }
         </script>
         
         
<style type="text/css">
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
	.content ul li{
			list-style:none;
                background-color: aliceblue;
                margin-bottom: 2px;
                padding: 5px
		}
		
	.content ul li{
		padding: 10px;
               width: 500px;
               margin: auto; 
		}	
	.content ul li label {
	  padding-left: 20px;    
	  width:200px;
	  display: inline-block;
	}

</style>
</head>
<body>

<div class="admin">
	<h1>Welcome to Admin Section</h1>
    <div id="content_wrapper">
        <div id="menu">
            <ul>
            	<li><a href="#" class="active">Admin Menu</a></li>
                <li><a href="manageHome.php">Home</a></li>
              
              <li><a href="manageGallary.php">Gallery</a></li>
             
              <li><a href="inventory_list.php">Add Product</a></li>

                <li><a href="addContent.php">Add Content</a></li>
              	
                <li><a href="">Add Testimonial</a></li>
              
                <li><a href="manageUsers.php">User</a></li>
              <li><a href="managelogout.php">Logout</a></li>
          </ul>
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
        	
          <h1>Admin Pannel - Home</h1>
          <p>
          <br>
  
<div class="content">
<input type="text" class="search" id="searchid" onKeyUp="searchData(this.value)" />
<div id="results"></div>
</div>
  
  
  <span class="style2">Search page </span><br>
  <span class="style1">--------------------------------------------------</span><br>
           <!-- <form action="">
             
             <table>
                <tr>
                    <td><label>Enter Keyword to search:</label></td>
                    <td>
                        <label id="error"></label>    
                         
                        <input id="pageName" type="text" size="30" onKeyUp="searchPage()" />
                    </td>
                <tr>
                 
                 <div id="livesearch"></div>             
            </form>
-->             	<h1>:: Member Testimonial form:: </h1>

		   <form action="saveTestimonial.php" enctype="multipart/form-data" method="post">
        	<ul>
            <li><label>First Name</label><input type="text" name="txtFirstName" placeholder="Firts Name"/></li>
            <li><label>Last Name</label><input type="text" name="txtLastName" placeholder="Last Name"/></li>
            <li><label>Location</label><input type="text" name="txtLocation" placeholder="Where do you live ?"/></li>
            <li><label>Age</label><input type="text" name="txtAge" placeholder="Age"/></li>
            <li><label>Problem ?</label><input type="text" name="txtProblem" placeholder="Why you joined us ?"/></li>
            <li><label>Solution </label><input type="text" name="txtSolution" placeholder="How we helped you ?"/></li>
            <li><label>Message</label><input type="text" name="txtMessage" placeholder="Tell us about ur satisfactin."/></li>
            <li><label>Achievement</label><input type="text" name="txtAchievement" placeholder="What have you Acnived ?"/></li>
            <li><label>Image</label><input type="file" name="file"/></li>
            <li><input type="submit" value="Save" /> <input type="reset" value="Clear" /></li>
        	</ul>
            </form>
        
        </div>
        <br class="clearfix">
        
    </div>
    
    <div class="content">
    
    </div>
    
    <!--live search -->
<script>
function searchPage()
{
var pageName = document.getElementById("pageName").value;
var xhr;
 if (window.XMLHttpRequest) { // Mozilla, Safari, ...
    xhr = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 8 and older
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
var data = "page_name="+pageName;
     xhr.open("POST", "livesearch.php", true); 
     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
     xhr.send(data);
     xhr.onreadystatechange = display_data;
    
    function display_data() {
	 if (xhr.readyState == 4) {
      if (xhr.status == 200) {
       //alert(xhr.responseText);	   
	  document.getElementById("livesearch").innerHTML = xhr.responseText;
      } else {
        document.getElementById("error").innerHTML = "No Data";
      }
     }
	}
}
</script>
<!--live search ends-->
    
</div>
</body>
</html>	