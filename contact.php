<!DOCTYPE html>
<html lang="en">

<head>
  <title>Utaro Hayashi - Developer, Risk Consultant, Mentor</title>
  <link rel="stylesheet" href="contact.css" />
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
      <a class="active" href="contact.php">Contact</a>
    </nav>
  </header>

  <main>
    <hr>
    <h1 id="contact-form">Contact Form</h1>
    <hr>

    <form class="input-form">
      <label for="first-name" id="first-name-label">First Name:</label>
      <input type="text" id="first-name-input" name="first-name" required>

      <label for="last-name" id="last-name-label">Last Name:</label>
      <input type="text" id="last-name-input" name="last-name" required>

      <label for="email" input="email-label">Email:</label>
      <input type="email" id="email-input" name="email" required>

      <label for="phone" id="phone-label">Phone:</label>
      <input type="phone" id="phone-input" name="phone">

      <label for="message" id="message-label">Message:</label>
      <textarea name="message" id="message-input" cols="48" rows="30" required></textarea>
      <input type = "submit" onclick=openAnotherPage() value="Submit" id="submit">
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
