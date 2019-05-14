



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update Department</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update Department</a></h1>
		<form id="form_5253" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Update Department</h2>
			<p></p>
		</div>						
			<ul >
			
                            
                            
                            
                            
                            
                            
						<li id="li_23" >
		<label class="description" for="department">Department </label>
		<div>
 <?php
		
    include("init.php");

		
       $query1= "select department_id,depatment_name from department" ;
		//execute the query
		$result = mysql_query($query1,$con);
      	
		//get the picture data which will be binary

echo "<select name='department'>";
    echo "<option value='" . $row[''] ."'>" . $row[''] ."</option>";
while ($row = mysql_fetch_array($result))			
 {
echo "<option value='" . $row['department_id']. '&#32;'. '&#32;(' .$row['depatment_name'].')' ."'>" . $row['department_id']. '&#32;'. '&#32;(' . $row['depatment_name'].')' ."</option>";
}
echo "</select>";

?>

                        <input type="submit" value='Show Data' id="check" name="check"  />
           </div><p class="guidelines" id="guide_10"><small>Enter Correct ID</small></p> 
		</li>

                            <div id="ifYes" style=" display:  none">
<?php
include("init.php");
include("../entities/department.php");	
$rec = new Department();
if(isset($_POST['check']))
{       
    if(!empty($_POST['department']))
    {
preg_match('/\d+/',$_POST['department'],$matches);
$int=$matches[0];    
    
 //   echo $int;
$id = $int;

$rec->set_dept_data($id);
//echo '$room_id';
$dept_name=$rec->get_dept_name();

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
    }
} 
?>
 
                                
                                
                                
                                
                                
                                      	<li id="li_11" >
		<label class="description" for="room_id">Department ID</label>
		<div>
                    <input id="roo" name="roo" class="element text medium" type="text" maxlength="255" value="<?php echo "$id"; ?>" readonly/> 
                        
        	</li>

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <li id="li_1" >
		<label class="description" for="element_1">Department Name </label>
		<div>
			<input id="department_name" name="department_name" class="element text medium" type="text" maxlength="255" value="<?php echo "$dept_name"; ?>"/> 
		</div> 
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
    
      if( empty($_POST['department_name']) )
{
//////////////////////////create a alert box here
     
}
else
{
$department_id=$_POST['roo'];
$department_name=$_POST['department_name'];

$editdept = new Department();

$edit=$editdept->edit_dept($department_id,$department_name);
}
//echo "<script>alert('$availability')</script>";

}



?>
