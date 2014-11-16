<?php 
require "connect_to_mysql.php";


$sqlcommand ="CREATE TABLE admin(
              id int(11)NOT NULL auto_increment,
			  username varchar(255)NOT NULL,
			  password varchar(255)NOT NULL,
			  last_log_date date NOT NULL,
			  PRIMARY KEY(id),
			  UNIQUE KEY username(username)
              )";
			  
			  
if(mysql_query($sqlcommand)){
echo "your admin table has been created successfully";
}else{
echo "CRITIAL ERROR admin table has been not created";
}

 ?>
   

