<?php
include("init.php");
include("../entities/ward.php");



if(isset($_POST['submit']))
{
    if(!empty($_POST['ward']))
    {
$ward_id=$_POST['ward'];
    
$dltward = new Ward();

$dlt=$dltward->delete_ward($ward_id);
    }
//echo "<script>alert('$availability')</script>";

}



?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Delete Ward</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Delete Ward</a></h1>
		<form id="form_3646" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Delete Ward</h2>
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