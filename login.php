<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <title>Utaro Hayashi - Developer, Risk Consultant, Mentor</title>
  <link rel="stylesheet" href="login.css" />
  <script src="javascript.js"></script>

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
      <a href="register.php">Register</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <main>
    <hr>
    <h1 id="login-form">Newsletter Login</h1>
    <hr>

    <form class="login-form" action="login_form.php" method="post">

      <label for="userName">Username:</label>
      <input type="text" id="userName" name="userName" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="button" value="Login" id="login">

      <label for="error-message"></label>
      <span id="passwordError" class="error-message"></span>
    </form>
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