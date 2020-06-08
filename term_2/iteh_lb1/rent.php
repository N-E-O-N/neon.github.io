<?php


$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn, $user, $pass);

    $rent = $_GET["rentTarget"];

    $rentStats = "SELECT rent.Cost from rent WHERE Date_start < '". $rent ."'";

    $sum = 0;

    foreach ($dbh->query($rentStats) as $row) {
        $sum += $row['Cost'];
    }
        echo array_sum((array)$sum) . '<br>';
} catch (PDOException $e) {
    echo "Error";
}