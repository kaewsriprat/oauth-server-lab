<?php
$dsn      = 'mysql:dbname=oauth-db;host=203.159.172.53';
$username = 'root';
$secret = '0pSM0E@dM1n';

try {
    $conn = new PDO($dsn, $username, $secret);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
