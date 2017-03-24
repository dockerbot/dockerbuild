<?php

$dsn = 'mysql:host=IP_ADRESSE';
$usr = 'root';
$pwd = 'password';

try {
    $dbh = new PDO($dsn, $usr, $pwd);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

echo 'Le connection est fonctionnelle! :)';

?>
