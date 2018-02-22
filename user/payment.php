<?php
    include('includes/header.php');
?>


<div class="container">


<?php
    include('includes/db.php');
    
    echo 'id = '.$_GET['u_id'].'<br>';
    $user = $_GET['u_id'];
    $q = 'SELECT * FROM `payment` WHERE u_id = '.$user.' AND p_id in (SELECT MAX(p_id) FROM `payment` GROUP BY u_id) HAVING timediff(next_payment_date, now()) < 0';
    
    $result = mysqli_query($con, $q);
    $n = mysqli_num_rows($result);
    
    if($n > 0){
        $row = mysqli_fetch_array($result);
        $due = $row['next_payment_date'];
        // echo $due;

        // $n2 = "2018-02-11";  // wrote this for testing purposes
        // $now = strtotime($n2);
        $now = time();
        $your_date = strtotime($due);
        $datediff = $now - $your_date;
        $days = round($datediff / (60 * 60 * 24));
        $penalty = $days * 10;
        echo "Penalty = Rs.".$penalty;
        echo "\nTotal payment = Rs.".$total = 5000 + $penalty;
        ?>
            <form method="post" action="../Paytm/PaytmKit/pgRedirect.php">
                <table border="1">
                    <tbody>
                        <tr>
                            <th>S.No</th>
                            <th>Label</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><label>ORDER_ID::*</label></td>
                            <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
                                name="ORDER_ID" autocomplete="off"
                                value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><label>CUSTID ::*</label></td>
                            <td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><label>INDUSTRY_TYPE_ID ::*</label></td>
                            <td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><label>Channel ::*</label></td>
                            <td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
                                size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><label>txnAmount*</label></td>
                            <td><input title="TXN_AMOUNT" tabindex="10"
                                type="text" name="TXN_AMOUNT"
                                value="<?php echo $total;?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input value="CheckOut" type="submit"	onclick=""></td>
                        </tr>
                    </tbody>
                </table>
                * - Mandatory Fields
            </form>
        <?php
    }
    else{
        echo 'no payment pending';
    }


?>


</div>


<?php
    include('includes/footer.php');
?>