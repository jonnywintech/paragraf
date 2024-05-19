<?php
function connectToDatabase($servername, $username, $password, $dbname) {
    try {
        $connection = new PDO(
            "mysql:host=$servername;dbname=$dbname",
            $username,
            $password
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->exec("
        CREATE TABLE IF NOT EXISTS polise (
            id INT PRIMARY KEY AUTO_INCREMENT,
            ime_i_prezime VARCHAR(100) NOT NULL,
            datum_rodjenja DATE NOT NULL,
            broj_pasosa VARCHAR(50),
            telefon VARCHAR(50),
            email VARCHAR(50),
            datum_putovanja_od DATE,
            datum_putovanja_do DATE,
            broj_dana INT GENERATED ALWAYS AS (DATEDIFF(datum_putovanja_do, datum_putovanja_od) + 1) STORED,
            vrsta_polise ENUM('individualno', 'grupno') NOT NULL,
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at datetime
        );
        
        CREATE TABLE IF NOT EXISTS dodatni_osiguranici (
            id INT PRIMARY KEY AUTO_INCREMENT,
            polisa_id INT NOT NULL,
            ime_i_prezime VARCHAR(100) NOT NULL,
            datum_rodjenja DATE NOT NULL,
            broj_pasosa VARCHAR(50),
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at datetime,
            FOREIGN KEY (polisa_id) REFERENCES polise(id)
        );
        ");
        return $connection;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return null;
    }
}

// localni development
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $dbname = "mydatabase";

// konfiguracija za docker
$servername = "mysql";
$username = "myuser";
$password = "mypassword";
$dbname = "mydatabase";

$connection = connectToDatabase($servername, $username, $password, $dbname);
if (!$connection) {
    exit("Neuspesno povezivanje sa databazom.");
}

