

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>View Appointments</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>View Appointments</a></h1>
		<form id="form_3741" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>View Appointments</h2>
			<p>View Appointments Of the Doctor</p>
		</div>
        <?php
		session_start(); 

		include("init.php");
include("../entities/doctor.php");
$id=$_SESSION['login_id'];
$result = mysql_query("SELECT patient_id , appointment_date , appointment_time FROM outpatient where doctor_id=$id");

echo "<table border='1'>
<tr>
<th>Patient ID</th>
<th>Appointment Date</th>
<th>Appointment Time</th>
</tr>";

while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['patient_id'] . "</td>";
echo "<td>" . $row['appointment_date'] . "</td>";
echo "<td>" . $row['appointment_time'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysql_close($con);
?>
</form>	
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>