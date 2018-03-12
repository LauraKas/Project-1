
<!--1. SUKURIAME Duomenu baze  -->
---
CREATE DATABASE parduotuve1;

<!-- show databases;                      ---//pasitikrinimas -->

use parduotuve1;


CREATE TABLE komentarai1 (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   vardas varchar(25),
   komentaras varchar(25)
   );



<!-- 2. SUkuriame lenteles -->
CREATE TABLE shop (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   name varchar(25),
   img varchar(25)
   );

show tables;

    INSERT INTO shop VALUES ('', 'Ruda piniginė', '1-shop.JPG');
    INSERT INTO shop VALUES ('', 'Plona apyrankė', '2-shop.jpg');
    INSERT INTO shop VALUES ('', 'Laikrodžio apyrankė', '3-shop.JPG');
    INSERT INTO shop VALUES('', 'Laikrodžio apyrankė', '4-shop.JPG');
    INSERT INTO shop VALUES('', 'Raktinė', '5-shop.JPG');
    INSERT INTO shop VALUES('', 'Šuns atkaklis', '6-shop.JPG');
    INSERT INTO shop VALUES('', 'Laikrodžio apyrankė', '7-shop.JPG');
    INSERT INTO shop VALUES('', 'Apyrankė su inkaru','8-shop.JPG');
    INSERT INTO shop VALUES('', 'Odinė apyrankė', '9-shop.JPG');


    ALTER TABLE shop
    ADD description varchar(25);



<!-- LENTELE Tekstai -->
CREATE TABLE tekstai (
   id INT(6) AUTO_INCREMENT PRIMARY KEY,
   skyrius varchar(20),
   tema varchar(20),
   tekstas varchar(20)
   );



show tables;

    INSERT INTO tekstai VALUES ('', 'Apie mus', 'IstorijaPirma', 'Senos odos atraižos, popieriaus peilis, pieštukas, yla, siūlas ir adata – šiais įrankiais buvo sukurta pirmoji O.R. laikrodžio apyrankė...');
    INSERT INTO tekstai VALUES ('', 'Apie mus', 'IstorijaAntra', 'Drąsos kurti įgijome po truputį. Prireikė nemažai laiko, atsidavimo ir ypatingai kruopštaus darbo, kol atradome unikalų, savitą stilių ir galėjome jį pritaikyti Jūsų norams ir pageidavimams.');
    INSERT INTO tekstai VALUES ('', 'Apie mus', 'Tikslas', 'Turime tikslą – kurti unikalius, rankų darbo dirbinius, kurie prideda ypatingos kokybės Jūsų gyvenimui.');
    INSERT INTO tekstai VALUES ('', 'Apie mus', 'Gaminiai', 'Patogūs, ilgaamžiai, unikalūs, odiniai rankų darbo gaminiai...');
    INSERT INTO tekstai VALUES ('', 'Galerija', 'Gamyba', 'Gaminame įvairius rankų darbo dirbinius iš natūralios odos.');
    INSERT INTO tekstai VALUES ('', 'Galerija', 'GamybaAntra', 'Galite rinktis iš kataloge siūlomų prekių arba užsisakyti pagal individualų užsakymą.');



    CREATE TABLE email (
       id INT(6) AUTO_INCREMENT PRIMARY KEY,
       name varchar(25),
       emailas varchar(25),
       question varchar(30)
       );


       CREATE TABLE kontaktai (
          id INT(6) AUTO_INCREMENT PRIMARY KEY,
          name varchar(25),
          phone varchar(25),
          email varchar(25),
          facebook varchar(30)
          );



              INSERT INTO kontaktai VALUES ('', 'Odinis riešutas', '+370 630 33418', 'riesutas.odinis@gmail.com', 'Odinis riešutas');
        );











    ALTER TABLE shop
    ADD description varchar(25);

    ALTER TABLE email
    ADD tema varchar(25);


<!--3. Prisijungiame prie DB  -->

define('DB_NAME', 'projektas1');
define('UNSER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


$connection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME);

if (!$connection ) {
    echo "ERROR prisijungti prie DB " . DB_NAME . " nepavyko <br />";
    echo "ERROR" . mysqli_connect_error(!$connection) . "<br />";
} else {
    echo "Jus prisijungete pre DB <br />";
}

<!--  sarasa sudaryto-->

<div class="container">
        <h1>Gydytoju sarasas</h1>

        <?php
            require('./libs/doctors_db.php');
            for ($i=1; $i < 5; $i++) :
        ?>

                    <article class="row">
                        <?php $preke = getName($i);  ?>
                                <?php echo $preke['name']; ?>



                        </div>
                        <div class="col bg-success text-center m-2">
                            <h2>
                                <?php echo $gydytojas['lname']; ?>
                            </h2>
                        </div>
                    </article>


<?php endfor; ?>


</div>
<!--  END CONTAINER -->










         -
