<?php

require "config/config.php";




                // take the input and save to db 
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    //upis -- selected upi
                    $upis = $_POST['upi'];

                    // amount seleted
                    $amount = $_POST['amount'];
                    echo '<div class="alert alert-success" role="alert"> Completed Transaction</div>';
                }

    
$sql="INSERT INTO `transaction` ( `upi`, `amount`) VALUES (' @ $upis', '$amount');";
$result = mysqli_query($conn, $sql);



// sql to save the data to database 


?>