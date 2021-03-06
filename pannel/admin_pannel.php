﻿<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><?php echo $_SESSION['login_user']  ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <form method="post"><button class="btn btn-danger square-btn-adjust" type="submit" name="submit">Logout</button> </form> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
				  </li>

 <li>
                        <a class="active-menu"  href="admin_pannel.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>


 <li>
                        <a href="#"><i class="fa fa-user-md fa-3x"></i> Doctor<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

				
					
                   
                     <li>
                        <a  href="../forms/add_new_doctor.php" target="result"><i class="fa fa-user-md fa-3x"></i> Register Doctor</a>
                    </li>
                    <li>
                        <a  href="../forms/update_doctor.php" target="result"><i class="fa fa-pencil-square-o fa-3x"></i> Update Doctor  </a>
                    </li>
						   <li  >
                        <a   href="../forms/delete_doctor.php" target="result"><i class="fa fa-trash-o fa-3x"></i> Delete Doctor
                         </a>
                    </li>	
                    
              <li  >
                        <a   href="../forms/View_Appointments.php" target="result"><i class="fa fa-trash-o fa-3x"></i> View Appointments
                         </a>
                    </li> 
                    
                     </ul>
                    </li>           
         
          <li>                   
               <a href="#"><i class="fa fa-user fa-3x"></i> Receiptionist<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
      
                    
                    
           <li>
                        <a  href="../forms/add_new_receiptionist.php" target="result"><i class="fa fa-user-md fa-3x"></i> Register Receiptionist</a>
                    </li>
                    <li>
                        <a  href="../forms/update_receiptionist.php" target="result"><i class="fa fa-pencil-square-o fa-3x"></i> Update Receiptionist  </a>
                    </li>
						   <li  >
                        <a   href="../forms/delete_receiptionist.php" target="result"><i class="fa fa-trash-o fa-3x"></i> Delete Receiptionist
                         </a>
                    </li>
                    
                     <li>
                        <a  href="../forms/Register_Patient.php" target="result"><i class="fa fa-user-md fa-3x"></i> Register Patient</a>
                    </li>
                    
                     <li>
                        <a  href="../forms/Out_Patient_Registration.php" target="result"><i class="fa fa-user-md fa-3x"></i> Register Out Patient</a>
                    </li> <li>
                        <a  href="../forms/Impatient_Registration.php" target="result"><i class="fa fa-user-md fa-3x"></i> Register Impatient</a>
                    </li>
                    
                    <li>
                        <a  href="../forms/Impatient_Departure.php" target="result"><i class="fa fa-user-md fa-3x"></i> Departure Impatient</a>
                    </li>
                    </ul>                
                    </li> 
                    
                    
                    
                     <li>
                        <a href="#"><i class="fa fa-users fa-3x"></i> Employee<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

				
					
                   
                     <li>
                        <a  href="../forms/add_new_employee.php" target="result"><i class="fa fa-user-md fa-3x"></i> Register Employee</a>
                    </li>
                    <li>
                        <a  href="../forms/update_employee.php" target="result"><i class="fa fa-pencil-square-o fa-3x"></i> Update Employee  </a>
                    </li>
						   <li  >
                        <a   href="../forms/delete_employee.php" target="result"><i class="fa fa-trash-o fa-3x"></i> Delete Employee
                         </a>
                    </li>	
                    
              
                    
                     </ul>
                    </li>           
         
 <li>
                        <a href="#"><i class="fa fa-home fa-3x"></i> Room<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

				
					
                   
                     <li>
                        <a  href="../forms/addroom.php" target="result"><i class="fa fa-user-md fa-3x"></i> Add Room</a>
                    </li>
                    <li>
                        <a  href="../forms/update room.php" target="result"><i class="fa fa-pencil-square-o fa-3x"></i> Update Room </a>
                    </li>
						   <li  >
                        <a   href="../forms/delete room.php" target="result"><i class="fa fa-trash-o fa-3x"></i> Delete Room
                         </a>
                    </li>	
                    
              
                    
                     </ul>
                    </li>           
         
          <li>
                        <a href="#"><i class="fa fa-home fa-3x"></i> Ward<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

				
					
                   
                     <li>
                        <a  href="../forms/addward.php" target="result"><i class="fa fa-user-md fa-3x"></i> Add Ward</a>
                    </li>
                    <li>
                        <a  href="../forms/update ward.php" target="result"><i class="fa fa-pencil-square-o fa-3x"></i> Update Ward </a>
                    </li>
						   <li  >
                        <a   href="../forms/delete ward.php" target="result"><i class="fa fa-trash-o fa-3x"></i> Delete Ward
                         </a>
                    </li>	
                    
              
                    
                     </ul>
                    </li> 
                    
                    
                    
                     <li>
                        <a href="#"><i class="fa fa-home fa-3x"></i> Department<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

				
					
                   
                     <li>
                        <a  href="../forms/add_department.php" target="result"><i class="fa fa-user-md fa-3x"></i> Add Department</a>
                    </li>
                    <li>
                        <a  href="../forms/update_department.php" target="result"><i class="fa fa-pencil-square-o fa-3x"></i> Update Department </a>
                    </li>
						   <li  >
                        <a   href="../forms/delete_department.php" target="result"><i class="fa fa-trash-o fa-3x"></i> Delete Department
                         </a>
                    </li>	
                    
              
                    
                     </ul>
                    </li>           
         
                    
                     <!-- <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                  </li>  
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                  </li>-->	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <iframe id="page-inner" src="main.html" name="result">
            </iframe>
    </div>
             <!-- /. PAGE INNER  -->
</div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
   <?php


include("init.php");

if(isset($_POST['submit']))
{
	$id=$_SESSION['login_id'];
  // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

 mysql_query("delete from login where id = $id");
 header("location: ../index.php");


}



?>
    
</body>
</html>
