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
    <main id="main-testimonials">
      <section id="testimonials" class="page__sections">
        <h2>Opinie klientów</h2>
        
        <div class="testimonial">
          <img src="images/MarekP.png" alt="Zdjęcie klienta" class="testimonial-avatar" />
          <div class="testimonial-content">
            <h3>Marek Poręba</h3>
            <p class="testimonial-company">CEO, Firma QWERTY</p>
            <p>"Huddle zrewolucjonizował sposób, w jaki komunikujemy się z naszymi klientami. Nasza społeczność jest teraz bardziej zaangażowana niż kiedykolwiek wcześniej."</p>
            <div class="testimonial-rating">
              <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span>
            </div>
          </div>
        </div>
        
        <div class="testimonial">
          <img src="images/KrzysztofT.png" alt="Zdjęcie klienta" class="testimonial-avatar" />
          <div class="testimonial-content">
            <h3>Krzysztof Tarnowski</h3>
            <p class="testimonial-company">Marketing Manager, Startup WERKT</p>
            <p>"Dzięki Huddle nasza firma zyskała lojalną bazę klientów. Narzędzia do analizy pomagają nam stale ulepszać nasze strategie."</p>
            <div class="testimonial-rating">
              <span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">★</span><span class="star">☆</span>
            </div>
          </div>
        </div>
        <div class="testimonial-cta">
          <h3>Dołącz do zadowolonych klientów Huddle</h3>
          <a href="contact.php" class="btn">Wypróbuj za darmo</a>
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