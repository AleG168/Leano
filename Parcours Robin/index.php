<!DOCTYPE html>
<html lang="fr">

<head>
    <title>LEANO DESIGN+ ENGINEERING</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="Agence de design & ingénierie industrielle en Bretagne : conception et optimisation pour vos produits et équipements."> 
    <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">

    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/navbarSansAOS.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class = "Navbar_centrer NavPresentationProduit">        
      <?php include 'NavbarSansAOS.php'; ?>
    </header>

<div class="container-fluid px-3 px-md-5">
  <div class="row align-items-start">
    <!-- Colonne gauche (vidéo + titre + texte) -->
    <div class="col-12 col-xl-6 ps-lg-5 ps-4 pe-4 video-section">
  
      <h1 class = "Titre">Design Industriel</h1>
      <h2 id="SousTitre">Développement de produit grand public et professionnel</h2>
      <div class="video-container" id="videoAlignTarget">

        <iframe src="https://www.youtube.com/embed/AcCyxakOg5k?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0" 
                allow="autoplay; encrypted-media" allowfullscreen frameborder="0">
        </iframe>
      </div>
      
    </div>

    <!-- Colonne droite (engagements) -->
<div class="col-xl-6 col-12 engagements-col ps-lg-5 ps-4 pe-4">
  <div class="engagement-wrapper">

    <h3 class="text-primarySupport Titre">
      Mon engagement
    </h3>
    <h3 class="Sous_Titre">
      Concevoir ensemble des produits ingénieux et innovants
    </h3>

    <div class="align-video-boxes">
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

    <?php include 'footer.php'; ?>
    <script src="js/texte_Block.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>