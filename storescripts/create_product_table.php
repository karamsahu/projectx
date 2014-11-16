<?php 
require "connect_to_mysql.php";


$sqlcommand ="CREATE TABLE products(
              id int(11)NOT NULL auto_increment,
			  product_name varchar(255)NOT NULL,
			  price varchar(16)NOT NULL,
			  details text NOT NULL,
			  category varchar(16)NOT NULL,
			  subcategory varchar(16)NOT NULL,
			  date_added date NOT NULL,
			  PRIMARY KEY(id),
			  UNIQUE KEY product_name(product_name)
              )";
			  
			  
if(mysql_query($sqlcommand)){
echo "your products table has been created successfully";
}else{
echo "CRITIAL ERROR products table has been not created";
}

 ?>
   

