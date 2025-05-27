<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeanoDesign - Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="content">
        <div class="contact-container">
            <div class="contact-info">
                <h1>Contactez-nous</h1>
                <div class="info-block">
                    <h2>LEANO DESIGN</h2>
                    <p>3 Pen Her</p>
                    <p>22200 Le Merzer</p>
                </div>
                <div class="info-block">
                    <h2>Vincent Beaucourt</h2>
                    <p>Mobile: <a href="tel:0680435402">06.80.43.54.02</a></p>
                    <p>Email: <a href="mailto:leanodesign@gmail.com">leanodesign@gmail.com</a></p>
                </div>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1318.9040415424694!2d-3.057635599999999!3d48.567673699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811f17cda7aed49%3A0x5a7a753215959cd8!2s3%20Penher%2C%2022200%20Le%20Merzer!5e0!3m2!1sfr!2sfr!4v1709835100000!5m2!1sfr!2sfr"
                        width="100%"
                        height="300"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <form class="contact-form">
                <div class="form-group">
                    <input type="text" id="nom" name="nom" required>
                    <label for="nom">Nom & Prénom</label>
                </div>

                <div class="form-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">E-mail</label>
                </div>

                <div class="form-group">
                    <textarea id="message" name="message" required></textarea>
                    <label for="message">Message</label>
                </div>

                <button type="submit" class="submit-btn">Envoyer le Message</button>
            </form>
        </div>
    </div>
</body>
</html> 