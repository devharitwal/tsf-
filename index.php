<?php  require "partials/header.php";
     require "partials/navbar.php";
?>







<!--  layout  -->
<section id="hero">

    <div class="container">

        <div class=" jumbotron hero-div jumbotron-fluid" style="background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
            ">
            <div class="container text-white">
                <h1 class="display-4 ml-4 font-weight-bold font-italic ">Money. Balance both.</h1>

                <p class="lead ml-4">We are here to help.</p>


                <a class=" btn btn-light btn-md m-4 p-2" href="learn.php" role="button">Learn more</a>

            </div>
        </div>


    </div>

</section>


<!--  cover video -->
<!-- 
<section class="hero-video-section">



    <div class="hero=div">
        <h4 id="hero-video-heading">
            Relax
        </h4>


        <video width="100%" src=" static/images/Pexels Videos 1550080 (1).mp4" autoplay loop muted></video>
    </div

    </section> 

      -->










<section>
    <div class=" container p-3">
        <div class="row ">
            <div class="col-sm-6 col-lg-6">
                <div class="card power p-4">
                    <div class="card-body text-white ">

                        <h3 class="  card-title  mb-4">Powering your ideas.
                        </h3>
                        <p class="  card-text ">The simple way to send or receive money with anyone
                        </p>
                        <a href="transfer.php" class=" btn  btn-light  ">Get Started </a>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-lg-6">
                <div class="card  bg-warning p-4">
                    <div class="card-body text-white ">

                        <h3 class="  card-title  mb-4">Take control of your money .
                        </h3>
                        <p class="  card-text ">The simple way to send or receive money with anyone
                        </p>
                        <a href="dashboard.php" class=" btn btn-light "> Manage </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>






</div>

<!-- footer -->
<?php
    include 'partials/footer.php';
    ?>
<!-- footer end  -->