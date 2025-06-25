<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Balises titre pour le nom affiché dans l'onglet, balise meta pour les informations de base de la page -->
    <title>LEANO DESIGN+ ENGINEERING</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Métadonnées pour le référencement et la description -->
    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="Agence de design & ingénierie industrielle en Bretagne"> 
    <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">
    <meta name="author" content="LEANO DESIGN+ ENGINEERING">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.leanodesign.com/" />
    
    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>

    <!-- Liens vers les feuilles de style externes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Feuilles de style personnalisées -->
    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Logo + Navbar -->
    <header class = "Navbar_centrer NavPresentationProduit">        
      <?php include 'NavbarSansAOS.php'; ?>
    </header>

<!-- Contenu principal de la page -->
<div class="container-fluid px-3 px-md-5">
  <div class="row align-items-start">
    <!-- Colonne gauche (vidéo + titre + texte) -->
    <div class="col-12 col-xl-6 ps-lg-5 ps-4 pe-4 video-section">

      <!-- Titre de la page -->
      <h1 class = "Titre">Design Industriel</h1>

      <!-- Sous-titre -->
      <h2 id="SousTitre">Développement de produit grand public et professionnel</h2>
      
      <!-- Conteneur de la vidéo YouTube -->
      <div class="video-container" id="videoAlignTarget">

      <!-- Intégration de la vidéo YouTube avec paramètres spécifiques -->
        <iframe src="https://www.youtube.com/embed/AcCyxakOg5k?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0" 
                allow="autoplay; encrypted-media" allowfullscreen frameborder="0">
        </iframe>
      </div>
      
    </div>

    <!-- Colonne droite (les 10 engagements) -->
<div class="col-xl-6 col-12 engagements-col ps-lg-5 ps-4 pe-4">
  <div class="engagement-wrapper">
    
    <!-- Titre affiché au dessus de la section Engagements -->
    <h3 class="text-primarySupport Titre">
      Mon engagement
    </h3>

    <!-- Sous-titre affiché sous le titre de la section -->
    <h3 class="Sous_Titre">
      Concevoir ensemble des produits ingénieux et innovants
    </h3>
    
    <!-- Grille des engagements -->
    <div class="align-video-boxes">

      <!-- Tous les blocs engagements -->
      <div class="engagement-block">Innovation</div>
      <div class="engagement-block">Durabilité</div>
      <div class="engagement-block">Simplicité</div>
      <div class="engagement-block">Esthétique</div>
      <div class="engagement-block">Collaboration</div>
      <div class="engagement-block">Technologie</div>
      <div class="engagement-block">Responsabilité</div>
      <div class="engagement-block">Adaptabilité</div>
      <div class="engagement-block">Performance</div>
      <div class="engagement-block">Éthique</div>
      
  </div>


  </div>
</div>
  </div>
</div>
    
    <!-- Inclusion du pied de page -->
    <?php include 'footer.php'; ?>

    <!-- Scripts JavaScript -->
    <script src="js/texte_Block.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>