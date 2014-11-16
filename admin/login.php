<?php session_start(); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Admin Login</title>
<link href="admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	color: #000000;
}
-->
</style>
</head>

<body>

<div class="login">
	<h1>Magic Dietitian - Admin Panel</h1>
    <div id="content_wrapper">
    <div id="pannel">
    <h1>login</h1>
    </div>
        <form id="loginFrm" method="post" action="verfyLogin.php" name="loginFrm">
         
          <p>
            
            	<label>Username :</label>
                <input type="text" name="username" height="15" width="160">
                <br class="clearfix">
          </p>
          <p>
            	<label>Password :</label>
            <input type="password" name="password" height="15" width="160">
                <br class="clearfix">
          </p>
            <table width="100%" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%">&nbsp;</td>
                <td width="22%"><input type="submit" value="login" size="50"></td>
                <td width="72%"><input type="reset" value="Cancel" size="50"></td>
              </tr>
            </table>
            <p>&nbsp;</p>
      </form>
        </div>
        <a>Go to <a href="../index.php">Home</a></p>
</div>

</body>
</html>	
