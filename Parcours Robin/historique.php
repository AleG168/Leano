<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeanoDesign - Notre Histoire</title>    
    <meta name="description" content="Découvrez l'histoire de LeanoDesign, une entreprise de design industriel spécialisée dans la création de produits innovants et durables.">
    <link rel="stylesheet" href="css/historique.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>      
        <img src="assets/images/logo.png" alt="Leano Design Logo" class="logo">
        <?php include 'navbar.php'; ?>
        <div class="social-icons">
            <a href="#"><img src="assets/images/Instagram_icon.svg" alt="Instagram" ></a>
            <a href="#"><img src="assets/images/LinkedIn_logo_initials.svg" alt="LinkedIn" ></a>
        </div>
    </header>
  <main>
    <div class="content">
      <div class="historique-container">
          <div class="anniversary-banner scale-in ">
              <div class="anniversary-content highlight">
              <span class="years count-up">26</span><span class="years-text"> Ans</span>
                  <span class="text">D'expertise en design industriel</span>
              </div>
              <div class="anniversary-content">
              <span class="years count-up">15</span><span class="years-text"> Ans</span>
                  <span class="text">De l'agence Leano Design</span>
              </div>
              <div class="anniversary-content highlight">
                  <span class="years">60</span>
                  <span class="text">Clients qui nous ont fait confiance</span>
              </div>
              <div class="anniversary-content">
                  <span class="years">250</span>
                  <span class="text">Projets réalisés pour nos clients</span>
              </div>
          </div>
        <a href="#about" class="cta">Découvrir le parcours</a>
      </div>
      <section id="about" class="section about" data-aos="fade-up" data-aos-duration="1500">
      <div class="container grid">
        <div class="text">
          <h2>À propos</h2>
          <p>Vincent Beaucourt, fondateur de Leano Design, conçoit depuis 15 ans des produits alliant <strong>innovation</strong>, <strong>esthétique</strong> et <strong>fonctionnalité</strong>. Diplômé de RUBIKA, il collabore avec des équipes techniques pour transformer les idées en produits concrets.</p>
          <p class="quote">"Un bon design, c'est quand la forme suit la fonction avec élégance."</p>
        </div>
        <img src="assets/images/vincent-beaucourt.jpg" loading="lazy" alt="Vincent Beaucourt" class="profile" />
      </div>
    </section>
    <section class="section" id="timeline" data-aos="fade-up" data-aos-duration="1500">
      <div class="container">
        <h2>Parcours</h2>
        <div class="timeline">
          <div class="timeline-item" data-aos="fade-up" data-aos-duration="1500">
            <div class="timeline-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <div class="timeline-content">
              <span class="timeline-date">2010 – aujourd'hui</span>
              <p><strong>Leano Design (Guingamp) – Gérant, Designer Industriel</strong></p>
              <p>Création et gestion de Leano Design, une entreprise spécialisée dans le design industriel, alliant créativité et innovation.</p>
            </div>
          </div>
          <div class="timeline-item" data-aos="fade-up" data-aos-duration="1500">
            <div class="timeline-icon">
              <i class="fas fa-cogs"></i>
            </div>
            <div class="timeline-content">
              <span class="timeline-date">2001 – 2010</span>
              <p><strong>OKTES (Lannion) – Responsable Design / Bureau d'études</strong></p>
              <p>Supervision des projets de design au sein de l'équipe de recherche et développement.</p>
            </div>
          </div>
          <div class="timeline-item" data-aos="fade-up" data-aos-duration="1500">
            <div class="timeline-icon">
              <i class="fas fa-industry"></i>
            </div>
            <div class="timeline-content">
              <span class="timeline-date">1999 – 2001</span>
              <p><strong>Groupe SEB (Lourdes) – Designer Produit</strong></p>
              <p>Conception et développement de nouveaux produits pour le leader mondial des appareils de cuisine.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section skills-full-bg" id="skills" data-aos="fade-up" data-aos-duration="1500">
      <h2>Expertises</h2>
      <div class="skills-grid">
        <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
          <i class="fas fa-lightbulb"></i>
          <h3>Créativité & innovation</h3>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
          <i class="fas fa-hand-paper"></i>
          <h3>Ergonomie & UX</h3>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
          <i class="fas fa-cogs"></i>
          <h3>Prototype à production</h3>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
          <i class="fas fa-tools"></i>
          <h3>Techniques de fabrication</h3>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
          <i class="fas fa-leaf"></i>
          <h3>Matériaux durables</h3>
        </div>
        <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
          <i class="fas fa-shield-alt"></i>
          <h3>Confidentialité & NDA</h3>
        </div>
      </div>
    </section>

    <section class="highlight" data-aos="fade-up" data-aos-duration="1500">
      <div class="container center">
        <h2>Notre mission</h2>
        <p>Transformer une idée en un produit tangible, équilibrant innovation, fonctionnalité, esthétique et production durable.</p>
      </div>
    </section>    
  </main>
  <?php include 'footer.php'; ?>

  <!-- AOS Library Script -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
  
  <script>
    AOS.init();
  </script>
</body>
</html>
