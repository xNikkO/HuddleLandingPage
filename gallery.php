<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/2eb8bd0a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Huddle Landing Page</title>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.slide');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const dotsContainer = document.querySelector('.dots-container');
        let currentSlide = 0;

        // Tworzenie kropek nawigacyjnych
        slides.forEach((_, index) => {
          const dot = document.createElement('span');
          dot.classList.add('dot');
          dot.addEventListener('click', () => goToSlide(index));
          dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.dot');

        function goToSlide(n) {
          slides[currentSlide].style.transform = `translateX(-${n * 100}%)`;
          dots[currentSlide].classList.remove('active');
          currentSlide = n;
          slides[currentSlide].style.transform = `translateX(-${n * 100}%)`;
          dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
          goToSlide(currentSlide === slides.length - 1 ? 0 : currentSlide + 1);
        }

        function prevSlide() {
          goToSlide(currentSlide === 0 ? slides.length - 1 : currentSlide - 1);
        }

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Inicjalizacja pierwszego slajdu
        goToSlide(0);
      });
    </script>
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
    <main id="main-gallery">
      <section id="gallery" class="page__sections">
        <h2>Galeria</h2>
        <div class="gallery-container">
          <button id="prev-btn" class="gallery-btn"><i class="fas fa-chevron-left"></i></button>
          <div class="gallery-images">
          <div class="slide">
          <img src="images/gallery1.png" alt="Pani Anna Nowak w pracy przed komputerem">
          <div class="image-description">
            <p>Pani Anna Nowak w pracy przed komputerem</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/gallery2.png" alt="Pan Jan Kowalski podpisujący kontrakt z nowym pracownikiem">
          <div class="image-description">
            <p>Pan Jan Kowalski podpisujący kontrakt z nowym pracownikiem</p>
          </div>
        </div>
        <div class="slide">
          <img src="images/gallery3.png" alt="Widok na miasto z wieżowca firmy Huddle">
          <div class="image-description">
            <p>Widok z naszego biura</p>
          </div>
        </div>
          </div>
          <button id="next-btn" class="gallery-btn"><i class="fas fa-chevron-right"></i></button>
        </div>
        <div class="dots-container"></div>
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