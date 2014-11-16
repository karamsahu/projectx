<?php
$con=mysql_connect( "localhost","magicdietitian","Drgitika@2013");
mysql_select_db ("magicdietitian",$con);
$tittle = $_POST ['tittle'];


if(@$_POST ['submit'])
{
$file = $_FILES ['file'];
$name1 = $file ['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1== "")
{
?>
            <script type="text/javascript">
		alert("please select file in browser.");
		history.back();
		</script>
			<?php

}

if($name1!="")
{
	if(move_uploaded_file($tmppath, 'image/'.$name1))//image is a folder in which you will save image
		{
			$query="insert into tbl_image set photo='$name1' , tittle='$tittle'";
			mysql_query ($query) or die ('could not updated:'.mysql_error());
			?>
            <script type="text/javascript">
		alert("your file is successfully upload.");
		history.back();
		</script>
			<?php
			
		}
	}
}
?>

