<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>LeanoDesign - Contact</title>

  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="/img/favicon.png" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;600&family=Sean+Slab:wght@400;800&display=swap" />
</head>
<body>
  <div class="container-fluid">
    <div class="container">
      <?php include 'navbar.php'; ?>

      <div class="content mb-5">
        <div class="contact-container">
          <div class="contact-blocks row">
            <div class="col-md-6">
              <div class="contact-info">
                <div class="contact-details-block">
                  <div class="info-block">
                    <i class="fas fa-map-marker-alt"></i>
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
                <div class="map-container mt-4">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1318.9040415424694!2d-3.057635599999999!3d48.567673699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811f17cda7aed49%3A0x5a7a753215959cd8!2s3%20Penher%2C%2022200%20Le%20Merzer!5e0!3m2!1sfr!2sfr!4v1709835100000!5m2!1sfr!2sfr"
                    width="100%"
                    height="300"
                    class="contact-map"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="col-md-6">
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
                <button type="submit" class="btn btn-primary submit-btn">Envoyer le Message</button>
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
