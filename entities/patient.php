<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of patient
 *
 * @author Hamza
 */
class patient {
    //put your code here
private $pat_id;
private $f_name;
private $l_name;
private $dob;
private $gender;
private $phone_number;
private $address;

public function __construct()
{
    
}

public function get_id(){
    return $this->pat_id;
    
}
public function  set_id($id)
{
$this->pat_id=$id;
}

        
public function add_pat($f_name,$l_name,$dob,$gender,$phone_number,$address) {
    
    $this->f_name=$f_name;
    $this->l_name=$l_name;
  
    $this->dob=$dob;
    $this->gender=$gender;
    $this->phone_number=$phone_number;
    $this->address=$address;
    
    

  mysql_query("insert into patient (first_name,last_name,dob,gender,address,contact_number) values('$f_name','$l_name','$dob','$gender','$address',$phone_number)");	

    
        }

public function add_pat1($f_name,$l_name,$dob,$gender,$phone_number) {
    
    $this->f_name=$f_name;
    $this->l_name=$l_name;
  
    $this->dob=$dob;
    $this->gender=$gender;
    $this->phone_number=$phone_number;
    
    

  mysql_query("insert into patient (first_name,last_name,dob,gender,contact_number) values('$f_name','$l_name','$dob','$gender',$phone_number)");	

    
        }
		
		
		
		
		             public function set_patient_data($id)
        {
              
	$query = "select * from patient where patient_id = $id";
		//execute the query
		$result = mysql_query($query);
		//get the picture data which will be binary
	
		while($row = mysql_fetch_array($result))
                
                {
                   
    $this->f_name=$row['first_name'];
    $this->l_name=$row['last_name'];
   
    $this->dob=$row['dob'];
    $this->gender=$row['gender'];
    $this->phone_number=$row['contact_number'];
    
 
            
        }
        
}


public function get_first_name()
{
    return $this->f_name;
    
}
public function get_last_name()
{
    return $this->l_name;   
}

public function get_dob()
{
    return $this->dob;   
}
public function get_gender()
{
    return $this->gender;   
}
public function get_phone_number()
{
    return $this->phone_number;   
}





}



?>