<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include  'facvicon.php';
    ?>

</head>

<body>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <br>
    <!-- navbar  -->
    <?php

    include 'navbar.php';
    ?>
    <br>
    <!--  navbar end  -->





    <!-- middleware file -->
    <?php

    // connection setup done
    require "config/config.php";
    // connect transfer files 


    require "sql/dashboardinfo.php";

    ?>

    <!-- take the data from contacts db and then print the values -->
    <div class="container">
        <div class="jumbotron " style="background-color: #fff;">

        <div  class="p-4" style=" background-color:#fff">
        <h6 class="display-4 font-weight-bold text-dark" >Hi, Welcome Back  <span style="color:#0eb1d2"> :)</span> </h6>
            <p class="lead font-weight-bold text-dark">Dev Haritwal</p>
            <div class="w-25 " style="color: #8d99ae;"  role="alert"> Completed Transactions</div>
        </div>
        
          
         


            <hr class="my-4">
            <!-- all the transactions fetched from db -->
            <div class="container-md p-1">
                <table class="table border">
                    <thead>
                        <tr style="color: #fff; background-color: #6c7ae0; ">

                            <div class="row">
                                <div class="col-lg-6 md-3">
                                    <th scope="col">Amount</th>
                                </div>

                                <div class="col-lg-6">

                                    <th scope="col">UPI</th>

                                </div>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // sql statement to get the data from database 


                        while ($row = mysqli_fetch_assoc($result)) {

                            $upis = $row['upi'];
                            $amount = $row['amount'];

                            echo " <tr>
                                 <td>  $amount  </td>
                                <td> $upis </td> 
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>




            <hr class="my-4">

        </div>
    </div>

    <!-- layout end  -->

    <!-- footer -->
    <div class="container">
        <?php

        include 'footer.php';
        ?>
    </div>

    <!-- footer end  -->


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

</body>

</html>