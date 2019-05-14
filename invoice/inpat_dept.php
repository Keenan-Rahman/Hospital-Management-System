<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Editable Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>
<?php 

			include("init.php");
include("../entities/patient.php");

session_start();
$patient_id = $_SESSION['pat_id'];
$rec = new patient();
$rec->set_patient_data($patient_id);
$f_name=$rec->get_first_name();
$l_name=$rec->get_last_name();
$dob=$rec->get_dob();
$gender=$rec->get_gender();
$phone_number=$rec->get_phone_number();


?>
<div id="page-wrap">

		<textarea id="header">Im-Patient Departure</textarea>
		
		<div id="identity">
		
            <textarea id="address">First Name             :  <?php echo "$f_name"; ?>
  &#13;&#10;Last Name              : <?php echo "$l_name";?>
  &#13;&#10;Gender                     : <?php echo "$gender";?>
  &#13;&#10;Phone_Number   : <?php echo "$phone_number";?>
  </textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

            <textarea id="customer-title">Hospital Management System</textarea>

            <table id="meta">
                <tr>
                    <td class="meta-head">Patient_Id</td>
                    <td><textarea>  <?php echo "$patient_id"; ?></textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date Of Birth </td>
                    <td><textarea id="date"><?php echo "$patient_id"; ?></textarea></td>
                </tr>
                

          </table>
		
		</div>
		
	<table id="items">
		  
	  <tr>
	      <td class="blank"> </td>
	      <td class="total-line">Nursing Charges</td>
	      <td class="total-value"><div id="subtotal"><?php echo $_SESSION['nursing_charges'] ?></div></td>
      </tr>
	  <tr>

	      <td class="blank"> </td>
	      <td class="total-line">Medical Charges</td>
	      <td class="total-value"><div id="total"><?php echo $_SESSION['medical_charges'] ?></div></td>
      </tr>
	 
	  <tr>
	      <td class="blank"> </td>
	      <td class="total-line balance">Total</td>
	      <td class="total-value balance"><div class="due"><?php echo $_SESSION['sum'] ?></div></td>
      </tr>
		
    </table>
  </div>
	
</body>

</html>