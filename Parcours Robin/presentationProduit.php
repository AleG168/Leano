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
    <link rel="stylesheet" href="css/presentationProduit.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
    <header>
        <?php include 'navbar.php'; ?>
    </header>

    <?php 
    // Récupération des paramètres
    $categoryKey = $_GET['category'] ?? 'Aeronautique';
    $productName = $_GET['NomProduit'] ?? '';
    
    // Construction du chemin du produit
    $productPath = __DIR__.'/assets/Realisations/'.$categoryKey.'/Produits/'.$productName;
    
    // Trouver le fichier JSON automatiquement
    $jsonFile = null;
    if (is_dir($productPath)) {
        $files = scandir($productPath);
        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
                $jsonFile = $file;
                break;
            }
        }
    }

    // Trouver toutes les images dans le dossier (triées par nom)
    $images = [];
    $avantImage = null;
    $apresImage = null;
    
    if (is_dir($productPath)) {
        $files = scandir($productPath);
        foreach ($files as $file) {
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                $fileLower = strtolower($file);
                
                // Détecter les images avant/après
                if (strpos($fileLower, 'avant.') !== false) {
                    $avantImage = $file;
                } elseif (strpos($fileLower, 'après.') !== false || strpos($fileLower, 'apres.') !== false) {
                    $apresImage = $file;
                } 
                // Exclure seulement la vignette principale
                elseif (!preg_match('/^vignetteprincipale\./i', $file)) {
                    $images[] = $file;
                }
            }
        }
        // Tri naturel des images
        natsort($images);
        $images = array_values($images); // Réindexer
    }

    // Charger les données JSON si disponible
    $jsonData = [];
    if ($jsonFile && is_file($productPath.'/'.$jsonFile)) {
        $jsonContent = file_get_contents($productPath.'/'.$jsonFile);
        $jsonData = json_decode($jsonContent, true);
    }
    ?>

    <main>
        <section class="product">

        <div class  = "alignementPresentationProduit"> 
            <h1 id="main-title"><?= htmlspecialchars($jsonData['header']['title'] ?? $productName) ?></h1>
            <p id="main-description"><?= htmlspecialchars($jsonData['header']['description'] ?? '') ?></p>
        </div>
            <div class="slider-container">
                <div class="after">
                    <img src="<?= $apresImage ? 'assets/Realisations/'.$categoryKey.'/Produits/'.$productName.'/'.$apresImage : 'assets/images/after.png' ?>" alt="Après">
                </div>
                <div class="before">
                    <img src="<?= $avantImage ? 'assets/Realisations/'.$categoryKey.'/Produits/'.$productName.'/'.$avantImage : 'assets/images/before.png' ?>" alt="Avant">
                </div>
                <div class="slider"></div>
            </div>
            
            <div class="gallery">
                <?php for ($i = 1; $i <= 4; $i++): 
                    $imageIndex = $i - 1;
                    $imageSrc = isset($images[$imageIndex]) ? 
                        "assets/Realisations/$categoryKey/Produits/$productName/".$images[$imageIndex] : 
                        "assets/images/image$i.jpg";
                    $imageId = "image$i";
                ?>
                <figure class="card" id="<?= $imageId ?>">
                    <img src="<?= htmlspecialchars($imageSrc) ?>" alt="Produit <?= $i ?>">
                    <figcaption class="description">
                        <?php if (isset($jsonData[$imageId])): ?>
                            <h3><?= htmlspecialchars($jsonData[$imageId]['title'] ?? '') ?></h3>
                            <p><?= htmlspecialchars($jsonData[$imageId]['description'] ?? '') ?></p>
                        <?php endif; ?>
                    </figcaption>
                </figure>
                <?php endfor; ?>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>