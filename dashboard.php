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

    <!-- layout and components -->
    <div class="container">
        <div class="jumbotron " style="background-color: #fff;">
            <h6 class="display-4 font-weight-bold ">Hi, Welcome Back :) </h6>
            <p class="lead ">Dev Haritwal</p>

           
            <hr class="my-4">
            <!-- all the transactions fetched from db -->
            <div>
                <table class="table">
                    <thead>
                        <tr style="color: #fff; background-color: #6c7ae0;">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">UPI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <!-- make the amount dynamic here  -->
                            <td> <?php echo "$"; ?>1000</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td> <?php echo "$"; ?>1000</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td> <?php echo "$"; ?>1000</td>
                            <td>@twitter</td>
                        </tr>
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