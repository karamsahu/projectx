<?php
$dbhost = 'localhost';
$dbuser = 'magicdietitian';
$dbpass = 'Drgitika@2013';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db('magicdietitian')or die(mysql_error());
?>