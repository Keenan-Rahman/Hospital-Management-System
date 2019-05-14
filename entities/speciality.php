<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Speciality{
    private $speciality_id;
    private $speciality_name;
    
     public function __construct() 
     {
  
     }
     
     public function get_spec_id($speciality_name){
         $result = mysql_query("select 	specialist_id from specialist where speciality = '$speciality_name'"); 
$row = mysql_fetch_assoc($result);
$spec_id =$row["specialist_id"];

    return $spec_id;
    
}
}



?>
