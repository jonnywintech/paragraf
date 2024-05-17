<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paragraf Lex</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <!-- header start  -->
  <header class="header">
    <div class="wrap">
      <div class="header__container">
        <a href="javascript:void(0)" class="header__logo">
          <img class="header__image" src="assets/header-logo.png" alt="company logo">
        </a>
        <nav class="header__nav">
          <ul class="header__list">
            <li class="header__item">
              <a href="index.php" class="header__link">Forma</a>
            </li>
            <li class="header__item">
              <a href="javascript:void(0)" class="header__link">Pregled polisa</a>
            </li>
            <li class="header__item">
              <a href="javascript:void(0)" class="header__link">O Nama</a>
            </li>
            <li class="header__item">
              <a href="javascript:void(0)" class="header__link">Kontakt</a>
            </li>
            <li class="header__item">
              <a href="javascript:void(0)" class="header__link">Pomoc</a>
            </li>
          </ul>
          <ul class="header__list">
            <li class="header__item">
              <a href="javascript:void(0)" class="header__link">Registruj se</a>
            </li>
            <li class="header__item">
              <a href="javascript:void(0)" class="header__link">Uloguj se</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- header end  -->
  <main>
    <!-- form start -->
    <section class="forma">
      <form method="POST" class="forma__form" action="index.php">
        <div class="wrap">
          <div class="forma__container">
            <h2 class="forma__headline">Polisa Osiguranja</h2>
            <div class="forma__header">
              <div class="forma__image has-cover" style="background-image: url('assets/contact-bg.png')">
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
                  <input type="number" name="broj_pasosa" id="passport-number" class="forma__input" placeholder="0012371238719" required pattern="/^[0-9]+$/">
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

  <!-- footer start  -->
  <footer class="footer">
    <div class="footer__top">
      <div class="wrap">
        <div class="footer__container">
          <div class="footer__col footer__col--grow">
            <a href="javascript:void(0)" class="footer__link footer__link--logo"><img class="footer__logo" src="assets/footer-logo.png" alt="company name"></a>
            <p class="footer__text">Industry-leading insurance app</p>
            <p class="footer__text">
              Aliquam viverra non risus eget auctor.<br>
              Praesent tincidunt nunc quis tellus congue
            </p>
            <p class="footer__text">
              Made in Pozarevac,<br>
              Serbia, SRB
            </p>
          </div>
          <div class="footer__col">
            <h4 class="footer__title">features</h4>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Analytics</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Activity</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Content management</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Publishing</a>
              </li>
            </ul>
          </div>
          <div class="footer__col">
            <h4 class="footer__title">about</h4>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Blog</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Pricing</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">FAQ</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Product Changes</a>
              </li>
            </ul>
          </div>
          <div class="footer__col">
            <h4 class="footer__title">free tools</h4>
            <ul class="footer__list">
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Instagram Audit</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Instagram Brands Index</a>
              </li>
              <li class="footer__item">
                <a href="javascript:void(0)" class="footer__link">Instagram Influencer Index</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="wrap">
        <div class="footer__holder">
          <span class="footer__copyright">© Company Name All rights reserved.</span>
          <ul class="footer__social">
            <li class="footer__social-item">
              <a href="javascript:void(0)" class="footer__social-link"><span class="icon icon-twitter"></span></a>
            </li>
            <li class="footer__social-item">
              <a href="javascript:void(0)" class="footer__social-link"><span class="icon icon-instagram"></span></a>
            </li>
            <li class="footer__social-item">
              <a href="javascript:void(0)" class="footer__social-link"><span class="icon icon-facebook"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end  -->

  <!-- js scripts -->
  <script src="main.js" type="module"></script>
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
define('REGEX_PASSPORT', '/^[0-9]+$/');


function styledVarDump($var)
{
  echo '<pre style="
      background-color: #1d1d1d;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 10px;
      color: #00ff40;
      font-size: 14px;
      line-height: 1.5;
      overflow: auto;
      white-space: pre-wrap;
  ">';
  var_dump($var);
  echo '</pre>';
}
function styledPrintR($var)
{
  echo '<pre style="
      background-color: #1d1d1d;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 10px;
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


if (isset($_POST)) {
  display();
  run($connection);
}
function run($connection)
{
  if ($_POST === []) {
    var_dump($_POST);
    return;
  }

  $ime_i_prezime = $_POST['ime_i_prezime'] ?? '';
  $datum_rodjenja = $_POST['datum_rodjenja'] ?? '';
  $broj_pasosa = $_POST['broj_pasosa'] ?? '';
  $telefon = $_POST['telefon'] ?? '';
  $email = $_POST['email'] ?? '';
  $datum_putovanja_od = $_POST['datum_putovanja_od'] ?? '';
  $datum_putovanja_do = $_POST['datum_putovanja_do'] ?? '';
  $terms_and_conditions = $_POST['terms_and_conditions'] ?? '';

  $errors = [];

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

    if (!isset($_POST['vrsta_polise'])) {

      $sql = "INSERT INTO osiguranje (ime_i_prezime, datum_rodjenja, broj_pasosa, telefon, email, datum_putovanja_od, datum_putovanja_do, vrsta_polise)
      VALUES (:ime_i_prezime, :datum_rodjenja, :broj_pasosa, :telefon, :email, :datum_putovanja_od, :datum_putovanja_do, :vrsta_polise)";
          $data = [
            ':ime_i_prezime' => $ime_i_prezime,
            ':datum_rodjenja' => $datum_rodjenja,
            ':broj_pasosa' => $broj_pasosa,
            ':telefon' => $telefon,
            ':email' => $email,
            ':datum_putovanja_od' => $datum_putovanja_od,
            ':datum_putovanja_do' => $datum_putovanja_do,
            ':vrsta_polise' => 'individualno',
        ];
      $statement = $connection->prepare($sql);
      $statement->execute($data);
    }

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

// function isAtLeast18YearsOld($dateOfBirth)
// {
//   $dob = new DateTime($dateOfBirth);
//   $today = new DateTime();
//   $age = $today->diff($dob)->y;
//   $is_adult = $age >= 18;
//   if (!$is_adult) {
//     $errors[] = "Morate imati najmanje 18 godina da bi ste ispunili uslove za polisu osiguranja";
//   }
//   // styledPrintR([$is_adult,  $age]);
//   return $is_adult;
// }

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
