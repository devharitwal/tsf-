<!--login logic  -->







<?php 



require "partials/header.php";


require  "partials/navbar.php";



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