# Polisa Osiguranja 

Live url aplikacije na https://lex.evolvadigital.com/

## Uputstvo za lokalni development

#### System requirements:
- PHP 7.4+
- MYSQL 8.0+
#### Extensions:
- curl
- exif
- fileinfo
- gd2
- intl
- mbstring
- pod_mysql
- pdo_mysqli

## Pokretanje na lokalnoj masini
Ukoliko imate instalirane extenzije dovoljno je da pokrenete server u lokalu komandom
```bash
php -S localhost:8080
```
Po defaultu se koristi `pdo:mysqli`, a ukoliko zelite da promenite na `pdo:mysql`

Potrebno je izmeniti sledece:
- index.php  103,104 linija
```php
// require('./database.php');
require('./database-sql.php');
```
- pregled-polisa.php
```php
//require('./database.php');
require('./database-sql.php');
```
- konfiguracija parametara za server (address, username, password, database)
`database.sql` promeniti 44 - 54 liniju na sledece
```php
// localni development
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "mydatabase";

// konfiguracija za docker
// $servername = "mysql";
// $username = "myuser";
// $password = "mypassword";
// $dbname = "mydatabase";
```
Zamenite podatke vasim podacima ako su drugacije.

- Napravite databazu `mydatabase` ili ako ste nazvali drugacije unesite Vas naziv.

## Docker MYSQL-MYSQLI (docker-compose)

Komande za pokretanje docker containera

```bash
cp .env.example .env
```

- Promenite portove u `.env` fajlu ukoliko su portovi na vasem racunaru zauzeti

- Pokrenite kontainere komandom
```bash
docker compose up -d 
```
U koliko zelite da koristite `mysql` potrebno je promeniti sledece:
- index.php  103,104 linija
```php
// require('./database.php');
require('./database-sql.php');
```
- pregled-polisa.php
```php
//require('./database.php');
require('./database-sql.php');
```

Nije potrebna nikakva dodatna konfiguracija