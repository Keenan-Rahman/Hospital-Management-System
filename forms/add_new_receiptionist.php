<?php

session_start();
include("init.php");
include("../entities/receptionist.php");
include("../entities/department.php");

if(isset($_POST['submit']))
{
    

 if( empty($_POST['f_name']) || empty($_POST['l_name'])|| empty($_POST['mm'])|| empty($_POST['dd'])
         || empty($_POST['yy'])|| empty($_POST['cnic'])|| empty($_POST['gender'])|| empty($_POST['phone_number'])|| empty($_POST['address'])
         || empty($_POST['password'])|| empty($_POST['salary'])|| empty($_POST['reception_number'])
         || empty($_POST['department']) )
{
//////////////////////////create a alert box here
     
}
else
{
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$cnic=$_POST['cnic'];
$dob=$_POST['yy']."-".$_POST['mm']."-".$_POST['dd'];
$gender=$_POST['gender'];
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
$reception_number=$_POST['reception_number'];
$password=$_POST['password'];
$salary=$_POST['salary'];
$department=$_POST['department'];


$_SESSION['rec_reg_user']=$f_name;

header("location: card.php");
$add_recept = new receiptionist();
$add_recept->add_receiptionist($f_name, $l_name, $cnic, $dob, $gender, $phone_number, $address, $reception_number, $password, $salary , $department);
}

}


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add New Receptionist</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Add New Receptionist</a></h1>
		<form id="form_3741" class="appnitro"  method="post">
					<div class="form_description">
			<h2>Add New Receptionist</h2>
			<p>This form is used to register new receiptionist</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Receptionist Name </label>
		<span>
			<input id="f_name" name= "f_name" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="l_name" name= "l_name" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>
        
        <li id="li_23" >
		<label class="description" for="department">Department </label>
		<div>
 <?php
		
    include("init.php");

		
       $query1= "select depatment_name from department" ;
		//execute the query
		$result = mysql_query($query1,$con);
		
		//get the picture data which will be binary

echo "<select name='department'>";
 echo "<option value='" .''."'>" . '' ."</option>";
while ($row = mysql_fetch_array($result))	
		
 {
    echo "<option value='" . $row['depatment_name'] ."'>" . $row['depatment_name'] ."</option>";
}
echo "</select>";

?>
		</div> 
		</li>		
        
        		<li id="li_2" >
		<label class="description" for="cnic">CNIC </label>
		<div>
			<input id="cnic" name="cnic" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3"> Date of Birth </label>
		<span>
			<input id="dd" name="dd" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="dd">DD</label>
		</span>
		<span>
			<input id="mm" name="mm" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="mm">MM</label>
		</span>
		<span>
	 		<input id="yy" name="yy" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="yy">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Gender </label>
		<span>
			<input id="element_9_1" name="gender" class="element radio" type="radio" value="M" />
<label class="choice" for="element_9_1">Male</label>
<input id="element_9_2" name="gender" class="element radio" type="radio" value="F" />
<label class="choice" for="element_9_2">Female</label>

		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="phone_number">Phone Number </label>
		<div>
			<input id="phone_number" name="phone_number" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="address">Address </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_5"><small>Enter Permanent Address</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="reception_number">Reception Number </label>
		<div>
			<input id="reception_number" name="reception_number" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="password" name="password" class="element text medium" type="password" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="salary">Salary </label>
		<span class="symbol">Rs.</span>
		<span>
			<input id="salary" name="salary" class="element text currency" size="10" value="" type="text" />	
			<label for="salary">Rupees</label>
		</span>
		 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3741" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer"></div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
    
    
</body>
</html>