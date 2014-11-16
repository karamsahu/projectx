<?php
session_start();
if(!$_SESSION['username'])
    {
		header('Location: login.php ');
	}
    include"../storescripts/connect_to_mysql.php";
 ?>
 
<?php 
 // error reporting
 error_reporting(E_ALL);
 ini_set('display_errors','1');
 ?>
 
 
 <?php 
 //parse the form data and add invetory item to the system
 if(isset($_POST['product_name'])){
 $pid = mysql_real_escape_string($_POST['thisID']);
 echo $pid;
 $product_name = mysql_real_escape_string($_POST['product_name']);
 $price = mysql_real_escape_string($_POST['price']);
 $category = mysql_real_escape_string($_POST['category']);
 $subcategory = mysql_real_escape_string($_POST['subcategory']);
 $details = mysql_real_escape_string($_POST['details']);
 //see if that product name is an identical match to another product in the system
 $qry = "UPDATE products " .
     	"SET product_name = '$product_name', price = $price, details = '$details', category= '$category', subcategory = '$subcategory'".
		"Where id = $pid" ;
 
 $sql = mysql_query($qry);
 if($_FILES['fileField']['tmp_name'] !=""){
 //place image in the folder
     $newname = "$pid.jpg";
     move_uploaded_file($_FILES['fileField']['tmp_name'],"../inventory_images/$newname");
  }
  //header("location:inventory_list.php");
  ?>
 <script> location.replace("inventory_list.php"); </script>
<?php
  exit();
 }
 ?>
 
  <?php 
 //gather this product"s full information for inserting automatically into the edit form below into the page

 if(isset($_GET['pid'])){
 	$targetID = $_GET['pid'];
 	$sql = mysql_query("SELECT * FROM products WHERE id = '$targetID' LIMIT 1");
 	$productCount = mysql_num_rows($sql);
 	if($productCount > 0){
 		while($row = mysql_fetch_array($sql)){
 		
 		$product_name = $row["product_name"];
		$price = $row["price"];
		$category = $row["category"];
		$subcategory = $row["subcategory"];
		$details = $row["details"];
 		$date_added = strftime("%b,&nbsp;%d,&nbsp;%Y",strtotime($row["date_added"]));
 
 	
 
 	}
 }else{
 	$product_list = "Sorry dude that crap dont exist";
	exit();

  }	
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
        	
          <h1>Admin Pannel - Edit Product</h1>
        
        	<div id="pageContent">
      <br />
      <div align="right" style="margin-right:32px;"><a href="inventory_list.php#inventoryFrom">+ Add New Inventory Item</a></div>
      <div align="left" style="margin-left:24px;">
        <h2>Inventory List</h2>
        
        </div>
      <a name="inventoryFrom" id="inventoryFrom"></a>
      <h3>&darr; Add New Inventory Item From &darr;</h3>
      <form action="inventory_edit.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
      <table width="90%" border="0" cellpadding="6" cellspacing="0">
  <tr>
    <td width="20%">Product Name</td>
    <td width="80%"><label>
    <input name="product_name" type="text" id="product_name" size="64" value="<?php echo $product_name; ?>" />
    </label></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td><label>
    $<input name="price" type="text" id="price" size="12" <?php echo $price; ?> />
    </label></td>
  </tr>
  <tr>
    <td>Category</td>
    <td><label>
    <select name="category"  id="category" >
    <option value=""></option>
    <option value="Clothing">Clothing</option>
    <option value="Electronics">Electronics</option>
    </select>
    </label></td>
  </tr>
  <tr>
    <td>Subcategory</td>
    <td><label>
    <select name="subcategory"  id="subcategory" >
    <option value=""></option>
    <option value="<?php echo $subcategory ?>"><?php echo $subcategory; ?></option>
    <option value="Hats">Hats</option>
    <option value="Pants">Pants</option>
     <option value="Shirts">Shirts</option>
    </select>
    </label></td>
  </tr>
  <tr>
    <td>Product Details</td>
    <td>
     <textarea name="details" type="text" id="details"  cols="64" rows="5"> <?php echo $details; ?> </textarea>
    </td>
  </tr>
  <tr>
    <td>Product Image</td>
    <td><label>
    <input type="file" name="fileField" id="fileField"/>
    </label>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
    <input name="thisID" type="hidden" value="<?php echo $targetID ?>" />
    <input type="submit" name="button" id="button" value="Make Changes"/>
    </label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>


    </div>
    
    </div>
    <br class="clearfix">
</div>

</body>
<!-- InstanceEnd --></html>	