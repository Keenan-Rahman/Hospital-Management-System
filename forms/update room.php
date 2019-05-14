






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Update Room</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Update Room</a></h1>
		<form id="form_3657" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Update Room</h2>
			<p>Update details for room </p>
		</div>						
			<ul >
			
						<li id="li_23" >
		<label class="description" for="room">Room </label>
		<div>
 <?php
		
    include("init.php");

		
       $query1= "select rooms_id,room_name from rooms" ;
		//execute the query
		$result = mysql_query($query1,$con);
		
		//get the picture data which will be binary

echo "<select name='room'>";
    echo "<option value='" . $row[''] ."'>" . $row[''] ."</option>";
while ($row = mysql_fetch_array($result))	
		
 {
    echo "<option value='" . $row['rooms_id']. '&#32;'. '&#32;(' .$row['room_name'].')' ."'>" . $row['rooms_id']. '&#32;'. '&#32;(' . $row['room_name'].')' ."</option>";
}
echo "</select>";

?>

                        <input type="submit" value='Show Data' id="check" name="check"  />
           </div><p class="guidelines" id="guide_10"><small>Enter Correct ID</small></p> 
		</li>

                            <div id="ifYes" style=" display:  none">
<?php
include("init.php");
include("../entities/room.php");	
$rec = new Room();
if(isset($_POST['check']))
{       
    if(!empty($_POST['room']))
    {
preg_match('/\d+/',$_POST['room'],$matches);
$int=$matches[0];    
    
 //   echo $int;
$room_id = $int;

$rec->set_room_data($room_id);
$rec->set_room_id($room_id);
//echo '$room_id';
$room_name=$rec->get_room_name();
$room_type_id=$rec->get_roomtype_id();
$availability=$rec->get_availability();
$values=$rec->get_availability();
if($values==1)
{
    $availability='Available';
}
else if($values==0)
{
    $availability='Not Available';
}

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
} ?>
                             	<li id="li_11" >
		<label class="description" for="room_id">Room ID </label>
		<div>
                    <input id="roo" name="roo" class="element text medium" type="text" maxlength="255" value="<?php echo "$room_id"; ?>" readonly/> 
                        
        	</li>
                                
                                
					<li id="li_3" >
		<label class="description" for="element_3">Room Type </label>
		<div>
 <?php
		
    include("init.php");
       $query1= "select rooms_level from room_type" ;
		//execute the query
		$result = mysql_query($query1,$con);
                
                
                       $query2= "select rooms_level from room_type where room_type_id=$room_type_id" ;
		//execute the query
		$result2 = mysql_query($query2,$con);
$row2 = mysql_fetch_array($result2);
                
                if(!$result){
                    echo "<script>alert('Query Not Fetched')</script>";             //generate pop up
                }
		
		//get the picture data which will be binary
echo "<select name='room_type'>";
echo "<option value='" . $row2['rooms_level'] ."'>" . $row2['rooms_level'] ."</option>";

while ($row = mysql_fetch_array($result))			
 {
    echo "<option value='" . $row['rooms_level'] ."'>" . $row['rooms_level'] ."</option>";
}
echo "</select>";

?>
		</div> 
		</li>



		<li id="li_1" >
		<label class="description" for="element_1">Room Name </label>
		<div>
			<input id="room_name" name="room_name" class="element text medium" type="text" maxlength="255" value="<?php echo "$room_name"; ?>"/> 
		</div> 
		</li>
	<li id="li_2" >
		<label class="description" for="availiblity">Availability </label>
		<div>
		<select class="element select medium" id="availiblity" name="availiblity"> 
			<option value="<?php echo "$values"; ?>" selected="selected"><?php echo "$availability"; ?></option>

<option value=1 >Available</option>
<option value=FALSE >Not Available</option>

		</select>
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
    
    
    if( empty($_POST['room_name']) || empty($_POST['room_type']) )
{
//////////////////////////create a alert box here
     
}
else
{
    $rooms_id=$_POST['roo'];
$room_name=$_POST['room_name'];
$type=$_POST['room_type'];
$result = mysql_query("select room_type_id from room_type where rooms_level = '$type'"); 
$row = mysql_fetch_assoc($result);
$room_type_id =$row["room_type_id"];
$availability1=$_POST['availiblity'];
$addroom = new Room();

$add=$addroom->edit_room($rooms_id,$room_type_id,$room_name,$availability1);
}
//echo "<script>alert('$room_type_id')</script>";

}



?>


