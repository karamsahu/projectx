<?php 
$db_host ="localhost";
$db_username ="magicdietitian";
$db_pass ="Drgitika@2013";
$db_name ="magicdietitian";

mysql_connect("$db_host","$db_username","$db_pass")or die("could not connect to mysql");
mysql_select_db("$db_name")or die("no database");


?>
