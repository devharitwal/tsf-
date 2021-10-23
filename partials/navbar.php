<body>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="static/js/app.js"></script>



    <div class="container nav-container ">

        <nav class="sticky navbar navbar-expand-lg navbar-light  ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="learn.php">About</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" target="_blank"
                            href="https://www.linkedin.com/in/devharitwal/">Contact</a>
                    </li>


                </ul>

                <div class="d-flex justify-content-center mr-4">
                    <a class="navbar-brand font-weight-bold  text-primary   " href="index.php">
                        <h2>
                            <img src="static/images/DRH.svg" alt="drh">
                        </h2>

                    </a>
                </div>

                <div class="ml-auto">
                    <ul class="navbar-nav">

                        <!--  night theme  -->

                        <li class=" nav-item">
                            <div class="mt-2 mr-2">
                                <img id="nightMode" src="static/images/moon.png" alt="mode">
                            </div>
                        </li>



                        <li class=" nav-item">
                            <a class="btn text-white btn-md m-1 " style="background-color: black;"
                                rel="noopener noreferrer" href="login.php" role="button">Login</a>
                        </li>

                    </ul>

                </div>


            </div>








        </nav>

    </div>
    <!--navbar end -->