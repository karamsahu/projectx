<?php session_start(); ?>
<?php include("include/header.php");?>
<?php include("include/upperNav.php");?>
<?php include("include/mainNav.php");?>
<?php include("include/banner.php");?>

<?php 
//session_start();
 // error reporting
 error_reporting(E_ALL);
 ini_set('display_errors','1');
 //connect to mysql database
include"storescripts/connect_to_mysql.php";
?>

<?php 
//section 1 (if user attempts to add somthing to the cart from the product page)
if(isset($_POST['pid'])){
$pid = $_POST['pid'];
$wasFound = false;
$i=0;
//if the cart session varibles is not set or cart arrey is empty
if(!isset($_SESSION["cart_array"]) || count($_SESSION["cart_array"]) < 1){
//run if the cart is empty or not set
$_SESSION["cart_array"]=array(0=>array("item_id"=>$pid, "quantity"=>1));
}else{
//run if the cart has at list one item in it
foreach($_SESSION["cart_array"]as $each_item){
$i++;
while(list($key,$value)= each($each_item)){
if($key=="item_id"&& $value == $pid){
//that item is in cart alredy so let's aduject is quantity using array_splice()
array_splice($_SESSION["cart_array"],$i-1,1,array(array("item_id"=>$pid, "quantity" => $each_item['quantity']+1)));
$wasFound = true;
    }// close if condition 
   }//close while loop
  }//close for each loop
  if($wasFound==false){
  array_push($_SESSION["cart_array"],array("item_id" => $pid, "quantity" => 1));
  }
 }
 //header("location:http://www.magicdietitian.com/cart.php");
 //echo '<a href="http://www.magicdietitian.com/cart.php">Diabetic</a>';

?>
 <script> location.replace("cart.php"); </script>
<?php 
 exit();
}
?>

<?php 
//section 2 (if user choose to empty their shopping cart)
if(isset($_GET['cmd'])&& $_GET['cmd']=="emptycart"){
   unset($_SESSION["cart_array"]);
   }

?>

<?php 
//section 3 (if user choose to adjust item quantity)
if(isset($_POST['item_to_adjust'])&& $_POST['item_to_adjust']!=""){
 //execute some code
 $item_to_adjust= $_POST['item_to_adjust'];
 $quantity= $_POST['quantity'];
 $i=0;
   foreach($_SESSION["cart_array"]as $each_item){
   $i++;
   while(list($key,$value)= each($each_item)){
    if($key=="item_id"&& $value == $item_to_adjust){
//that item is in cart alredy so let's aduject is quantity using array_splice()
      array_splice($_SESSION["cart_array"],$i-1,1,array(array("item_id"=>$item_to_adjust, "quantity" => $quantity)));
    
    }// close if condition 
   }//close while loop
  }//close for each loop
 }

?>

<?php 
//section 4 (if user want to remove an item form  cart)
if(isset($_POST['index_to_remove'])&& $_POST['index_to_remove']!=""){
//access the array and run code to remove that array index
   $key_to_remove = $_POST['index_to_remove'];
   if(count($_SESSION["cart_array"]) <= 1){
    unset($_SESSION["cart_array"]);
   }else{
    unset($_SESSION["cart_array"]["$key_to_remove"]);
    sort($_SESSION["cart_array"]);	
  }
}
?>

<?php 
//section 5 (render the cart for the user to view)
$cartOutput="";
$cartTotal="";
$pp_checkout_btn='';
$product_id_array='';
if(!isset($_SESSION["cart_array"])|| count ($_SESSION["cart_array"])<1){
$cartOutput = "<h2 align='center'> Your Shoping Cart Is Empty </h2>";
}else{
//start paypal cheakout btn
$pp_checkout_btn.='<form action="https://www.paypal.com/cgi-bin/webscr"method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="kjuyal2@gmail.com">';
//start the for each loop
$i=0;
foreach($_SESSION["cart_array"]as $each_item){

$item_id = $each_item['item_id'];
$sql = mysql_query("SELECT*FROM products WHERE id = '$item_id' LIMIT 1");
while($row = mysql_fetch_array($sql)){
$product_name = $row["product_name"];
$price = $row["price"];
$details = $row["details"];
}
$pricetotal = $price * $each_item['quantity'];
$cartTotal = $pricetotal + $cartTotal;
//NOT WORKING
//setlocale(LC_MONETARY,"en_US");
//$pricetotal = money_format("%10.2n",$pricetotal);

//DYNAMIC cheakout btn assembly
$x=$i+1;
$pp_checkout_btn.='<input type="hidden" name="item_name_' . $x . '" value="' . $product_name . '">
<input type="hidden" name="amount_' . $x . '" value="' . $price . '">
<input type="hidden" name="quantity_' . $x . '" value="' . $each_item['quantity'] . '">';
//create the product array variable
$product_id_array.="$item_id-" . $each_item['quantity'].",";
//DYNAMIC table row assembly
$cartOutput.="<tr>";
$cartOutput.='<td> <a href="product.php?id=' . $item_id . '"> ' . $product_name . '</a><br/> <img src="inventory_images/' . $item_id . '.jpg"alt="' . $product_name . '"width="40"height="52"border="1"/></td>';
$cartOutput.='<td>' . $details . '</td>';
$cartOutput.='<td>$' . $price . '</td>';
$cartOutput.='<td><form action="cart.php" method="post">
<input name="quantity" type="text" value="' . $each_item['quantity'] . '" size="1" maxlength="2" />
<input name="adjustBtn' . $item_id . '" type="submit" value="change" />
<input name="item_to_adjust" type="hidden" value="' . $item_id . '" />
</form></td>';

//$cartOutput.='<td>' . $each_item['quantity'] . '</td>';
$cartOutput.='<td>$' . $pricetotal . '</td>';
$cartOutput.='<td> <form action="cart.php" method="post"><input name="deleteBtn' . $item_id . '" type="submit" value="x" /><input name="index_to_remove" type="hidden" value="' . $i . '" /></form> </td>';
$cartOutput.='</tr>';
$i++;

//while(list($key,$value) = each($each_item)){
//$cartOutput.="$key:$value<br/>";
  //}
 }
 //NOT WORKING
 //setlocale(LC_MONETARY,"en_us");
 //$pricetotal = money_format("%10.2n",$cartTotal);
 $cartTotal = "<div style='font-size:18px; margin-top:12px;' align='right'>Cart Total : $".$cartTotal. "USD </div>";
 //finish the paypal cheakout btn
 $pp_checkout_btn.='<input type="hidden" name="custom" value="' . $product_id_array . '">
<input type="hidden" name="notify_url" value="https://www.yoursite.com/storescripts/my_ipn.php">
<input type="hidden" name="return" value="https://www.yoursite.com/checkout_complete.php">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="cbt" value="Return to The Store">
<input type="hidden" name="cancel_return" value="https://www.yoursite.com/paypal_cancel.php">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-but01.gif" name="submit" alt="Make payments with paypal- its fast, free and secure!">
</form>';
}
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
 
     <div style="margin:24px; text-align:left;">
    
    <br />
    <br />
    <table width="100%" border="1" cellspacing="0" cellpadding="6">
      <tr bgcolor="#c5dffa">
        <td><strong>Product</strong></td>
        <td><strong>Product Description</strong></td>
        <td><strong>Unit Price</strong></td>
        <td><strong>Quantity</strong></td>
        <td><strong>Total</strong></td>
        <td><strong>Remove</strong></td>
      </tr>
      <?php echo $cartOutput; ?>
      <!--<tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>-->
    </table>
    <?php echo $cartTotal; ?>
    <br /><br />
   <?php echo  $pp_checkout_btn; ?>
    <br /><br />
    <a href="cart.php?cmd=emptycart">Click Here to Empty Your Shoping Cart</a>
    </div>
    
    

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
