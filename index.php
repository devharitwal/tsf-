<?php  require "header.php" ;?>

<body>


    <br>
    <!-- navbar  -->
    <?php

    include 'navbar.php';
    ?>

    <br>


    <!--  -->




    <!--  layout  -->
    <div class="container">


        <div class=" jumbotron jumbotron-fluid" style="background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
            ">
            <div class="container text-white">
                <h1 class="display-4 ml-4 ">Money. Balance both.</h1>

                <p class="lead ml-4">We are here to help.</p>


                <a class=" btn btn-light btn-md m-4 p-2" href="learn.php" role="button">Learn more</a>

            </div>
        </div>


    </div>



    <section>

        <div class="container p-3">
            <div class="card p-4  power">
                <div class="row">
                    <div class="col-lg-12  col-sm-12">
                        <div class="card-body text-white">

                            <h5 class="card-title font-italic ml-3">Powering your ideas.</h5>
                            <p class="card-text ml-3">The simple way to send or receive money with anyone</p>
                            <a href="transfer.php" class=" btn  btn-light ml-3 ">Get Started </a>
                        </div>
                    </div>

                </div>


            </div>

        </div>


    </section>


    <!-- cards  -->



    <section>

        <div class="container p-3">
            <div class="row">


                <div class="col-sm-6 col-lg-12">
                    <div class="card bg-warning p-4">
                        <div class="card-body text-white ">
                            <h5 class="card-title ml-3  font-italic">Ready for tomorrow?</h5>
                            <p class="card-text ml-3">Manage all of your transactions at one place. </p>
                            <a href="dashboard.php" class="btn btn-light ml-3">Manage Now </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>






    </section>






    </div>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- footer end  -->





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>



</body>

</html>