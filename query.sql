DROP DATABASE IF EXISTS mydatabase;
CREATE DATABASE mydatabase;
USE mydatabase;

CREATE TABLE polise (
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

CREATE TABLE dodatni_osiguranici (
    id INT PRIMARY KEY AUTO_INCREMENT,
    polisa_id INT NOT NULL,
    ime_i_prezime VARCHAR(100) NOT NULL,
    datum_rodjenja DATE NOT NULL,
    broj_pasosa VARCHAR(50),
    created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at datetime,
    FOREIGN KEY (polisa_id) REFERENCES polise(id)
);