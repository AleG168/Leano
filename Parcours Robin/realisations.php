<?php
// Détection des domaines
$domaines = [];
$domainesDir = 'assets/Realisations';

// Scan du dossier des réalisations pour lister les sous-dossiers
$dossiers = scandir($domainesDir);

$compteurDomaine = 1; // Compteur pour le nombre de domaines trouvés (initialisé a 1 car bandeau Merchandising)

// Parcours des dossiers trouvés
foreach ($dossiers as $dossier) {
    // On ignore les dossiers cachés et le dossier spécifique Packaging_Merchandising_Graphisme
    if ($dossier[0] === '.' || $dossier === 'Packaging_Merchandising_Graphisme') {
        continue;
    }
    
     // Construction du chemin vers la vignette principale
    $chemin_vignette = $domainesDir . '/' . $dossier . '/VignettePrincipale.png';
    
      // Vérification de l'existence de la vignette
    if (file_exists($chemin_vignette)) {
        // Formatage du nom du domaine pour l'affichage
        $nom = str_replace('_', ' ', $dossier); // les "_" deviennent des " " (pourl'affichages des nom des catégories)
        $nom = mb_convert_case(strtolower($nom), MB_CASE_TITLE, "UTF-8"); // met tous les caractères en minuscule et ajpute une Majuscule a chaque mot = gestion des caractères spéciaux
        
        // Ajout du domaine à la liste
        $domaines[] = [
            'dossier' => $dossier,
            'vignette' => $chemin_vignette,
            'nom' => $nom
        ];
        $compteurDomaine ++; // + 1 au compteur de domaine pour chaque dossier parcouru
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Titre de la page dans l'onglet -->
    <title>LeanoDesign - Réalisations</title>
    
    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/realisations.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

    <!-- Logo + Navbar -->
    <header class = "Navbar_centrer NavPresentationProduit">
        <?php include 'NavbarSansAOS.php'; ?>
    </header>

    <!-- Contenu principal de la page -->
    <div class="content realisation-content">
        <div class="container mt-3 realisation-container agrandissement">

            <!-- Titre de la page -->
            <h1 class="TitreReali">Réalisations</h1>

            <!-- Sous Titre de la page avec le nombre de domaine affiché automatiquement -->
            <h2 id="SousTitre">Mes <?php echo $compteurDomaine?> domaines d'expertises</h2>

            <!-- Grille des domaines -->
            <div class="row justify-content-center g-2">
            <?php foreach ($domaines as $domaine) { ?>

                <!-- Bloc pour chaque domaine -->
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    
                <!-- Lien vers la page des produits du domaine -->
                <a href="produits.php?category=<?php echo urlencode($domaine['dossier']) ?>" class="square-block">
                        
                    <!-- Image de vignette -->
                    <img src="<?php echo $domaine['vignette'] ?>" alt="<?php echo $domaine['nom'] ?>" class="block-image">

                    <!-- Texte au survol des blocs acec le noms des domaines affiché -->
                    <div class="hover-text"><?php echo $domaine['nom'] ?></div>
                </a>
                </div>
            <?php } ?>
            </div>
            
            <!-- Section spéciale pour le merchandising -->
            <div class="container merchandising-banner mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">

                        <!-- Titre du bandeau Graphisme & Merchandising -->
                        <h3 class="merch-title text-center mb-3">Graphisme & Merchandising</h3>
                        
                        <!-- Conteneur des images -->
                        <div class="banner-images d-flex justify-content-center flex-wrap">
                            <?php

                            // Dossier spécifique pour le merchandising
                            $merchDir = "$domainesDir/Packaging_Merchandising_Graphisme";
                            $merchImages = [];
                            $maxImages = 5;// Nombre maximum d'images à afficher
                            
                            // Récupération des images de merchandising
                            if (is_dir($merchDir)) {
                                $files = scandir($merchDir);
                                
                                // Parcours des fichiers avec limite du nombre maximum
                                for ($i = 0; $i < count($files) && count($merchImages) < $maxImages; $i++) {
                                    
                                    // Filtre sur les extensions d'image
                                    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $files[$i])) {
                                        $merchImages[] = "$merchDir/{$files[$i]}";
                                    }
                                }
                            }
                            
                            // Affichage des images de merchandising
                            foreach ($merchImages as $image) { ?>
                                <div class="merch-square">
                                    <div class="merch-content">
                                        <img src="<?php echo $image ?>" alt="Merch" class="merch-img">
                                        <div class="merch-hover"></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclusion du pied de page -->
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
