<?php

require "config/config.php";
require "sql/transferform.php";


$sql = "INSERT INTO `transaction` ( `upi`, `amount`) VALUES ('$upid', '$amount');";
$result = mysqli_query($conn, $sql);





// sql to save the data to database 
?>