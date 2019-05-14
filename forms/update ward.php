










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update Ward</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update Ward</a></h1>
		<form id="form_3646" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Update Ward</h2>
			<p></p>
		</div>						
			<ul >
						<li id="li_23" >
		<label class="description" for="ward">Ward </label>
		<div>
 <?php
		
    include("init.php");

		
       $query1= "select ward_id,ward_name from ward" ;
		//execute the query
		$result = mysql_query($query1,$con);
		
		//get the picture data which will be binary

echo "<select name='ward'>";
    echo "<option value='" . $row[''] ."'>" . $row[''] ."</option>";
while ($row = mysql_fetch_array($result))	
		
 {
    echo "<option value='" . $row['ward_id']. '&#32;'. '&#32;(' .$row['ward_name'].')' ."'>" . $row['ward_id']. '&#32;'. '&#32;(' . $row['ward_name'].')' ."</option>";
}
echo "</select>";

?>

                        <input type="submit" value='Show Data' id="check" name="check"  />
           </div><p class="guidelines" id="guide_10"><small>Enter Correct ID</small></p> 
		</li>

                            <div id="ifYes" style=" display:  none">
<?php
include("init.php");
include("../entities/ward.php");	
$rec = new Ward();
if(isset($_POST['check']))
{       
    if(!empty($_POST['ward']))
    {
preg_match('/\d+/',$_POST['ward'],$matches);
$int=$matches[0];    
    
 //   echo $int;
$ward_id = $int;

$rec->set_ward_data($ward_id);
//echo '$room_id';
$ward_name=$rec->get_ward_name();
$department_id=$rec->get_department_id();

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
		<label class="description" for="room_id">Ward ID </label>
		<div>
                    <input id="roo" name="roo" class="element text medium" type="text" maxlength="255" value="<?php echo "$ward_id"; ?>" readonly/> 
                        
        	</li>
                       
                                         
                                
                                
                                <li id="li_2" >
		<label class="description" for="department">Department Name
 </label>
		<div>
 <?php
		
    include("init.php");
       $query1= "select department_id,depatment_name from department" ;
		//execute the query
		$result = mysql_query($query1,$con);
                
                
                       $query2= "select department_id,depatment_name from department where department_id=$department_id" ;
		//execute the query
		$result2 = mysql_query($query2,$con);
$row2 = mysql_fetch_array($result2);
                
                if(!$result){
                    echo "<script>alert('Query Not Fetched')</script>";             //generate pop up
                }
		
		//get the picture data which will be binary
echo "<select name='department'>";
echo "<option value='" . $row2['department_id']. '&#32;'. '&#32;(' .$row2['depatment_name'].')' ."'>" . $row2['department_id']. '&#32;'. '&#32;(' . $row2['depatment_name'].')' ."</option>";

while ($row = mysql_fetch_array($result))			
 {
echo "<option value='" . $row['department_id']. '&#32;'. '&#32;(' .$row['depatment_name'].')' ."'>" . $row['department_id']. '&#32;'. '&#32;(' . $row['depatment_name'].')' ."</option>";
}
echo "</select>";

?>
		</div> 
		</li>

                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                		<li id="li_3" >
		<label class="description" for="element_3">Ward Name </label>
		<div>
			<input id="ward_name" name="ward_name" class="element text medium" type="text" maxlength="255" value="<?php echo "$ward_name"; ?>"/> 
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
    
    
    if( empty($_POST['ward_name']) || empty($_POST['department']) )
{
//////////////////////////create a alert box here
     
}
else
{
    $ward_id=$_POST['roo'];
$ward_name=$_POST['ward_name'];

preg_match('/\d+/',$_POST['department'],$matches);
$int=$matches[0];    
    
 //   echo $int;
$department_id = $int;

echo $ward_name;

$editward = new Ward();

$edit=$editward->edit_ward($ward_id,$ward_name,$department_id);
}
//echo "<script>alert('$room_type_id')</script>";

}



?>


