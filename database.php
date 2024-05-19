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
        return;
    }
}

// local
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "lex";
// online
// $servername = "193.203.168.45";
// $username = "u293026109_lex";
// $password = "u293026109_lexU!";
// $dbname = "u293026109_lex";

$connection = connectToDatabase($servername, $username, $password, $dbname);
if (!$connection) {
    exit("Neuspesno povezivanje sa databazom.");
}

