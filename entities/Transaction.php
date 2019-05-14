<?php

include("Medicine.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaction
 *
 * @author aliah
 */
class Transaction {

    //put your code here


    private $medicine_transaction_id;
    private $med_name;
    private $quantity;

    public function __construct() {
        
    }

    public function medicine($medicine_transaction_id, $med_name, $quantity) {
        $this->medicine_transaction_id = $medicine_transaction_id;
        $this->med_name = $med_name;
        $medicine = new Medicine();
        $med_id = $medicine->get_id_from_name($med_name);
        $this->quantity = $quantity;

        mysql_query("insert into transaction (medicine_transaction_id,medicine_id,quantity) values ('$this->medicine_transaction_id','$med_id','$this->quantity')");
    }

}

?>