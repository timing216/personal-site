<html>

<head>
  <!-- styles for this page -->
  <link rel="stylesheet" href="portfolio.css" />
  <script defer src="javascript.js"></script>
</head>

<body>

  <header>
    <span class="name">Utaro Hayashi</span>
    <nav class="links">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a class="active" href="portfolio.php">Portfolio</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main>

    <h1>Things I've developed, in no particular order</h1>
    <section class="project">
      <h2 class="NLI chicago">The First Project</h2>

      <a href="https://nlichicago.com" target="_blank">
        <img class="image" src="img/nli-chicago.png" width="360" alt="NLI Chicago. a company name" />
      </a>
      <p>
        This web project is built using WordPress. However, the server load
        time is currently an issue and it may be necessary to migrate it to a
        virtual server.
      </p>
    </section>
    <section class="project">
      <h2 class="Astro Trader">The Second Project</h2>
      <img class="image" src="img/astrotrader trading tools.png" width="360" alt="Astro Trader Trading Tools Image" />

      <p>
        This is a Windows-based thick client application built with C#. To
        measure the market, I implemented astronomical cycle calculations
        using a C++ dynamic link library (DLL) ephemeris for complex
        calculations. To ensure a non-cluttered monitor space for traders, I
        sized the application to be similar in size to an iPhone.
      </p>

      <p>
        My next project is to migrate these desktop applications to a
        subscriber-based web application.
      </p>
    </section>

    <section class="project">
      <h2 class="Unlimited Squares">The Third Project</h2>
      <img class="image" src="img/unlimited squares.png" width="360" alt="unlimited sqaures app" />
      <p>
        This is a website featuring ads for one of the programs I sold on the
        Apple market.
      </p>
    </section>
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
