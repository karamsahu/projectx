<?php 
// check to see there are posted variables coming into the script
if($_SERVER['REQUEST_METHOD']!="POST")die("No Post Variables");
//initialize the $req variables and add cmd key value pair
$req = 'cmd=_notify-validate';
//read the post from paypal
foreach($_POST as $key => $value){
	$value = urlencode(stripslashes($value));
	$req .= "&$key = $value";
	}
//now post all of that back to paypal server using curl to validate everything with them
//fsockopen in php is troublesome at time so we use crul for this
//url = "https://www.sandbox.paypal.com/cgi-bin/webscr"
$url = "https://www.paypal.com/cgi-bin/webscr";
$curl_result=$curl_err='';
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$req);
curl_setopt($ch,CURLOPT_HTTPHEADER,array("Content-type:application/x-www-form-urlencoded","Content-Length:" .strlen($);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_setopt($ch,CURLOPT_VERBOSE,1);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,FALSE);
curl_setopt($ch,CURLOPT_TIMEOUT,30);
$curl_result=@curl_exec($ch);
$curl_err=curl_error($ch);
curl_close($ch);
$req = str_replace("&","\n",$req); //make it a nice list in case we want to email it to ourselves for reporting

//check that the result verify
if(strpos($curl_result,"VERIFIED")!==false){
$req.="\n\npaypal Verified OK";
}else{
$req.="\n\nData NOT verified from paypal!";
mail("you@youremail.com","IPN interaction not verified", "$req", "From: you@youremail.com");
exit();
}
//check number1
$receiver_email=$_POST['receiver_email'];
if($receiver_email!="you@youremail.com"){
$massage="Investigate why and how receiver email is wrong.Email =".$_POST['receiver_email'] . "\n\n\n$req";
mail("you@youremail.com","Receiver email is incorrect", $massage, "From: you@youremail.com");
exit();
}
//check number2
if($_POST['payment_status']!="Completed"){
}
//connect to mysql database
require_once 'connect_to_mysql.php';
//check number3
$this_txn = $_POST['txn_id'];
$sql = mysql_query("SELECT id FROM transactions WHERE txn_id='$this_txn' LIMIT 1");
$numRows = mysql_num_rows($sql);
if($numRows > 0){
$massage = "Duplicate transaction ID occured so we killed the IPN script.\n\n\n$req";
mail("you@youremail.com","Duplicate txn_id in the IPN system", $massage, "From: you@youremail.com");
exit();
}
//check number4
$product_id_string=$_POST['custom'];
$product_id_string=rtrim($product_id_string,",");

$id_str_array = explode(",",$product_id_string);
$fullAmount = 0;
foreach($id_str_array as $key => $value){
	$id_quantity_pair = explode("_",$value);
	$product_id = $id_quantity_pair[0];
	$product_quantity = $id_quantity_pair[1];
	$sql=mysql_query("SELECT price FROM products WHERE id='$product_id' LIMIT 1");
	while($row = mysql_fetch_array($sql)){
	$product_price = $row["price"];
	}
	$product_price = $product_price * $product_quantity;
	$fullAmount = $fullAmount + $product_price;
}
$fullAmount = number_format($fullAmount,2);
$grossAmount = $_POST['mc_gross'];
if($fullAmount!=$grossAmount){
$massage= "Possible Price Jack:".$_POST['payment_gross']."!= $fullAmount \n\n\n$req";
mail("you@youremail.com","Price Jack or Bad Programming", $massage, "From: you@youremail.com");
exit();
}
//end all security checks now in the database it gose
$txn_id = $_POST['txn_id'];
$payer_email = $_POST['payer_email'];
$custom = $_POST['custom'];
//place the transaction into the database
$sql = mysql_query("INSERT INTO transactions( product_id_array, payer_email, first_name, last_name, payment_date, mc_gross, payment_currency, txn_id, receiver_email, payment_type, payment_status, txn_type, payer_status, adderess_street, adderess_city, adderess_state, adderess_zip, adderess_country, adderess_status, notify_version, verify_sign, payer_id, mc_currency, mc_free)

VALUES('$custom', '$payer_email', '$first_name', '$last_name', '$payment_date', '$mc_gross', '$payment_currency', '$txn_id', '$receiver_email', '$payment_type', '$payment_status', '$txn_type', '$payer_status', '$adderess_street', '$adderess_city', '$adderess_state', '$adderess_zip', '$adderess_country', '$adderess_status', '$notify_version', '$verify_sign', '$payer_id', '$mc_currency', '$mc_free')")or die ("unable to execute the query");
mysql_close();
//mail yourself details
mail("you@youremail.com","NORMAL IPN RESULT YAY MONEY!", $req, "From: you@youremail.com");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>my Ipn</title>
</head>

<body>
</body>
</html>
