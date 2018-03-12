

<?php

require_once('../DB/shop_db.php');
// $vardas = isset($_POST["vardas"]) && !empty($_POST["vardas"])
    $vardas = $_POST['vardas'];
    $komentaras = $_POST['komentaras']; // naujo gydytojo sukurimas
    	// $vardas = mysqli_real_escape_string(getPrisijungimas(), $vardas); // uzkoduoja spec simbolius " ' /n /t <>
    	// $komentaras = mysqli_real_escape_string(getPrisijungimas(), $komentaras);
$manoSQL = " INSERT INTO komentarai1 VALUES ('', '$vardas', '$komentaras'); "; // i msql paste'inti be $
$resultatai = mysqli_query(    getPrisijungimas(), $manoSQL);
Header("Location: ../php/success.php");
