 <?php
	echo $content = $_GET['content'];
	echo $c_id = $_GET['cid'];
$dbhost = 'localhost';
$dbuser = 'magicdietitian';
$dbpass = 'Drgitika@2013';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
//$sql = "INSERT INTO contents values('".$content."')";
//$sql = "UPADTE contents SET content = $content";

$sql="UPDATE contents SET content='$content' WHERE cid='$c_id'";

mysql_select_db('magicdietitian');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";

mysql_close($conn);
?>