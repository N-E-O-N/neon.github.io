<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $carsName = "SELECT cars.Name FROM cars";
    $outputCarsName[] = array();
    unset($outputCarsName[0]);

    foreach ($dbh->query($carsName) as $row) {
        $outputCarsName[] .= $row['Name'];
    }
} catch (PDOException $e) {
    echo "Error";
}