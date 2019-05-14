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
class MedicineTransaction {

    //put your code here

    private $medicine_transaction_id;
    private $patient_name;
    private $contact_no;
    private $transaction_details;

    public function __construct() {
        
    }

    public function addmed($patient_name, $contact_no) {


        $this->patient_name = $patient_name;
        $this->contact_no = $contact_no;
        $this->transaction_details = mysql_query("select to_char(sysdate,'yyyy-mm-dd hh:mm:ss') from dual");


    mysql_query("insert into medicine_transaction (patient_name,contact_no,transaction_detail) values ('$this->patient_name','$this->contact_no','$this->transaction_details')");
        $var = mysql_query("select medicine_transaction_id from medicine_transaction where contact_no=$this->contact_no");
        
        $row = mysql_fetch_assoc($var);
        $this->medicine_transaction_id = $row['medicine_transaction_id'];
        return $this->medicine_transaction_id;
       
    }

}

?>