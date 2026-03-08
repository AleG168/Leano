<nav class="navbar navbar-expand-lg bg-white py-2 navbar-page-aligned">
  <div class="container-fluid px-0">

    <!-- Logo -->
    <a class="navbar-brand divClique navbar-logo-offset" href="index.php">
      <img src="assets/images/logo.png" alt="Logo Leano Design" style="height:120px; width:auto;">
    </a>

    <!-- Burger -->
    <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Desktop nav (lg+) -->
    <div class="collapse navbar-collapse d-none d-lg-flex justify-content-between flex-grow-1">

      <!-- Centre : Home + liens + Email -->
      <div class="d-flex align-items-center justify-content-center flex-grow-1 gap-5">
        <a class="nav-link" href="index.php"><img src="assets/images/Home.png" alt="Accueil" style="height:26px;"></a>
        <ul class="navbar-nav d-flex flex-row gap-5 mb-0">
          <li class="nav-item"><a class="nav-link fw-bold text-dark navbar-font" href="historique.php">A Propos</a></li>
          <li class="nav-item"><a class="nav-link fw-bold text-dark navbar-font" href="prestation.php">Prestations</a></li>
          <li class="nav-item"><a class="nav-link fw-bold text-dark navbar-font" href="demarches.php">Démarches</a></li>
          <li class="nav-item"><a class="nav-link fw-bold text-dark navbar-font" href="realisations.php">Réalisations</a></li>
        </ul>
        <a class="nav-link" href="contact.php"><img src="assets/images/Contact.png" alt="Contact" style="height:24px;"></a>
      </div>

      <!-- Droite : Icônes sociales -->
      <div class="d-flex align-items-center gap-3 navbar-social-offset">
        <a href="https://www.instagram.com/leanodesign" target="_blank"><img src="assets/images/instagram.png" alt="Instagram" class="social-icon"></a>
        <a href="https://fr.linkedin.com/company/leano-design" target="_blank"><img src="assets/images/linkedin.png" alt="LinkedIn" class="social-icon"></a>
      </div>

    </div>

    <!-- Offcanvas mobile -->
    <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="offcanvasNav">
      <div class="offcanvas-header">
        <img src="assets/images/logo.png" alt="Logo" style="height:80px;">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column justify-content-between">
        <ul class="navbar-nav flex-column gap-2">
          <li><a class="nav-link text-dark navbar-font" href="index.php">Home</a></li>
          <li><a class="nav-link text-dark navbar-font" href="historique.php">A Propos</a></li>
          <li><a class="nav-link text-dark navbar-font" href="prestation.php">Prestations</a></li>
          <li><a class="nav-link text-dark navbar-font" href="demarches.php">Démarches</a></li>
          <li><a class="nav-link text-dark navbar-font" href="realisations.php">Réalisations</a></li>
          <li><a class="nav-link text-dark navbar-font" href="contact.php">Contact</a></li>
        </ul>
        <div class="d-flex justify-content-center gap-4 mt-3 mb-2">
          <a href="https://www.instagram.com/leanodesign" target="_blank"><img src="assets/images/instagram.png" alt="Instagram" class="social-icon"></a>
          <a href="https://fr.linkedin.com/company/leano-design" target="_blank"><img src="assets/images/linkedin.png" alt="LinkedIn" class="social-icon"></a>
        </div>
      </div>
    </div>

  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
