<?php 
// Connects to your Database
    $username = "magicdietitian";
	$password = "Drgitika@2013";
	$db = "magicdietitian";	
 $conn = mysql_connect("localhost", "$username", "$password") or die(mysql_error()); 
 mysql_select_db("$db") or die(mysql_error());
?>