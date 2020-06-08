<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);

    $data = $_GET;
    
    $sth = $dbh->prepare("INSERT INTO rent (FID_Car, Date_start, Time_start,Date_end, Time_end, Cost) VALUE (? , ? , ? , ? , ? , ?)");
    $sth->execute(array_values($data));

    echo "Success";

} catch (PDOException $e) {

    echo "Error";
}