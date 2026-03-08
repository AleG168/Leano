<!DOCTYPE html>
<html lang="fr">
<head>
  <title>LeanoDesign - Contact</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
   
  <meta name="Vincent Beaucourt" content="Projet">
  <meta name="description" content="Vous avez un projet en design industriel ? Contactez LeanoDesign pour discuter de vos besoins, obtenir un devis ou démarrer une collaboration sur mesure à Lannion ou à distance.">
  <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
  <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/navbar.css">

<style>
  /* Alignement logo : contact.php
     La navbar est dans div.container → auto-centré par Bootstrap.
     Logo : padding-left 0 (le container gère les marges).
     Social icons : margin-right 0 (idem). */
  .navbar-logo-offset  { padding-left: 0 !important; }
  .navbar-social-offset { margin-right: 0 !important; }
</style>
</head>
<body class="contact-page d-flex flex-column min-vh-100">

  <div class="container flex-grow-1">
    <?php include 'navbar.php'; ?>

    <?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'success') {
            echo '<div class="alert alert-success mt-3" role="alert">Votre message a bien été envoyé. Merci !</div>';
        } elseif ($_GET['status'] == 'error') {
            echo '<div class="alert alert-danger mt-3" role="alert">Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.</div>';
        } elseif ($_GET['status'] == 'invalid') {
            echo '<div class="alert alert-danger mt-3" role="alert">Données invalides. Veuillez remplir tous les champs correctement.</div>';
        }
    }
    ?>

    <div class="content mb-5">
      <div class="contact-container">
        <div class="contact-blocks row align-items-stretch">
          
          <!-- Colonne gauche : infos de contact -->
          <div class="col-md-6 d-flex">
            <div class="contact-details-block sizeBlock w-100">
                <div class="info-block">
                  <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                  <div class="info-content">
                    <p>3 Pen Her</p>
                    <p>22200 Le Merzer</p>
                  </div>
                </div>
                <div class="info-block">
                  <h2>Vincent Beaucourt</h2>
                  <p>Mobile: 06.80.43.54.02</p>
                  <p>Email: <a href="mailto:leanodesign@gmail.com">leanodesign@gmail.com</a></p>
                </div>
              </div>
          </div>

          <!-- Colonne droite : carte Google -->
          <div class="col-md-6">
            <div class="map-container w-100">
              <iframe
                title="Carte Google Maps montrant l'emplacement de LeanoDesign"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1318.9040415424694!2d-3.057635599999999!3d48.567673699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811f17cda7aed49%3A0x5a7a753215959cd8!2s3%20Penher%2C%2022200%20Le%20Merzer!5e0!3m2!1sfr!2sfr!4v1709835100000!5m2!1sfr!2sfr"
                width="100%"
                height="300"
                class="contact-map"
                allowfullscreen=""
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
