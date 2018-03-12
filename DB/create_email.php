<?php


define('DB_NAME', 'parduotuve1');
define('UNSER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


$connnection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME);
mysqli_set_charset($connnection, 'utf8');


function getPrisijungimas() {
   global $connnection;

   if( !$connnection ) {
       echo "ERROR prisijungti prie DB " . DB_NAME . " nepavyko <br>";
       echo "ERROR  " . mysqli_connect_error($connnection) . " <br>";
   }

   return $connnection;
}

//////

function createEmail(name, emailas, question) {
    $manoSQL =  "INSERT INTO email VALUES ('', '$klientas', '$klientoEmail', '$klientoKlausimas', '$klientoTema'); ";
    mysqli_query(   getPrisijungimas(), $manoSQL);
}

    if($arPavyko) {
            // pavyko
    } else { // nepavyko
        echo "ERROR: sukurti gydytojo nepavyko " . mysqli_error(getPrisijungimas()) . " <br>";
    }
}
createEmail($klientas, $klientoEmail, $klientoKlausimas, $klientoTema);
