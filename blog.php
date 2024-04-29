<html>

<head>
    <!-- styles for this page -->
    <link rel="stylesheet" href="portfolio.css" />
    <meta http-equiv="Content-Security-Policy" content="
    default-src 'self';
    script-src 'self' https://apis.example.com 'unsafe-inline';
    style-src 'self' https://fonts.googleapis.com 'unsafe-inline';
    font-src 'self' https://fonts.gstatic.com;
">
    <script defer src="javascript.js" defer></script>
</head>

<body>

    <header>
        <span class="name">Utaro Hayashi</span>
        <nav class="links">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="portfolio.php">Portfolio</a>
            <a class="active" href="blog.php">Blog</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <main>

        <h1>Latest Cyber Security News</h1>
        <section class="project">
            <h2 class="Astro Trader">Biden-⁠Harris Administration Announces Initiative to Bolster Cybersecurity of U.S. Ports</h2>
            <a href="https://www.whitehouse.gov/briefing-room/statements-releases/2024/02/21/fact-sheet-biden-harris-administration-announces-initiative-to-bolster-cybersecurity-of-u-s-ports/#:~:text=President%20Biden%20will%20sign%20an,networks%20and%20systems%20are%20secure." target="_blank">
                <img class="image" src="img/biden_harris_cyber.png" width="360" alt="Biden Harris on US Ports Cyber" /></a>

            <p>
                The Biden-Harris Administration has issued an Executive Order to enhance the cybersecurity of U.S. ports, which includes strengthening maritime cybersecurity and fortifying supply chains. This initiative involves a significant $20 billion investment into U.S. port infrastructure, emphasizing the security of digital systems crucial to the Marine Transportation System (MTS). The MTS, integral to the U.S. economy, supports over $5.4 trillion in economic activity annually. The new measures will grant the Department of Homeland Security and the U.S. Coast Guard greater authority to combat cyber threats, enforce cybersecurity standards, and require mandatory incident reporting. Additionally, there are specific directives targeting vulnerabilities in ship-to-shore cranes, particularly those manufactured in China, and proposed regulations to align cybersecurity practices with international standards. This initiative is part of broader efforts to restore U.S. manufacturing capabilities and resilience in critical infrastructure.
            </p>

        </section>
        <section class="project">
            <h2 class="NLI chicago">Biden Harris Inflation Reduction Initiative</h2>

            <a href="https://home.treasury.gov/news/press-releases/jy1830#:~:text=The%20Inflation%20Reduction%20Act%20modifies%20and%20extends%20the%20Renewable%20Energy,meet%20prevailing%20wage%20standards%20and" target="_blank">
                <img class="image" src="img/cleanenergy.png" width="360" alt="Biden Harris Clean Energy" />
            </a>
            <p>
                The Inflation Reduction Act, enacted under President Biden's administration, is recognized as the most significant climate change legislation in U.S. history. It aims to combat climate change while fostering economic growth, particularly in disadvantaged communities. The act includes substantial tax incentives to stimulate investments in clean energy, such as manufacturing in solar and electric vehicle sectors. An example is the Low-Income Communities Bonus Credit Program, which enhances investment tax credits for renewable energy projects in low-income areas. This act is expected to drive investments exceeding $115 billion and generate significant employment opportunities in the clean energy sector.
            </p>
        </section>

        <!-- 
        <section class="project">
            <h2 class="Unlimited Squares">The Third Project</h2>
            <img class="image" src="img/unlimited squares.png" width="360" alt="unlimited sqaures app" />
            <p>
                This is a website featuring ads for one of the programs I sold on the
                Apple market.
            </p>
        </section> -->
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