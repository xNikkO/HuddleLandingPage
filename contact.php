<?php
session_start();

interface Validator {
    public function validate($data): bool;
}

trait Sanitizer {
    public function sanitize($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }
}

abstract class DatabaseHandler {
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    abstract public function save(array $data): bool;
}

class ContactFormHandler extends DatabaseHandler implements Validator {
    use Sanitizer;

    public function validate($data): bool {
        return !empty($data['name']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL) && !empty($data['message']);
    }

    public function save(array $data): bool {
        $query = "INSERT INTO HuddleInfo (name, email, message, created_at) VALUES (:name, :email, :message, :created_at)";
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':message' => $data['message'],
            ':created_at' => date('Y-m-d H:i:s')
        ]);
    }
}

$host = 'szuflandia.pjwstk.edu.pl';
$dbname = 's30398';
$username = 's30398';
$password = 'Nik.Mahl';

try {
    $pdo = new PDO("mysql:host=$host;port=3306;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage() . " (kod błędu: " . $e->getCode() . ")");
}

$formHandler = new ContactFormHandler($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $formHandler->sanitize($_POST['name']);
    $email = $formHandler->sanitize($_POST['email']);
    $message = $formHandler->sanitize($_POST['message']);

    $data = ['name' => $name, 'email' => $email, 'message' => $message];

    if ($formHandler->validate($data)) {
        try {
            $pdo->beginTransaction();
            if ($formHandler->save($data)) {
                $pdo->commit();
                $_SESSION['success_message'] = "Wiadomość została wysłana pomyślnie!";
                setcookie('last_contact', time(), time() + 86400 * 30, '/');
            } else {
                throw new Exception("Nie udało się zapisać danych.");
            }
        } catch (Exception $e) {
            $pdo->rollBack();
            $_SESSION['error_message'] = "Wystąpił błąd: " . $e->getMessage();
        }
    } else {
        $_SESSION['error_message'] = "Nieprawidłowe dane formularza.";
    }
    
    header("Location: contact.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt - Huddle</title>
    <script src="https://kit.fontawesome.com/2eb8bd0a18.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
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

    <main>
        <section class="contact-container">
            <div class="contact-info">
                <h2>Skontaktuj się z nami</h2>
                <p><i class="fas fa-map-marker-alt"></i> Jana Pawła 8, Gdańsk, Polska</p>
                <p><i class="fas fa-phone"></i> +48 123 456 789</p>
                <p><i class="fas fa-envelope"></i> info@huddle.com</p>
            </div>
            <div class="contact-form">
                <?php
                if (isset($_SESSION['success_message'])) {
                    echo "<p class='success'>" . $_SESSION['success_message'] . "</p>";
                    unset($_SESSION['success_message']);
                }
                if (isset($_SESSION['error_message'])) {
                    echo "<p class='error'>" . $_SESSION['error_message'] . "</p>";
                    unset($_SESSION['error_message']);
                }
                ?>
                <form action="contact.php" method="post">
                    <input type="text" name="name" placeholder="Twoje imię" required>
                    <input type="email" name="email" placeholder="Twój e-mail" required>
                    <textarea name="message" placeholder="Twoja wiadomość" required></textarea>
                    <button type="submit" class="btn">Wyślij wiadomość</button>
                </form>
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
