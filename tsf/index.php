<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TSF BANK</title>
    <?php
    include  'facvicon.php';

    ?>

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



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


        <div class="jumbotron  jumbotron-fluid" style="background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
            ">
            <div class="container text-white">
                <h1 class="display-4 ml-4 ">Money. Balance both.</h1>

                <p class="lead ml-4">We are here to help.</p>


                <a class=" btn btn-light btn-md m-4 p-2" href="learn.php" role="button">Learn more</a>

            </div>
        </div>


    </div>
    



    <!-- cards  -->
    <div class="container p-4">
        


        <div class="row">
            <div class="col-sm-6">
                <div class="card p-4" style="background: #00d2ff;  /* fallback for old browsers */
                    background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
                        background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                    ">
                    <div class="card-body text-white">
                        <h5 class="card-title font-italic ml-3">Powering your ideas.</h5>
                        <p class="card-text ml-3">The simple way to send or receive money with anyone</p>
                        <a href="transfer2.php" class=" btn  btn-light ml-3 ">Get Started </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
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
    </div>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- footer end  -->





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>



</body>

</html>