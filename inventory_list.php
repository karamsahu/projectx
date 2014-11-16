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
 //delete item question to admin
 if(isset($_GET['deleteid'])){
 //echo'Do you really want to delete product with ID of'.$_GET['deleteid'].'?<a href="inventory_list.php?yesdelete="'.$_GET['deleteid'].'">yes</a>|<a //href="inventory_list.php">No</a>';
 
 echo 'Do you really want to delete product with Id of '.$_GET['deleteid'].'?  <a href="inventory_list.php?yesdelete='.$_GET['deleteid'].'">YES</a> | <a href="inventory_list.php">NO</a>';
 exit();
 }
 if(isset($_GET['yesdelete'])){
 //remove item form system and delete its picture
 //delete form database
 $id_to_delete=$_GET['yesdelete'];
 $sql=mysql_query("DELETE FROM products WHERE id='$id_to_delete' LIMIT 1")or die(mysql_error());
 //unlink the image from server
 //remove the pic.....................
 $pictodelete=("../inventory_images/$id_to_delete.jpg");
 if(file_exists($pictodelete)){
 unlink($pictodelete);
 }
 header("location:inventory_list.php");
 exit();
 }
 ?>
 
 <?php 
 //parse the form data and add invetory item to the system
 if(isset($_POST['product_name'])){
 $product_name = mysql_real_escape_string($_POST['product_name']);
 $price = mysql_real_escape_string($_POST['price']);
 $category = mysql_real_escape_string($_POST['category']);
 $subcategory = mysql_real_escape_string($_POST['subcategory']);
 $details = mysql_real_escape_string($_POST['details']);
 //see if that product name is an identical match to another product in the system
 $sql = mysql_query("SELECT id FROM products WHERE product_name = '$product_name' LIMIT 1");
 $productMatch = mysql_num_rows($sql);
 if($productMatch > 0){
 echo'sorry you tride to place a duplicate "PRODUCT NAME" into the system, <a href="inventory_list.php">click here </a>';
 exit();
 }
 //add this product into the database now
 $sql = mysql_query("INSERT INTO products(product_name,price,details,category,subcategory,date_added)
 VALUES('$product_name','$price','$details','$category','$subcategory',now())")or die(mysql_error());
 $pid = mysql_insert_id();
 //place image in the folder
 $newname = "$pid.jpg";
 move_uploaded_file($_FILES['fileField']['tmp_name'],"../inventory_images/$newname");
 //header("location:inventory_list.php");
 ?>
 <script> location.replace("inventory_list.php"); </script>
<?php
 exit();
 }
 ?>
 
 <?php 
 //this block grabls the hole list for viewing
 $product_list ="";
 $sql = mysql_query("SELECT * FROM products ORDER BY date_added DESC");
 $productCount = mysql_num_rows($sql);
 if($productCount > 0){
 while($row = mysql_fetch_array($sql)){
 $id = $row["id"];
 $product_name = $row["product_name"];
 $date_added = strftime("%b,&nbsp;%d,&nbsp;%Y",strtotime($row["date_added"]));
 
 $product_list .= "$date_added&nbsp;-&nbsp;$id-$product_name &nbsp;&nbsp;&nbsp; <a href='inventory_edit.php?pid=$id'>edit</a>&nbsp;&bull;&nbsp;<a href='inventory_list.php?deleteid=$id'>delete</a> <br/>";
 
 }
 }else{
 $product_list = "you have no products list in your store yet";

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
        	
          <h1>Admin Pannel - Add Product</h1>
          <div id="panel-form"><br>
          
<div id="pageContent">
      <br />
      <div align="right" style="margin-right:32px;"><a href="inventory_list.php#inventoryFrom">+ Add New Inventory Item</a></div>
      <div align="left" style="margin-left:24px;">
        <h2>Inventory List</h2>
        <?php echo $product_list ; ?> 
        </div>
      <a name="inventoryFrom" id="inventoryFrom"></a>
      <h3>&darr; Add New Inventory Item From &darr;</h3>
      <form action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
      <table width="90%" border="0" cellpadding="6" cellspacing="0">
  <tr>
    <td width="20%">Product Name</td>
    <td width="80%"><label>
    <input name="product_name" type="text" id="product_name" size="64" />
    </label></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td><label>
    $<input name="price" type="text" id="price" size="12" />
    </label></td>
  </tr>
  <tr>
    <td>Category</td>
    <td><label>
    <select name="category"  id="category" >
    <option value=""></option>
    <option value="Beauty">Beauty</option>
    <option value="Health">Health</option>
    <option value="Diabetic">Diabetic</option>

    </select>
    </label></td>
  </tr>
  <tr>
    <td>Subcategory</td>
    <td><label>
    <select name="subcategory"  id="subcategory" >
    <option value=""></option>
    <option value="AntiWrinkleCream">AntiWrinkleCream</option>
    <option value="HerbalBleech">HerbalBleech</option>
     <option value="SlimmingTea">Slimming Tea</option>
    </select>
    </label></td>
  </tr>
  <tr>
    <td>Product Details</td>
    <td>
     <textarea name="details" type="text" id="details"  cols="64" rows="5"></textarea>
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
    <input type="submit" name="button" id="button" value="Add This Item Now"/>
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
              
          
          
             	        
      
        
       
			
            
          
            
		


        </div>
      <br class="clearfix">
    </div>
</div>
</body>
</html>	