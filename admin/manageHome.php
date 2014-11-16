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
<title> Manage - Home</title>

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

<script type="text/javascript" src="http://www.magicdietitian.com/ckeditor/ckeditor.js"></script>


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
	
 <?php  
	$con1 = mysql_connect ("localhost","magicdietitian","Drgitika@2013") or die(mysql_error("failed to conect"));
	mysql_select_db("magicdietitian",$con1)or die(mysql_error("failed to select database"));
	$sql1="select * from contents ";
	$query1=mysql_query($sql1);
?>   
<?php
		while($row1=mysql_fetch_array($query1))
		{
		 $data=$row1 ['content']; 
		 $dcid=$row1['cid'];
		 //@$tittle=$row ['tittle']; 
		 }
		 ?>
	    

<form action="ckData.php" mehotd="get">
	<textarea name="content" id="content" value="<?php echo $data; ?>"></textarea>
 	<?php 
	$cid = $dcid;
	?>
    <input name="cid" type="hidden" value="<?php  echo $cid;?>">  
	<input type="submit" value ="Save" />
</form>
	
	
<script type="text/javascript">
	CKEDITOR.replace("content"); 
	</script>
  
    
   
       </p>
        </div>
        <br class="clearfix">
    </div>
</div>
</body>
</html>	