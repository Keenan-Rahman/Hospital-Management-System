<?php
include("init.php");
include("../entities/room.php");



if(isset($_POST['submit']))
{
    
    
    if( empty($_POST['room_name']) || empty($_POST['room_type']) )
{
//////////////////////////create a alert box here
     
}
else
{
$room_name=$_POST['room_name'];
$type=$_POST['room_type'];
$result = mysql_query("select room_type_id from room_type where rooms_level = '$type'"); 
$row = mysql_fetch_assoc($result);
$room_type_id =$row["room_type_id"];
$availability=TRUE;
$addroom = new Room();

$add=$addroom->add_room($room_type_id,$room_name,$availability);
}
//echo "<script>alert('$room_type_id')</script>";

}



?>











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add Room</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Add Room</a></h1>
		<form id="form_3657" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Add Room</h2>
			<p></p>
		</div>						
			<ul >
			
					<li id="li_3" >
		<label class="description" for="room_type">Room Type </label>
		<div>
 <?php
		
    include("init.php");

		
       $query1= "select rooms_level from room_type" ;
		//execute the query
		$result = mysql_query($query1,$con);
                if(!$result){
                    echo "<script>alert('Query Not Fetched')</script>";             //generate pop up
                }
		
		//get the picture data which will be binary
echo "<select name='room_type'>";
    echo "<option value='" . '' ."'>" . '' ."</option>";

while ($row = mysql_fetch_array($result))			
 {
    echo "<option value='" . $row['rooms_level'] ."'>" . $row['rooms_level'] ."</option>";
}
echo "</select>";

?>
		</div> 
		</li>		<li id="li_1" >
		<label class="description" for="element_1">Room Name </label>
		<div>
			<input id="room_name" name="room_name" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="3657" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>