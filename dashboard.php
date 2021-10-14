<?php
require "partials/header.php";
?>

<body>

    <br>
    <!-- navbar  -->
    <?php

    include 'partials/navbar.php';
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

            <div class="p-4" style=" background-color:#fff">
                <h6 class="display-4 font-weight-bold text-dark">Hi, Welcome Back <span style="color:#0eb1d2"> :)</span>
                </h6>
                <p class="lead font-weight-bold text-dark">Dev Haritwal</p>
                <div class="w-25 " style="color: #8d99ae;" role="alert"> Completed Transactions</div>
            </div>


            <hr class="my-4">
            <!-- all the transactions fetched from db -->
            <div class="container-md   p-1">
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

    <?php

        include 'partials/footer.php';
        ?>