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
    <main id="main-features">
      <section id="features" class="page__sections">
        <h2>Funkcje i korzyści</h2>
        <div class="feature">
          <img src="images/icon-communities.svg" alt="Ikona społeczności" />
          <h3>Buduj aktywne społeczności</h3>
          <p>Twórz i zarządzaj społecznościami, które angażują Twoich fanów i klientów.</p>
        </div>
        
        <div class="feature">
          <img src="images/icon-analytics.svg" alt="Ikona analityki" />
          <h3>Zaawansowana analityka</h3>
          <p>Śledź zaangażowanie użytkowników i optymalizuj swoje strategie.</p>
        </div>
        
        <div class="benefits">
          <h3>Korzyści dla Twojego biznesu</h3>
          <ul>
            <li>Zwiększone zaangażowanie użytkowników</li>
            <li>Lepsza retencja klientów</li>
            <li>Wzrost lojalności wobec marki</li>
            <li>Efektywniejsza komunikacja z klientami</li>
          </ul>
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