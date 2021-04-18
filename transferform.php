<?php

// take the input and save to db
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //upis -- selected upi
    $upid = $_POST['upi'];

    // amount seleted
    $amount = $_POST['amount'];


    echo '<div class="alert alert-success" role="alert"> Completed Transaction</div>';
}

?>