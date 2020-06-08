<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $carsName = "SELECT rent.FID_Car FROM rent";
    $outputCars[] = array();
    unset($outputCars[0]);

    foreach ($dbh->query($carsName) as $row) {
        $outputCars[] .= $row['FID_Car'];
    }
} catch (PDOException $e) {
    echo "Error";
}