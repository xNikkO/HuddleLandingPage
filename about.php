<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/2eb8bd0a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Huddle Landing Page</title>
  </head>
  <body>
    <header>
    <a href="index.php">
        <img src="images/logo.svg" class="logo" alt="Huddle logo" href="index.php"/>
      </a>
      <nav>
        <ul>
            <li><a href="about.php">O nas</a></li>
            <li><a href="features.php">Funkcje i korzyści</a></li>
            <li><a href="testimonials.php">Opinie klientów</a></li>
            <li><a href="gallery.php">Galeria</a></li>
            <li><a href="contact.php">Kontakt</a></li>
        </ul>
      </nav>
    </header>
    <main id="main-about">
        <h2>O nas</h2>
        <p>Huddle na nowo wyobraża sobie sposób, w jaki budujemy społeczności. Nasza misja to tworzenie autentycznych połączeń między ludźmi, umożliwiając im angażowanie się w wartościowe dyskusje i dzielenie się swoimi doświadczeniami.</p>
        
        <h3>Nasze Wartości</h3>
        <ul>
          <li><strong>Autentyczność:</strong> Wierzymy w szczere i otwarte rozmowy.</li>
          <li><strong>Zaangażowanie:</strong> Tworzymy przestrzeń, w której każdy głos ma znaczenie.</li>
          <li><strong>Innowacyjność:</strong> Stale rozwijamy nasze narzędzia, aby sprostać zmieniającym się potrzebom społeczności.</li>
        </ul>
        
        <h3>Nasz Zespół</h3>
        <p>Nasza siła tkwi w ludziach, którzy tworzą Huddle. Poznaj nasz zespół:</p>
        <div class="team">
          <div class="team-member">
            <img src="images/JanK.png" alt="Zdjęcie członka zespołu">
            <h4>Jan Kowalski</h4>
            <p>Założyciel i CEO</p>
          </div>
          <div class="team-member">
            <img src="images/AnnaN.png" alt="Zdjęcie członka zespołu">
            <h4>Anna Nowak</h4>
            <p>Dyrektor ds. Marketingu</p>
          </div>
        </div>
      </section>
    </main>
    <footer>
        <p>&copy; <?php echo date('Y'); ?> Huddle. Wszelkie prawa zastrzeżone.</p>
        <p>
          <ul class="list__links">
            <li><a href="https://www.facebook.com/"class="footer__links facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="https://x.com/" class="footer__links twitter"><i class="fa-brands fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/" class="footer__links instagram"><i class="fa-brands fa-instagram"></i></a></li>
          </ul>
        </p>
    </footer>
  </body>
</html>