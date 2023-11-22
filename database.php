<?php

$DATABASE_HOSTNAME = "localhost";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "digilog";


$conn = mysqli_connect($DATABASE_HOSTNAME,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if (!$conn) {
    die ("Database is not connected Something wrong");
}



?>