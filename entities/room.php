<?php

class Room{
    private $room_id;
    private $room_name;
    private $room_type_id;
    private $availability;
    
     public function __construct() 
     {
  
     }
     
     
     
     
     
                    public function set_room_data($id)
        {
              
	$query = "select * from rooms where rooms_id = $id";
		//execute the query
		$result = mysql_query($query);
		//get the picture data which will be binary
	
		while($row = mysql_fetch_array($result))
                
                {
                   
    $this->room_name=$row['room_name'];
    $this->room_type_id=$row['room_type_id'];
    $this->availability=$row['room_status'];

            
        }
        
}

public function get_room_id()
{
    return $this->room_id;
    
}public function set_room_id($id)
{
    $this->room_id=$id;
    
}

public function get_room_name()
{
    return $this->room_name;
    
}
public function get_roomtype_id()
{
    return $this->room_type_id;   
}
public function get_availability()
{
    return $this->availability;   
}


     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
public function add_room($room_type_id,$room_name,$availability)   
{
                $this->room_type_id=$room_type_id;
        $this->room_name=$room_name;
        $this->availability=$availability;

           mysql_query("INSERT INTO rooms (room_type_id,room_name,room_status) VALUES ('$room_type_id','$room_name','$availability')"); 

}

public function edit_room($room_id,$room_type_id,$room_name,$availability)
{
    $this->room_id=$room_id;
        $this->room_type_id=$room_type_id;
        $this->room_name=$room_name;
        $this->availability=$availability;
            if(!empty($this->room_id))
        {
             //   echo "<script>alert('hahaha')</script>";
          if(!empty($this->room_type_id))
        {
            mysql_query("UPDATE rooms SET room_type_id='$room_type_id' WHERE rooms_id='$this->room_id'");
        }
        if(!empty($this->room_name))
        {
            mysql_query("UPDATE rooms SET room_name='$room_name' WHERE rooms_id='$this->room_id'");
        }
        if(!empty($this->availability))
        {
            mysql_query("UPDATE rooms SET room_status='$availability' WHERE rooms_id='$this->room_id'");
        }
        }
}

public function delete_room($room_id)
{
    $this->room_id=$room_id;
                if(!empty($this->room_id))
        {
                       mysql_query("DELETE FROM rooms WHERE rooms_id='$this->room_id'");
                }

}
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
