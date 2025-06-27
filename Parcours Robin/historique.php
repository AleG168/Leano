<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeanoDesign -  Histoire</title>    
    <meta name="description" content="Découvrez l'histoire de LeanoDesign, une entreprise de design industriel spécialisée dans la création de produits innovants et durables.">

    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    
    <link rel="stylesheet" href="css/historique.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="historique-page">
<?php include 'navbar.php'; ?>
  <main>
    <div class="content">
      <div class="container">
        <h1 class="page-title">Mon Histoire</h1>
      </div>
      <div class="historique-container">
          <div class="anniversary-banner scale-in ">
              <div class="anniversary-content">
              <span class="years count-up">24 ans</span> 
                  <span class="text"> D'expertise en design industriel</span>
              </div> 
              <div class="anniversary-content">
              <span class="years count-up">15 ans</span>
                 <span class="text"> De l'agence Leano Design</span>
              </div>
              <div class="anniversary-content">
             <span class="years">60 clients </span>
              <span class="label"></span>
              <span class="text"> Ils m'ont fait confiance</span>
              </div>
              <div class="anniversary-content">
              <span class="years">250 projets</span>
             <span class="text">Réalisés pour nos clients</span>
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
              <i class="fas fa-graduation-cap"></i>
            </div>
              <p><strong>Diplômé de l'Institut Supérieur de Design de Valenciennes</strong></p>
              <p><strong>Filières Engineering Design Produits et Systèmes – Promotion 2000</strong><p>
              <p>En 200O, Intégrer le Groupe SEB à Lourdes m'a permis de confronter ma pratique du design à la réalité des processus industriels et aux exigences d'un grand groupe international.</p>
            </div>
          </div>
          <div class="timeline-item" data-aos="fade-up" data-aos-duration="1500">
            <div class="timeline-icon">
              <i class="fas fa-industry"></i>
            </div>
              <ul>
                <li>Connaissance du cycle complet : de l'idéation au lancement industriel</li>
                <li>Travail interdisciplinaire : avec les ingénieurs, le marketing, l'usine, etc.</li>
                <li>Contraintes maîtrisées : coûts, normes sécurité, ergonomie, DFM, outillages.</li>
              </ul>
              <p>De 2001 à 2010, J'ai assuré le poste de designer produit au sein du bureau d'études OKTES à Lannion, en pilotant la cohérence formelle, fonctionnelle et technique des projets. J'étais l'interlocuteur clé entre design, mécanique et électronique,  j'ai assuré la faisabilité des concepts tout en défendant leur qualité esthétique et fonctionnelle </p>
              <ul>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section skills-full-bg" id="skills" data-aos="fade-up" data-aos-duration="1500">
      <div class="container">
        <h2>Expertises</h2>
        <div class="skills-grid">
          <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Créativité & innovation</h3>
          </div>
          <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Ergonomie & UX</h3>
          </div>
          <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Prototype à production</h3>
          </div>
          <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Techniques de fabrication</h3>
          </div>
          <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Matériaux durables</h3>
          </div>
          <div class="skill-card" data-aos="zoom-in" data-aos-duration="1500">
            <h3>Confidentialité & NDA</h3>
          </div>
        </div>
      </div>
    </section>

    <section class="highlight" data-aos="fade-up" data-aos-duration="1500">
      <div class="container">
        <h2>Ma mission</h2>
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

  <!-- Bootstrap JS (nécessaire pour le menu hamburger) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
