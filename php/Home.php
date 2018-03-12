<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Odinis riešutas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>


<body>

    <!-- IDEA: MENIU******* -->
<?php
    include("../php/header.php");
?>





    <!-- IDEA: VIRSELIO NUOTRAUKOS -->
<div id="carouselExampleIndicators" class="container carousel slide no-padding img-responsive mt-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="../pictures/virselis1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="../pictures/virselis2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="../pictures/virselis3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- IDEA: TEKSTAS -->

    <?php
        include('../DB/shop_db.php');
    ?>



    <section class="container bg-1">
        <div class="row">
            <div class="col-md-6 mt-70 offset-4 mx-auto d-block">

                <h3 class="text-center istorija"><span class="type"></span></h3> <br />




                <p class="text-justified "><?php $tekstas = getTekstai(1); echo $tekstas['tekstas']; ?> <br /> <?php $tekstas = getTekstai(2); echo $tekstas['tekstas']; ?> </p>

                <p class="text-justified"><span class="tikslas"></span></p>



            </div>
        </div>
        <div class="row mt-70 mb-50">
            <div class="col-md-6 tilt1">
                <img src="../pictures/1-istorija.jpg" alt="" class="apvali rounded-image mx-auto d-block img-fluid">
            </div>
            <div class="col-md-6 tilt2">
                <img src="../pictures/2-istorija.jpg" alt="" class="apvali rounded-image mx-auto d-block img-fluid">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 align-items-center tilt2">
                <img src="../pictures/3-istorija.jpg" alt="" class="apvali rounded-image mx-auto d-block img-fluid">
            </div>

    </section>


    <!-- IDEA: apatine foto -->

    <div class="container bg-1">
        <header class="row aukstis-200 ">
            <div class="col-12 d-flex align-items-center ml-20">
                <p><span class="patogus"></span></p>
            </div>
        </header>

        <div class="row wrapper ">
            <nav class="col-3 pabaigosNuotrauka aukstis-600">
            </nav>
            <main class="col">
                <div class="row">
                    <section class="col aukstis-500 d-flex align-items-center">
                        <p class="text-align-center tekstas"><span class="inividualiai"></span></p>
                    </section>
                    <aside class="col-3 pabaigosNuotrauka2 img-responsive aukstis-500">
                    </aside>
                </div>
                <footer class="row aukstis-100">
                    <div class="col-12 align-items-end">
                        <h4 class="text-center"><?php $tekstas = getTekstai(3); echo $tekstas['tekstas']; ?></h4>
                    </div>
                </footer>
            </main>
        </div>
    </div>


<!-- IDEA: apacia -->

<?php
    include("../php/footer.php");
?>






    <!-- IDEA: js puslapio apacioje -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- !!! mano js failas - VISADA pats zemiausias -->
    <script type="text/javascript" src="../js/typed.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
</body>

</html>
