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

    <link rel="stylesheet" href="css/transfer.css">

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<body>

    <br>
    <!-- navbar  -->
    <?php

    include 'navbar.php';
    ?>
    <br>
    <!--  navbar end  -->

    <!-- form  -->




    <!-- take the input values from the form and save it to the database called history -->
    <div class="container">
        <div class="left">
            <div class="header">
                <h2 class="animation a1">Transfer Money</h2>
                <h4 class="animation a2">Take care of you and yours at home, and we can take care of you online.</h4>
            </div>

            <!-- include the config for connection setup -->
            <?php


            require "config/config.php";
            require "sql/transferget.php";




            ?>

            <!-- form submission -->



            <div class="form">
                <div>
                    <form action="dashboard.php" method="POST">
                        <select class="form-field animation a3 " placeholder="Username" name="upi" id="upi">
                            <option name= "upi"> @UPI</option>
                            <!-- fetch record from db -->
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $upid = $row['upi'];
                                echo "  <option> $upid <br>  </option> ";
                            }




                            ?>
                            </option>
                        </select>

                </div>
                <input name="amount" type="text" class="form-field animation a4" placeholder=" $ Amount">
                <button class="animation a6">Transfer</button>

                <br>
                </form>

               

            </div>
        </div>
        <div class="right"> </div>
    </div>




    <!-- form ends  -->







    <br>

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