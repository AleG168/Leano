<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LeanoDesign - Réalisations</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/realisations.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <div class="content realisation-content">
        <div class="container mt-3 realisation-container agrandissement">
            <h1 class="TitreReali">Réalisations</h1>
            <h2 id="SousTitre">Mes neufs domaines d'expertises</h2>
            <div class="row justify-content-center g-2">
                
                <!-- Bloc Aéronautique -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Aeronautique" class="square-block">
                        <img src="assets/Realisations/Aeronautique/VignettePrincipale.png" alt="Aéronautique" class="block-image">
                        <div class="hover-text">Aéronautique</div>
                    </a>
                </div>
                
                <!-- Bloc Défense -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Defense_Securite_Civile_Naval" class="square-block">
                        <img src="assets/Realisations/Defense_Securite_Civile_Naval/VignettePrincipale.png" alt="Défense" class="block-image">
                        <div class="hover-text">Défense, Sécurité civile & navale</div>
                    </a>
                </div>
                
                <!-- Bloc Énergie -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Energie_Ressources_Naturelles" class="square-block">
                        <img src="assets/Realisations/Energie_Ressources_Naturelles/VignettePrincipale.png" alt="Énergie" class="block-image">
                        <div class="hover-text">Énergie & ressources naturelles</div>
                    </a>
                </div>
                
                <!-- Bloc Industrie -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Industrie_Equipement_Industriel_Agricole" class="square-block">
                        <img src="assets/Realisations/Industrie_Equipement_Industriel_Agricole/VignettePrincipale.png" alt="Industrie" class="block-image">
                        <div class="hover-text">Industrie, Équipement industriel & Agricole</div>
                    </a>
                </div>
                
                <!-- Bloc Nautisme -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Nautisme" class="square-block">
                        <img src="assets/Realisations/Nautisme/VignettePrincipale.png" alt="Nautisme" class="block-image">
                        <div class="hover-text">Nautisme</div>
                    </a>
                </div>
                
                <!-- Bloc Santé -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Sante_Equipement_Domestique_Bien_Etre" class="square-block">
                        <img src="assets/Realisations/Sante_Equipement_Domestique_Bien_Etre/VignettePrincipale.png" alt="Santé" class="block-image">
                        <div class="hover-text">Santé, Equipement domestique & Bien-être</div>
                    </a>
                </div>
                
                <!-- Bloc Télécom -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Telecom_Multimedia" class="square-block">
                        <img src="assets/Realisations/Telecom_Multimedia/VignettePrincipale.png" alt="Télécom" class="block-image">
                        <div class="hover-text">Télécom & Multimédia</div>
                    </a>
                </div>
                
                <!-- Bloc Transport -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=Transport_Mobilite" class="square-block">
                        <img src="assets/Realisations/Transport_Mobilite/VignettePrincipale.png" alt="Transport" class="block-image">
                        <div class="hover-text">Transport & Mobilité</div>
                    </a>
                </div>
            </div>

            <!-- Bandeau Merchandising -->
            <div class="container merchandising-banner mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <h3 class="merch-title text-center mb-3">Merchandising</h3>
                        <div class="banner-images d-flex justify-content-center flex-wrap">
                            <?php
                            $merchImages = [
                                'assets/Realisations/Packaging_Merchandising_Graphisme/VignettePrincipale.png',
                                'assets/Realisations/Packaging_Merchandising_Graphisme/VignettePrincipale.png',
                                'assets/Realisations/Packaging_Merchandising_Graphisme/VignettePrincipale.png',
                                'assets/Realisations/Packaging_Merchandising_Graphisme/VignettePrincipale.png',
                                'assets/Realisations/Packaging_Merchandising_Graphisme/VignettePrincipale.png'
                            ];
                            
                            foreach($merchImages as $image): ?>
                                <div class="merch-square">
                                    <div class="merch-content">
                                        <img src="<?= $image ?>" alt="Merch" class="merch-img">
                                        <div class="merch-hover"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>