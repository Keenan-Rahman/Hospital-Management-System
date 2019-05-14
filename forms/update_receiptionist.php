<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update Receptionist</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>





</head>
<body id="main_body" >
    
   
  
   
    
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update Receptionist</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Update Receptionist</h2>
			<p>Update details for receptionist </p>
		</div>						
			<ul >
			
					<li id="li_10" >
		<label class="description" for="receptionist_id">Receptionist ID </label>
		<div>
			<input id="receptionist_id" name="receptionist_id" class="element text medium" type="text" maxlength="255" value=""/> 
                        <input type="submit" value='Show Layer' id="check" name="check"  />
           </div><p class="guidelines" id="guide_10"><small>Enter Correct ID</small></p> 
		</li>

                            <div id="ifYes" style=" display:  none">
<?php
include("init.php");
include("../entities/receptionist.php");	
if(isset($_POST['check']))
{           
    
$reception_id = $_POST['receptionist_id'];
$rec = new receiptionist();
$rec->set_receiptionist_data($reception_id);

$f_name=$rec->get_first_name();
$l_name=$rec->get_last_name();
$cnic=$rec->get_cnic();
$dob=$rec->get_dob();
$gender=$rec->get_gender();
$phone_number=$rec->get_phone_number();
$address=$rec->get_address();
$reception_number=$rec->get_reception_number();
$password=$rec->get_password();
$salary=$rec->get_salary();
$department=$rec->get_department();

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
		<label class="description" for="employee_id">Reception ID </label>
		<div>
                    <input id="roo" name="roo" class="element text medium" type="text" maxlength="255" value="<?php echo "$reception_id"; ?>" readonly/> 
                        
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
			<input id="element_2" name="cnic" class="element text medium" type="text" maxlength="255" value="<?php echo "$cnic"; ?>"/> 
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
		</li>		<li id="li_6" >
		<label class="description" for="reception_number">Reception Number </label>
		<div>
			<input id="reception_number" name="reception_number" class="element text medium" type="text" maxlength="255" value="<?php echo "$reception_number"; ?>"/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="password">Password </label>
		<div>
			<input id="password" name="password" class="element text medium" type="text" maxlength="255" value="<?php echo "$password"; ?>"/> 
		</div> 
		</li>		<li id="li_8" >
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
		<div id="footer"></div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
      </div>      
          
    
	</body>
    
    
    
</html>






<?php
include("init.php");

if(isset($_POST['update']))
{
    
    
    
     if( empty($_POST['f_name']) || empty($_POST['l_name'])|| empty($_POST['password'])
             || empty($_POST['cnic'])|| empty($_POST['yy'])|| empty($_POST['mm'])
             || empty($_POST['dd'])|| empty($_POST['gender'])|| empty($_POST['phone_number'])
             || empty($_POST['address'])|| empty($_POST['salary'])|| empty($_POST['reception_number']))
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

$phone_number=$_POST['phone_number'];
$address=$_POST['address'];
$salary=$_POST['salary'];
$reception_number=$_POST['reception_number'];
$password=$_POST['password'];

$editemp = new receiptionist();
$edit=$editemp->edit_recieptionist($emp_id,$f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$reception_number,$salary,$password);

}
}
?>

