
<?php


// getShop($nr)
// createShop($name, $img)
// deleteShop($nr)
// editShop($nr, $vardas, $pavarde)

// deleteShop($nr)


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
   } else {
       // echo "Jus prisijungete prie DB <br>";
   }

   return $connnection;
}

//===========
function getShop($nr) {
    $manoSQL = "SELECT * FROM shop WHERE id='$nr';";
    // mysqli_query - grazina duomenis MYSQL objekte
    $resultatai = mysqli_query(    getPrisijungimas(), $manoSQL); // mysqli_query - ivykdo uzduota SQL teksta

    if( !$resultatai  ) {
        echo "Ieskoma preke. nr: " . $nr . " <br> ";
        return NULL;
    } else {
        // MYSQL objekta verciam i masyvas
        $resultatu_masyvas = mysqli_fetch_assoc(   $resultatai   );
        return $resultatu_masyvas;
        // mysqli_fetch_assoc - pavercia i associatyvu masyva
        // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
        // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
    }
}


///////////
function getTekstai($nr) {
    $manoSQL = "SELECT * FROM tekstai WHERE id='$nr';";
    // mysqli_query - grazina duomenis MYSQL objekte
    $resultatai = mysqli_query(    getPrisijungimas(), $manoSQL); // mysqli_query - ivykdo uzduota SQL teksta

    if( !$resultatai  ) {
        echo "Ieskomas tekstas. nr: " . $nr . " <br> ";
        return NULL;
    } else {
        // MYSQL objekta verciam i masyvas
        $resultatu_masyvas = mysqli_fetch_assoc(   $resultatai   );
        return $resultatu_masyvas;
        // mysqli_fetch_assoc - pavercia i associatyvu masyva
        // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
        // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
    }
}

////////

function getKontaktai($nr) {
    $manoSQL = "SELECT * FROM kontaktai WHERE id='$nr';";
    // mysqli_query - grazina duomenis MYSQL objekte
    $resultatai = mysqli_query(    getPrisijungimas(), $manoSQL); // mysqli_query - ivykdo uzduota SQL teksta

    if( !$resultatai  ) {
        echo "Ieskomi kontaktai. nr: " . $nr . " <br> ";
        return NULL;
    } else {
        // MYSQL objekta verciam i masyvas
        $resultatu_masyvas = mysqli_fetch_assoc(   $resultatai   );
        return $resultatu_masyvas;
        // mysqli_fetch_assoc - pavercia i associatyvu masyva
        // mysqli_fetch_array - pavercia i associatyvu ir paprasta masyva
        // mysqli_fetch_row - ~~ pavercia i  paprasta masyva
    }
}


///// trinimas
function deleteShop($nr) {
    $manoSQL = "DELETE FROM shop WHERE id='$nr'; ";
    mysqli_query( getPrisijungimas(), $manoSQL);
}
// deleteShop(10);


//
// function createComments($vardenis, $emeilas, $komentas) {
//     $manoSQL = "INSERT INTO komentarai VALUES ('', '$vardenis', '$emeilas', ''$komentas' ); ";
//     mysqli_query(   getPrisijungimas(), $manoSQL);
// }

////////////////

// function createKomentaras($vardas, $komentaras) { // naujo gydytojo sukurimas
// 	// $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); // uzkoduoja spec simbolius " ' /n /t <>
// 	// $komentaras = mysqli_real_escape_string(getPrisijungimas(), $komentaras);
// 	$manoSQL = " INSERT INTO komentarai1 VALUES ('', '$vardas', '$komentaras'); "; // i msql paste'inti be $
// 	$resultatai = mysqli_query(    getPrisijungimas(), $manoSQL);
//
// }
// createKomentaras("vardas", "komentaras");








?>
