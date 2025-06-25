<?php
// Activation de l'affichage des erreurs PHP pour le développement
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Récupération des paramètres GET avec des valeurs par défaut
// 'category' est décodé depuis l'URL
$categoryKey = urldecode($_GET['category'] ?? 'Aéronautique');
$productName = urldecode($_GET['NomProduit'] ?? '');
$productNameFS2 = "";

// Conversion des noms pour le système de fichiers : remplacement des espaces par des underscores
$categoryKeyFS = str_replace(' ', '_', $categoryKey);
$productNameFS = str_replace(' ', '_', $productName);

// Conversion inverse pour l'affichage : remplacement des underscores par des espaces
$categoryKeyFS2 = str_replace('_', ' ', $categoryKey);

// Conversion inverse pour l'affichage : remplacement des underscores par des espaces
$Keys = str_replace(' ', '_', $productName);


// Construction du chemin absolu vers le dossier du produit
$basePath = __DIR__.'/assets/Realisations/';
$productPath = $basePath . $categoryKeyFS . '/Produits/' . $productNameFS;

// Vérification de l'existence du dossier produit
if (!is_dir($productPath)) {
    die("Dossier produit introuvable: $productPath");
}

// PARCOURS DES FICHIERS DU DOSSIER POUR TROUVER LE FICHIER JSON

$jsonFile = null;
$jsonData = [];
$files = scandir($productPath);
$keepSearching = true; // Permet d'arrêter la recherche après avoir trouvé le premier JSON

foreach ($files as $file) {
    // On vérifie l'extension .json sans tenir compte de la casse
    if ($keepSearching && pathinfo($file, PATHINFO_EXTENSION) === 'json') {
        $jsonFile = $file;
        $keepSearching = false; // On s'arrête au premier JSON trouvé
    }
}

// Si un fichier JSON a été trouvé, on le lit et décode son contenu
if ($jsonFile) {
    $jsonPath = $productPath . '/' . $jsonFile;
    $jsonContent = file_get_contents($jsonPath);
    
    if ($jsonContent !== false) {
        $jsonData = json_decode($jsonContent, true);
    }
}

// PARCOURS DES FICHIERS POUR TROUVER LES IMAGES DU PRODUIT
// Recherche des images avant/après et des images supplémentaires
$images = [];
$avantImage = null;
$apresImage = null;

foreach ($files as $file) {
    // Exclusion des répertoires spéciaux . et ..
    if ($file !== '.' && $file !== '..') {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        // Filtre sur les extensions d'image autorisées
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
            $fileLower = strtolower($file);
            
            // Détection des images avant/après par leur nom
            if (strpos($fileLower, 'avant') !== false) {
                $avantImage = $file;
            } elseif (strpos($fileLower, 'après') !== false || strpos($fileLower, 'apres') !== false) {
                $apresImage = $file;
            } elseif (!preg_match('/^vignetteprincipale\./i', $file)) {
                // Ajout des autres images (sauf vignette principale)
                $images[] = $file;
            }
        }
    }
}

// Tri naturel des images (ex: image1, image2,... image10 au lieu de image1, image10, image2)
natsort($images);
$images = array_values($images); // Réindexation du tableau après le tri
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Titre de la page avec le nom du Produit choisie depuis le JSON-->
    <title>LeanoDesign - <?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></title>

    <!-- Métadonnées pour le référencement et la description -->
    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="<?php echo htmlspecialchars($jsonData['meta']['description'] ?? 'Découvrez '.($Keys ?? '').', solution de design industriel innovante conçue en Bretagne') ?>"> 
    <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor, <?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?>">
    <meta name="author" content="LEANO DESIGN+ ENGINEERING">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.leanodesign.com/" />

    
    <!-- Inclusion des feuilles de style -->
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/presentationProduit.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>

    <!-- Logo + Navbar -->
    <header class = "NavPresentationProduit">
        <?php include 'NavbarSansAOS.php'; ?>
    </header>

    <main>
        <section class="product">
            <div class="alignementPresentationProduit">
                <!-- Menu de navigation -->
                <a href="realisations.php" class = "LienColor"> <!-- lien de redirection -->
                    <h2 class = texte_chemin>Réalisations <!-- En cliquant sur "Réalisation" ramène a la page realisation -->
                </a> →
                <a  class = "LienColor" href="produits.php?category=<?php echo htmlspecialchars(urlencode($categoryKeyFS)) ?>"> <!-- lien de redirection avec les information de la page précédente (dmaine choisie) -->
                     <?php echo $categoryKeyFS2 ?> <!-- Nom du domaine-->
                </a>  → <?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></h2> <!-- Nom du produit pris de JSON-->

                <p>&nbsp</p> 
                    <!-- Titre de la page pris de JSON-->
                    <h1 id="main-title"><?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></h1>

                    <!-- Sous titre de la page pris de JSON-->
                <p id="main-description"><?php echo htmlspecialchars($jsonData['header']['description'] ?? '') ?></p>
            </div>
            
            <!-- Slider de comparaison avant/après -->
            <div class="slider-container">
                <div class="after">
                    <!-- Affichage conditionnel de l'image "après" -->
                    <!-- Si une image après existe, on l'affiche, sinon on utilise une image par défaut -->
                    <img src="<?php echo !empty($apresImage) ? 
                        'assets/Realisations/' . rawurlencode($categoryKeyFS) . '/Produits/' . rawurlencode($productNameFS) . '/' . $apresImage : 
                        'assets/images/after.png' ?>" alt="<?php echo "Leano Design - " .$categoryKeyFS2 . " - " . str_replace('_', ' ', $productName) . " - Après" ?>">
                </div>
                
                <div class="before">
                    <!-- Affichage conditionnel de l'image "avant" -->
                    <!-- Même principe que pour l'image "après" -->
                    <img src="<?php echo !empty($avantImage) ? 
                        'assets/Realisations/' . rawurlencode($categoryKeyFS) . '/Produits/' . rawurlencode($productNameFS) . '/' . $avantImage : 
                        'assets/images/before.png' ?>" alt="<?php echo "Leano Design - " . $categoryKeyFS2 . " - " . str_replace('_', ' ', $productName) . " - Avant" ?>">
                </div>
                <div class="slider"></div>
            </div>
            
            <!-- Galerie d'images du produit -->
            <div class="gallery">
                <?php for ($i = 1; $i <= 4; $i++) { 
                    $imageIndex = $i - 1;
                    // Détermination du chemin de l'image
                    // Si l'image existe dans le tableau $images, on l'utilise, sinon image par défaut
                    $imageSrc = isset($images[$imageIndex]) ? 
                        'assets/Realisations/' . rawurlencode($categoryKeyFS) . '/Produits/' . rawurlencode($productNameFS) . '/' . $images[$imageIndex] : 
                        'assets/images/image' . $i . '.jpg';
                    $imageId = 'image' . $i;
                ?>
                    <figure class="card" id="<?php echo $imageId ?>">
                        <!-- Affichage de l'image avec son alternative textuelle -->
                        <img src="<?php echo htmlspecialchars($imageSrc) ?>" alt="Leano Design - image <?php echo $i ?> présentation produit <?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?>">
                        <figcaption class="description">
                            <?php if (isset($jsonData[$imageId])) { ?>
                                <!-- Affichage du titre et description de l'image si disponibles dans le JSON -->
                                <h3><?php echo htmlspecialchars($jsonData[$imageId]['title'] ?? '') ?></h3>
                                <p><?php echo htmlspecialchars($jsonData[$imageId]['description'] ?? '') ?></p>
                            <?php } ?>
                        </figcaption>
                    </figure>
                <?php } ?>
            </div>
        </section>
    </main>

    <!-- Inclusion du pied de page -->
    <?php include 'footer.php'; ?>
    <!-- Inclusion des scripts JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>