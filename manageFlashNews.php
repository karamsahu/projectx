<html><!-- InstanceBegin template="/Templates/admin_home.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>kapil</title>
<!-- InstanceEndEditable -->
<link href="admin.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body>

<div class="admin">
	<h1>Welcome to Admin Section</h1>
    <div id="content_wrapper">
        <div id="menu">
            <ul>
            	<li><a href="#" class="active">Admin Menu</a></li>
                <li><a href="manageHome.php">Home</a></li>
              <li><a href="manageCategory.php">Add Category</a></li>
              <li><a href="manageGallary.php">Gallery</a></li>
              <li><a href="manageFlashNews.php">Flash News</a></li>
              <li><a href="manageTutorial.php">Add Tutorial</a></li>
              
                <li><a href="manageUsers.php">User</a></li>
              <li><a href="managelogout.php">Logout</a></li>
          </ul>
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
        	<!-- InstanceBeginEditable name="adminPanelContent" -->
            <h1>Admin Pannel - Fresh News</h1>
            
			<div id="panel-form">
            <form align="center" name = "frmRegister" id="frmRegister" action="registerCheck.php" method="POST" onSubmit="return validateRegister(document.frmRegister);" >
			<ul>
				<li> News Date :</li>  <li> <input type="text" name="txtnews_date" id="news_date" size="30" /></li><br>
				<li> News Title :</li> <li> <input type="text" name="txtnews_title" id="news_title" size="30" /></li><br>
				<li> News Description : </li> <li><textarea name="news_desc" cols="27" rows="2"></textarea></li><br>
				<li> <input type="submit" name="cmdSubmit" id="submit" value="Update" />
				 <input type="reset" name="cmdCancel" id="reset" value="Cancel" /></li>
			</ul>
			</form>
            </div>
            
            
        	<!-- InstanceEndEditable --></div>
        <br class="clearfix">
    </div>
</div>

</body>
<!-- InstanceEnd --></html>	