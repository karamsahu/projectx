<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>form test</title>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body>
<script>
//callback handler for form submit
$("#ajaxform").submit(function(e)
{
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        success:function(data, textStatus, jqXHR)
        {
            //data: return data from server
			if(!textStatus){
				alert("saved");
			}else{
				alert("failed");
			}
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            //if fails     
        }
    });
    e.preventDefault(); //STOP default action
    e.unbind(); //unbind. to stop multiple form submit.
});
 
$("#ajaxform").submit(); //Submit  the FORM
</script>
<div id="sigunUpForm">
    <form name="ajaxform" id="ajaxform" action="signup.php" method="POST">
        First Name: <input type="text" name="fname" value =""/> <br/>
        Last Name: <input type="text" name="lname" value ="" /> <br/>
        Email : <input type="text" name="email" value=""/> <br/>
    </form>
    <button id="simple-post" class="btn btn-info">

    Run Code

</button>
</div>

</body>
</html>