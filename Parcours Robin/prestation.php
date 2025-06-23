<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LeanoDesign - Prestations</title>
  <meta
    name="description"
    content="Découvrez les prestations de LeanoDesign en design industriel : cahier des charges, concepts, maquettes 3D, prototypes, dossier de fabrication, supports de présentation."
  />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/prestation.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
  />
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap"
    rel="stylesheet"
  />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="prestation-page">
  <?php include 'navbar.php'; ?>

  <main class="container mt-5">
    <div class="page-header mb-5">
      <h1 class="main-title">Mes prestations</h1>
      <p class="subtitle">
        Chaque projet est une collaboration sur-mesure, de l'idée à la solution concrète.
      </p>
    </div>

    <div class="row">
      <!-- Bloc Prestations proposées -->
      <div class="col-md-8">
        <div class="prestation-block" data-aos="fade-right">
          <h2>Prestations proposées</h2>
          <div class="prestation-list-container">

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Cahier des charges design</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <p>
                Rédaction du cahier des charges, analyse des besoins, contraintes techniques et usages, définition des objectifs du projet.
              </p>
            </div>

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Concepts illustrés</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <p>
                Création de croquis, moodboards, recherches de concepts, illustrations pour visualiser les pistes créatives.
              </p>
            </div>

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Maquettes 3D et prototypes</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <p>
                Modélisation 3D, impression ou fabrication de prototypes pour valider l'ergonomie, l'esthétique et la faisabilité.
              </p>
            </div>

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Dossier de fabrication</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <p>
                Préparation des plans, fichiers techniques, choix matériaux, suivi de l'industrialisation et des fournisseurs.
              </p>
            </div>

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Supports de présentation</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <p>
                Réalisation de rendus, présentations, supports visuels pour la communication et la valorisation du projet.
              </p>
            </div>

          </div>
        </div>
      </div>

      <!-- Bloc Prestations réalisées -->
      <div class="col-md-4">
        <div class="prestation-block" data-aos="fade-left">
          <h2>Prestations réalisées</h2>
          <div class="prestation-list-container">

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Objet connecté</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <ul>
                <li>Cahier d'intentions</li>
                <li>Développement 2D/3D du concept retenu</li>
                <li>Réalisation d'une maquette d'aspect</li>
                <li>Fourniture d'un export .step pour le Bureau d'études</li>
              </ul>
            </div>

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Équipement industriel</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <ul>
                <li>Croquis</li>
                <li>Modélisation 3D</li>
                <li>Prototype</li>
                <li>Fourniture des fichiers print des marquages</li>
                <li>Visuels catalogue</li>
              </ul>
            </div>

            <div class="prestation-item-block">
              <span class="prestation-item-link clickable">Produit cosmétique</span>
              <i class="fas fa-plus"></i>
            </div>
            <div class="prestation-item-content">
              <ul>
                <li>Moodboard</li>
                <li>Sketchs</li>
                <li>Rendu 3D</li>
                <li>Maquette</li>
                <li>Fiche matériau</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <!-- AOS Library Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Bootstrap JS (nécessaire pour le menu hamburger) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/prestation.js"></script>
</body>
</html>
    