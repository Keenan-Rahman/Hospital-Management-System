<?php
include("init.php");
include("../entities/employee.php");

if(isset($_POST['submit']))
{
 if( empty($_POST['f_name']) || empty($_POST['yy'])|| empty($_POST['mm'])|| empty($_POST['dd'])
         || empty($_POST['l_name'])|| empty($_POST['cnic'])|| empty($_POST['gender'])|| empty($_POST['phone_number'])
         || empty($_POST['address']) || empty($_POST['job']) || empty($_POST['salary']) || empty($_POST['ward_name']))
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
$job_name=$_POST['job'];
$result = mysql_query("select jobs_id from jobs where job_name = '$job_name'"); 
$row = mysql_fetch_assoc($result);
$jobs_id =$row["jobs_id"];
$salary=$_POST['salary'];
$addemp = new Employee();
$add=$addemp->add_employee($f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$jobs_id,$salary);


if(!empty($_POST['ward_name'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['ward_name'] as $wards){
    $addw=$addemp->add_ward($wards);
//echo $wards."</br>";
}
}
}

//echo"$jobs_id";
//$adddoc = new Doctor();
//$add=$adddoc->add_doctor($f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$password,$salary,$fees,$department_id,$specialist_id);


}


?>













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add New Employee</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Add New Employee</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Add New Employee</h2>
			<p>Enter details for new employee</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Employee Name </label>
		<span>
			<input id="f_name" name= "f_name" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="l_name" name= "l_name" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">CNIC </label>
		<div>
			<input id="cnic" name="cnic" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3"> Date of Birth </label>
		<span>
			<input id="dd" name="dd" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_1">DD</label>
		</span>
		<span>
			<input id="mm" name="mm" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_2">MM</label>
		</span>
		<span>
	 		<input id="yy" name="yy" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">YYYY</label>
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
		 
		</li>	<li id="li_22" >
		<label class="description" for="element_22">Gender </label>
		<span>
			<input id="element_22_1" name="gender" class="element radio" type="radio" value="M" />
<label class="choice" for="element_22_1" >Male</label>
<input id="element_22_2" name="gender" class="element radio" type="radio" value="F" />
<label class="choice" for="element_22_2">Female</label>

		</span> 
		</li>			<li id="li_4" >
		<label class="description" for="element_4">Phone Number </label>
		<div>
			<input id="phone_number" name="phone_number" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Address </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_5"><small>Enter Permanent Address</small></p> 
		</li>		<li id="li_12" >
		<label class="description" for="job">Job </label>
		<div>
		<?php
		
    include("init.php");

		
       $query2= "select job_name from jobs" ;
		//execute the query
		$result = mysql_query($query2,$con);
		
		//get the picture data which will be binary

echo "<select name='job'>";
    echo "<option value='" .''."'>" . '' ."</option>";
while ($row = mysql_fetch_array($result))	
		
 {
    echo "<option value='" . $row['job_name'] ."'>" . $row['job_name'] ."</option>";
}
echo "</select>";

?>
		</div><p class="guidelines" id="guide_12"><small>Select Correct Job</small></p> 
		</li>				
                
                
                <li id="li_1" >
		<label class="description" for="ward">Ward </label>
		<span>
	
                        
                        
                        
<?php
include("init.php");
$query2= "select ward_name from ward" ;
$result = mysql_query($query2,$con);
while ($row = mysql_fetch_array($result))
{
$dd=$row['ward_name'];
echo "<input id='$dd' name='ward_name[]' class='element checkbox' type='checkbox' value='$dd'/>";
echo "<label class='choice' for='$row[ward_name]'>$row[ward_name]</label>";
}
//$dd=$row['job_name'];
//echo "<input id='$dd' name='$dd' class='element checkbox' type='checkbox' value='$dd'/>";
//echo "<label class='choice' for='$row[job_name]'>$row[job_name]</label>";
//$dd=$row['job_name'];
//echo "<input id='$dd' name='$dd' class='element checkbox' type='checkbox' value='$dd'/>";
//echo "<label class='choice' for='$row[job_name]'>$row[job_name]</label>";

//while ($row = mysql_fetch_array($result))	
//		
// {
//    echo "<option value='" . $row['job_name'] ."'>" . $row['job_name'] ."</option>";
//}
//echo "</select>";
//
//
?>


		</span> 
		</li>
		
                
                
                
                <li id="li_8" >
		<label class="description" for="element_8">Salary </label>
		<span class="symbol">Rs.</span>
		<span>
			<input id="salary" name="salary" class="element text currency" size="10" value="" type="text" />	
			<label for="element_8">Rupees</label>
		</span>
		 
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