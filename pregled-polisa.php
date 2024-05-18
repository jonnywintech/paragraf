<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregled Polisa</title>
    <link rel="stylesheet" href="./pregled-polisa.css">
</head>

<body>
    <?php
    function styledPrintR($var)
    {
        echo '<pre style="
      background-color: #1d1d1d;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 200px 10px 10px;
          color: #00ff40;
          font-size: 14px;
          line-height: 1.5;
          overflow: auto;
          white-space: pre-wrap;
      ">';
        $var =  json_encode($var, JSON_PRETTY_PRINT);
        print_r($var);
        echo '</pre>';
    }


    require('./header.php');
    require('./database.php');

    $sql = "SELECT polise.*, dodatni_osiguranici.polisa_id as osiguranici_id 
            FROM polise 
            LEFT JOIN dodatni_osiguranici ON polise.id = dodatni_osiguranici.polisa_id
            GROUP BY polise.id
            ORDER BY polise.created_at ASC";

    $statement = $connection->prepare($sql);
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);


    if (isset($_GET['id'])) {
        $polisa_id = $_GET['id'];

        $sql = "SELECT * FROM dodatni_osiguranici WHERE polisa_id =" . $polisa_id;
        $sqlNosioc = "SELECT * FROM polise where id = " . $polisa_id;

        $osiguranici = $connection->prepare($sql);
        $osiguranici->execute();
        $osiguranici = $osiguranici->fetchAll(PDO::FETCH_ASSOC);

        $nosioc = $connection->prepare($sqlNosioc);
        $nosioc->execute();
        $nosioc = $nosioc->fetchAll(PDO::FETCH_ASSOC);
    }

    // display funkcije
    function printRowNosioc($single_data)
    {
        $date = $single_data['created_at'];
        $ime_i_prezime = $single_data['ime_i_prezime'];
        $datum_rodjenja = $single_data['datum_rodjenja'];
        $broj_pasosa = $single_data['broj_pasosa'];
        $email = $single_data['email'];
        $datum_putovanja_od = $single_data['datum_putovanja_od'];
        $datum_putovanja_do = $single_data['datum_putovanja_do'];
        $broj_dana = $single_data['broj_dana'];
        $tip = ucfirst($single_data['vrsta_polise']);
        $id = $single_data['osiguranici_id'] ?? "";
        echo "
            <tr class='tb__row' onclick=" . "this.classList.toggle('tb__row--active')" . ">
            <td class='tb__data'>$date</td>
            <td class='tb__data'>$ime_i_prezime</td>
            <td class='tb__data'>$datum_rodjenja</td>
            <td class='tb__data'>$broj_pasosa</td>
            <td class='tb__data'>$email</td>
            <td class='tb__data'>$datum_putovanja_od</td>
            <td class='tb__data'>$datum_putovanja_do</td>
            <td class='tb__data'>$broj_dana</td>
            <td class='tb__data'>$tip</td>
            <td class='tb__data'>
            ";
        if ($tip === 'Grupno' && $id !== "") {
            echo "
                <a href='pregled-polisa.php?id={$id}' class='btn tb__btn'>Pregled</a>
            ";
        }
        echo "
            </td>
        </tr>
            ";
    }

    function printRowGrupno($osoba)
    {
        $date = $osoba['created_at'];
        $ime_i_prezime = $osoba['ime_i_prezime'];
        $datum_rodjenja = $osoba['datum_rodjenja'];
        $broj_pasosa = $osoba['broj_pasosa'];
        echo "
            <tr class='tb__row' onclick=" . "this.classList.toggle('tb__row--active')" . ">
            <td class='tb__data'>$date</td>
            <td class='tb__data'>$ime_i_prezime</td>
            <td class='tb__data'>$datum_rodjenja</td>
            <td class='tb__data'>$broj_pasosa</td>
            <td class='tb__data'></td>
        </tr>
            ";
    }



    ?>
    <main>
        <section class="tb">
            <div class="wrap">
                <div class="tb__container">
                    <h1 class="tb__title">Pregled Polisa</h1>
                    <table class="tb__start">
                        <thead class="tb__head">
                            <tr class="tb__row">
                                <th class="tb__head-data">
                                    Datum unosa polise
                                </th>
                                <th class="tb__head-data">
                                    Ime i prezime nosioca
                                </th>
                                <th class="tb__head-data">
                                    Datum rođenja
                                </th>
                                <th class="tb__head-data">
                                    Broj pasoša
                                </th>
                                <th class="tb__head-data">
                                    Email
                                </th>
                                <th class="tb__head-data">
                                    Datum putovanja od
                                </th>
                                <th class="tb__head-data">
                                    Datum putovanja do
                                </th>
                                <th class="tb__head-data">
                                    Broj dana
                                </th>
                                <th class="tb__head-data">
                                    Induvidualno / Grupno osiguranje
                                </th>
                                <th class="tb__head-data">
                                    Akcija
                                </th>
                            </tr>
                        </thead>
                        <tbody class="tb__body">
                            <?php
                            if (!isset($_GET['id'])) {

                                foreach ($results as $result) {

                                    printRowNosioc($result);

                                }
                            } else {
                                
                                    printRowNosioc($nosioc[0]);
                                    foreach ($osiguranici as $osoba) {

                                        printRowGrupno($osoba);

                                    }

                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    if (isset($_GET['id'])) {
                        echo "<a href='pregled-polisa.php' class='btn tb__button tb__button--back'>Nazad</a>";
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>


    <?php require('./footer.php');
    ?>

</body>

</html>