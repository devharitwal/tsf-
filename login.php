<!--login logic  -->
<?php
require "partials/header.php";
require  "partials/navbar.php";

require_once "config/config.php";

?>
<!--  login logic  -->

<?php 

if(isset($_POST['login_btn']))
{
  
    $username = $_POST['email'];
    $password = ($_POST['password']);
    
    // sql to find the username 
    $user_finder = "SELECT * FROM `signup_info` WHERE email = '[$username]'";
    $result  = mysqli_query($conn,$user_finder);
    
    $nums= mysqli_num_rows($result);

    // if the system finds out the user then you can compare the hash 

    if($nums==1)
    {
    
        while ($row = mysqli_fetch_assoc($result))
        {
         
              
            if(password_verify($password,$row['password']))
            {
                $login =true;
                session_start();
                $_SESSION['loggedin'] =true;
                $_SESSION['username'] = $username;
                header('location:index.php');
            }



        }

    }
    else
    {   
       echo '
       
       
       <div class= "container">
       <div class="alert alert-danger alert-dismissible fade show">
           <strong>Invalid credentials!</strong> Check your username and password
               
       </div>
   </div>
       
       
       ';

    }
       


    

}



   
?>










<div class="container d-flex justify-content-center pt-4 mt-4">

    <div class="container">

        <div class="row">
            <div class="col-lg-6">
                <div class="login-form-elements">
                    <!-- heading  -->
                    <h1 class="display-4 font-weight-bold font-italic ">
                        Be incharge of your money.
                    </h1>

                    <p>
                        Join 7 Million users today
                    </p>





                    <div class="form pt-4">
                        <form action="login.php" method="POST">
                            <input type="email" required name="email" id="username" placeholder="Email">
                            <input type="password" required name="password" id="password" placeholder="Password">


                            <div class="pt-3" id="privacy"><a href="#">Privacy</a>
                                & <a href="#"> Terms of Service</a>
                            </div>
                            <button name="login_btn" class=" btn text-white mt-4 login-btn" type="submit">
                                Login
                            </button>



                        </form>
                    </div>




                    <!-- 
                    <a href="#" class=" btn btn-outline-primary mt-4 signup-btn ">
                        Sign Up
                    </a> -->


                </div>

            </div>



            <div class="col-lg-6 ">
                <img id="form-image"
                    src="https://images.unsplash.com/photo-1633998860517-29b9ada37476?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=774&q=80"
                    alt="">
            </div>


        </div>




    </div>
</div>






<?php require "partials/footer.php";
?>