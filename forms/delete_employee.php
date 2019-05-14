<?php
include("init.php");
include("../entities/employee.php");

if(isset($_POST['submit']))
{
    if(empty($_POST['employee_id']))
    {
        
    }
    else
    {
    $emp_id=$_POST['employee_id'];
    $dltemp = new Employee();
    $dltemp->delete_employee($emp_id);
    }
}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Delete Employee</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Delete Employee</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Delete Employee</h2>
			<p>Delete details for employee</p>
		</div>						
			<ul >
			
					<li id="li_14" >
		<label class="description" for="element_14">Employee ID </label>
		<div>
			<input id="employee_id" name="employee_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_14"><small>Enter Correct ID</small></p> 
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