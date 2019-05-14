<?php
include("init.php");
include("../entities/doctor.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['doc_id']))
    {
        
    }
    else
    {
    $doc_id=$_POST['doc_id'];
    $adddoc = new Doctor();
    $adddoc->delete_doctor($doc_id);
    }
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Delete Doctor</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Delete Doctor</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Delete Doctor</h2>
			<p>Delete details of doctor</p>
		</div>						
			<ul >
			
					<li id="li_25" >
		<label class="description" for="element_25">Doctor ID </label>
		<div>
			<input id="doc_id" name="doc_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_25"><small>Enter Correct ID</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3741" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>