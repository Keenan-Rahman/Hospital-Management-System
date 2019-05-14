<?php
include("init.php");
include("../entities/doctor.php");

if(isset($_POST['submit']))
{
$doc_id=$_POST['doc_id'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$cnic=$_POST['cnic'];
if(!empty($_POST['yy']) || !empty($_POST['mm']) || !empty($_POST['dd']))
{
$dob=$_POST['yy']."-".$_POST['mm']."-".$_POST['dd'];
}
else
{
$dob="";    
}
if(!empty($_POST['gender']))
{
$gender=$_POST['gender'];    
}
else
{
    $gender="";
}

//echo "$gender";
$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
$password=$_POST['password'];
$salary=$_POST['salary'];
$fees=$_POST['fees'];
$department=$_POST['department'];
$speciality=$_POST['speciality'];
$result = mysql_query("select department_id from department where depatment_name = '$department'"); 
$row = mysql_fetch_assoc($result);
$department_id =$row["department_id"];
$result1 = mysql_query("select specialist_id from specialist where speciality = '$speciality'"); 
$row1 = mysql_fetch_assoc($result1);
$specialist_id = $row1["specialist_id"];

$adddoc = new Doctor();
$add=$adddoc->edit_doctor($doc_id,$f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$password,$salary,$fees,$department_id,$specialist_id);
if(empty($_POST['hh1']) || empty($_POST['mm1']))
{
    
}
else
{
    $mon1=$_POST['hh1'].":".$_POST['mm1'];
    if(empty($_POST['hh2']) || empty($_POST['mm2']))
    {
    
    }
    else
    {
        $mon2=$_POST['hh2'].":".$_POST['mm2'];
        $adddoc->update_mon($mon1,$mon2);
    }
}

if(empty($_POST['hh3']) || empty($_POST['mm3']))
{
    
}
else
{
    $tues1=$_POST['hh3'].":".$_POST['mm3'];
    if(empty($_POST['hh4']) || empty($_POST['mm4']))
    {
    
    }
    else
    {
        $tues2=$_POST['hh4'].":".$_POST['mm4'];
        $id2=$adddoc->update_tues($tues1,$tues2);
    }
}
if(empty($_POST['hh5']) || empty($_POST['mm5']))
{
    
}
else
{
    $wed1=$_POST['hh5'].":".$_POST['mm5'];
    if(empty($_POST['hh6']) || empty($_POST['mm6']))
    {
    
    }
    else
    {
        $wed2=$_POST['hh6'].":".$_POST['mm6'];
        $id3=$adddoc->update_wed($wed1,$wed2);
    }

}
if(empty($_POST['hh7']) || empty($_POST['mm7']))
{
    
}
else
{
    $thurs1=$_POST['hh7'].":".$_POST['mm7'];
    if(empty($_POST['hh8']) || empty($_POST['mm8']))
    {
    
    }
    else
    {
        $thurs2=$_POST['hh8'].":".$_POST['mm8'];
        $id4=$adddoc->update_thurs($thurs1,$thurs2);
    }
}
if(empty($_POST['hh9']) || empty($_POST['mm9']))
{
    
}
else
{
    $fri1=$_POST['hh9'].":".$_POST['mm9'];
    if(empty($_POST['hh10']) || empty($_POST['mm10']))
    {
    
    }
    else
    {
        $fri2=$_POST['hh10'].":".$_POST['mm10'];
        $id5=$adddoc->update_fri($fri1,$fri2);
    }
}
if(empty($_POST['hh11']) || empty($_POST['mm11']))
{
    
}
else
{
    $sat1=$_POST['hh11'].":".$_POST['mm11'];
    if(empty($_POST['hh12']) || empty($_POST['mm12']))
    {
    
    }
    else
    {
        $sat2=$_POST['hh12'].":".$_POST['mm12'];
        $id6=$adddoc->update_sat($sat1,$sat2);
    }
}





//$id=$addI->getid();
//echo "$id";

}


?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update Doctor</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update Doctor</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Update Doctor</h2>
			<p>Update details for doctor</p>
		</div>						
			<ul >
			
					<li id="li_25" >
		<label class="description" for="element_25">Doctor ID </label>
		<div>
			<input id="doc_id" name="doc_id" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_25"><small>Enter Correct ID</small></p> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Doctor Name </label>
		<span>
			<input id="f_name" name= "f_name" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="l_name" name= "l_name" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="cnic">CNIC </label>
		<div>
			<input id="cnic" name="cnic" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Date of Birth </label>
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
		 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">Gender </label>
		<span>
			<input id="element_22_1" name="gender" class="element radio" type="radio" value="M" />
<label class="choice" for="element_22_1" >Male</label>
<input id="element_22_2" name="gender" class="element radio" type="radio" value="F" />
<label class="choice" for="element_22_2">Female</label>

		</span> 
		</li>		<li id="li_3" >
		<label class="description" for="phone_number">Phone Number </label>
		<div>
			<input id="phone_number" name="phone_number" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="address">Address </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium"></textarea> 
		</div><p class="guidelines" id="guide_5"><small>Enter Permanent Address </small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="password">Password </label>
		<div>
			<input type="password" id="password" name="password" class="element text medium"  maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="salary">Salary </label>
		<span class="symbol">Rs.</span>
		<span>
			<input id="salary" name="salary" class="element text currency" size="10" value="" type="text" />	
			<label for="salary">Rupees</label>
		</span>
		 
		</li>		<li id="li_8" >
		<label class="description" for="fees">Fees </label>
		<span class="symbol">Rs.</span>
		<span>
			<input id="fees" name="fees" class="element text currency" size="10" value="" type="text" />	
			<label for="fees">Rupees</label>
		</span>
		 
		</li>		<li id="li_23" >
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
		</li>		<li id="li_24" >
		<label class="description" for="element_24">Speciality  </label>
		<div>
		<?php
		
    include("init.php");

		
       $query2= "select speciality from specialist" ;
		//execute the query
		$result = mysql_query($query2,$con);
		
		//get the picture data which will be binary

echo "<select name='speciality'>";
    echo "<option value='" .''."'>" . '' ."</option>";
while ($row = mysql_fetch_array($result))	
		
 {
    echo "<option value='" . $row['speciality'] ."'>" . $row['speciality'] ."</option>";
}
echo "</select>";

?>
		</div> 
		</li>		<li class="section_break">
			<h3>Weekly Duty</h3>
			<p></p>
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Monday </label>
		<span>
			<input id="hh1" name="hh1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm1" name="mm1" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
                <p class="guidelines" id="guide_10"><small>Enter Duty Start Time</small></p> 
		</li>		<li id="li_21" >
		<label class="description" for="element_21">Monday </label>
		<span>
			<input id="hh2" name="hh2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm2" name="mm2" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		
		<span>
			
		</span><p class="guidelines" id="guide_21"><small>Enter Duty End Time</small></p> 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Tuesday </label>
		<span>
			<input id="hh3" name="hh3" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm3" name="mm3" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
			</span><p class="guidelines" id="guide_20"><small>Enter Duty Start Time</small></p> 
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Tuesday </label>
		<span>
			<input id="hh4" name="hh4" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm4" name="mm4" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
			</span><p class="guidelines" id="guide_19"><small>Enter Duty End Time</small></p> 
		</li>		<li id="li_18" >
		<label class="description" for="element_18">Wednesday </label>
		<span>
			<input id="hh5" name="hh5" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm5" name="mm5" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
			</span><p class="guidelines" id="guide_18"><small>Enter Duty Start Time</small></p> 
		</li>		<li id="li_17" >
		<label class="description" for="element_17">Wednesday </label>
		<span>
			<input id="hh6" name="hh6" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm6" name="mm6" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
			</span><p class="guidelines" id="guide_17"><small>Enter Duty End Time</small></p> 
		</li>		<li id="li_16" >
		<label class="description" for="element_16">Thursday </label>
		<span>
			<input id="hh7" name="hh7" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm7" name="mm7" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
				</span><p class="guidelines" id="guide_16"><small>Enter Duty Start Time</small></p> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Thursday </label>
		<span>
			<input id="hh8" name="hh8" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm8" name="mm8" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
					</span><p class="guidelines" id="guide_15"><small>Enter Duty End Time</small></p> 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Friday </label>
		<span>
			<input id="hh9" name="hh9" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm9" name="mm9" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
				</span><p class="guidelines" id="guide_14"><small>Enter Duty Start Time</small></p> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Friday </label>
		<span>
			<input id="hh10" name="hh10" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm10" name="mm10" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
				</span><p class="guidelines" id="guide_13"><small>Enter Duty End Time</small></p> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Saturday </label>
		<span>
			<input id="hh11" name="hh11" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm11" name="mm11" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
				</span><p class="guidelines" id="guide_11"><small>Enter Duty Start Time</small></p> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Saturday </label>
		<span>
			<input id="hh12" name="hh12" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="mm12" name="mm12" class="element text " size="2" type="text" maxlength="2" value=""/>  
			<label>MM</label>
		</span>
		<span>
				</span><p class="guidelines" id="guide_12"><small>Enter Duty End Time</small></p> 
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