<?php
// Détection des domaines
$domaines = [];
$domainesDir = 'assets/Realisations';
$dossiers = scandir($domainesDir);

$compteurDomaine = 1;

foreach ($dossiers as $dossier) {
    if ($dossier[0] === '.' || $dossier === 'Packaging_Merchandising_Graphisme') {
        continue;
    }
    
    $chemin_vignette = $domainesDir . '/' . $dossier . '/VignettePrincipale.png';
    
    if (file_exists($chemin_vignette)) {
        $nom = str_replace('_', ' ', $dossier);
        $nom = mb_convert_case(strtolower($nom), MB_CASE_TITLE, "UTF-8");
        
        $domaines[] = [
            'dossier' => $dossier,
            'vignette' => $chemin_vignette,
            'nom' => $nom
        ];
        $compteurDomaine ++;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>LeanoDesign - Réalisations</title>
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/realisations.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header class = "Navbar_centrer NavPresentationProduit">
        <?php include 'NavbarSansAOS.php'; ?>
    </header>

    <div class="content realisation-content">
        <div class="container mt-3 realisation-container agrandissement">
            <h1 class="TitreReali">Réalisations</h1>
            <h2 id="SousTitre">Mes <?php echo $compteurDomaine?> domaines d'expertises</h2>

            <div class="row justify-content-center g-2">
            <?php foreach ($domaines as $domaine) { ?>
                <div class="col-lg-3 col-md-3 col-6 d-flex flex-column align-items-center realisation-block">
                    <a href="produits.php?category=<?php echo urlencode($domaine['dossier']) ?>" class="square-block">
                        <img src="<?php echo $domaine['vignette'] ?>" alt="<?php echo $domaine['nom'] ?>" class="block-image">
                        <div class="hover-text"><?php echo $domaine['nom'] ?></div>
                    </a>
                </div>
            <?php } ?>
            </div>

            <div class="container merchandising-banner mt-4">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <h3 class="merch-title text-center mb-3">Graphisme & Merchandising</h3>
                        <div class="banner-images d-flex justify-content-center flex-wrap">
                            <?php
                            $merchDir = "$domainesDir/Packaging_Merchandising_Graphisme";
                            $merchImages = [];
                            $maxImages = 5;
                            
                            if (is_dir($merchDir)) {
                                $files = scandir($merchDir);
                                // Version avec for() + condition combinée
                                for ($i = 0; $i < count($files) && count($merchImages) < $maxImages; $i++) {
                                    if (preg_match('/\.(jpg|jpeg|png|gif)$/i', $files[$i])) {
                                        $merchImages[] = "$merchDir/{$files[$i]}";
                                    }
                                }
                            }

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
    
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
