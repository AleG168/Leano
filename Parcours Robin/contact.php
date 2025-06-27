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
  <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600&family=Sean+Slab:wght@400;800&display=swap" />
</head>
<body class="contact-page">
  <div class="container-fluid">
    <div class="container">
      <?php include 'navbar.php'; ?>

      <?php
      // === GESTION DES MESSAGES DE STATUT APRÈS L'ENVOI DU FORMULAIRE ===

      // On vérifie si un paramètre 'status' est présent dans l'URL.
      // Ce paramètre est ajouté par send_mail.php après une tentative d'envoi.
      if (isset($_GET['status'])) {
          // On vérifie la valeur du paramètre 'status' pour afficher le message approprié.
          
          if ($_GET['status'] == 'success') {
              // Si status=success, on affiche un message de succès.
              echo '<div class="alert alert-success mt-3" role="alert">Votre message a bien été envoyé. Merci !</div>';
          } elseif ($_GET['status'] == 'error') {
              // Si status=error, on affiche un message d'erreur général.
              echo '<div class="alert alert-danger mt-3" role="alert">Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.</div>';
          } elseif ($_GET['status'] == 'invalid') {
              // Si status=invalid, on informe l'utilisateur que les données étaient incorrectes.
              echo '<div class="alert alert-danger mt-3" role="alert">Données invalides. Veuillez remplir tous les champs correctement.</div>';
          }
      }
      ?>

      <div class="content mb-5">
        <!--
          CONTENU DE LA PAGE CONTACT
          Cette section contient vos informations de contact, une carte Google Maps et un formulaire de contact.
        -->
        <div class="contact-container">
          <div class="contact-blocks row">
            <div class="col-md-6">
              <div class="contact-info">
                <!--
                  MODIFICATION DES INFORMATIONS DE CONTACT
                  Ci-dessous, vous pouvez modifier votre adresse, nom, numéro de téléphone et e-mail.
                -->
                <div class="contact-details-block">
                  <div class="info-block">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    <div class="info-content">
                      <p>3 Pen Her</p>
                      <p>22200 Le Merzer</p>
                    </div>
                  </div>
                  <div class="info-block">
                    <h2>Vincent Beaucourt</h2>
                    <p>Mobile: <a href="tel:0680435402">06.80.43.54.02</a></p>
                    <p>Email: <a href="mailto:leanodesign@gmail.com">leanodesign@gmail.com</a></p>
                  </div>
                </div>
                <!--
                  MODIFICATION DE LA CARTE GOOGLE MAPS
                  Pour changer l'adresse sur la carte, vous devez générer un nouveau code d'intégration sur Google Maps.
                  1. Allez sur Google Maps et recherchez votre nouvelle adresse.
                  2. Cliquez sur "Partager", puis "Intégrer une carte".
                  3. Copiez le code HTML (qui commence par "<iframe src=...") et collez-le ci-dessous en remplacement de l'ancien.
                -->
                <div class="map-container mt-4">
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
            <div class="col-md-6">
              <!--
                FORMULAIRE DE CONTACT
                Ce formulaire permet aux visiteurs de vous envoyer un message directement depuis le site.
                Les informations sont envoyées au script 'send_mail.php' qui traite l'envoi de l'e-mail.
                L'adresse de destination de l'e-mail se configure dans le fichier 'send_mail.php'.
              -->
              <form class="contact-form" action="send_mail.php" method="POST">
                <div class="form-group mb-3">
                  <input type="text" id="nom" name="nom" placeholder="Nom & Prénom" required class="form-control" />
                </div>
                <div class="form-group mb-3">
                  <input type="email" id="email" name="email" placeholder="E-mail" required class="form-control" />
                </div>
                <div class="form-group mb-3">
                  <textarea
                    id="message"
                    name="message"
                    placeholder="Message"
                    required
                    class="form-control"
                    rows="6"
                  ></textarea>
                </div>
                <button type="submit" class="btn-primary submit-btn">Envoyer le Message</button>
              </form>
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
