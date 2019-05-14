<?php
include("init.php");
include("../entities/department.php");



if(isset($_POST['submit']))
{
    if( empty($_POST['department_name']))
{
//////////////////////////create a alert box here
     
}
else
{
    
    
    
    
$department_name=$_POST['department_name'];

$adddept = new Department();

$add=$adddept->add_dept($department_name);
}
//echo "<script>alert('$room_type_id')</script>";

}



?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add New Department</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Add New Department</a></h1>
		<form id="form_5253" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Add New Department</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Department Name </label>
		<div>
			<input id="department_name" name="department_name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="5253" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>