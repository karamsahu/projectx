<?php
$input = $_POST['page_name'];
$page_title = trim(preg_replace('/ +/', ' ', preg_replace('/[^A-Za-z0-9 ]/', ' ', urldecode(html_entity_decode(strip_tags($input))))));
include_once('db_connect.php');

if($page_title){
    $sql="SELECT post_title FROM post WHERE post_title LIKE '%$page_title%' or post_menu like '%$page_title%' or post_sub_menu like '%$page_title%'  LIMIT 5";
    $result = mysql_query($sql);
    
    echo "<table>";
    while($row = mysql_fetch_array($result))
      {
      echo "<tr><td></td><td><a href='".$row['post_title']."'>" .$row['post_title']. "</a></td></tr>";  
      }
    } else {
        echo " ";
    }
 echo "</table>";     
?> 