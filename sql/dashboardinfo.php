<?php

// gettin the config file for connection this is separated from the app 

require "config/config.php";
 $sql= "SELECT * FROM `transaction`";
 $result = mysqli_query($conn, $sql);
 
 ?>