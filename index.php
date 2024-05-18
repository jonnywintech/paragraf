<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragraf Lex</title>
  <link rel="stylesheet" href="./src/css/main.css">
</head>

<body>
  <?php
  require('./src/partials/header.php');
  ?>
  <main>
    <!-- form start -->
    <section class="forma">
      <form method="POST" class="forma__form" action="index.php">
        <div class="wrap">
          <div class="forma__container">
            <h2 class="forma__headline">Polisa Osiguranja</h2>
            <div class="forma__header">
              <div class="forma__image has-cover" style="background-image: url('./src/images/contact-bg.png')">
                <div class="forma__switch-wrapper">
                  <p class="forma__switch-title"><span class="forma__switch-span">Individualno</span> | <span class="forma__switch-span">Grupno osiguranje</span></p>
                  <div class="forma__switch-container">
                    <input type="checkbox" class="forma__checkbox" id="checkbox" name="grupno_osiguranje">
                    <label class="forma__switch" for="checkbox">
                      <span class="forma__slider"></span>
                    </label>
                  </div>
                  <button type="button" class="btn forma__btn forma__btn--custom">Dodaj korisnika</button>
                </div>
                <div class="forma__additional-fields"></div>
              </div>
              <div class="forma__form-wrap">
                <span class="forma__person">Nosioc Osiguranja</span>
                <div class="forma__group">
                  <label class="forma__label" for="full-name">Ime i Prezime</label>
                  <input type="text" name="ime_i_prezime" id="full-name" class="forma__input" placeholder="Petar Petrovic" required pattern="^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$">
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="date-of-birth">Datum Rodjenja</label>
                  <input type="date" name="datum_rodjenja" id="date-of-birth" class="forma__input" placeholder="20/11/1998" required pattern="/^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/(19|20)\d\d$/">
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="passport-number">Broj Pasosa</label>
                  <input type="number" name="broj_pasosa" id="passport-number" class="forma__input" placeholder="023456789" required pattern="/^\d{9}$/" title="Broj Pasosa mora imati 9 karaktera">
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="phone">Broj Telefona</label>
                  <input type="tel" name="telefon" id="phone" class="forma__input" placeholder="+381631234567" required>
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="email">Email</label>
                  <input type="email" name="email" id="email" class="forma__input" placeholder="petar.petrovic@gmail.com" required>
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="datum-od">Datum Putovanja Od</label>
                  <input type="date" name="datum_putovanja_od" id="datum-od" class="forma__input forma__input--from" required>
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="datum-do">Datum Putovanja Do</label>
                  <input type="date" name="datum_putovanja_do" id="datum-do" class="forma__input forma__input--to" required>
                </div>
                <div class="forma__group">
                  <label class="forma__label" for="ukupno">Ukupno Dana <span class="forma__element">0</span></label>
                </div>
                <label class="forma__label forma__label--terms" for="terms_and_conditions">
                  <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions" class="forma__check" required>
                  <div class="forma__box"></div>
                  Prihvatam &nbsp;
                  <a href="javscript:void(0)" class="forma__link"> uslove koriscenja</a>,&nbsp;
                  <a href="javscript:void(0)" class="forma__link">
                    Privatnos</a>&nbsp; Politika i &nbsp;
                  <a href="javscript:void(0)" class="forma__link"> naknade</a>.
                </label>
                <button type="submit" class="btn forma__btn">
                  Posalji zahtev
                </button>
                <p class="forma__success">Uspesno poslati podaci
                  <button type="button" class="forma__success-button" onclick="this.parentElement.style.display='none'">&#10005</button>
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
    <!-- form end -->
  </main>

  <?php
  require('./src/partials/footer.php');
  ?>

  <!-- js scripts -->
  <script src="./src/js/main.js" type="module"></script>
</body>

</html>

<?php
require('./database.php');

function display()
{
  styledVarDump($_POST);
  styledPrintR($_POST);
}

define('REGEX_NAME', '/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/');
define('REGEX_DATE', '/^\d{4}-\d{2}-\d{2}$/');
define('REGEX_PASSPORT', '/^\d{9}$/');

function validate($param, $regexPattern)
{
  if (!preg_match($regexPattern, $param)) {
    return false;
  }
  return true;
}
function displayErrorMessage($message = null)
{
  echo "
  <div class='error'>
    <div class='error__container'>
      <button type='button' class='error__button' onclick='this.parentElement.parentElement.remove()'>&#10005</button>
      <p class='error__message'>$message</p>
    </div>
  </div>
  ";
}

run($connection);
function run($connection)
{
  if ($_POST === []) {
    return;
  }
  $errors = [];

  $ime_i_prezime = $_POST['ime_i_prezime'] ?? '';
  $datum_rodjenja = $_POST['datum_rodjenja'] ?? '';
  $broj_pasosa = $_POST['broj_pasosa'] ?? '';
  $telefon = $_POST['telefon'] ?? '';
  $email = $_POST['email'] ?? '';
  $datum_putovanja_od = $_POST['datum_putovanja_od'] ?? '';
  $datum_putovanja_do = $_POST['datum_putovanja_do'] ?? '';
  $vrsta_polise = isset($_POST['grupno_osiguranje']) && $_POST['grupno_osiguranje'] === 'on' ? 'grupno' : 'individualno';

  if (!isset($_POST['terms_and_conditions']) && !$_POST['terms_and_conditions'] === 'on') {
    $errors = 'Morate prihvatiti uslove koriscenja';
    displayErrorMessage($errors);
    return;
  }


  //  $errors[] = "Ime i prezime mora biti najmanje 4 karaktera dugacko i sadrzi najvise 2 prazna prostora(space)";
  //  $errors[] = "Netacan format datuma";
  //  $errors[] = "Passport number must be a valid number.";


  if (!validate($ime_i_prezime, REGEX_NAME)) {
    $errors[] = "Ime i prezime mora biti najmanje 4 karaktera dugacko i sadrzi najvise 2 prazna prostora(space)";
  }

  if (!validate($datum_rodjenja, REGEX_DATE)) {
    $errors[] = "Netacan format datuma";
  }

  if (!validate($broj_pasosa, REGEX_PASSPORT)) {
    $errors[] = "Passport number must be a valid number.";
  }

  if (!empty($errors)) {
    displayErrorMessage(implode("<br>", $errors));
  } else {

    $connection->beginTransaction();

    $sql = "INSERT INTO polise (ime_i_prezime, datum_rodjenja, broj_pasosa, telefon, email, datum_putovanja_od, datum_putovanja_do, vrsta_polise)
      VALUES (:ime_i_prezime, :datum_rodjenja, :broj_pasosa, :telefon, :email, :datum_putovanja_od, :datum_putovanja_do, :vrsta_polise)";
    $data = [
      ':ime_i_prezime' => $ime_i_prezime,
      ':datum_rodjenja' => $datum_rodjenja,
      ':broj_pasosa' => $broj_pasosa,
      ':telefon' => $telefon,
      ':email' => $email,
      ':datum_putovanja_od' => $datum_putovanja_od,
      ':datum_putovanja_do' => $datum_putovanja_do,
      ':vrsta_polise' => $vrsta_polise,
    ];
    $statement = $connection->prepare($sql);
    $statement->execute($data);
    if ($vrsta_polise === 'grupno') {
      $id = $connection->lastInsertId();
      $sql = "INSERT INTO dodatni_osiguranici (polisa_id, ime_i_prezime, datum_rodjenja, broj_pasosa) VALUES (:polisa_id, :ime_i_prezime, :datum_rodjenja, :broj_pasosa)";
      $statement = $connection->prepare($sql);
      // validacija podataka 

      for ($i = 0; $i < count($_POST['grupno_ime_i_prezime']); $i++) {
        $puno_ime = $_POST['grupno_ime_i_prezime'][$i];
        if (!validate($puno_ime, REGEX_NAME)) {
          $errors[] = "Ime i prezime mora biti najmanje 4 karaktera dugacko i sadrzi najvise 2 prazna prostora(space)";
        }

        $datum_rodjenja = $_POST['grupni_datum_rodjenja'][$i];
        if (!validate($datum_rodjenja, REGEX_DATE)) {
          $errors[] = "Netacan format datuma";
        }

        $broj_pasosa = $_POST['grupni_broj_pasosa'][$i];
        if (!validate($broj_pasosa, REGEX_PASSPORT)) {
          $errors[] = "Broj pasosa nije validan";
        }
      }
      if (!empty($errors)) {
        $connection->rollBack();
        displayErrorMessage(implode("<br>", $errors));
        return;
      }

      for ($i = 0; $i < count($_POST['grupno_ime_i_prezime']); $i++) {
        $data = [
          ':polisa_id' => $id,
          ':ime_i_prezime' => $_POST['grupno_ime_i_prezime'][$i],
          ':datum_rodjenja' => $_POST['grupni_datum_rodjenja'][$i],
          ':broj_pasosa' => $_POST['grupni_broj_pasosa'][$i],
        ];
        $statement->execute($data);
      }
    }
    $connection->commit();

    echo "<script>
      function displaySuccessMessage(){
        let messageBox = document.querySelector('.forma__success')
        messageBox.style.display = 'block';
        setTimeout(()=>{
          messageBox.style.display = 'none';
        },5000);
      }
      displaySuccessMessage();
    </script>";
  }
}

