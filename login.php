<?php
require_once 'vendor/autoload.php';

use \Firebase\JWT\JWT;

session_start();

$servername = "localhost";
$username = "utaro";
$password = "newPassword123";
$dbname = "registrationForm";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$errorMessage = '';
if (isset($_SESSION['error_message'])) {
  $errorMessage = $_SESSION['error_message'];
  unset($_SESSION['error_message']); // Clear the message so it's not shown again
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $conn->real_escape_string($_POST['email']);
  $password = $conn->real_escape_string($_POST['password']);

  $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows == 1) {
    $stmt->bind_result($hashedPassword);
    $stmt->fetch();

    if (password_verify($password, $hashedPassword)) {
      $key = getenv('JWT_SECRET_KEY') ?: 'default_secret_key';
      $issuedAt = time();
      $expirationTime = $issuedAt + 1800;  // JWT valid for 30 minutes
      $payload = [
        'email' => $email,
        'iat' => $issuedAt,
        'exp' => $expirationTime
      ];

      $jwt = JWT::encode($payload, $key);
      setcookie("jwt", $jwt, $expirationTime, "/", "", true, true);

      header("Location: blog.php");
      exit;
    } else {
      $_SESSION['error_message'] = "Invalid password.";
      header("Location: login.php");
      exit;
    }
  } else {
    $_SESSION['error_message'] = "User not found.";
    header("Location: login.php");
    exit;
  }

  $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Utaro Hayashi - Developer, Risk Consultant, Mentor</title>
  <link rel="stylesheet" href="login.css" />
  <meta name="description" content="Utaro Hayashi is a developer, risk consultant, and mentor. He is dedicated to improving workflow processes and implementing cyber security measures." />
  <meta name="keywords" content="developer, risk consultant, cyber security, mentor" />
</head>

<body>

  <header>
    <span class="name">Utaro Hayashi</span>
    <nav class="links">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="portfolio.php">Portfolio</a>
      <a href="blog.php">Blog</a>
      <a class="active" href="login.php">Login</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>

  <main>
    <hr>
    <h1 id="login-form">Newsletter Login</h1>
    <hr>

    <form action="login.php" class="login-form" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="newUser">New user:</label>
      <input type="button" value="Click Here" id="newRegister" onclick="window.location='register.php';">

      <input type="submit" value="Login" id="loginButton">
    </form>

    <div id="errorMessage" class="error-message"><?= htmlspecialchars($errorMessage) ?></div>

  </main>

  <footer>
    <div class="footer1" style="color:RGB(1,173,226);">
      // FLATIRON SCHOOL<br />
      &copy Copyright 2024 All Rights Reserved
    </div>
    <div class="footer2">
      <a class="sm1" href="https://linkedin.com" target="_blank">
        <img class="media-link" src="img/linkedin.svg" alt="LinkedIn Logo" />
      </a>
      <a class="sm2" href="https://facebook.com" target="_blank">
        <img class="media-link" src="img/facebook.svg" alt="Facebook Logo" />
      </a>
      <a class="sm3" href="https://twitter.com" target="_blank">
        <img class="media-link" src="img/twitter.svg" alt="Twitter Logo" />
      </a>
    </div>
  </footer>
</body>

</html>