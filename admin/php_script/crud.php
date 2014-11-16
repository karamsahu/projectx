<?php 
if(isset($_GET['action']) && !empty($_GET['action'])) {
    $action = $_GET['action'];
	switch($action) {
        case 'delete' : deleteTestimonial();break;
        case 'edit' : editTestimonial();break;
		case 'list' : listTestimonial();break;
    }
}

function deleteTestimonial(){
	include_once('../../classes/DbHandler.php');
	$achiverId = $_GET['achiverId'];
	$db = new DbHandler();
	$db->connect();
	print($db->deleteTesti($achiverId));	
}

function editTestimonial(){
	include_once('../../classes/DbHandler.php');
	$achiverId = $_GET['achiverId'];
	$db = new DbHandler();
	$db->connect();
	$qry = "SELECT * FROM achivers WHERE achiver_id=".$achiverId;
	print_r($db->getContent($qry));	
	}
?>



