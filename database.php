<?php

try {
    $connection = new PDO("sqlite:./sqlite_db.sqlite");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $connection->exec("
    CREATE TABLE IF NOT EXISTS polise (
        id INTEGER PRIMARY KEY,
        ime_i_prezime TEXT NOT NULL,
        datum_rodjenja TEXT NOT NULL,
        broj_pasosa TEXT,
        telefon TEXT,
        email TEXT,
        datum_putovanja_od TEXT,
        datum_putovanja_do TEXT,
        broj_dana INTEGER GENERATED ALWAYS AS (julianday(datum_putovanja_do) - julianday(datum_putovanja_od) + 1) STORED,
        vrsta_polise TEXT NOT NULL CHECK (vrsta_polise IN ('individualno', 'grupno')),
        created_at TEXT NOT NULL DEFAULT (datetime('now')),
        updated_at TEXT
    );
    
    CREATE TABLE IF NOT EXISTS dodatni_osiguranici (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        polisa_id INTEGER NOT NULL,
        ime_i_prezime TEXT NOT NULL,
        datum_rodjenja TEXT NOT NULL,
        broj_pasosa TEXT,
        created_at TEXT NOT NULL DEFAULT (datetime('now')),
        updated_at TEXT,
        FOREIGN KEY (polisa_id) REFERENCES polise(id)
    );     
    ");


} catch (PDOException $e) {
    echo $e->getMessage() . PHP_EOL;
    exit("Neuspesno povezivanje sa databazom.");
}
