<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("include/banner.php");?>

<?php 
 // error reporting
 error_reporting(E_ALL);
 ini_set('display_errors','1');
?>
 
<?php 
//check to see the url variable is set and that it exists in the database
if(isset($_GET['id'])){
//connect to mysql database
include"storescripts/connect_to_mysql.php";
$id = $_GET['id'];
//$id = preg_replace('#[^0-9]#i',$_GET['id']);
//use this va to check to see if this id exists, if yes then get the product
//details, if no then exit this script and give massage why
 $sql = mysql_query("SELECT * FROM products WHERE id='$id' LIMIT 1");
  $productCount = mysql_num_rows($sql);
  if($productCount > 0){
  //get all the product details
   while($row = mysql_fetch_array($sql)){
 $product_name = $row["product_name"];
 $price = $row["price"];
 $details = $row["details"];
 $category = $row["category"];
 $subcategory = $row["subcategory"];
 $date_added = strftime("%b,&nbsp;%d,&nbsp;%Y",strtotime($row["date_added"]));
 

 
 }
}else{
echo "that item does not exit.";
exit();

}

}else{
echo "data to render this page is missing.";
exit();

}
 
 mysql_close();
?>


<section id="content" role="main">
  <div class="wrapper">
            <aside class="side-column">
			  <div class="white-box">
               	<h2>Our Products</h2>
                	<ul>
                    	<li><a href="#">Beauty</a></li>
                        <li><a href="#">Health</a></li>
                      <li><a href="#">Diabetic</a></li>
                       
                    </ul><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
                </div>           				
                <figure>
                	<img src="images/panchkarma.jpg">
                    <figcaption>Panchkarma</figcaption>
                </figure>						
            </aside>
            <section class="mid-column2">
           	  <div id="product-wrapper" class="white-box clearfix">
                	<h2>Beauty Products</h2>
 
 <br>
     <table width="100%" border="0" cellpadding="15" cellspacing="0" bordercolor="#666666">
  <tr>
    <td width="20%" valign="top"><img src="inventory_images/<?php echo $id; ?>.jpg" width="320" height="240" alt="<?php echo $product_name; ?>" /><br />
    <a href="inventory_images/<?php echo $id; ?>.jpg">view full size image</a>
    </td>
    <td width="80%" valign="top">
    <h3><?php echo $product_name; ?></h3>
     <p><?php echo "$".$price; ?><br />
<br />
<?php echo "$subcategory $category"; ?> <br />
<br />
<?php echo $details; ?><br />
</p>
<form id="form1" name="form1" method="post" action="cart.php">
<input type="hidden" name="pid" id="pid" value="<?php echo $id; ?>"/>
<input type="submit" name="button" id="button" value="Add to Shoping Cart"/>
</form>
     
    </td>
  </tr>
</table>

                   <!-- Other Products -----------------
                    <div class="divider clearfix"></div>
                    <figure>
                    	<figcaption>Beauti</figcaption>
                    	<img src="images/product.jpg">
                        <a href="#" class="read-more">Read More</a>
                    </figure>
                    <figure>
                    	<figcaption>Beauti</figcaption>
                        <img src="images/product.jpg">
                        <a href="#" class="read-more">Read More</a>
                    </figure>
                    <figure>
                    	<figcaption>Beauti</figcaption>
                        <img src="images/product.jpg">
                        <a href="#" class="read-more">Read More</a>
                    </figure>
                    -------------------------------------->
              </div>
                
          <article>
                	<h1 class="page-title">&nbsp;</h1>
              </article>
            </section>
    	</div>
    </section>
	    
<?php include("include/footer.php");?>
