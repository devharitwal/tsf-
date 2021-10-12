<?php

require "header.php";
?>


<style>
    <?php include "css/transfer.css";
    ?>
</style>

<body>



    <?php

    include 'navbar.php';


    // middle ware files
    require "config/config.php";

    require "sql/transferget.php";


    ?>


    <?php



    // checking if the server request is POST type then it will run the code
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // check max value if(amount>9500) throw error

        $max = 9500;

        // if the upi id is selected and the amount is in the range and the value is not 0
        if ($_POST['upi'] === '@UPI' ||  $_POST['amount'] === '' || $_POST['amount'] > $max) {

            echo  '<div class= "container">
                            <div class="alert alert-warning alert-dismissible fade show">
                                <strong> Limit Warning!</strong> Please fill out all the required fields before proceeding.
                                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                            </div>
                        </div>';


            // header("location:transfer2.php");
        } else {
            $upis = $_POST['upi'];

            $amounts = $_POST['amount'];


            $sql1 = "UPDATE contacts set balance=balance+'$amounts' where upi='$upis'";
            $result1 = mysqli_query($conn, $sql1);




            if ($result1) {


                sleep(1);

                // insert the form data to transaction table after updating the balance into test table
                $sql2 = "INSERT INTO `transaction` ( `upi`, `amount`) VALUES ( '$upis', '$amounts');";
                $result2 = mysqli_query($conn, $sql2);


                if ($result2) {
                    sleep(1);

                    header("location:dashboard.php");
                } else {

                    echo  '<div class= "container">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>Database Error!</strong> Database Down
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    </div>';
                }
            } else {
                echo  '<div class= "container">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>Database Error! </strong> Database Down
                                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                    </div>';
            }
        }
    }

    ?>

    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Transfer Money</h1>
                <h4 class="h4-heading">Take care of you and yours at home, and we can take care of you online.</h4>
            </div>
            <div class="form-content">
                <form action="transfer.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <select required class="upi" name="upi">
                            <option> @UPI</option>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {

                                $upid = $row['upi'];


                            ?>
                            <!-- fetch record from db -->

                            <option value="<?php echo $upid ?>"> <?php echo  $upid ?> </option>
                            <?php } ?>

                        </select>



                    </div>
                    <div class="form-group">

                        <label for="amount">Amount</label>
                        <input id="amount" type="text" name="amount" required="required" />
                    </div>

                    <div class="form-group">
                        <button type="submit">Transfer</button>


                    </div>

                </form>



            </div>
        </div>

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