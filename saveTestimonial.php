<?php
include ('../classes/DbHandler.php');

$db = new DbHandler();
$db->connect();

//setting form values to variable
 $firstName = $_POST['txtFirstName'];
 $lastName = $_POST['txtLastName'];
 $age = $_POST['txtAge'];
 $location = $_POST['txtLocation'];
 $problem = $_POST['txtProblem'];
 $solution = $_POST['txtSolution'];
 $message = $_POST['txtMessage'];
 $achievement = $_POST['txtAchievement'];
 $imgPth= uploadImage();
 $insertQuery="INSERT INTO `achivers`(`achiver_id`, `first_name`, `last_name`, `location`, `age`, `problem`, `solution`, `message`, `achievement`, `picture`) VALUES ('null','".$firstName."','".$lastName."','".$location."','".$age."','".$problem."','".$solution."','".$message."','".$achievement."','".$imgPth."')";
         

if(!$db->insert($insertQuery)){
   echo 'there is error inserting record'; 
}else{
    echo 'data saved succefully';
}

   
function uploadImage(){
    /*$allowedExts = array("GIF", "JPEG", "JPG", "PNG");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);*/
    
    /*if ((($_FILES["file"]["type"] == "image/GIF")
    || ($_FILES["file"]["type"] == "image/JPEG")
    || ($_FILES["file"]["type"] == "image/JPG")
    || ($_FILES["file"]["type"] == "image/PJPG")
    || ($_FILES["file"]["type"] == "image/X-PNG")
    || ($_FILES["file"]["type"] == "image/PNG"))
    && ($_FILES["file"]["size"] < 200000)
    && in_array($extension, $allowedExts)) {*/
      if ($_FILES["file"]["error"] > 0) {
        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
      } else {
        echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
       echo $tmpLocation= $_FILES["file"]["tmp_name"];
       echo "<br/>";
       echo $finalLocatin= 'c:\\xampp\\htdocs\\oppsphp\\achivers\\'.$_FILES["file"]["name"];
       echo "<br/>"; 
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
          echo $_FILES["file"]["name"] . " already exists. ";
        } else {
          move_uploaded_file($tmpLocation, $finalLocatin);
          echo "Stored in: " . "upload\\" . $_FILES["file"]["name"];
          $imgPath = "achivers/".$_FILES["file"]["name"];
          return $imgPath;
          //echo '<img src="'.$imgPath.'" widht="150" height="250"/>';
        }
      }
   /* } else {
            echo "Invalid file";
            } */   
}
 