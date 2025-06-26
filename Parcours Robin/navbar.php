<!-- 
  BARRE DE NAVIGATION PRINCIPALE
  Ce fichier contient toute la structure de votre menu. Il est inclus dans toutes les pages.
  Il se compose de deux parties principales :
  1. Le menu pour les écrans larges (ordinateurs).
  2. Le menu "off-canvas" (qui glisse depuis le côté) pour les écrans plus petits (mobiles, tablettes).
-->
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
  <div class="container-fluid">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- 
        SECTION LOGO
        C'est ici que se trouve le logo principal du site.
        Pour le changer, vous pouvez remplacer le fichier 'assets/images/logo.png'.
        N'oubliez pas de mettre un texte descriptif dans l'attribut 'alt' pour l'accessibilité.
      -->
      <div class="d-flex align-items-center me-auto logo-wrapper">
        <img src="assets/images/logo.png" alt="Logo de Leano Design" class="logo">
      </div>

       <!-- 
         MENU MOBILE (OFFCANVAS)
         Cette partie n'est visible que sur les petits écrans (classe 'd-lg-none').
       -->

       <!-- Bouton "hamburger" qui fait apparaître le menu mobile -->
       <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <!-- Contenu du menu mobile qui glisse depuis le côté -->
       <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <!-- Logo à l'intérieur du menu mobile -->
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="assets/images/logo.png" alt="Logo de Leano Design" style="height: 100px;">
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between" style="height: 100%;">
          <!-- 
            LISTE DES LIENS DU MENU MOBILE
            Modifiez ici les liens et leurs intitulés.
          -->
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
          <!-- 
            ICÔNES DES RÉSEAUX SOCIAUX (version mobile)
            Modifiez les liens (href) pour pointer vers vos profils.
          -->
          <div class="mt-3 mb-2 d-flex justify-content-center gap-4">
            <a href="https://www.instagram.com/leanodesign?igsh=M2Fkd3Q3Mm9vbzU3" target="_blank" class="fs-4 text-dark"><i class="fab fa-instagram"></i></a>
            <a href="https://fr.linkedin.com/company/leano-design" target="_blank" class="fs-4 text-dark"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- 
        MENU ORDINATEUR (DESKTOP)
        Cette partie n'est visible que sur les écrans larges (classe 'd-none d-lg-flex').
      -->
      <div class="collapse navbar-collapse flex-grow-1 nav-links-wrapper d-none d-lg-flex justify-content-center" id="mainNavbar">
        <div class="mx-auto w-100 d-flex justify-content-center align-items-center" style="max-width: 1100px;">
          <!-- Icône "Maison" pour le retour à l'accueil -->
          <a class="nav-link nav-icon me-2" href="index.php" title="Accueil"><img src="assets/images/Home.png" alt="Accueil" style="height: 28px; vertical-align: middle;"></a>
          
          <!-- 
            LISTE DES LIENS DU MENU DESKTOP
            Modifiez ici les liens et leurs intitulés.
          -->
          <ul class="navbar-nav mb-2 mb-lg-0 border border-light rounded-0 px-4 py-2 text-dark mx-2 d-flex justify-content-center" style="gap: 2.5rem;">
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
          <!-- Icône "Contact" -->
          <a href="contact.php" class="nav-icon ms-2" aria-label="Contact" title="Contact"><img src="assets/images/Contact.png" alt="Contact" style="height: 26px; vertical-align: middle;"></a>
        </div>
        <!-- 
          ICÔNES DES RÉSEAUX SOCIAUX (version desktop)
          Modifiez les liens (href) pour pointer vers vos profils.
        -->
        <div class="d-flex align-items-center gap-3 ms-auto social-icons-wrapper">        
          <a href="https://www.instagram.com/leanodesign?igsh=M2Fkd3Q3Mm9vbzU3" target="_blank" class="fs-4 text-dark"><i class="fab fa-instagram"></i></a>
          <a href="https://fr.linkedin.com/company/leano-design" target="_blank" class="fs-4 text-dark"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Ce script est nécessaire pour le fonctionnement du menu mobile de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>