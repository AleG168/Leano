<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEANO DESIGN+ ENGINEERING</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <img src="assets/images/logo.png" alt="Leano Design Logo" class="logo">
        <?php include 'navbar.php'; ?>
        <div class="social-icons">
            <a href="https://www.instagram.com/leanodesign?igsh=M2Fkd3Q3Mm9vbzU3"><img src="assets/images/Instagram_icon.svg" alt="Instagram"></a>
            <a href="https://fr.linkedin.com/company/leano-design"><img src="assets/images/LinkedIn_logo_initials.svg" alt="LinkedIn"></a>
        </div>
    </header>

    <main>
        <section class="content">
            <h1>Design </h1>
            <h2>Développement de produit grand public et professionnel</h2>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/AcCyxakOg5k" allowfullscreen></iframe>
            </div>
            <p class="slogan">
                <em>Notre engagement : concevoir ensemble des produits ingénieux et innovants</em>
            </p>
        </section>

        <div class="section-spacer"></div>

        <section class="engagements-wrapper">
            <h3>Nos Engagements</h3>
            <div class="engagements-grid">

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Innovation.png"
                            alt="Innovation"></div>
                    <div class="engagement-label">Innovation</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Durabilite.png"
                            alt="Durabilité"></div>
                    <div class="engagement-label">Durabilité</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Simplicite.png"
                            alt="Simplicité"></div>
                    <div class="engagement-label">Simplicité</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Esthetique.png"
                            alt="Esthétique"></div>
                    <div class="engagement-label">Esthétique</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Collaboration.png"
                            alt="Collaboration"></div>
                    <div class="engagement-label">Collaboration</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Technologie.png"
                            alt="Technologie"></div>
                    <div class="engagement-label">Technologie</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Responsabilite.png"
                            alt="Responsabilité"></div>
                    <div class="engagement-label">Responsabilité</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Adaptabilite.png"
                            alt="Adaptabilité"></div>
                    <div class="engagement-label">Adaptabilité</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Performance.png"
                            alt="Performance"></div>
                    <div class="engagement-label">Performance</div>
                </div>

                <div class="engagement-block">
                    <div class="icon-circle"><img src="assets/images/Ethique.png"
                            alt="Éthique"></div>
                    <div class="engagement-label">Éthique</div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>