<?php

include("../connection.php");

// checking if post array is loaded or not ?
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$firstName = $_POST['txtFirstName'];
$lastName = $_POST['txtLastName'];
$contact = $_POST['txtContact'];
$location = $_POST['Country'];
$state = $_POST['txtState'];
$address = $_POST['txtAddress'];
$to = "info@magicdietitian.com";

// setting session for email
//$to = "info@magicdietitian.com";
 $from = "$firstName";
 $lName = "$lastName";
 $contact = "$contact";
 $address = "$address";
 $location = "$location";
 $state  = "$state";
 $email = "$email";

$subject = "New user registered";//"New User Registeration details" ."\n" ;
 $message = "Name: ". $from ." ". $lName. "\n" . 'Mobile No: ' .$contact. "\n" . 'Sender Email : '.  $email . "\n" . 'Country: ' . $location . "\n" . 'City: '.$state . "\n" .'Local Address :' .$address . "\n" ;
 $headers = "From:" . $from . $lName;
 $str = str_replace(array("\r", "\n"), '', $message );
 mail($to,$subject,$message,$headers);
//echo "mail sent";
//xx-----------xx



if(isset($_POST['txtFirstName']))
{
	//checking wether email is registered or not ?
	// getting result
	
	$qryRegister = " SELECT email_id FROM register WHERE  email_id = '". $email ."' ";
	$resultRegister = mysql_query($qryRegister);

	//checking the number of rows returned by the query
	//-> if there are no rows returned , the visitor loginId and pass do nt exist in table
	//-> the visitor not registored
	//-> if a single row is returned the visitor loginid and pass exist, the visitor is register
	
	
	$numRowsRegister = mysql_num_rows($resultRegister);
	
	if($numRowsRegister > 0)
		{
		// if the visitor is registerd a call is made to the login success html page
	
		//header('Location: duplicateEmail.php');
		//echo "duplicate info";
		?>
		<script type="text/javascript">
		alert("The email address <?php echo $email; ?> is already registered.");
		history.back();
		</script>
    	<?php
		}
		else
		{
			//code to insert data to database
			
			$qryAddUser = " INSERT INTO register 
							(
							email_id,
							State,
							password,
							firstName,
							lastName,
							Contact,
							Country,
							Address
							) 
							VALUES 
							(
							'". $email ."',
							'". $state . "',
							'". $password . "',
							'". $firstName ."',
							'". $lastName . "',
							'". $contact . "',
							'". $location . "',
							'". $address . "'	
							)";
							
			
			
			// run insert command
			
			
			
			if (!mysql_query($qryAddUser))
  {
  die('Could not register: ' . mysql_error());
  }
			
			
						
		header( "refresh:3;url=../thankyou.php" );
        
        echo 'You\'ll be redirected in about 5 secs. If not, click <a href="../thankyou.php">here</a>.'; 
		exit;
        }
	
}

?>