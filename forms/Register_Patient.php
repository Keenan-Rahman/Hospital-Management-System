     <?php


include("init.php");
include("../entities/patient.php");

if(isset($_POST['submit']))
{
    
   if( empty($_POST['f_name']) || empty($_POST['yy'])|| empty($_POST['mm'])|| empty($_POST['dd'])
         || empty($_POST['l_name'])|| empty($_POST['gender'])|| empty($_POST['phone_number']))
{
//////////////////////////create a alert box here
     
}
else
{
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$dob=$_POST['yy']."-".$_POST['mm']."-".$_POST['dd'];
$gender=$_POST['gender'];
$phone_number=$_POST['phone_number'];
if(!empty($_POST['address']))
{
$address=$_POST['address'];


$add_pat = new patient();
$add_pat->add_pat($f_name, $l_name,  $dob, $gender,$phone_number,$address);
}
else
{
    $add_pat = new patient();
$add_pat->add_pat1($f_name, $l_name,  $dob, $gender,$phone_number);
}

}
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Untitled Form</a></h1>
		<form id="form_3721" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Register Patient</h2>
			<p>This is used to register new patient</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Name </label>
		<span>
			<input id="f_name" name= "f_name" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="l_name" name= "l_name" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Date_Of_Birth </label>
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
	
		<span id="calendar_2">
			<img id="cal_img_2" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_2_3",
			baseField    : "element_2",
			displayArea  : "calendar_2",
			button		 : "cal_img_2",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>			<li id="li_4" >
		<label class="description" for="phone_number">Contact_No </label>
		<div>
			<input id="phone_number" name="phone_number" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
                	<li id="li_9" >
		<label class="description" for="element_9">Gender </label>
		<span>
			<input id="element_9_1" name="gender" class="element radio" type="radio" value="M" />
<label class="choice" for="element_9_1">Male</label>
<input id="element_9_2" name="gender" class="element radio" type="radio" value="F" />
<label class="choice" for="element_9_2">Female</label>

		</span> 
		</li>
                <li id="li_5" >
		<label class="description" for="address">Address </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_5"><small>Enter Permanent Address</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3721" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer"></div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
            
            
            
            
       

	</body>
</html>