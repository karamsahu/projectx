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
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>

<style type="text/css">
<!--
.style2 {
	font-size: 21px;
	font-weight: bold;
	color: #20899F;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<body>

<div class="admin">
	<h1>Welcome to Admin Section</h1>
    <div id="content_wrapper">
        <div id="menu">
            <?php include('include/panelMenu.php'); ?>
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
        	
          <h1>Admin Pannel - Home</h1>
          <p><br>
  
  
  <br>
  <br>
  <span class="style2">Welcome in CMS</span><br>
  <span class="style1">--------------------------------------------------</span><br>
  <br>
  <br>
  <br>
  <br>
  

  
 
          </p>
        </div>
        <br class="clearfix">
    </div>
</div>
</body>
</html>	