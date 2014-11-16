

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Delete Testimonial</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<link href="admin.css" rel="stylesheet" type="text/css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>      
><style type="text/css">
    
	input{
		height:30px;
		margin-bottom:5px;
		width:400px;
		padding:2px;
		margin-top:5px;
		}
	.content{
        width:900px;
        margin:0 auto;
    }
    #searchid
    {
        width:500px;
        border:solid 1px #000;
        padding:10px;
        font-size:14px;
    }
    #result
    {
        position:absolute;
        width:500px;
        padding:10px;
        display:none;
        margin-top:-1px;
        border-top:0px;
        overflow:hidden;
        border:1px #CCC solid;
        background-color: white;
    }
    .show
    {
        padding:10px;
        border-bottom:1px #999 dashed;
        font-size:15px;
        height:50px;
    }
    .show:hover
    {
        background:#4c66a4;
        color:#FFF;
        cursor:pointer;
    }
	

</style>
<script type="text/javascript">
	function delteClient(){
		var clientId  = $("#selClient").val();
		if(clientId == 'select'){
			alert("Please select client to delete.");
			}else{
		
		$.ajax({
			type:"GET",
			url: "php_script/crud.php",
			data: "action=delete&achiverId="+clientId,
			success: function(result){
					alert("Deleted Successfully"+result);
					location.reload();
				},
			error: function(err){
					alert("Error : Unable to delte");
				}
			});	
		}//else ends
		
		}//function ends
		
</script>
</head>
<body>
<?php
include ('../classes/DbHandler.php');

$db = new DbHandler();
$db->connect();
$result =  mysql_query("SELECT achiver_id, first_name, last_name from achivers");

?>

<div class="admin">
	<h1>Welcome to Admin Section</h1>
    <div id="content_wrapper">
        <div id="menu">
            <?php include('include/manageTestimonialMenu.php'); ?>
        </div>
        <div id="admin-content">
        	<!-- Content Comes Here -->
          <h1>:: Achivers - Testimonial ::</h1>
          <div id="panel-form">
            <!-- dynamically generated select box -->
                <select id="selClient">
                <option value="select"> -- Select -- </option>
				<?php if($result){ while ($row = mysql_fetch_array($result)) { $achiverId = $row['achiver_id']; $achiverName = $row['first_name']." ".$row['last_name']; ?>	
                    <option value="<?php echo $achiverId ?>"> <?php echo $achiverName ?></option>
                <?php } } ?>
                </select> 
                <button onClick="delteClient();" value="delete" >Delete</button>
                
          </div>
        </div>
      <br class="clearfix">
  </div>
</div>
</body>
</html>