<!-- include header , navbar  -->





<?php 



require "header.php";


require  "navbar.php";



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

                    <p>Join 7 Million users today </p>
                    <div class="form pt-4">
                        <form action="#">
                            <input type="email" required name="email" id="username" placeholder="Email">
                            <input type="password" required name="password" id="password" placeholder="Password">

                        </form>
                    </div>


                    <a href="#" class="btn text-white mt-4 control">
                        Login
                    </a>





                    <!--  form elements -->
                    <!-- <label class="pr-4 mr-4" for="username">Username</label>

                    <input type="text" name="username" id="username"> -->
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






<?php require "footer.php";
 ?>