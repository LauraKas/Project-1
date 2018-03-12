<?php


define('DB_NAME', 'parduotuve1');
define('UNSER', 'root');
define('PASSWORD', 'root');
define('DB_HOST', 'localhost');


$connnection = mysqli_connect( DB_HOST, UNSER, PASSWORD, DB_NAME);
mysqli_set_charset($connnection, 'utf8');
