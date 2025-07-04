<!-- Barre de navigation Bootstrap (light theme) avec version desktop/mobile -->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
  <div class="container-fluid">
    <!-- Conteneur principal flex pour l'organisation des éléments -->
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Logo cliquable (aligné à gauche) -->
      <div class="d-flex align-items-center me-auto logo-wrapper divClique">
        <img src="assets/images/logo.png" alt="Logo de Leano Design" class="logo">
      </div>
      
      <!-- Bouton Offcanvas visible uniquement sur mobile -->
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Menu Offcanvas Bootstrap (mobile) -->
      <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!-- En-tête de l'Offcanvas avec logo et bouton de fermeture -->
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="assets/images/logo.png" alt="Logo de Leano Design" style="height: 100px;">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- Corps de l'Offcanvas (liens + réseaux sociaux) -->
        <div class="offcanvas-body d-flex flex-column justify-content-between" style="height: 100%;">
          <!-- Liste des liens de navigation -->
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link text-dark" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="historique.php">A Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="prestation.php">Prestations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="demarches.php">Démarches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="realisations.php">Réalisations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="contact.php">Contact</a>
            </li>
          </ul>
          <!-- Icônes réseaux sociaux (centrées en bas) -->
          <div class="mt-3 mb-2 d-flex justify-content-center gap-4">
            <a href="https://www.instagram.com/leanodesign?igsh=M2Fkd3Q3Mm9vbzU3" target="_blank"><img src="assets/images/instagram.png" alt="Instagram" class="LogoRedirect"></a>
            <a href="https://fr.linkedin.com/company/leano-design" target="_blank"><img src="assets/images/linkedin.png" alt="LinkedIn" class="LogoRedirect sup"></a>
          </div>
        </div>
      </div>
      
      <!-- Version desktop (cachée sur mobile) -->
      <div class="collapse navbar-collapse flex-grow-1 nav-links-wrapper d-none d-lg-flex justify-content-center" id="mainNavbar">
        <!-- Conteneur centré pour les liens -->
        <div class="mx-auto w-100 d-flex justify-content-center align-items-center" style="max-width: 1100px;">
          <!-- Icône Accueil -->
          <a class="nav-link nav-icon me-2" href="index.php" title="Accueil"><img src="assets/images/Home.png" alt="HOME Leano Design" style="height: 28px; vertical-align: middle;"></a>
          <!-- Liens principaux (style bold avec bordure) -->
          <ul class="navbar-nav mb-2 mb-lg-0 border border-light rounded-0 px-4 py-2 text-dark mx-2 d-flex justify-content-center">
            <li class="nav-item">
              <a class="nav-link fw-bold" href="historique.php" style="color: #000;">A Propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="prestation.php" style="color: #000;">Prestations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="demarches.php" style="color: #000;">Démarches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="realisations.php" style="color: #000;">Réalisations</a>
            </li>
          </ul>
          <!-- Icône Contact -->
          <a href="contact.php" class="nav-icon ms-2" aria-label="Contact" title="Contact"><img src="assets/images/Contact.png" alt="Contact Leano Design" style="height: 26px; vertical-align: middle;"></a>
        </div>
        <!-- Icônes réseaux sociaux (alignées à droite) -->
        <div class="d-flex align-items-center ms-auto social-icons-wrapper">        
          <a href="https://www.instagram.com/leanodesign?igsh=M2Fkd3Q3Mm9vbzU3" target="_blank"><img src="assets/images/instagram.png" alt="Instagram" class="LogoRedirect"></a>
          <a href="https://fr.linkedin.com/company/leano-design" target="_blank"><img src="assets/images/linkedin.png" alt="LinkedIn" class="LogoRedirect sup"></a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Script Bootstrap (obligatoire pour le fonctionnement) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>