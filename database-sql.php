<?php
function connectToDatabase($servername, $username, $password, $dbname) {
    try {
        $connection = new PDO(
            "mysql:host=$servername;dbname=$dbname",
            $username,
            $password
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lex";

$connection = connectToDatabase($servername, $username, $password, $dbname);
if (!$connection) {
    exit("Neuspesno povezivanje sa databazom.");
}

