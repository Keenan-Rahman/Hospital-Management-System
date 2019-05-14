<?php
$con=mysql_connect("localhost","root") or die("error");

$selected=mysql_select_db("hospital_management_system",$con);




if($con)
{
//echo "Success";
}
else
{
//echo "Fail".mysqli_connect_error();
}

?>