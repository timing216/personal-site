<?php
// Start the session
session_start();

// Destroy all session data
session_destroy();

// Invalidate the JWT stored in the cookie by setting an expired cookie
if (isset($_COOKIE['jwt'])) {
    unset($_COOKIE['jwt']); // Remove the cookie locally
    setcookie('jwt', '', time() - 3600, '/'); // Expire the JWT cookie
}

// Redirect to home page or display logout message
// header('Location: index.php'); // Uncomment if you prefer redirection
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Utaro Hayashi - Developer, Risk Consultant, Mentor</title>
    <link rel="stylesheet" href="logout.css" />
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
            <a class="active" href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <div id="loggedout-form">
            <hr>
            <h1>You Are Logged Out</h1>
            <hr>
            <br>
            <h2>Thanks for stopping by!</h2>
            <h2 id="bye">Bye!</h2>
        </div>
    </main>

    <footer>
        <div class="footer1" style="color:RGB(1,173,226);">
            // FLATIRON SCHOOL<br />
            &copy; Copyright 2024 All Rights Reserved
        </div>
        <div class="footer2">
            <a class="sm1" href="https://linkedin.com" target="_blank">
                <img class="media-link" src="img/linkedin.svg" alt="LinkedIn Logo" />
            </a>
            <a class="sm2" href="https://facebook.com" target="_blank">
                <img class="media-link" src="img/facebook.svg" alt="Facebook Logo" />
            </a>
            <a class="sm3" href="https://twitter.com" target="_blank">
                <img the "media-link" src="img/twitter.svg" alt="Twitter Logo" />
            </a>
        </div>
    </footer>
</body>

</html>