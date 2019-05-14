<?php







class Ward{
    private $ward_id;
    private $department_id;
    private $ward_name;
    
     public function __construct() 
     {
  
     }
     
     
                         public function set_ward_data($id)
        {
              
	$query = "select * from ward where ward_id = $id";
		//execute the query
		$result = mysql_query($query);
		//get the picture data which will be binary
	
		while($row = mysql_fetch_array($result))
                
                {
                   
    $this->ward_name=$row['ward_name'];
    $this->department_id=$row['department_id'];
 //   $this->availability=$row['room_status'];

            
        }
        
}
public function get_ward_name()
{
    return $this->ward_name;
    
}
public function get_department_id()
{
    return $this->department_id;   
}

     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
public function add_ward($department_id,$ward_name)   
{
                $this->department_id=$department_id;
        $this->ward_name=$ward_name;

           mysql_query("INSERT INTO ward (ward_name,department_id) VALUES ('$ward_name','$department_id')"); 

}

public function edit_ward($ward_id,$ward_name,$department_id)
{
    $this->ward_id=$ward_id;
        $this->ward_name=$ward_name;
        $this->department_id=$department_id;
            if(!empty($this->ward_id))
        {
             //   echo "<script>alert('hahaha')</script>";
        if(!empty($this->ward_name))
        {
            mysql_query("UPDATE ward SET ward_name='$ward_name' WHERE ward_id='$this->ward_id'");
        }
        if(!empty($this->department_id))
        {
            mysql_query("UPDATE ward SET department_id='$department_id' WHERE ward_id='$this->ward_id'");
        }
        }
}

public function delete_ward($ward_id)
{
    $this->ward_id=$ward_id;
                if(!empty($this->ward_id))
        {
                       mysql_query("DELETE FROM ward WHERE ward_id='$this->ward_id'");
                }

}
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>