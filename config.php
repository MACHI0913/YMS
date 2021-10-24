<?php

/* Using root as log in*/

/*=== Db credentials for MySQL ===*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Blackpink12!');
define('DB_NAME', 'yd_invndb');

/*=== Attempt to connect to MySQL DB ===*/
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/*=== check connection ===*/
if($mysqli == false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error()); 
}
