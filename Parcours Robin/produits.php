<?php
// Récupération de la catégorie
$categorie = urldecode($_GET['category'] ?? '');
$dossierCategorie = "assets/Realisations/".str_replace(' ', '_', $categorie);

if (!is_dir($dossierCategorie)) {
    die('Catégorie invalide');
}

// Formatage du nom
$nomCategorie = str_replace('_', ' ', $categorie);
$nomCategorie = mb_convert_case(strtolower($nomCategorie), MB_CASE_TITLE, "UTF-8");

// Détection des produits
$produits = [];
$dossierProduits = "$dossierCategorie/Produits";

if (is_dir($dossierProduits)) {
    foreach (scandir($dossierProduits) as $produit) {
        if ($produit !== '.' && $produit !== '..') {
            $dossierProduit = "$dossierProduits/$produit";
            if (is_dir($dossierProduit)) {
                $vignette = null;
                $patterns = [
                    'VignettePrincipale.png',
                    'VignettePrincipale.jpg', 
                    'vignette.png',
                    'vignette.jpg',
                    '*.png',
                    '*.jpg',
                    '*.jpeg'
                ];
                
                $patternFound = false;
                foreach ($patterns as $pattern) {
                    if (!$patternFound) {
                        $matches = glob("$dossierProduit/$pattern");
                        if (!empty($matches)) {
                            $vignette = $matches[0];
                            $patternFound = true;
                        }
                    }
                }
                
                if ($vignette) {
                    $nomProduit = str_replace('_', ' ', $produit);
                    $nomProduit = preg_replace_callback('/\b([a-z])/', function($matches) {
                        return strtoupper($matches[1]);
                    }, strtolower($nomProduit));

                    $produits[] = [
                        'nom' => $nomProduit,
                        'dossier' => $produit,
                        'vignette' => $vignette
                    ];
                }
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
    <title>LeanoDesign - <?php echo htmlspecialchars($nomCategorie) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/realisations.css">
    <link rel="stylesheet" href="css/produits.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header class = "Navbar_centrer NavPresentationProduit">
        <?php include 'NavbarSansAOS.php'; ?>
    </header>

    <div class="content realisation-content">
        <div class="container mt-3 realisation-container agrandissement">

            <a href="realisations.php" class = "LienColor">
                <h2>Réalisations
            </a>
            → <?php echo htmlspecialchars($nomCategorie) ?></h2>

            <h1 class="TitreReali"><?php echo htmlspecialchars($nomCategorie) ?></h1>
            
            <?php if (empty($produits)) { ?>
                <div class="alert alert-warning">
                    Aucun produit trouvé dans cette catégorie.<br>
                    Structure attendue :<br>
                    <code>assets/Realisations/<?php echo htmlspecialchars($categorie) ?>/Produits/[produit]/vignette.jpg</code>
                </div>
            <?php } else { ?>
                <div class="row justify-content-center g-2">
                    
                    <?php foreach ($produits as $produit) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex flex-column align-items-center realisation-block">
                        <div class="square-block">
                            <a href="presentationProduit.php?category=<?php echo htmlspecialchars(urlencode($categorie)) ?>&NomProduit=<?php echo htmlspecialchars(urlencode($produit['dossier'])) ?>">
                                <img src="<?php echo htmlspecialchars($produit['vignette']) ?>" alt="<?php echo htmlspecialchars($produit['nom']) ?>" class="block-image">
                                <div class="hover-text"><?php echo htmlspecialchars($produit['nom']) ?></div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
