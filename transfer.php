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
    <!-- layout  -->
    <!-- form  -->

    <div class="container">
        <div class="left">
            <div class="header">
                <h2 class="animation a1">Transfer Money</h2>
                <h4 class="animation a2">Take care of you and yours at home, and we can take care of you online.</h4>
            </div>
            <div class="form">
                <div>

                    <select class="form-field animation a3 " placeholder="Username" name="username" id="username">
                        <option value="username "> Username</option>
                        <option value="Names"> <?php echo "@"; ?>Dev Haritwal

                            <!--  this place will contain the php code from the database for transfer names -->
                            <!--  redirect the user to the dashboard as soon as clicked in transfer button -->
                        </option>


                    </select>

                </div>
                <input type="text" class="form-field animation a4" placeholder=" $ Amount">
                <button class="animation a6" onclick="window.location.href='/tsf/dashboard.php';">Transfer</button>

                <br>
                <div class="alert alert-warning" role="alert">
                    <?php
                    //  if payment succes show this message else tell not success

                    ?>
                </div>
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