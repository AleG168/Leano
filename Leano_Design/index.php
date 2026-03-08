<!DOCTYPE html>
<html lang="fr">

<head>
    <title>LEANO DESIGN+ ENGINEERING</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="Agence de design & ingénierie industrielle en Bretagne">
    <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">
    <meta name="author" content="LEANO DESIGN+ ENGINEERING">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.leanodesign.com/" />
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/responsive.css">

<style>
  /*
   * Alignement logo — index.php
   * container-fluid + col paddings — row negative gutter (−12px) :
   *   xs/sm : (16 + 24) − 12 = 28px
   *   md    : (48 + 24) − 12 = 60px
   *   lg+   : (48 + 48) − 12 = 84px
   */
  @media (max-width: 767px)                        { .navbar-logo-offset { padding-left: 28px !important; } }
  @media (min-width: 768px) and (max-width: 991px) { .navbar-logo-offset { padding-left: 60px !important; } }
  @media (min-width: 992px)                        { .navbar-logo-offset { padding-left: 84px !important; } }
</style>
</head>

<body>
  <header>
    <?php include 'navbar.php'; ?>
  </header>

<!-- ═══════════════════════════════════════════════════════════
     LIGNE 1 — Titres des deux colonnes (même rangée → même hauteur de ligne)
     ═══════════════════════════════════════════════════════════ -->
<div class="container-fluid px-3 px-md-5">
  <div class="row">
    <!-- Titres gauche -->
    <div class="col-12 col-xl-6 ps-lg-5 ps-4 pe-4">
      <h1 class="Titre">Design Industriel</h1>
      <h2 id="SousTitre">Développement de produit grand public et professionnel</h2>
    </div>
    <!-- Titres droite (masqués sur mobile, affichés avant la grille) -->
    <div class="col-xl-6 d-none d-xl-block ps-lg-5 pe-4">
      <h3 class="text-primarySupport Titre">Mon engagement</h3>
      <h3 class="Sous_Titre">Concevoir ensemble des produits ingénieux et innovants</h3>
    </div>
  </div>

<!-- ═══════════════════════════════════════════════════════════
     LIGNE 2 — Vidéo (gauche) + Grille engagement (droite)
     align-items-stretch → même hauteur de colonne.
     La grille remplit exactement la hauteur de la vidéo.
     ═══════════════════════════════════════════════════════════ -->
  <div class="row align-items-stretch mb-4">
    <!-- Vidéo -->
    <div class="col-12 col-xl-6 ps-lg-5 ps-4 pe-4">
      <div class="video-container" id="videoAlignTarget">
        <iframe src="https://www.youtube.com/embed/AcCyxakOg5k?autoplay=1&mute=1&controls=0&showinfo=0&modestbranding=1&rel=0"
                allow="autoplay; encrypted-media" allowfullscreen frameborder="0">
        </iframe>
      </div>
    </div>

    <!-- Grille engagements -->
    <div class="col-xl-6 col-12 ps-lg-5 ps-4 pe-4 d-flex flex-column">

      <!-- Titres droite — visible uniquement sur mobile (xl et + sont dans la ligne 1) -->
      <div class="d-xl-none mb-2">
        <h3 class="text-primarySupport Titre">Mon engagement</h3>
        <h3 class="Sous_Titre">Concevoir ensemble des produits ingénieux et innovants</h3>
      </div>

      <!-- Grille : flex-grow-1 → remplit exactement la hauteur de la vidéo -->
      <div class="align-video-boxes flex-grow-1">
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

  <?php include 'footer.php'; ?>

  <script src="js/texte_Block.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
