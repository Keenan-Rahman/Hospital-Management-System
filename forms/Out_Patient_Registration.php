      <?php


include("init.php");
include("../entities/outpatient.php");

if(isset($_POST['submit']))
{
    if( empty($_POST['patient_id']) || empty($_POST['yy'])|| empty($_POST['mm'])|| empty($_POST['dd'])
         || empty($_POST['doctor'])|| empty($_POST['hh1'])|| empty($_POST['mm1']) )
{
//////////////////////////create a alert box here
     
}
else
{
$patient_id=$_POST['patient_id'];
$doctor_name=$_POST['doctor'];
$app_date=$_POST['yy']."-".$_POST['mm']."-".$_POST['dd'];
$app_time=$_POST['hh1'].":".$_POST['mm1'];


$add_outpat = new outpatient();
$add_outpat->add_outpat($patient_id, $doctor_name,  $app_time, $app_date);
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
		<form id="form_3722" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Out Patient Registration</h2>
			<p>This form is used to register out patient</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="patient_id">Patient ID </label>
		<div>
			<input id="patient_id" name="patient_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="doctor_name">Doctor Name</label>
		<div>
		<?php
		
    include("init.php");

		
       $query1= "select doctor_id,first_name,last_name from doctor" ;
		//execute the query
		$result = mysql_query($query1,$con);
		
		//get the picture data which will be binary

echo "<select name='doctor'>";
    echo "<option value='" . $row[''] ."'>" . $row[''] ."</option>";
while ($row = mysql_fetch_array($result))	
		
 {
    echo "<option value='" . $row['doctor_id']. '&#32;'. $row['first_name']. '&#32;'.$row['last_name']."'>" . $row['doctor_id'] .'&#32;'. $row['first_name']. '&#32;'.$row['last_name']."</option>";
}
echo "</select>";

?>
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Appointment Time </label>
		<span>
			<input id="hh1" name="hh1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
		<label>HH</label>
		</span>
		<span>
			<input id="mm1" name="mm1" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span></li>		<li id="li_3" >
		<label class="description" for="element_4">Appointment Date</label>
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
		 
		</li>	
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3722" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer"></div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	
            
            
            
            </body>
</html>