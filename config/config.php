<?php 

require "dotenv/env.php";
//  servername   username password
$servername = 'localhost';
$username = 'root';
$password=$db_pass;
$database =$db_name;




// we can specify the database here so that we dont have to change it later

// connection for sql i 
// connection variable to connect to my sqli 

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
    // if the connection failed then and only then this code will run

    echo  '<div class= "container">
        <div class="alert alert-primary alert-dismissible fade show">
            <strong>Error! 404</strong> Server Error :( Come back later
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    </div>';
    // you can check the error here but dont print on the production
    // die("not connected" . mysqli_connect_error());
  die();
}




// var dump will dump the value on the screen  if the value is true then the database is created else it is not created 
?>



<!-- this will be used for making the middleware and then included to other files  -->