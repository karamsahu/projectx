<?php

session_start();
$con = mysql_connect("localhost","magicdietitian","Drgitika@2013");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$username = $_POST['username'];
$pass = $_POST['password'];
mysql_select_db("magicdietitian", $con);

$result = mysql_query("SELECT * FROM user WHERE username ='". $username ."' ");
$count=mysql_num_rows($result);
echo '<script>alert('.$username.$password.');</script>';
if($count!=1)
{
			echo '<script> alert("you are not a valid user")
                        history.back();
                        </script> ';
			
}

else 
       {
	   	
		while($row = mysql_fetch_array($result))
		  {
		  $username_1= $row['username'];
		  $password = $row['password'];
		   
		  }
		  if($username == $username_1 && $pass == $password)
			{	
				$_SESSION['username'] = $username_1;
				
				header("Location: manageHome.php");
				
			}
		  else
		  {
			echo ' <script> alert("wrong password please try again ")
			history.back();
			 </script> ';
		   }
}

?> 