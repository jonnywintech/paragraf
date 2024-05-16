<?php include('database.php'); ?>
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
    <section class="forma">
        <div class="wrap">
          <div class="forma__container">
            <h2 class="forma__headline">Polisa Osiguranja</h2>
            <div class="forma__header">
              <div class="forma__image has-cover" style="background-image: url('assets/contact-bg.png')"></div>
              <div class="forma__form-wrap">
                <form action="submit" method="post" class="forma__form">
                  <div class="forma__group">
                    <label class="forma__label" for="full-name">Ime i Prezime</label>
                    <input type="text" name="ime_i_prezime" id="full-name" class="forma__input" placeholder="Petar Petrovic">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="date-of-birth">Datum Rodjenja</label>
                    <input type="date" name="datum_rodjenja" id="date-of-birth" class="forma__input" placeholder="20/11/1998">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="passport-number">Broj Pasosa</label>
                    <input type="text" name="broj_pasosa" id="passport-number" class="forma__input" placeholder="0012371238719">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="phone">Broj Telefona</label>
                    <input type="text" name="telefon" id="phone" class="forma__input" placeholder="+381631234567">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="forma__input" placeholder="petar.petrovic@gmail.com">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="email">Datum Putovanja Od</label>
                    <input type="date" name="email" id="email" class="forma__input forma__input--from">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="email">Datum Putovanja Do</label>
                    <input type="date" name="email" id="email" class="forma__input forma__input--to">
                  </div>
                  <div class="forma__group">
                    <label class="forma__label" for="ukupno">Ukupno Dana <span class="forma__element">0</span></label>
                  </div>
                  <label class="forma__label forma__label--terms" for="checkbox"><input type="checkbox" name="checkbox" id="checkbox" class="forma__check" checked="">
                    <div class="forma__box"></div>
                    Prihvatam &nbsp;
                    <a href="javscript:void(0)" class="forma__link"> Uslovi koriscenja</a>,&nbsp;
                    <a href="javscript:void(0)" class="forma__link">
                      Privatnos</a>&nbsp; Politika i &nbsp;
                    <a href="javscript:void(0)" class="forma__link"> naknade</a>.</label>
                  <button type="submit" class="btn forma__btn">
                    Posalji zahtev
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

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