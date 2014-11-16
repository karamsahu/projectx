<?php
if(!$_POST['keyword']){
    echo "";
    }
    else{
            include('db_connect.php');
            $keyword = $_POST['keyword'];
           $sql ="SELECT post_title FROM post WHERE post_title LIKE '%$keyword%'";
           $resultSet = mysql_query($sql);
           $row = mysql_fetch_array($resultSet);
           //echo $row;
           //echo $row['post_menu'];
         
        /* foreach ($row as $key => $value) {
             echo $value."<br/>";
            }*/
            
            while($row){
                echo $row['post_title']."<br/>";
            }
          
        }
?>