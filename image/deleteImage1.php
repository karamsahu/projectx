<?php
$con=mysql_connect( "localhost","magicdietitian","Drgitika@2013");
mysql_select_db ("magicdietitian",$con);


  $IMAGE = $_GET['delMe'];
  if(empty($IMAGE))
  {
    ?>
            <script type="text/javascript">
		alert("No Image selected.");
		history.back();
		</script>
			<?php
  }
  else
  {
      $fileName = $IMAGE;
	 
	  $query="DELETE FROM tbl_image WHERE photo = '$fileName'";
	  mysql_query ($query) or die ('could not delete:'.mysql_error());
	  unlink($fileName);
	  ?>
            <script type="text/javascript">
		alert("your file is successfully delete.");
		history.back();
		</script>
			<?php


    }
  

?>

