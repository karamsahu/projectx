<?php

session_start();
$con = mysql_connect("localhost","magicdietitian","Drgitika@2013");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$email = $_POST['txtemail'];
$pass = $_POST['txtpassword'];
mysql_select_db("magicdietitian", $con);

$result = mysql_query("SELECT * FROM register WHERE email_id ='". $email ."' ");
$count=mysql_num_rows($result);

if($count!=1)
{
			echo ' <script> alert("you are not a registered member, please create new account")
                        history.back();
                        </script> ';
			//header("Refresh: 1 ; ../../index.php");
                        
			exit();
}

else 
       {
	   	global $fname;
		global $lname;
		while($row = mysql_fetch_array($result))
		  {
		  $email_id= $row['email_id'];
		  $password = $row['password'];
		   $fname = $row['firstName'];
		   $lname = $row['lastName'];
		  }
		  if($email == $email_id && $pass == $password)
			{	
				$_SESSION['USER'] = $email_id;
				$_SESSION['fname'] = $fname;
				$_SESSION['lname'] = $lname;
				header("Location: ../../myAccount.php");
				
			}
		  else
		  {
			echo ' <script> alert("wrong password try again")
                        history.back();
                        </script> ';
		   }
}

?> 