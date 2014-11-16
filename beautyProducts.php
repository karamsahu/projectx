<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("include/banner.php");?>

<?php 
//run a select query to get my letest 6 items
//connect to mysql database
include"storescripts/connect_to_mysql.php";
 $dynamicList ="";
 $category = "Clothing";
 $sql = mysql_query("SELECT * FROM products where category=\"$category\" ORDER BY date_added DESC LIMIT 6");
 $productCount = mysql_num_rows($sql);
 if($productCount > 0){
 while($row = mysql_fetch_array($sql)){
 $id = $row["id"];
 $product_name = $row["product_name"];
 $price = $row["price"];
 $date_added = strftime("%b,&nbsp;%d,&nbsp;%Y",strtotime($row["date_added"]));
 
 $dynamicList .= '<table width="100%" border="1" cellpadding="6" bordercolor="#666666">
       <tr>
         <td width="22%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666 1px solid;" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="99" height="73" border="1" /></a></td>
         <td width="78%" valign="top">' . $product_name . '<br />
           $' . $price . '<br /><a href="product.php?id=' . $id . '">View Product Details</a> </td>
       </tr>
     </table>';
 
 }
 }else{
 $dynamicList = "We have no products list in our store yet";

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
  <p>Newest Iteam Added to the Store</p>
     <p><?php echo $dynamicList; ?><br />
       <br />
     </p>

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
