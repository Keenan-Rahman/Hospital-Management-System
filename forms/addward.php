<?php
include("init.php");
include("../entities/ward.php");



if(isset($_POST['submit']))
{
    
    
    if( empty($_POST['ward_name']) || empty($_POST['department']) )
{
//////////////////////////create a alert box here
     
}
else
{
$ward_name=$_POST['ward_name'];
$department_name=$_POST['department'];
$result = mysql_query("select department_id from department where depatment_name = '$department_name'"); 
$row = mysql_fetch_assoc($result);
$department_id =$row["department_id"];
$addward = new Ward();

$add=$addward->add_ward($department_id,$ward_name);
}
//echo "<script>alert('$room_type_id')</script>";

}



?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add Ward</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Add Ward</a></h1>
		<form id="form_3646" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Add Ward</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_2" >
		<label class="description" for="department">Department Name
 </label>
		<div>
<?php
		
    include("init.php");

		
       $query1= "select depatment_name from department" ;
		//execute the query
		$result = mysql_query($query1,$con);
                if(!$result){
                    echo "<script>alert('Query Not Fetched')</script>";             //generate pop up
                }
		
		//get the picture data which will be binary
echo "<select name='department'>";
    echo "<option value='" . '' ."'>" . '' ."</option>";

while ($row = mysql_fetch_array($result))			
 {
    echo "<option value='" . $row['depatment_name'] ."'>" . $row['depatment_name'] ."</option>";
}
echo "</select>";

?>
		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Ward Name
 </label>
		<div>
			<input id="ward_name" name="ward_name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3646" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>