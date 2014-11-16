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

<title>kapil</title>

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
            <?php include('include/panelMenu.php'); ?>
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
        	
          <h1>Admin Pannel - User</h1>
          <div id="panel-form">
            <form align="center" name = "frmRegister" id="frmRegister" action="registerCheck.php" method="POST" onSubmit="return validateRegister(document.frmRegister);" >
			<ul>
				<li> User name  : </li>  <li> <input type="text" name="txtFirstName" id="firstName" size="30" /></li><br>
				<li> Old Passward : </li>  <li> <input type="text" name="txtLastName" id="lastName" size="30" /></li><br>
				<li> New Passward : </li>  <li> <input type="text" name="txtLastName" id="lastName" size="30" /></li><br>
                <li> Re-enter Passward : </li>  <li> <input type="text" name="txtLastName" id="lastName" size="30" /></li><br>             
				<li> <input type="submit" name="cmdSubmit" id="submit" value="Update" />
				 <input type="reset" name="cmdCancel" id="reset" value="Cancel" /></li>
			</ul>
			</form>
          </div>
        </div>
      <br class="clearfix">
    </div>
</div>
</body>
</html>	