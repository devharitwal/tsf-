<?php




require "partials/header.php";
require "partials/navbar.php";



?>






<?php

// signup logic

require "config/config.php";



if (isset($_POST['signup_btn'])) {
    $username = $_POST['email'];
    $password = md5($_POST['password']);


    if (!empty(trim($username))) {   //  sql to insert data into db 

        if (true) {

            $signup_query = "INSERT INTO `signup_info`(`email`, `password`) VALUES ('[$username]','[$password]')";
           
            $result = mysqli_query($conn, $signup_query);
            
          

            if (!$result) {
                echo '        
                <div class= "container alert-message">
                <div class="alert alert-danger alert-dismissible fade show">
                 <strong>Username Taken!</strong> Choose a different username
            
                 </div>
                </div>     
                 ';
            }
         
            else
            {
                header('Location:login.php');
                die();
         
            }

          

        } 
    

    }
    // username empty check 
    else {
        echo '
    
                    <div class= "container">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>Username Empty!</strong> Check your username
                                
                        </div>
                    </div>
    
    ';
    }
}
?>

<!--  setting  header and navbars  -->





<div class="container d-flex justify-content-center pt-4 mt-4">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="login-form-elements">
                    <!-- heading  -->
                    <h1 class="display-4 font-weight-bold font-italic ">
                        Signup Today
                    </h1>

                    <p>
                        Enjoy the best ever return rates.
                    </p>





                    <div class="form pt-4">
                        <form action="signup.php" method="POST">
                            <input type="email" required name="email" id="username" placeholder="Email">
                            <input type="password" required name="password" id="password" placeholder="Password">


                            <div class="pt-3" id="privacy"><a href="#">Privacy</a>
                                & <a href="#"> Terms of Service</a>
                            </div>
                            <button name="signup_btn" class=" btn  mt-4 signup-btn" type="submit">
                                Signup
                            </button>



                        </form>
                    </div>






                </div>

            </div>



            <div class="col-lg-6 ">
                <img id="form-image"
                    src="https://images.unsplash.com/photo-1527903789995-dc8ad2ad6de0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=820&q=80"
                    alt="abstract">
            </div>


        </div>




    </div>
</div>



<?php require "partials/footer.php";
 ?>