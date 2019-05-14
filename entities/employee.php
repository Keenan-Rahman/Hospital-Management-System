<?php



class Employee{
        private $emp_id;
    private $f_name;
private $l_name;
private $cnic;
private $dob;
private $gender;
private $phone_number;
private $address;
private $jobs_id;
private $ward_id;
private $salary;
private $hire_date;
    public function __construct() 
            {
  
        }
        
        
        
        
        public function set_employee_data($id)
        {
              
	$query = "select * from employee where employee_id = $id";
		//execute the query
		$result = mysql_query($query);
		//get the picture data which will be binary
	
		$row = mysql_fetch_array($result);
                
                
    $this->cnic=$row['cnic'];
                
       $query1 = "select * from emp_detail where cnic = $this->cnic";
		//execute the query
		$result1 = mysql_query($query1);
		//get the picture data which will be binary
	
		$row1 = mysql_fetch_array($result1);
                
                
                   
    $this->f_name=$row1['first_name'];
    $this->l_name=$row1['last_name'];
    $this->cnic=$row['cnic'];
    $this->dob=$row1['dob'];
    $this->gender=$row1['gender'];
    $this->phone_number=$row['contact_number'];
    $this->address=$row1['address'];
    $this->salary=$row['salary'];
$this->jobs_id=$row['jobs_id'];

            
        
        
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
public function get_salary()
{
    return $this->salary;   
}

public function get_job()
{
    return $this->jobs_id;   
}

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        public function add_employee($f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$jobs_id,$salary)   
{
//            $this->alpha='13-12-201';
                $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->cnic=$cnic;
        $this->dob=$dob;
        $this->gender=$gender;
        $this->phone_number=$phone_number;
$this->address=$address;
$this->jobs_id=$jobs_id;
$this->salary=$salary;
        
//$this->hire_date=date('Y-m-d');
$date= date('Y-m-d');
  //$this->hire_date=$hire_date;
mysql_query("INSERT INTO employee (jobs_id,hire_date,cnic,contact_number,salary) VALUES ($jobs_id,'$date',$cnic,$phone_number,$salary)"); 
           mysql_query("INSERT INTO emp_detail (cnic,first_name,last_name,dob,gender,address) VALUES ('$cnic','$f_name','$l_name','$dob','$gender','$address')"); 
}





          public function delete_employee($emp_id)
  {
            $this->emp_id=$emp_id;
                      $query2= "select cnic from employee WHERE employee_id='$this->emp_id'" ;
                      		$result = mysql_query($query2);
                $row = mysql_fetch_array($result);
                $this->cnic=$row['cnic'];
   mysql_query("DELETE FROM employee WHERE employee_id='$this->emp_id'");

		//execute the query

        //        echo'$cnic';
                 mysql_query("DELETE FROM emp_detail WHERE cnic='$this->cnic'");
                 mysql_query("DELETE FROM employee_ward WHERE employee_id='$this->emp_id'");
   
  }
public function edit_employee($emp_id,$f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$jobs_id,$salary)
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
        $this->jobs_id=$jobs_id;
        if(!empty($this->emp_id))
        {
                      $query2= "select cnic from employee WHERE employee_id='$this->emp_id'" ;
                      		$result = mysql_query($query2);
                $row = mysql_fetch_array($result);
                $cnic_org=$row['cnic'];
          if(!empty($this->f_name))
        {
            mysql_query("UPDATE emp_detail SET first_name='$f_name' where cnic='$cnic_org'");
        }
        if(!empty($this->l_name))
        {
            mysql_query("UPDATE emp_detail SET last_name='$l_name' where cnic='$cnic_org'");
        }
        if(!empty($this->dob))
        {
            mysql_query("UPDATE emp_detail SET dob='$dob' where cnic='$cnic_org'");
        }
        if(!empty($this->address))
        {
            mysql_query("UPDATE emp_detail SET address='$address' where cnic='$cnic_org'");
        }
        if(!empty($this->gender))
        {
            mysql_query("UPDATE emp_detail SET gender='$gender' where cnic='$cnic_org'");
        }

        if(!empty($this->cnic))
        {
            mysql_query("UPDATE emp_detail SET cnic='$cnic' where cnic='$cnic_org'");
            mysql_query("UPDATE employee SET cnic='$cnic' where employee_id='$this->emp_id'");
        }
        if(!empty($this->phone_number))
        {
            mysql_query("UPDATE employee SET contact_number='$phone_number' where employee_id='$this->emp_id'");
        }
        if(!empty($this->salary))
        {
            mysql_query("UPDATE employee SET salary='$salary' where employee_id='$this->emp_id'");
        }
        if(!empty($this->jobs_id))
        {
            mysql_query("UPDATE employee SET jobs_id='$jobs_id' where employee_id='$this->emp_id'");
        }
        }
        
  }
  
  public function add_ward($ward_name){
                      $query2= "select ward_id from ward WHERE ward_name='$ward_name'" ;
                      		$result = mysql_query($query2);
                $row = mysql_fetch_array($result);
                $ward_id=$row['ward_id'];
                      $query3= "select employee_id from employee WHERE cnic='$this->cnic'" ;
                      		$result2= mysql_query($query3);
                $row1 = mysql_fetch_array($result2);
                $emp_id=$row1['employee_id'];
                mysql_query("INSERT INTO employee_ward (employee_id,ward_id) VALUES ('$emp_id','$ward_id')");
      
  }
  
  
public function dl_ward()
{
                      $query3= "select employee_id from employee WHERE employee_id='$this->emp_id'" ;
                      		$result2= mysql_query($query3);
                $row1 = mysql_fetch_array($result2);
                $emp_id=$row1['employee_id'];
                
                   mysql_query("DELETE FROM employee_ward WHERE employee_id='$emp_id'");
                //  mysql_query("INSERT INTO employee_ward (employee_id,ward_id) VALUES ('$emp_id','$wd_id')");
   //             mysql_query("UPDATE employee_ward SET ward_id=$wd_id WHERE employee_id='$emp_id'");
    
}
  

public function edit_ward($wards)
{
                      $query2= "select ward_id from ward WHERE ward_name='$wards'" ;
                      		$result = mysql_query($query2);
                $row = mysql_fetch_array($result);
                $wd_id=$row['ward_id'];
                      $query3= "select employee_id from employee WHERE employee_id='$this->emp_id'" ;
                      		$result2= mysql_query($query3);
                $row1 = mysql_fetch_array($result2);
                $emp_id=$row1['employee_id'];
                
//                   mysql_query("DELETE FROM employee_ward WHERE employee_id='$emp_id' AND ward_id='$wd_id'");
                  mysql_query("INSERT INTO employee_ward (employee_id,ward_id) VALUES ('$emp_id','$wd_id')");
   //             mysql_query("UPDATE employee_ward SET ward_id=$wd_id WHERE employee_id='$emp_id'");
    
}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
