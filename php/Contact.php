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

    <!-- IDEA: MENIU******* -->
<?php
    include("../php/header.php");
?>







    <!-- IDEA: TEKSTAS -->


    <?php
        include('../DB/shop_db.php');
    ?>


<div class="parallax mt-100"></div>

<div style="height:400px;">
    <div class="container">
        <div class="row aukstis-600 align-self-center">
            <div class="col-lg-6 col-sm-6">
                <h2 class="text-left mb-80 mt-50">Mūsų kontaktai</h2>
                <h4 class="text-left"> <i class="fas fa-envelope"></i> <?php $pastas = getKontaktai(1); echo $pastas['email']; ?></h4>
                <h4 class="text-left"> <i class="fas fa-phone-volume"> </i> <?php $numeris = getKontaktai(1); echo $numeris['phone']; ?></h4>
                <h4 class="text-left"><i class=" fab fa-facebook-square"></i> <?php $facebook = getKontaktai(1); echo $facebook['facebook']; ?></h4>
            </div>

            <div class="col-lg-6 col-sm-6 pl-50">
                <h3 class="mt-50">Parašykite žinutę!</h3>

                <form action="../php/email.php" method="post" class="">

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="ivedimas" name="Vardas" maxlength="20" required>
                        <label class="mdl-textfield__label" for="sample3">Jūsų Vardas</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" id="ivedimas" name="Email" maxlength="30" required>
                        <label class="mdl-textfield__label">El.paštas</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" class="ivedimas" name="Tema" maxlength=""required>
                        <label class="mdl-textfield__label">Žinutės tema</label>
                    </div>

                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <textarea class="mdl-textfield__input" type="text" rows="3" maxrows="6" class="ivedimas" name="zinute" autocomplete required></textarea>
                        <label class="mdl-textfield__label">Jūsų žinutė</label>
                    </div>
                    <div>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect siusti" type="submit">Siųsti!</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


<div class="container aukstis-400">
    <div class="row">
        <div class="col-12 google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36700.62632870232!2d23.885833585379608!3d54.90662301579259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7189f4f3c4f63%3A0x954b54626c1896bb!2s%C5%BDaliakalnis%2C+Kaunas!5e0!3m2!1sen!2slt!4v1518815474615"
        width="700" height="100" frameborder="10" style="border:10" allowfullscreen></iframe>
        </div>
    </div>
</div>


<!-- pabiga -->


        <!-- IDEA: js puslapio apacioje -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- !!! mano js failas - VISADA pats zemiausias -->
        <script type="text/javascript" src="../js/.eslintrc.js"></script>
        <script type="text/javascript" src="../js/typed.js"></script>
        <script type="text/javascript" src="../js/main.js">
        </script>

</body>

</html>
