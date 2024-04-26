<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  <title>Utaro Hayashi - Developer, Risk Consultant, Mentor</title>
  <link rel="stylesheet" href="register.css" />
  <script src="javascript.js"></script>

  <meta name="description"
    content="Utaro Hayashi is a developer, risk consultant, and mentor. He is dedicated to improving workflow processes and implementing cyber security measures." />
  <meta name="keywords" content="developer, risk consultant, cyber security, mentor" />
</head>

<body>

  <header>
    <span class="name">Utaro Hayashi</span>
    <nav class="links">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="portfolio.php">Portfolio</a>
      <a class="active" href="register.php">Register</a>
    </nav>
  </header>

  <main>
    <hr>
    <h1 id="register-form">Newsletter Registration</h1>
    <hr>

<form class="input-form" action="submit_form.php"     method="post">

  <label for="userName">User Name:</label>
  <input type="text" id="userName" name="userName" required>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>

  <label for="password1">Password:</label>
  <input type="password" id="password1" name="password1" required>

  <label for="password2">Re-enter Password:</label>
  <input type="password" id="password2" name="password2" required>

  <label for="message">Message:</label>
  <textarea name="message" id="message" ></textarea>

  <label for="error-message"></label>
  <span id="passwordError" class="error-message" ></span>

  <input type="submit" value="Submit" id="submit">
</form>
    <!-- <form class="input-form" action="submit_form.php" method="post">

      <label for="userid" id="userid-label">User Id:</label>
      <input type="userid" id="userid-input" name="userid" required>

      <label for="email" id="email-label">Email:</label>
      <input type="email" id="email-input" name="email" required>

      <label for="password1" id="password1-label">Password:</label>
      <input type="password" id="password1-input" name="password1" required>

      <label for="password2" id="password2-label">Re-Enter Password:</label>
      <input type="password" id="password2-input" name="password2" required>

      <label for="message" id="message-label">Message:</label>
      <textarea name="message" id="message-input" cols="48" rows="30" required></textarea>
      <input type = "submit" onclick=openAnotherPage() value="Submit" id="submit">
    </form> -->
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
