<?php
// Récupération de la catégorie depuis l'URL et décodage
$categorie = urldecode($_GET['category'] ?? '');
// Construction du chemin du dossier de la catégorie
$dossierCategorie = "assets/Realisations/".str_replace(' ', '_', $categorie); // les " " des dossiers où se trouve les domaines deviennent des "_"  (pour l'affichages des nom des catégories)

// Vérification que le dossier existe, sinon arrêt du script
if (!is_dir($dossierCategorie)) {
    die('Catégorie invalide');
}

// Formatage du nom de la catégorie pour l'affichage
$nomCategorie = str_replace('_', ' ', $categorie); // les "_" deviennent des " " pour (l'affichages des nom des catégories)
$nomCategorie = mb_convert_case(strtolower($nomCategorie), MB_CASE_TITLE, "UTF-8"); // met tous les caractères en minuscule et ajpute une Majuscule a chaque mot = gestion des caractères spéciaux

// Initialisation du tableau qui contiendra la liste des produits de la catégorie
$produits = [];

// chemin du dossier Produits
$dossierProduits = "$dossierCategorie/Produits";

// Si le dossier Produits existe, on scanne son contenu
if (is_dir($dossierProduits)) {
    // Parcours de tous les éléments (fichiers/dossiers) dans le dossier Produits
    foreach (scandir($dossierProduits) as $produit) {
        // On ignore les dossiers cachés
        if ($produit !== '.' && $produit !== '..') {
            $dossierProduit = "$dossierProduits/$produit";
            
            // On vérifie que c'est bien un dossier
            if (is_dir($dossierProduit)) {
                $vignette = null;
                // Liste des patterns possibles pour les vignettes
                $patterns = [
                    'VignettePrincipale.png',
                    'VignettePrincipale.jpg', 
                    'vignette.png',
                    'vignette.jpg',
                    '*.png',
                    '*.jpg',
                    '*.jpeg'
                ];
                
                // Recherche de la vignette selon les patterns
                $patternFound = false;
                // Parcours de tous les patterns possibles pour trouver une vignette
                foreach ($patterns as $pattern) {
                    if (!$patternFound) {
                        $matches = glob("$dossierProduit/$pattern");
                        if (!empty($matches)) {
                            $vignette = $matches[0];
                            $patternFound = true;
                        }
                    }
                }
                
                // Si une vignette a été trouvée, on ajoute le produit à la liste
                if ($vignette) {
                    // Formatage du nom du produit
                    $nomProduit = str_replace('_', ' ', $produit); //les "_" deviennent des " " pour (l'affichages des nom des catégories)
                    $nomProduit = preg_replace_callback('/\b([a-z])/', function($matches) {
                        return strtoupper($matches[1]);
                    }, strtolower($nomProduit));
                    
                    // Ajout du produit au tableau $produits avec ses métadonnées
                    $produits[] = [

                        // Nom formaté pour l'affichage (ex: "Produit_Exemple" devient "Produit Exemple")
                        'nom' => $nomProduit,

                        // Nom original du dossier du produit (sans formatage, conservé pour les chemins systèmes)
                        'dossier' => $produit,

                        // Chemin complet vers l'image vignette trouvée pour ce produit
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
    <!-- Métadonnées de base -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Titre de la page dans l'onglet avec le nom de la catégorie -->
    <title>LeanoDesign - <?php echo htmlspecialchars($nomCategorie) ?></title>

    <!-- Framework Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>

    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/realisations.css">
    <link rel="stylesheet" href="css/produits.css">
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

            <!-- Menu de navigation -->
            <a href="realisations.php" class = "LienColor">  <!-- En cliquant sur "Réalisation" ramène a la page realisation -->
                <h2 class = texte_chemin>Réalisations
            </a>
            → <?php echo htmlspecialchars($nomCategorie) ?></h2> <!-- affichage du nom domaine -->

            <!-- Titre de la page avec le nom du domaine choisie -->
            <h1 class="TitreReali"><?php echo htmlspecialchars($nomCategorie) ?></h1>
            
            <?php if (empty($produits)) { ?>
                <!-- Message d'alerte si aucun produit n'est trouvé -->
                <div class="alert alert-warning">
                    Aucun produit trouvé dans cette catégorie.<br>
                    Structure attendue :<br>
                    <code>assets/Realisations/<?php echo htmlspecialchars($categorie) ?>/Produits/[produit]/vignette.jpg</code>
                </div>
            <?php } else { ?>
                <!-- Grille des produits -->
                <div class="row justify-content-center g-2">
                    <!-- Parcours de tous les produits trouvés pour affichage -->
                    <?php foreach ($produits as $produit) { ?>
                    <!-- Bloc pour chaque produit -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 d-flex flex-column align-items-center realisation-block">
                        <div class="square-block">
                            <!-- Lien vers la page de présentation du produit -->
                            <a href="presentationProduit.php?category=<?php echo htmlspecialchars(urlencode($categorie)) ?>&NomProduit=<?php echo htmlspecialchars(urlencode($produit['dossier'])) ?>">
                                <!-- Vignette du produit quand cliqué redirige vers Presentation Produit -->
                                <img src="<?php echo htmlspecialchars($produit['vignette']) ?>" alt="<?php echo htmlspecialchars($produit['nom']) ?>" class="block-image">
                                <!-- Nom du produit au survol -->
                                <div class="hover-text"><?php echo htmlspecialchars($produit['nom']) ?></div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <!-- Pied de page -->
    <?php include 'footer.php'; ?>
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>