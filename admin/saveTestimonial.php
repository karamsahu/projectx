<?php
include ('../classes/DbHandler.php');

$db = new DbHandler();
$db->connect();

//getting values from form and setting to variable
 $firstName = $_POST['txtFirstName'];
 $lastName = $_POST['txtLastName'];
 $age = $_POST['txtAge'];
 $location = $_POST['txtLocation'];
 $problem = $_POST['txtProblem'];
 $solution = $_POST['txtSolution'];
 $message = $_POST['txtMessage'];
 $achievement = $_POST['txtAchievement'];
 //calling upload image funciton that return image path
 $imgPth= uploadImage();
 //seeting default image if nothing no image uploaded
 if($imgPth=='null' || $imgPth == ''){
     $this.$imgPth = 'achivers/default.jpg';
 }
 $insertQuery=
         "INSERT INTO `achivers`(`achiver_id`, `first_name`, `last_name`, "
         . "`location`, `age`, `problem`, `solution`, `message`, `achievement`, `picture`)"
         . " VALUES ('null','".$firstName."','".$lastName."','".$location."','".$age."',"
         . "'".$problem."','".$solution."','".$message."','".$achievement."','".$imgPth."')";
         
// this function retruns path as string 
// here we are passing the path to insert function of db class
if(!$db->insert($insertQuery)){
   echo '<script> alert("Error ! Nothing saved"); history.back();</script>'; 
}else{
    echo '<script>alert("Saved Successfullly"); history.back();</script>';
}
// checking the extention of the file choosen by user for upload.
// if typle type is image functio return true else false
function checkExtention(){
    $allowedExts = array("GIF", "JPEG", "JPG", "PNG");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);
    
    if ((($_FILES["file"]["type"] == "image/GIF")
    || ($_FILES["file"]["type"] == "image/JPEG")
    || ($_FILES["file"]["type"] == "image/JPG")
    || ($_FILES["file"]["type"] == "image/PJPG")
    || ($_FILES["file"]["type"] == "image/X-PNG")
    || ($_FILES["file"]["type"] == "image/PNG"))
    && ($_FILES["file"]["size"] < 200000)
    && in_array($extension, $allowedExts)){
        return true;
    }else{
        return false;
    }
}

// finally uploading image to server in Achivers folder
function uploadImage(){
    if ($_FILES["file"]["error"] > 0) {
        echo '<script> alert("Error Code : '. $_FILES["file"]["error"] ."); history.back();</script>";
		//echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    } else {
        /*echo "Upload: " . $_FILES["file"]["name"] . "<br>";
        echo "Type: " . $_FILES["file"]["type"] . "<br>";
        echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";*/
        $tmpLocation = $_FILES["file"]["tmp_name"];
        $finalLocatin = '../achivers/' . $_FILES["file"]["name"];
        if (file_exists("../achivers/" . $_FILES["file"]["name"])) {
            echo '<script> alert("'.$_FILES["file"]["name"]." already Exist); history.back();</script>";
        } else {
            move_uploaded_file($tmpLocation, $finalLocatin);
           // echo "Stored in: " . "achivers\\" . $_FILES["file"]["name"];
            $imgPath = "achivers/" . $_FILES["file"]["name"];
            //cho '<img src="'.$imgPath.'" widht="200" />';
            return $imgPath;
        }
    }
}
 