<?php

class Department{
    private $department_id;
    private $department_name;
    
     public function __construct() 
     {
  
     }
     
     
     
                             public function set_dept_data($id)
        {
              
	$query = "select * from department where department_id = $id";
		//execute the query
		$result = mysql_query($query);
		//get the picture data which will be binary
	
		while($row = mysql_fetch_array($result))
                
                {
                   
    $this->department_name=$row['depatment_name'];
   
 //   $this->availability=$row['room_status'];

            
        }
        
}
     public function get_dept_name()
{
    return $this->department_name;
    
}

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     public function get_dept_id($department_name){
         $result = mysql_query("select department_id from department where depatment_name = '$department_name'"); 
$row = mysql_fetch_assoc($result);
$dept_id =$row["department_id"];

    return $dept_id;
    
}

     
     
public function add_dept($department_name)   
{
        $this->department_name=$department_name;

           mysql_query("INSERT INTO department (depatment_name) VALUES ('$department_name')"); 

}

public function edit_dept($department_id,$department_name)
{
    $this->department_id=$department_id;
        $this->department_name=$department_name;
            if(!empty($this->department_id))
        {
             //   echo "<script>alert('hahaha')</script>";
        if(!empty($this->department_name))
        {
            mysql_query("UPDATE department SET depatment_name='$department_name' WHERE department_id='$this->department_id'");
        }
        }
}

public function delete_dept($department_id)
{
    $this->department_id=$department_id;
                if(!empty($this->department_id))
        {
                       mysql_query("DELETE FROM department WHERE department_id='$this->department_id'");
                }

}

public  function get_dep_id_from_name($department)
{
$result = mysql_query("select department_id from department where depatment_name = '$department'"); 
$row = mysql_fetch_assoc($result);
$department_id =$row["department_id"];
return $department_id;

}
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>