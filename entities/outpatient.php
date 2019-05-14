<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("../entities/patient.php");
/**
 * Description of outpatient
 *
 * @author Hamza
 */
class outpatient extends patient {
    
    private $doctor_name;
    private $app_time;
    private $app_date;
    //put your code here
    
    
public function __construct()
{
    
}


public function add_outpat($patient_id,$doctor_name,$app_time,$app_date) {
    
    $this->set_id($patient_id);
    $this->doctor_name=$doctor_name;
    $this->app_time=$app_time;
    $this->app_date=$app_date;
    $iid= $this->get_id();        
    
    

  mysql_query("insert into outpatient (patient_id,doctor_id,appointment_time,appointment_date) values($iid,'$doctor_name','$app_time','$app_date')");	

    
        }


}
?>
