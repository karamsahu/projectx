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
        	
          <h1>Admin Pannel - Gallary</h1>
          <div id="panel-form"><br>

            <form action="upload_file1.php" method="post" enctype="multipart/form-data">
            <label for="file">Tittle:</label>
			<input type="text" name="tittle" id="text">
			<label for="file">Filename:</label>
			<input type="file" name="file" id="file">
			<br>
			<br>
			<input type="submit" name="submit" value="Submit">
			</form>
          </div>
          <hr>
          
          
             	        
          <?php  
	$con = mysql_connect ("localhost","magicdietitian","Drgitika@2013") or die(mysql_error("failed to conect"));
	mysql_select_db("magicdietitian",$con)or die(mysql_error("failed to select database"));
	@$sql="select * from tbl_image ";
	@$query=mysql_query($sql);
		?>
        
        <?php
		while(@$row=mysql_fetch_array($query))
		{
		 @$image = $row['photo'];
		 @$imageId = $row['id'];
		 @$tittle = $row ['tittle'];
		
		 ?>
			
            
          <div id="image">
          <center><?php echo @$tittle; ?><br></center>


            <a href="image/<?php echo  @$image; ?>"><img src="image/<?php echo  @$image; ?>" width="150" height="100"></a>
            <br>
            <form name="frmimage" id="deleteImageform" action="image/deleteImage1.php" method="get" onSubmit="return validatequery(document.frmimage);"> 
            	<br><input type="checkbox" name="delMe" value="<?php echo @$image; ?>" id="cheaking" /> 

         	    <input type="submit" value="Delete" />
</form>
            
          </div>
            
		<?php
		}		
								
?>



			
        </div>
     <br class="clearfix">
    </div>
</div>
</body>
</html>	