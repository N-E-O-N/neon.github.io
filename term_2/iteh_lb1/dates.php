<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $score = $_GET["targetDate"];


    $cars = "SELECT DISTINCT cars.Name from cars, rent WHERE ID_Cars = FID_Car and Date_start > '". $score ."' or Date_end < '". $score ."'";

    foreach ($dbh->query($cars) as $row) {
        echo $row['Name'] . '&nbsp;';
    }
} catch (PDOException $e) {
    echo "Error";
}