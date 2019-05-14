<?php

class Doctor{
    private $doc_id;
    private $f_name;
private $l_name;
private $cnic;
private $dob;
private $gender;
private $phone_number;
private $address;
private $password;
private $salary;
private $fees;
private $department_id;
private $specialist_id;
private $mon1;
private $mon2;
private $tues1;
private $tues2;
private $wed1;
private $wed2;
private $thurs1;
private $thurs2;
private $fri1;
private $fri2;
private $sat1;
private $sat2;
    public function __construct() 
            {
  
        }
          public function delete_doctor($doc_id)
  {
            $this->doc_id=$doc_id;
   mysql_query("DELETE FROM doctor WHERE doctor_id='$this->doc_id'");
  }

  public function add_doctor($f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$password,$salary,$fees,$department_id,$specialist_id)
  {
            $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->cnic=$cnic;
        $this->dob=$dob;
        $this->gender=$gender;
        $this->phone_number=$phone_number;
        $this->address=$address;
        $this->password=$password;
        $this->salary=$salary;
        $this->fees=$fees;
        $this->department_id=$department_id;
        $this->specialist_id=$specialist_id;
   mysql_query("INSERT INTO doctor (department_id,specialist_id,first_name,last_name,password_doc,dob,gender,address,
                fees,salary,cnic) VALUES ('$department_id','$specialist_id','$f_name','$l_name','$password','$dob','$gender','$address','$fees','$salary','$cnic')"); 
  }
public function edit_doctor($doc_id,$f_name,$l_name,$cnic,$dob,$gender,$phone_number,$address,$password,$salary,$fees,$department_id,$specialist_id)
  {
        $this->doc_id=$doc_id;
        $this->f_name=$f_name;
        $this->l_name=$l_name;
        $this->cnic=$cnic;
        $this->dob=$dob;
        $this->gender=$gender;
        $this->phone_number=$phone_number;
        $this->address=$address;
        $this->password=$password;
        $this->salary=$salary;
        $this->fees=$fees;
        $this->department_id=$department_id;
        $this->specialist_id=$specialist_id;
        if(!empty($this->doc_id))
        {
          if(!empty($this->f_name))
        {
            mysql_query("UPDATE doctor SET first_name='$f_name' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->l_name))
        {
            mysql_query("UPDATE doctor SET last_name='$l_name' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->cnic))
        {
            mysql_query("UPDATE doctor SET cnic='$cnic' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->dob))
        {
            mysql_query("UPDATE doctor SET dob='$dob' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->gender))
        {
            mysql_query("UPDATE doctor SET gender='$gender' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->phone_number))
        {
            mysql_query("UPDATE doctor SET phone_number='$phone_number' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->address))
        {
            mysql_query("UPDATE doctor SET address='$address' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->password))
        {
            mysql_query("UPDATE doctor SET password='$password' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->salary))
        {
            mysql_query("UPDATE doctor SET salary='$salary' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->fees))
        {
            mysql_query("UPDATE doctor SET fees='$fees' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->department_id))
        {
            mysql_query("UPDATE doctor SET department_id='$department_id' where doctor_id='$this->doc_id'");
        }
        if(!empty($this->specialist_id))
        {
            mysql_query("UPDATE doctor SET specialist_id='$specialist_id' where doctor_id='$this->doc_id'");
        }  
        }
        
  }

  public function mon($mon1,$mon2)
  {
       $result=mysql_query("select doctor_id from doctor where cnic='$this->cnic'");
       $row= mysql_fetch_assoc($result);
       $val=$row["doctor_id"];
       $this->mon1=$mon1;
        $this->mon2=$mon2;
      $day=1;
       mysql_query("INSERT INTO doctor_time (doctor_id,days,start_time,end_time) VALUES ('$val',$day,'$mon1','$mon2')"); 
  }
    public function update_mon($doc_id,$mon1,$mon2)
  {
        $this->doc_id=$doc_id;
       $this->mon1=$mon1;
       $this->mon2=$mon2;
       $day=1;
       mysql_query("UPDATE doctor_time SET start_time='$mon1',end_time='$mon2' WHERE doctor_id='$this->doc_id' and days='$day'"); 
  }

  public function tues($tues1,$tues2)
  {
       $result=mysql_query("select doctor_id from doctor where cnic='$this->cnic'");
       $row= mysql_fetch_assoc($result);
       $val=$row["doctor_id"];
       $this->tues1=$tues1;
        $this->tues2=$tues2;
      $day=2;
       mysql_query("INSERT INTO doctor_time (doctor_id,days,start_time,end_time) VALUES ('$val','$day','$tues1','$tues2')"); 
  }
    public function update_tues($doc_id,$tues1,$tues2)
  {
        $this->doc_id=$doc_id;
       $this->tues1=$tues1;
       $this->tues2=$tues2;
       $day=2;
       mysql_query("UPDATE doctor_time SET start_time='$tues1',end_time='$tues2' WHERE doctor_id='$this->doc_id' and days='$day'"); 
  }
  public function wed($wed1,$wed2)
  {
       $result=mysql_query("select doctor_id from doctor where cnic='$this->cnic'");
       $row= mysql_fetch_assoc($result);
       $val=$row["doctor_id"];
       $this->wed1=$wed1;
        $this->wed2=$wed2;
      $day=3;
       mysql_query("INSERT INTO doctor_time (doctor_id,days,start_time,end_time) VALUES ('$val','$day','$wed1','$wed2')"); 
  }
    public function update_wed($doc_id,$wed1,$wed2)
  {
        $this->doc_id=$doc_id;
       $this->wed1=$wed1;
       $this->wed2=$wed2;
       $day=3;
       mysql_query("UPDATE doctor_time SET start_time='$wed1',end_time='$wed2' WHERE doctor_id='$this->doc_id' and days='$day'"); 
  }
  public function thurs($thurs1,$thurs2)
  {
       $result=mysql_query("select doctor_id from doctor where cnic='$this->cnic'");
       $row= mysql_fetch_assoc($result);
       $val=$row["doctor_id"];
       $this->thurs1=$thurs1;
        $this->thurs2=$thurs2;
      $day=4;
       mysql_query("INSERT INTO doctor_time (doctor_id,days,start_time,end_time) VALUES ('$val','$day','$thurs1','$thurs2')"); 
  }
    public function update_thurs($doc_id,$thurs1,$thurs2)
  {
        $this->doc_id=$doc_id;
       $this->thurs1=$thurs1;
       $this->thurs2=$thurs2;
       $day=4;
       mysql_query("UPDATE doctor_time SET start_time='$thurs1',end_time='$thurs2' WHERE doctor_id='$this->doc_id' and days='$day'"); 
  }
  public function fri($fri1,$fri2)
  {
       $result=mysql_query("select doctor_id from doctor where cnic='$this->cnic'");
       $row= mysql_fetch_assoc($result);
       $val=$row["doctor_id"];
       $this->fri1=$fri1;
        $this->fri2=$fri2;
      $day=5;
       mysql_query("INSERT INTO doctor_time (doctor_id,days,start_time,end_time) VALUES ('$val','$day','$fri1','$fri2')"); 
  }
    public function update_fri($doc_id,$fri1,$fri2)
  {
        $this->doc_id=$doc_id;
       $this->fri1=$fri1;
       $this->fri2=$fri2;
       $day=5;
       mysql_query("UPDATE doctor_time SET start_time='$fri1',end_time='$fri2' WHERE doctor_id='$this->doc_id' and days='$day'"); 
  }
  public function sat($sat1,$sat2)
  {
       $result=mysql_query("select doctor_id from doctor where cnic='$this->cnic'");
       $row= mysql_fetch_assoc($result);
       $val=$row["doctor_id"];
       $this->sat1=$sat1;
        $this->sat2=$sat2;
      $day=6;
       mysql_query("INSERT INTO doctor_time (doctor_id,days,start_time,end_time) VALUES ('$val','$day','$sat1','$sat2')"); 
  }

    public function update_sat($doc_id,$sat1,$sat2)
  {
        $this->doc_id=$doc_id;
       $this->sat1=$sat1;
       $this->sat2=$sat2;
       $day=6;
       mysql_query("UPDATE doctor_time SET start_time='$sat1',end_time='$sat2' WHERE doctor_id='$this->doc_id' and days='$day'"); 
  }
        
        
        
//        
//  public function getid()
//  {
//      $result=mysql_query("select ItemID from itemdescription where Name='$this->Name' and Price='$this->Price'");
//      $row = mysql_fetch_array($result);
//      $this->ItemID=$row['ItemID'];
//      $Qty=0;
//      mysql_query("INSERT INTO stock (ItemID,Quantity) VALUES ('$this->ItemID','$Qty')");
//
//      return $this->ItemID;
//  }
        
        
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
