<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$categoryKey = urldecode($_GET['category'] ?? 'Aéronautique');
$productName = urldecode($_GET['NomProduit'] ?? '');
$productNameFS2 = "";

// Conversion pour le système de fichiers
$categoryKeyFS = str_replace(' ', '_', $categoryKey);
$productNameFS = str_replace(' ', '_', $productName);

$categoryKeyFS2 = str_replace('_', ' ', $categoryKey);

// Construction du chemin
$basePath = __DIR__.'/assets/Realisations/';
$productPath = $basePath . $categoryKeyFS . '/Produits/' . $productNameFS;

if (!is_dir($productPath)) {
    die("Dossier produit introuvable: $productPath");
}

// Recherche du JSON correspondant aux legendes du produit en cours de présentaion
$jsonFile = null;
$jsonData = [];
$files = scandir($productPath);
$keepSearching = true; // Variable de contrôle

foreach ($files as $file) {
    if ($keepSearching && pathinfo($file, PATHINFO_EXTENSION) === 'json') {
        $jsonFile = $file;
        $keepSearching = false; // On arrête la recherche
    }
}

if ($jsonFile) {
    $jsonPath = $productPath . '/' . $jsonFile;
    $jsonContent = file_get_contents($jsonPath);
    
    if ($jsonContent !== false) {
        $jsonData = json_decode($jsonContent, true);
    }
}


// Recherche des images correspondant aux legendes du produit en cours de présentaion
$images = [];
$avantImage = null;
$apresImage = null;

foreach ($files as $file) {
    // On vérifie que ce n'est pas . ou .. avant de traiter le fichier
    if ($file !== '.' && $file !== '..') {
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
            $fileLower = strtolower($file);
            
            if (strpos($fileLower, 'avant') !== false) {
                $avantImage = $file;
            } elseif (strpos($fileLower, 'après') !== false || strpos($fileLower, 'apres') !== false) {
                $apresImage = $file;
            } elseif (!preg_match('/^vignetteprincipale\./i', $file)) {
                $images[] = $file;
            }
        }
    }
}

natsort($images);
$images = array_values($images);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LeanoDesign - <?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></title>
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/presentationProduit.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header class = "NavPresentationProduit">
        <?php include 'NavbarSansAOS.php'; ?>
    </header>

    <main>
        <section class="product">
            <div class="alignementPresentationProduit">

                <a href="realisations.php" class = "LienColor">
                    <h2>Réalisations
                </a> →
                <a  class = "LienColor" href="produits.php?category=<?php echo htmlspecialchars(urlencode($categoryKeyFS)) ?>">
                     <?php echo $categoryKeyFS2 ?>
                </a>  → <?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></h2>

                <p>&nbsp</p> 
                    <h1 id="main-title"><?php echo htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></h1>
                <p id="main-description"><?php echo htmlspecialchars($jsonData['header']['description'] ?? '') ?></p>
            </div>
            
            <div class="slider-container">
                <div class="after">
                    <img src="<?php echo !empty($apresImage) ? 
                        'assets/Realisations/' . rawurlencode($categoryKeyFS) . '/Produits/' . rawurlencode($productNameFS) . '/' . $apresImage : 
                        'assets/images/after.png' ?>" alt="Après">
                </div>
                
                <div class="before">
                    <img src="<?php echo !empty($avantImage) ? 
                        'assets/Realisations/' . rawurlencode($categoryKeyFS) . '/Produits/' . rawurlencode($productNameFS) . '/' . $avantImage : 
                        'assets/images/before.png' ?>" alt="Avant">
                </div>
                <div class="slider"></div>
            </div>
            
            <div class="gallery">
                <?php for ($i = 1; $i <= 4; $i++) { 
                    $imageIndex = $i - 1;
                    $imageSrc = isset($images[$imageIndex]) ? 
                        'assets/Realisations/' . rawurlencode($categoryKeyFS) . '/Produits/' . rawurlencode($productNameFS) . '/' . $images[$imageIndex] : 
                        'assets/images/image' . $i . '.jpg';
                    $imageId = 'image' . $i;
                ?>
                    <figure class="card" id="<?php echo $imageId ?>">
                        <img src="<?php echo htmlspecialchars($imageSrc) ?>" alt="Produit <?php echo $i ?>">
                        <figcaption class="description">
                            <?php if (isset($jsonData[$imageId])) { ?>
                                <h3><?php echo htmlspecialchars($jsonData[$imageId]['title'] ?? '') ?></h3>
                                <p><?php echo htmlspecialchars($jsonData[$imageId]['description'] ?? '') ?></p>
                            <?php } ?>
                        </figcaption>
                    </figure>
                <?php } ?>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>