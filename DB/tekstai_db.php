
<?php

define('DB_NAME', 'parduotuve1');
define('UNSER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


// getTekstai($nr)
// createTekstai($name, $img)
// deleteTekstai($nr)
// editTekstai($nr, $vardas, $pavarde)


$connnection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME);
// $connnection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME, 8888); su pakeistu PORTu
mysqli_set_charset($connnection, 'utf8');


function getPrisijungti() {
   global $connnection;

   if( !$connnection ) {
       echo "ERROR prisijungti prie DB " . DB_NAME . " nepavyko <br>";
       echo "ERROR  " . mysqli_connect_error($connnection) . " <br>";
   } else {
       // echo "Jus prisijungete prie DB <br>";
   }

   return $connnection;
}

//===========
// function getTekstai($nr) {
//     $manoSQL = "SELECT * FROM tekstai WHERE id='$nr';";
//     // mysqli_query - grazina duomenis MYSQL objekte
//     $resultatai = mysqli_query(    getPrisijungti(), $manoSQL); // mysqli_query - ivykdo uzduota SQL teksta
//
//     if( !$resultatai  ) {
//         echo "Ieskoma preke. nr: " . $nr . " <br> ";
//         return NULL;
//     } else {
//         // MYSQL objekta verciam i masyvas
//         $resultatu_masyvas = mysqli_fetch_assoc(   $resultatai   );
//         return $resultatu_masyvas;
//         // mysqli_fetch_assoc - pavercia i associatyvu masyva
//         // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
//         // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
//     }
// }
// $preke = getShop(1); // masyvas
// if( $preke != NULL) {
//     echo $gydytojas['name'] . " " ;
//     echo $gydytojas['lname'] . " " ;
//     echo $gydytojas['id'] . "<br>" ;
// }
//
?>
