DROP DATABASE IF EXISTS lex;
CREATE DATABASE lex;
USE lex;

CREATE TABLE osiguranje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ime_i_prezime VARCHAR(100) NOT NULL,
    datum_rodjenja DATE NOT NULL,
    broj_pasosa VARCHAR(50),
    telefon VARCHAR(50),
    email VARCHAR(50),
    datum_putovanja_od DATE,
    datum_putovanja_do DATE,
    vrsta_polise ENUM('individualno', 'grupno') NOT NULL,
    created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at datetime
);

CREATE TABLE dodatni_osiguranici (
    id INT PRIMARY KEY AUTO_INCREMENT,
    osiguranje_id INT NOT NULL,
    ime_i_prezime VARCHAR(100) NOT NULL,
    datum_rodjenja DATE NOT NULL,
    broj_pasosa VARCHAR(50),
    FOREIGN KEY (osiguranje_id) REFERENCES osiguranje(id)
);