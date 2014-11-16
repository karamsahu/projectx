<?php 
// Connects to your Database
    $username = "magicdietitian";
	$password = "Drgitika@2013";
	$db = "magicdietitian";	
    $host ="localhost";
 $conn = mysql_connect("$host", "$username", "$password") or die(mysql_error()); 
 if(!$conn){
	  die(mysql_error());
 }else{
	if(!mysql_select_db("$db")){
		   die(mysql_error());
		}else{
				echo"connected successfully";
			}
 }
 
 
?>