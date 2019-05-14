<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <HEAD>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>Transaction</title>
            <link rel="stylesheet" type="text/css" href="view.css" media="all">
                <SCRIPT language="javascript">



                </SCRIPT>
                </HEAD>
                <body id="main_body" >

                    <img id="top" src="top.png" alt="">
                        <div id="form_container">

                            <h1><a>Transaction</a></h1>
                            <form id="form_3646" class="appnitro"  method="post" action="">
                                <div class="form_description">
                                    <h2>Transaction</h2>
                                </div>				
                                <h3>Patient Name</h3>
                                <input type="text" name="patient_name"></input>
                                <h3>Contact Number</h3>
                                <input type="text" name="contact_no"></input>
                                <TABLE id="dataTable" width="350" border="2" style="margin: 20px">

                                    <tr>
                                        <td width="120"><h3><strong>Medicine Name</strong></h3></td>
                                        <td width="130"><h3><strong>Quantity</strong></h3></td>
                                    </tr>

                                    <TR>
                                        <TD  width="300" id="med_name1" name="med_name1">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine1'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt1' type="text" name="txt1"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name2" name="med_name2">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine2'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt2' type="text" name="txt2"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name3" name="med_name3">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine3'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt3' type="text" name="txt3"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name4" name="med_name4">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine4'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt4' type="text" name="txt4"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name5" name="med_name5">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine5'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt5' type="text" name="txt5"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name6" name="med_name6">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine6'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt6' type="text" name="txt6"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name7" name="med_name7">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine7'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt7' type="text" name="txt7"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name8" name="med_name8">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine8'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt8' type="text" name="txt8"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name9" name="med_name9">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine9'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt9' type="text" name="txt9"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name10" name="med_name10">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine10'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt10' type="text" name="txt10"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name11" name="med_name11">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine11'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt11' type="text" name="txt11"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name12" name="med_name12">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine12'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt12' type="text" name="txt12"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name13" name="med_name13">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine13'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt13' type="text" name="txt13"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name14" name="med_name14">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine14'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt14' type="text" name="txt14"/></TD>
                                    </TR>

                                    <TR>
                                        <TD  width="300" id="med_name15" name="med_name15">
                                            <div>
                                                <?php
                                                include ("init.php");
                                                $query = "select medicine_name from medicine";
                                                $result = mysql_query($query, $con);
                                                echo"<select name='medicine15'>";
                                                while ($row = mysql_fetch_array($result)) {
                                                    echo "<option value=" . $row['medicine_name'] . ">" . $row['medicine_name'] . "</option>";
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </TD> 
                                        <TD width="50"><INPUT id='txt15' type="text" name="txt15"/></TD>
                                    </TR>

                                </TABLE>



                                <li class="buttons">
                                    <input type="hidden"  name="form_id" value="3657" />

                                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                                </li>

                            </form>	
                            <div id="footer"></div>
                        </div>
                        <img id="bottom" src="bottom.png" alt="">

                            <?php
                            include("init.php");
                            include("../entities/Transaction.php");
                            include("../entities/MedicineTransaction.php");
                            if (isset($_POST['submit'])) {

                                $med1 = $_POST['medicine1'];
                                $q1 = $_POST['txt1'];

                                $med2 = $_POST['medicine2'];
                                $q2 = $_POST['txt2'];

                                $med3 = $_POST['medicine3'];
                                $q3 = $_POST['txt3'];

                                $med4 = $_POST['medicine4'];
                                $q4 = $_POST['txt4'];

                                $med5 = $_POST['medicine5'];
                                $q5 = $_POST['txt5'];

                                $med6 = $_POST['medicine6'];
                                $q6 = $_POST['txt6'];

                                $med7 = $_POST['medicine7'];
                                $q7 = $_POST['txt7'];

                                $med8 = $_POST['medicine8'];
                                $q8 = $_POST['txt8'];

                                $med9 = $_POST['medicine9'];
                                $q9 = $_POST['txt9'];

                                $med10 = $_POST['medicine10'];
                                $q10 = $_POST['txt10'];

                                $med11 = $_POST['medicine11'];
                                $q11 = $_POST['txt11'];

                                $med12 = $_POST['medicine12'];
                                $q12 = $_POST['txt12'];

                                $med13 = $_POST['medicine13'];
                                $q13 = $_POST['txt13'];

                                $med14 = $_POST['medicine14'];
                                $q14 = $_POST['txt14'];

                                $med15 = $_POST['medicine15'];
                                $q15 = $_POST['txt15'];

                                $transaction = new Transaction();
                                $medicinetransaction = new MedicineTransaction();
                              
                                $patient_name=$_POST['patient_name'];
                                $contact_no=$_POST['contact_no'];
                                $id = $medicinetransaction->addmed($patient_name, $contact_no);
                                $med = array($med1, $med2, $med3, $med4, $med5, $med6, $med7, $med8, $med9, $med10, $med11, $med12, $med13, $med14, $med15);
                                $quan = array($q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15,0);


                                $i = 0;
                                while ($quan[$i] != 0) {

                                    $transaction->medicine($id, $med[$i], $quan[$i]);
                                    $i++;
                                }
                            }
                            ?>
                            </BODY>
                            </HTML>

