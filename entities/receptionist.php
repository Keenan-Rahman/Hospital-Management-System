<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("init.php");

class receiptionist{
    
private $f_name;
private $l_name;
private $cnic;
private $dob;
private $gender;
private $phone_number;
private $address;
private $reception_number;
private $password;
private $salary;
private $department;
public function __construct()
{
    
}

public function add_receiptionist($f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,
        $reception_number,$password,$salary,$department) {
    
    $this->f_name=$f_name;
    $this->l_name=$l_name;
    $this->cnic=$cnic;
    $this->dob=$dob;
    $this->gender=$gender;
    $this->phone_number=$phone_number;
    $this->address=$address;
    $this->reception_number=$reception_number;
    $this->password=$password;
    $this->salary=$salary;
    $this->department=$department;
    $date = date('Y-m-d');

    $dept = new department();
    $department_id=$dept->get_dep_id_from_name($department);
    mysql_query("insert into receptionist (department_id,first_name,last_name,reception_number,dob,hire_date,gender,cnic,contact_number,address,salary,password_recept) values($department_id,'$f_name','$l_name',$reception_number,'$dob','$date','$gender',$cnic,$phone_number,'$address',$salary,'$password')");	

    
        }

               public function set_receiptionist_data($id)
        {
              
	$query = "select * from receptionist where receptionist_id = $id";
		//execute the query
		$result = mysql_query($query);
		//get the picture data which will be binary
	
		while($row = mysql_fetch_array($result))
                
                {
                   
    $this->f_name=$row['first_name'];
    $this->l_name=$row['last_name'];
    $this->cnic=$row['cnic'];
    $this->reception_number=$row['reception_number'];
    $this->dob=$row['dob'];
    $this->gender=$row['gender'];
    $this->phone_number=$row['contact_number'];
    $this->address=$row['address'];
    $this->password=$row['password_recept'];
    $this->salary=$row['salary'];
 
            
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
public function get_cnic()
{
    return $this->cnic;   
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
public function get_address()
{
    return $this->address;   
}
public function get_reception_number()
{
    return $this->reception_number;   
}
public function get_password()
{
    return $this->password;   
}
public function get_salary()
{
    return $this->salary;   
}

public function get_department()
{
    return $this->department;   
}



public  function delete_receiptionist($id)
{
    
            
   mysql_query("DELETE FROM receptionist WHERE receptionist_id=$id");
         
                
  }
  
  
  
  
  
  public function edit_recieptionist($emp_id,$f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$reception_number,$salary,$password)
  {
        $this->emp_id=$emp_id;
        $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->cnic=$cnic;
        $this->dob=$dob;
        $this->gender=$gender;
        $this->phone_number=$phone_number;
        $this->address=$address;
        $this->salary=$salary;
        $this->reception_number=$reception_number;
        $this->password=$password;
        if(!empty($this->emp_id))
        {
                      
          if(!empty($this->f_name))
        {
            mysql_query("UPDATE receptionist SET first_name='$f_name' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->l_name))
        {
            mysql_query("UPDATE receptionist SET last_name='$l_name' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->dob))
        {
            mysql_query("UPDATE receptionist SET dob='$dob' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->address))
        {
            mysql_query("UPDATE receptionist SET address='$address' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->gender))
        {
            mysql_query("UPDATE receptionist SET gender='$gender' where receptionist_id='$this->emp_id'");
        }

        if(!empty($this->cnic))
        {
            mysql_query("UPDATE receptionist SET cnic='$cnic' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->phone_number))
        {
            mysql_query("UPDATE receptionist SET contact_number='$phone_number' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->salary))
        {
            mysql_query("UPDATE receptionist SET salary='$salary' where employee_id='$this->emp_id'");
        }
        if(!empty($this->reception_number))
        {
            mysql_query("UPDATE receptionist SET reception_number='$reception_number' where receptionist_id='$this->emp_id'");
        }
        if(!empty($this->$password))
        {
            mysql_query("UPDATE receptionist SET password_recept='$password' where receptionist_id='$this->emp_id'");
        }
        }
        
  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

}

?>