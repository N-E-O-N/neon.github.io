<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $vendorsName = "SELECT Name FROM `vendors`";
    $outputVendors[] = array();
    unset($outputVendors[0]);

    foreach ($dbh->query($vendorsName) as $row) {
        $outputVendors[] .= $row['Name'];
    }
} catch (PDOException $e) {
    echo "Error";
}