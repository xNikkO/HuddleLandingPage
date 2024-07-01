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
    <main id="main-index">
      <section class="hero">
        <img class="background__website-img" src="images/illustration-mockups.svg" alt="website background image" />
        <div class="main__text">
          <h1>Zbuduj Społeczność, Którą Pokochają Twoi Fani</h1>
          <p>Huddle na nowo wyobraża sobie sposób, w jaki budujemy społeczności. Masz głos, ale tak samo ma Twoja publiczność. Twórz połączenia ze swoimi użytkownikami, angażując się w autentyczne dyskusje.</p>
        </div>
      </section>
    </main>
    <footer>
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