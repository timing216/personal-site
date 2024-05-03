<?php
require_once 'vendor/autoload.php';

use \Firebase\JWT\JWT;

session_start(); // Start the session to store error messages

// Database configuration and connection setup
$servername = "localhost";
$username = "utaro";
$password = "newPassword123";
$dbname = "registrationForm";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $conn->real_escape_string($_POST['email']);
  $password1 = $conn->real_escape_string($_POST['password1']);
  $message = $conn->real_escape_string($_POST['message']);

  // Check if email already exists
  $checkEmail = $conn->prepare("SELECT email FROM users WHERE email = ?");
  $checkEmail->bind_param("s", $email);
  $checkEmail->execute();
  $checkEmail->store_result();
  if ($checkEmail->num_rows > 0) {
    $_SESSION['error_message'] = "Email already exists.";
  } else {
    // Prepare and bind for new user insertion
    $passwordHash = password_hash($password1, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (email, password, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $passwordHash, $message);

    if ($stmt->execute()) {
      echo "Registration Successful.";
      // Redirect or other post-registration logic
    } else {
      echo "Error: " . $stmt->error;
    }
    $stmt->close();
  }
  $checkEmail->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Utaro Hayashi - Developer, Risk Consultant, Mentor</title>
  <link rel="stylesheet" href="register.css" />
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
      <a href="login.php">Login</a>
      <a href="logout.php">Logout</a>
    </nav>
  </header>
  <main>
    <hr>
    <h1 id="register-page">Newsletter Registration</h1>
    <hr>

    <form class="register-form" action="register.php" method="post">
      <label for="email" id="lemail">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password1" id="lpassword1">Password:</label>
      <input type="password" id="password1" name="password1" autocomplete="off" required>

      <label for="password2" id="lpassword2">Re-enter Pwd:</label>
      <input type="password" id="password2" name="password2" autocomplete="off" required>

      <label for="message" id="lmessage">Message:</label>
      <textarea name="message" id="message"></textarea>

      <input type="submit" value="Submit" id="submitButton">
    </form>
    <div id="error-message" class="error-message">
      <?php if (!empty($_SESSION['error_message'])) {
        echo htmlspecialchars($_SESSION['error_message']);
        unset($_SESSION['error_message']); // Clear the message after it's displayed
      } ?>
    </div>
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