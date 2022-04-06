<?php
$dsn = 'mysql:host=wb39lt71kvkgdmw0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=n01y8vwc04ldg7mn';
$username = 'nldidv3lwyl10bdv';
$password = 'jdv12tl943o05ax9';

try {
    $db = new PDO($dsn, $username, $password);
}
catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include('view/error.php');
    exit();
}


?>