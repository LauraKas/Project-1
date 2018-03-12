<?php

include("../DB/shop_db.php");

$nr =  $_GET['numeris'];
print_r ($_GET); 

deleteShop($nr);
echo "Preke istrinta sekmingai <br />";
