<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeanoDesign - Notre Histoire</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/historique.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <header>
        <img src="assets/images/logo.png" alt="Leano Design Logo" class="logo">
        <?php include 'navbar.php'; ?>
        <div class="social-icons">
            <a href="#"><img src="assets/images/Instagram_icon.svg" alt="Instagram"></a>
            <a href="#"><img src="assets/images/LinkedIn_logo_initials.svg" alt="LinkedIn"></a>
        </div>
    </header>

    <div class="content">
        <div class="historique-container">
            <div class="anniversary-banner scale-in">
                <div class="anniversary-content highlight">
                    <span class="years count-up">15</span>
                    <span class="text">ans de l'agence Leano Design</span>
                </div>
                <div class="anniversary-content">
                    <span class="years count-up">26</span>
                    <span class="text">ans d'expertise en design industriel</span>
                </div>
            </div>


            <div class="profile-section">
                <div class="profile-image">
                    <img src="assets/images/vincent-beaucourt.jpg" alt="Vincent Beaucourt - Fondateur de Leano Design">
                </div>
                <div class="profile-info">
                    <h2>Vincent Beaucourt</h2>
                    <p class="subtitle">Fondateur & Designer Industriel</p>

                    <div class="section formation">
                        <h3>Formation</h3>
                        <ul>
                            <li>Diplômé de RUBIKA (ISD) à Valenciennes</li>
                            <li>Cycle de spécialisation filière Produits & Systèmes Industriels</li>
                            <li>Bac Arts Appliqués (F12) – Institut Saint Vincent de Paul à Lille</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="parcours-section">
                <h3>Parcours Professionnel</h3>
                <div class="parcours-timeline">
                    <div class="parcours-item">
                        <div class="parcours-period">
                            <span class="year-start">2010</span>
                            <span class="year-separator">-</span>
                            <span class="year-end">Aujourd'hui</span>
                        </div>
                        <div class="parcours-details">
                            <div class="parcours-content">
                                <h4><span class="company-dot current"></span>EURL Leano Design à Guingamp (22)</h4>
                                <p class="role">Designer Industriel | Gérant</p>
                                <p class="description">Création et direction de l'agence Leano Design, spécialisée dans
                                    le design industriel et l'ingénierie de produits. Accompagnement des entreprises
                                    dans leurs projets d'innovation et de développement de produits.</p>
                            </div>
                        </div>
                    </div>

                    <div class="parcours-item">
                        <div class="parcours-period">
                            <span class="year-start">2001</span>
                            <span class="year-separator">-</span>
                            <span class="year-end">2010</span>
                        </div>
                        <div class="parcours-details">
                            <div class="parcours-content">
                                <h4><span class="company-dot"></span>Société OKTES, Bureau d'études à Lannion (22)</h4>
                                <p class="role">Designer Industriel</p>
                                <p class="description">En relation directe avec le bureau d'études : électronique,
                                    conception mécanique, calcul de structure, simulation thermique. Développement de
                                    solutions techniques innovantes pour divers secteurs industriels.</p>
                            </div>
                        </div>
                    </div>

                    <div class="parcours-item">
                        <div class="parcours-period">
                            <span class="year-start">1991</span>
                            <span class="year-separator">-</span>
                            <span class="year-end">2001</span>
                        </div>
                        <div class="parcours-details">
                            <div class="parcours-content">
                                <h4><span class="company-dot"></span>Groupe SEB à Lourdes (65)</h4>
                                <p class="role">Designer Produit</p>
                                <p class="description">Division Food Preparation & Breuvage. Conception et développement
                                    de produits électroménagers innovants, alliant esthétique et fonctionnalité pour une
                                    marque leader du secteur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="philosophy-section">
                <h3>Notre Philosophie</h3>
                <p>Depuis 15 ans, Leano Design s'engage à créer des produits innovants qui allient esthétique et
                    fonctionnalité. Notre approche combine créativité et expertise technique pour répondre aux besoins
                    spécifiques de nos clients.</p>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="js/counter-animation.js"></script>
</body>

</html>