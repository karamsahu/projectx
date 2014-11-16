<?php 
session_start();
unset($_SESSION['username']);
header('Location: login.php');
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>managelogout</title>

<link href="admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #000000}
-->
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
              
              <li><a href="manageTutorial.php">Add Tutorial</a></li>
              
                <li><a href="manageUsers.php">User</a></li>
              <li><a href="managelogout.php">Logout</a></li>
          </ul>
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
        	
          <h1>Admin Pannel - Logout </h1>
          <p>Welcome in CMS<br>
            .............................</p>
        </div>
      <br class="clearfix">
    </div>
</div>
</body>
</html>	