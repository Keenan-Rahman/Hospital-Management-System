<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include("../entities/patient.php");
/**
 * Description of inpatient
 *
 * @author Hamza
 */
class Inpatient extends patient {
       private $pat_id;
    private $departure_date;
private $nursing_charges;
private $medical_charges;


    public function __construct() 
            {
  
        }
        
         public function inpat_depart($pat_id,$departure_date,$nursing_charges,$medical_charges)
  {
             $this->pat_id=$pat_id;
        $this->departure_date=$departure_date;
        $this->nursing_charges=$nursing_charges;
        $this->medical_charges=$medical_charges;
 
               if(!empty($this->pat_id))
        {
          mysql_query("UPDATE inpatient SET departure_date='$this->departure_date', nursing_charges='$this->nursing_charges', medicine_charges='$this->medical_charges' where patient_id='$this->pat_id'");
        
        }
               
               
  }
    //put your code here
}
