


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update Employee</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update Employee</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Update Employee</h2>
			<p>Update details for employee</p>
		</div>						
			<ul >
			
						<li id="li_10" >
		<label class="description" for="employee_id">Employee ID </label>
		<div>
			<input id="employee_id" name="employee_id" class="element text medium" type="text" maxlength="255" value=""/> 
                        <input type="submit" value='Show Layer' id="check" name="check"  />
           </div><p class="guidelines" id="guide_10"><small>Enter Correct ID</small></p> 
		</li>

                            <div id="ifYes" style=" display:  none">
<?php
include("init.php");
include("../entities/employee.php");	
if(isset($_POST['check']))
{           
    
$employee_id = $_POST['employee_id'];
$rec = new Employee();
$rec->set_employee_data($employee_id);

$f_name=$rec->get_first_name();
$l_name=$rec->get_last_name();
$cnic=$rec->get_cnic();
$dob=$rec->get_dob();
$gender=$rec->get_gender();
$phone_number=$rec->get_phone_number();
$address=$rec->get_address();

$salary=$rec->get_salary();
$job=$rec->get_job();

echo "
<script type=\"text/javascript\">

if(document.getElementById('check').value=='Hide Layer'){
document.getElementById('check').value = 'Show Layer';
document.getElementById('ifYes').style.display = 'none';
}

else{

document.getElementById('ifYes').style.display = 'inline';

}

</script> ";

} ?>
                                    	<li id="li_11" >
		<label class="description" for="employee_id">Employee ID </label>
		<div>
                    <input id="roo" name="roo" class="element text medium" type="text" maxlength="255" value="<?php echo "$employee_id"; ?>" readonly/> 
                        
        	</li>
                       
  
                                <li id="li_1" >
     
        <label class="description" for="element_1">Receptionist Name </label>
		<span>
                    <input id="f_name" name= "f_name" class="element text" maxlength="255" size="8" value="<?php echo "$f_name"; ?>"/>
			<label>First</label>
		</span>
		<span>
			<input id="l_name" name= "l_name" class="element text" maxlength="255" size="14" value="<?php echo "$l_name"; ?>"/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">CNIC </label>
		<div>
			<input id="cnic" name="cnic" class="element text medium" type="text" maxlength="255" value="<?php echo "$cnic"; ?>"/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3"> Date of Birth </label>
		<span>
			<input id="dd" name="dd" class="element text" size="2" maxlength="2" value="<?php echo substr($dob,8, 2);   ?>" type="text"> /
		<label for="dd">DD</label>
		</span>
		<span>
			<input id="mm" name="mm" class="element text" size="2" maxlength="2" value="<?php echo substr($dob,5, 2);   ?>" type="text"> /
			<label for="mm">MM</label>
		</span>
		<span>
	 		<input id="yy" name="yy" class="element text" size="4" maxlength="4" value="<?php echo substr($dob,0, 4); ?>" type="text">
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
                    <?php
                    if ($gender=='M')
                    {
                        echo '<input id="element_9_1" name="gender" class="element radio" type="radio" value="M" checked />';
  echo '<label class="choice" for="element_9_1">Male</label>';
echo '<input id="element_9_2" name="gender" class="element radio" type="radio" value="F"  />';
echo '<label class="choice" for="element_9_2">Female</label>';
                    }
                    else
                    {
                        echo '<input id="element_9_1" name="gender" class="element radio" type="radio" value="M"  />';
  echo '<label class="choice" for="element_9_1">Male</label>';
echo '<input id="element_9_2" name="gender" class="element radio" type="radio" value="F" checked />';
echo '<label class="choice" for="element_9_2">Female</label>';
                    }
                    
                    ?>
                   
		</span> 
		</li>		<li id="li_4" >
		<label class="description" for="phone_number">Phone Number </label>
		<div>
			<input id="phone_number" name="phone_number" class="element text medium" type="text" maxlength="255" value="<?php echo "$phone_number"; ?>"/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="address">Address </label>
		<div>
			<textarea id="address" name="address" class="element textarea medium"  ><?php echo "$address"; ?></textarea> 
		</div><p class="guidelines" id="guide_5"><small>Enter Permanent Address</small></p> 
		</li>
                
                
                               <li id="li_2" >
		<label class="description" for="job">Job
 </label>
		<div>
 <?php
		
    include("init.php");
       $query1= "select job_name from jobs" ;
		//execute the query
		$result = mysql_query($query1,$con);
                
                
                       $query2= "select job_name from jobs where jobs_id=$job" ;
		//execute the query
		$result2 = mysql_query($query2,$con);
$row2 = mysql_fetch_array($result2);
                
                if(!$result){
                    echo "<script>alert('Query Not Fetched')</script>";             //generate pop up
                }
		
		//get the picture data which will be binary
echo "<select name='job'>";
echo "<option value='" . $row2['job_name']."'>" . $row2['job_name'] ."</option>";

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

$query2= "select ward_id,ward_name from ward" ;
$result = mysql_query($query2,$con);

$query3= "select ward_id from employee_ward where employee_id=$employee_id" ;


while ($row = mysql_fetch_array($result))
{
    $che=1;
    $result3 = mysql_query($query3,$con);
    while($row3 = mysql_fetch_array($result3))
    {
        if($row['ward_id']==$row3['ward_id'])
        {
            $dd=$row['ward_name'];
echo "<input id='$dd' name='ward_name[]' class='element checkbox' type='checkbox' value='$dd' checked/>";
echo "<label class='choice' for='$row[ward_name]'>$row[ward_name]</label>";
$che=2;
break;
        }
    }
    
    if($che==1)
    {
$dd=$row['ward_name'];
echo "<input id='$dd' name='ward_name[]' class='element checkbox' type='checkbox' value='$dd'/>";
echo "<label class='choice' for='$row[ward_name]'>$row[ward_name]</label>";
    }

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
		<label class="description" for="salary">Salary </label>
		<span class="symbol">Rs.</span>
		<span>
			<input id="salary" name="salary" class="element text currency" size="10" value="<?php echo "$salary"; ?>" type="text" />	
			<label for="salary">Rupees</label>
		</span>
		 
		</li>   
                            
                            
                            
                            
                            
                            
                            
                            
						<li class="buttons">
			    <input type="hidden" name="form_id" value="3657" />
			    
				<input id="saveForm" class="button_text" type="submit" id="update" name="update" value="Update" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>



<?php
include("init.php");

if(isset($_POST['update']))
{
    
    
    
     if( empty($_POST['f_name']) || empty($_POST['l_name'])|| empty($_POST['l_name'])
             || empty($_POST['cnic'])|| empty($_POST['yy'])|| empty($_POST['mm'])
             || empty($_POST['dd'])|| empty($_POST['gender'])|| empty($_POST['phone_number'])
             || empty($_POST['address'])|| empty($_POST['salary'])|| empty($_POST['job']))
{
//////////////////////////create a alert box here
     
}
else
{
$emp_id=$_POST['roo'];
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
$salary=$_POST['salary'];
$job_name=$_POST['job'];
$result = mysql_query("select jobs_id from jobs where job_name = '$job_name'"); 
$row = mysql_fetch_assoc($result);
$jobs_id =$row["jobs_id"];


$editemp = new Employee();
$edit=$editemp->edit_employee($emp_id,$f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$jobs_id,$salary);

if(!empty($_POST['ward_name'])){
    $editw=$editemp->dl_ward();
// Loop to store and display values of individual checked checkbox.
foreach($_POST['ward_name'] as $wards){
    $editw=$editemp->edit_ward($wards);
//echo $wards."</br>";
}
}
}
}
?>





