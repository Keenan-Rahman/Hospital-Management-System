
<?php

session_start();
include("init.php");
include("../entities/inpatient.php");

if(isset($_POST['submit']))
{
//    echo 'hello';
 if( empty($_POST['pat_id']) || empty($_POST['yy'])|| empty($_POST['mm'])|| empty($_POST['dd'])
         || empty($_POST['nursing_charges'])|| empty($_POST['medical_charges']) )
{
//////////////////////////create a alert box here
     
}
else
{
$pat_id=$_POST['pat_id'];
$_SESSION['pat_id']=$pat_id;
$departure_date=$_POST['yy']."-".$_POST['mm']."-".$_POST['dd'];
$nursing_charges=$_POST['nursing_charges'];
$medical_charges=$_POST['medical_charges'];

$a=intval($nursing_charges);
$b=intval($medical_charges);
$c=$a+$b;
$_SESSION['nursing_charges']=$nursing_charges;
$_SESSION['medical_charges']=$medical_charges;
$_SESSION['sum']=$c;

$add_inpat_depart = new Inpatient();
$add=$add_inpat_depart->inpat_depart($pat_id,$departure_date,$nursing_charges,$medical_charges);
header("location: ../invoice/inpat_dept.php");
}

}

?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Inpatient Departure</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">

    
    
    
    
    
    
    
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Inpatient Departure</a></h1>
		<form id="form_3729" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Inpatient Departure</h2>
			<p>Enter information of leaving patient.</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Patient ID </label>
		<div>
			<input id="pat_id" name="pat_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_4">Departure Date</label>
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
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="images/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectEuropeDate
			});
		</script>
		 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Nursing Charges</label>
		<div>
			<input id="nursing_charges" name="nursing_charges" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Medical Charges</label>
		<div>
			<input id="medical_charges" name="medical_charges" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>	
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3729" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Create Bill" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>