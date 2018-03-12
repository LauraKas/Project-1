<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Odinis riešutas</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:400i" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <link rel="stylesheet" href="../css/main.css">
</head>


<body>


    <!-- IDEA: MENIU***** -->
<?php
    include("../php/header.php");
?>



    <!-- Pradzios tektas -->

    <?php
        include('../DB/shop_db.php');
    ?>

    <div class="container bg-1 mt-100 bg-1 align-items-center">
        <div class="row aukstis-100">
            <nav class="col-12 mt-4 pl-80">
                <h5><?php $tekstas = getTekstai(5); echo $tekstas['tekstas']; ?><br>
                <?php $tekstas = getTekstai(6); echo $tekstas['tekstas']; ?></h5>
            </nav>
        </div>
        <div class="row aukstis-100">
            <nav class="col-12 pr-80 pl-50 pb-40">
                <h6 class="text-right">Kainos, kiekiai ir kitos detalės aptariamos indivividualiai, atsižvelgiant į Jūsų norus ir pageidavimus.</h6>
            </nav>
        </div>
    </div>


    <!-- IDEA: pirma linija foto -->





    <!-- PIRMA FT -->

    <div class="container container3 pl-80 bg-1">
            <div class="row pb-70">

                <section class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card" style="width:250px">
                        <a href="#" id="pop">
                                <img id="imageresource" src="../pictures/1-shop.jpg" style="width:250px">
                            </a>
                        <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel"> 1. <?php $preke = getShop(1); echo $preke['name']; ?> </h4>
                                    </div>
                                    <div class="modal-body"><?php $preke = getShop(1); echo $preke['description']; ?>
                                        <img src="" id="imagepreview" style="width: 450px; height: 350px;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">1. <?php echo $preke['name']; ?> </h5>
                            <button type="button" class="btn btn-1 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
                </section>


                <!-- DU -->
                <section class="col-sm-3 col-md-6 col-lg-4">
                    <div class="card" style="width:250px">
                        <a href="#" id="pop">
            <img id="imageresource2" src="../pictures/2-shop.jpg" style="width:250px">
        </a>
                        <div class="modal fade" id="imagemodal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">2. <?php $preke = getShop(2); echo $preke['name']; ?> </h4>
                                    </div>
                                    <div class="modal-body"> <?php $preke = getShop(2); echo $preke['description']; ?>
                                        <img src="" id="imagepreview2" style="width: 450px; height: 350px;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">2. <?php $preke = getShop(2); echo $preke['name']; ?> </h5>
                            <button type="button" class="btn btn-2 mygtukas mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
                </section>

                <!-- tRYS -->
                <section class="col-sm-3 col-md-6 col-lg-4">
                    <div class="card" style="width:250px">
                        <a href="#" id="pop">
            <img id="imageresource3" src="../pictures/3-shop.jpg" style="width:250px">
        </a>
                        <div class="modal fade" id="imagemodal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">3.<?php $preke = getShop(3); echo $preke['name']; ?></h4>
                                    </div>
                                    <div class="modal-body"> <?php $preke = getShop(3); echo $preke['description']; ?>
                                        <img src="" id="imagepreview3" style="width: 450px; height: 350px;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">3. <?php $preke = getShop(3); echo $preke['name']; ?></h5>
                            <button type="button" class="btn btn-3 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
                </section>
            </div>
        </main>


        <!-- IDEA: antra linija foto -->
<!-- IDEA: KETVIRTA FT -->

            <div class="row pb-70">

                <section class="col-sm-3 col-md-6 col-lg-4">
                    <div class="card" style="width:250px">
                        <a href="#" id="pop">
                <img id="imageresource4" src="../pictures/4-shop.jpg" style="width:250px">
                </a>
                        <div class="modal fade" id="imagemodal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">4. <?php $preke = getShop(4); echo $preke['name']; ?> </h4>
                                    </div>
                                    <div class="modal-body"> <?php $preke = getShop(4); echo $preke['description']; ?>
                                        <img src="" id="imagepreview4" style="width: 450px; height: 350px;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">4. <?php $preke = getShop(4); echo $preke['name']; ?></h5>
                            <button type="button" class="btn btn-4 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
                </section>

<!-- IDEA: PENKTA -->
                <section class="col-sm-3 col-md-6 col-lg-4">
                    <div class="card" style="width:250px">
                        <a href="#" id="pop">
                <img id="imageresource5" src="../pictures/5-shop.jpg" style="width:250px">
                </a>
                        <div class="modal fade" id="imagemodal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">5. <?php $preke = getShop(5); echo $preke['name']; ?></h4>
                                    </div>
                                    <div class="modal-body"> <?php $preke = getShop(5); echo $preke['description']; ?>
                                        <img src="" id="imagepreview5" style="width: 450px; height: 350px;">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">5. <?php $preke = getShop(5); echo $preke['name']; ?></h5>
                            <button type="button" class="btn btn-5 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
                </section>

<!-- IDEA: SESTA -->

<section class="col-sm-3 col-md-6 col-lg-4">
    <div class="card" style="width:250px">
        <a href="#" id="pop">
<img id="imageresource6" src="../pictures/6-shop.jpg" style="width:250px">
</a>
        <div class="modal fade" id="imagemodal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">6. <?php $preke = getShop(6); echo $preke['name']; ?></h4>
                    </div>
                    <div class="modal-body"> <?php $preke = getShop(6); echo $preke['description']; ?>
                        <img src="" id="imagepreview6" style="width: 450px; height: 350px;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">6. <?php $preke = getShop(6); echo $preke['name']; ?></h5>
            <button type="button" class="btn btn-6 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
        </section>
    </div>
    </main>


<!-- IDEA: SEPTINTA -->

        <!-- IDEA: trecia linija foto -->
        <footer class="row pb-70">

            <section class="col-sm-3 col-md-6 col-lg-4">
                <div class="card" style="width:250px">
                    <a href="#" id="pop">
            <img id="imageresource7" src="../pictures/7-shop.jpg" style="width:250px">
            </a>
                    <div class="modal fade" id="imagemodal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">7. <?php $preke = getShop(7); echo $preke['name']; ?></h4>
                                </div>
                                <div class="modal-body"> <?php $preke = getShop(7); echo $preke['description']; ?>
                                    <img src="" id="imagepreview7" style="width: 450px; height: 350px;">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">7. <?php $preke = getShop(7); echo $preke['name']; ?> </h5>
                        <button type="button" class="btn btn-7 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
            </section>




<!-- IDEA: ASTUNTA -->

<section class="col-sm-3 col-md-6 col-lg-4">
    <div class="card" style="width:250px">
        <a href="#" id="pop">
<img id="imageresource8" src="../pictures/8-shop.jpg" style="width:250px">
</a>
        <div class="modal fade" id="imagemodal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">8.<?php $preke = getShop(8); echo $preke['name']; ?></h4>
                    </div>
                    <div class="modal-body"> <?php $preke = getShop(8); echo $preke['description']; ?>
                        <img src="" id="imagepreview8" style="width: 450px; height: 350px;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">8. <?php $preke = getShop(8); echo $preke['name']; ?></h5>
            <button type="button" class="btn btn-8 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
</section>


<!-- IDEA: DEVINTA -->
<section class="col-sm-3 col-md-6 col-lg-4">
    <div class="card" style="width:250px">
        <a href="#" id="pop">
<img id="imageresource9" src="../pictures/9-shop.jpg" style="width:250px">
</a>
        <div class="modal fade" id="imagemodal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">9. <?php $preke = getShop(9); echo $preke['name']; ?></h4>
                    </div>
                    <div class="modal-body"> <?php $preke = getShop(9); echo $preke['description']; ?>
                        <img src="" id="imagepreview9" style="width: 450px; height: 350px;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">9. <?php $preke = getShop(9); echo $preke['name']; ?></h5>
            <button type="button" class="btn btn-9 mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" data-toggle="collapse" data-target="#demo">Daugiau informacijos</button>
        </section>

</main>
</div>
</section>


<!-- <div class="container">
    <div class="row aukstis-350">
        <div class="col-12">
<h5>Palikite atsiliepimą apie prekes</h5>
<!-- <form class="" action="../DB/komentarai.php" method="POST">
    <!-- <label>Jūsų vardas</label> <br /> -->
    <!-- <input type="text" minlength="2" name="vardas" value="" maxlength="5" placeholder="Jūsų vardas"> <br />
    <!-- <label> Jūsų komentaras</label> <br /> -->
    <!-- <textarea name="komentaras" rows="8" cols="80" value=""placeholder="Komentaras..." ></textarea> <br /> -->
    <!-- <button type="submit" name="button">  Siųsti! </button> -->
<!-- </form>
        </div>
    </div>
</div>




    <!-- IDEA: APACIA -->
<?php
    include("../php/footer.php");
?>






            <!-- IDEA: js puslapio apacioje -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <!-- !!! mano js failas - VISADA pats zemiausias -->
            <script type="text/javascript" src="../js/main.js">
            </script>

        </body>
</html>
