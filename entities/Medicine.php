<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Medicine
 *
 * @author aliah
 */
class Medicine {

    //put your code here

    private $med_id;
    private $med_name;

    public function __construct() {
        
    }

    public function get_id_from_name($med_name) {
        $result = mysql_query("select medicine_id from medicine where medicine_name = '$med_name'");
        $row = mysql_fetch_assoc($result);
        $this->med_id = $row["medicine_id"];
        return $this->med_id;
    }

}
