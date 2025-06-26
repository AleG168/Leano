<?php
// Détection des domaines
$domaines = [];
$domainesDir = 'assets/Realisations';

// Scan du dossier des réalisations pour lister les sous-dossiers
$dossiers = scandir($domainesDir);

$compteurDomaine = 1; // Compteur pour le nombre de domaines trouvés
$keywords = []; // Initialisation du tableau pour les mots-clés

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
        $nom = str_replace('_', ' ', $dossier);
        $nom = mb_convert_case(strtolower($nom), MB_CASE_TITLE, "UTF-8");
        
        // Ajout du domaine à la liste
        $domaines[] = [
            'dossier' => $dossier,
            'vignette' => $chemin_vignette,
            'nom' => $nom
        ];
        
        // Ajout du nom aux mots-clés
        $keywords[] = $nom;
        $compteurDomaine++;
    }
}
// Ajout du nom aux mots-clés
$keywords[] = "Graphisme";
$keywords[] = "Merchandising";
$keywords[] = "Packaging";

// sépare par des "," et enleve les doublons
$keywordsString = implode(', ', array_unique($keywords));

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Titre de la page dans l'onglet -->
    <title>LeanoDesign - Réalisations</title>

    <!-- Métadonnées pour le référencement et la description -->
    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="Domaines d'expertise"> 
    <meta name="keywords" content="<?php echo htmlspecialchars($keywordsString); ?>">
    <meta name="author" content="LEANO DESIGN+ ENGINEERING">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.leanodesign.com/" />
    
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
                    <img src="<?php echo $domaine['vignette'] ?>" alt="Leano Design - <?php echo $domaine['nom'] ?>" class="block-image">

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
                            
                            // Configuration initiale pour les produits de merchandising
                            // Chemin vers le dossier contenant les produits merchandising
                            $produitsMerchDir = "$domainesDir/Packaging_Merchandising_Graphisme/Produits";
                            // Tableau qui stockera les images à afficher
                            $merchImages = [];
                            // Nombre maximum d'images à afficher dans le bandeau
                            $maxImages = 5;
                            // Extensions d'images autorisées pour les vignettes
                            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];

                            // Vérification que le dossier merchandising existe
                            if (is_dir($produitsMerchDir)) {
                                // Récupération de la liste des dossiers produits (scan du répertoire)
                                $produitsDirs = scandir($produitsMerchDir);
                                
                                // Parcours de chaque dossier produit trouvé
                                foreach ($produitsDirs as $produitDir) {
                                    // On ignore les dossiers cachés (commençant par '.') et on vérifie qu'on n'a pas déjà le max d'images
                                    if ($produitDir[0] === '.' || count($merchImages) >= $maxImages) {
                                        continue; // Passe à l'itération suivante
                                    }
                                    
                                    // Recherche de la vignette principale dans le dossier produit
                                    // On teste chaque extension autorisée
                                    foreach ($allowedExtensions as $ext) {
                                        // Construction du chemin vers la vignette
                                        $vignettePath = "$produitsMerchDir/$produitDir/VignettePrincipale.$ext";
                                        
                                        // Si la vignette existe pour cette extension
                                        if (file_exists($vignettePath)) {
                                            // Initialisation pour la recherche de fichier JSON
                                            $jsonFile = null; // Nom du fichier JSON trouvé
                                            $jsonData = [];   // Données décodées du JSON
                                            // Liste des fichiers dans le dossier produit
                                            $files = scandir("$produitsMerchDir/$produitDir");
                                            $keepSearching = true; // Flag pour arrêter après le premier JSON trouvé
                                            
                                            // Parcours des fichiers pour trouver un JSON
                                            foreach ($files as $file) {
                                                // Vérifie que c'est un fichier JSON (extension .json)
                                                if ($keepSearching && strtolower(pathinfo($file, PATHINFO_EXTENSION)) === 'json') {
                                                    $jsonFile = $file; // Stocke le nom du fichier
                                                    $keepSearching = false; // Arrête la recherche
                                                }
                                            }
                                            
                                            // Initialisation de la description
                                            $description = "";
                                            // Si un fichier JSON a été trouvé
                                            if ($jsonFile) {
                                                // Construction du chemin complet vers le JSON
                                                $jsonPath = "$produitsMerchDir/$produitDir/$jsonFile";
                                                // Lecture du contenu du fichier
                                                $jsonContent = file_get_contents($jsonPath);
                                                
                                                // Si la lecture a réussi
                                                if ($jsonContent !== false) {
                                                    // Décodage du JSON en tableau associatif
                                                    $jsonData = json_decode($jsonContent, true);
                                                    // Récupération de la description si elle existe
                                                    if (isset($jsonData['image1']['description'])) {
                                                        $description = $jsonData['image1']['description'];
                                                    }
                                                }
                                            }
                                            
                                            // Ajout des informations de l'image au tableau final
                                            $merchImages[] = [
                                                'path' => $vignettePath,        // Chemin de l'image
                                                'name' => str_replace('_', ' ', $produitDir), // Nom formaté
                                                'description' => $description    // Description (peut être vide)
                                            ];
                                            break; // On sort de la boucle des extensions car on a trouvé la vignette
                                        }
                                    }
                                }
                            }

                            // Affichage des images de merchandising
                            foreach ($merchImages as $item) { ?>
                                <div class="merch-square">
                                    <div class="merch-content">
                                        <img src="<?php echo $item['path'] ?>" alt="Leano Design - <?php echo $item['name'] ?>" class="merch-img">
                                        <div class="merch-hover"></div>
                                        <?php if (!empty($item['description'])) { ?>
                                            <div class="merch-description"><?php echo $item['description'] ?></div>
                                        <?php } ?>
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