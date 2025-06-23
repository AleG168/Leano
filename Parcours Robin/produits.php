<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Tableau de correspondance entre noms techniques et noms affichés
$categoryNames = [
    'Aeronautique' => 'Aéronautique',
    'Defense_Securite_Civile_Naval' => 'Défense, Sécurité civile & navale',
    'Energie_Ressources_Naturelles' => 'Énergie & ressources naturelles',
    'Industrie_Equipement_Industriel_Agricole' => 'Industrie, Équipement industriel & Agricole',
    'Nautisme' => 'Nautisme',
    'Sante_Equipement_Domestique_Bien_Etre' => 'Santé, Equipement domestique & Bien-être',
    'Telecom_Multimedia' => 'Télécom & Multimédia',
    'Transport_Mobilite' => 'Transport & Mobilité',
    'Packaging_Merchandising_Graphisme' => 'Packaging, Merchandising & Graphisme'
];

// Récupération de la catégorie
$categoryKey = $_GET['category'] ?? 'Aeronautique';
$displayName = $categoryNames[$categoryKey] ?? $categoryKey;

// Chemins
$baseDir = __DIR__.'/assets/Realisations';
$categoryDir = $baseDir.'/'.$categoryKey;
$productsDir = $categoryDir.'/Produits';

// Vérification sécurité
if (strpos($categoryKey, '..') !== false || !is_dir($categoryDir)) {
    die('Catégorie invalide');
}

// Récupération sous-catégories
$subCategories = [];
if (is_dir($productsDir)) {
    $items = scandir($productsDir);
    foreach ($items as $item) {
        $fullPath = $productsDir.'/'.$item;
        if ($item !== '.' && $item !== '..' && is_dir($fullPath)) {
            
            // Chercher SPECIFIQUEMENT VignettePrincipale
            $vignette = null;
            $possibleFiles = [
                $fullPath.'/VignettePrincipale.png',
                $fullPath.'/VignettePrincipale.jpg',
                $fullPath.'/vignette.png',
                $fullPath.'/vignette.jpg'
            ];
            
            foreach ($possibleFiles as $file) {
                if (file_exists($file)) {
                    $vignette = $file;
                    break;
                }
            }
            
            // Si aucune vignette trouvée, prendre la première image
            if (!$vignette) {
                $images = glob($fullPath.'/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
                if (!empty($images)) {
                    $vignette = $images[0];
                }
            }
            
            if ($vignette) {
                $subCategories[] = [
                    'name' => $item,
                    'vignette' => str_replace(__DIR__, '', $vignette),
                    'path' => $item
                ];
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeanoDesign - <?= htmlspecialchars($displayName) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <h1 class="TitreReali"><?= htmlspecialchars($displayName) ?></h1>
            
        
            
            <?php if (empty($subCategories)): ?>
                <div class="alert alert-warning">
                    Aucun produit trouvé dans cette catégorie.<br>
                    Structure attendue :<br>
                    <code>assets/Realisations/<?= htmlspecialchars($categoryKey) ?>/Produits/[sous-categorie]/vignette.jpg</code>
                </div>
            <?php else: ?>
                <div class="row justify-content-center g-2">
                    <?php foreach ($subCategories as $subCat): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex flex-column align-items-center realisation-block">
                        <div class="square-block">
                            <a href="presentationProduit.php?category=<?= htmlspecialchars($categoryKey) ?>&NomProduit=<?= htmlspecialchars($subCat['name']) ?>">
                                <img src="<?= htmlspecialchars($subCat['vignette']) ?>" alt="<?= htmlspecialchars($subCat['name']) ?>" class="block-image">
                                <div class="hover-text"><?= htmlspecialchars($subCat['name']) ?></div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>