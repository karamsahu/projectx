
<?php 
	$dbhost = 'localhost';
	$dbuser = 'magicdietitian';
	$dbpass = 'Drgitika@2013';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}else if(! mysql_select_db('magicdietitian')){
		die('could not select db ' . mysql_error());	
	}else{
			//code to do database work
			$name =	mysql_real_escape_string($_POST['name']);
			$emailAddress = mysql_real_escape_string($_POST['email']);
			$mt = mysql_real_escape_string($_POST['BirthMonth']);
			$dt = mysql_real_escape_string($_POST['BirthDay']);
			$year = mysql_real_escape_string($_POST['BirthYear']);
			$gender = mysql_real_escape_string($_POST['gender']);
			$phone = mysql_real_escape_string($_POST['phone']);
	
	//echo("name".$name."email".$emailAddress."gender".$gender."moth".$mt."phone".$phone."yer".$year."day".$dt);
	
	if($name==""||$emailAddress=""||$mt=""||$dt=""||$year==""||$gender=""||$phone==""){
			echo "<p> please fill all details.</P>";
			}else{		
				$qrySignUp="INSERT INTO register (firstName, email_id, contact)
				VALUES ('$name', '$emailAddress', '$phone')";
				if(mysql_query($qrySignUp)){
					/*creating subscribed session to prevent signup again*/
					session_start();				
					$_SESSION['sbscribed']= 1;
					$_SESSION['subscriberName'] = $name;
					$_SESSION['subscriberEmail'] =$emailAddress;
					//echo "<p>Your are successfully registered.</p>";
					/*trying to send mail to client*/
?>					
					<script type="text/javascript">
window.setTimeout('history.back();', 5000); // waits 5 seconds before going back
</script>
<?php					
					$adminMessage = '<html><head></head><body>';
				$adminMessage .= '<table border="1" rules="all" style="table {
											width:350px;
										}
										table, th, td {
											border: 1px solid black;
											border-collapse: collapse;
										}
										th, td {
											padding: 5px;
											text-align: left;
										}" cellpadding="10">';
				$adminMessage .= "<tr><th style='background-color:#58D3F7' colspan='2'><strong> :: Subscriber Details ::</strong></th></tr>";
				$adminMessage .= "<tr ><td><strong>Name:</strong> </td><td>". $name ."</td></tr>";
				$adminMessage .= "<tr><td><strong>Email:</strong> </td><td>".$_POST['email']."</td></tr>";
				$adminMessage .= "<tr><td><strong>Date of Birth </strong> </td><td>" .$_POST['BirthDay']."-".$_POST['BirthMonth']."-".$year . "</td></tr>";
				$adminMessage .= "<tr><td><strong>Gender:</strong> </td><td>" .$_POST['gender']. "</td></tr>";
				$adminMessage .= "<tr><td><strong>Phone Number:</strong> </td><td>" . $phone . "</td></tr>";
				$adminMessage .= "</table>";
				$adminMessage .= "</body></html>";
				//echo $adminMessage;
				sendEmail("ALERT@MAGICDIETITIAN.COM","drgeetika2013@gmail.com","Congratulations ! A new subscriber linked with you.",$adminMessage);
				$thankyouMsg = file_get_contents('http://www.magicdietitian.com/thankyou.php');
//				echo $thankyouMsg;
								
				sendEmail("DO_NOT_REPLY@MAGICDIETITIAN.COM",$_POST['email'],"Subscription confirmation with magicdietitian.com",$thankyouMsg);
				echo "<p>Congratulations ! you have been subscribed successfully.</p>";
//print $thankyouMsg;
				?>
				 You will be redirected to homeage in 5 seconds. <a href="http://www.magicdietitian.com">click here </a> if you are not auto redirected.
				<?php
				

			}else{
				echo "<p>There is some error while subscribing. please try again later.</p>".mysql_error();
			}

		}//if closed		
			
		}//else closed

?>

<?php
	function sendEmail($from,$to,$subject,$message){
		$status = false;
		
		
		$headers = "From: " . strip_tags($from) 	. "\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
		$headers .= "CC: dr@magicdietitian.com\r\n";
		$headers .= "BCC: drgeetika25@gmail.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
			mail($to, $subject, $message, $headers);
			//echo 'mail sent';
		
		}

?>