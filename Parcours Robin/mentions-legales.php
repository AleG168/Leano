<!DOCTYPE html>
<!-- Déclaration du type de document HTML5 -->
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- Encodage des caractères en UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Métadonnées pour le référencement et la description -->
    <meta name="Vincent Beaucourt" content="Projet">
    <meta name="description" content="Agence de design & ingénierie industrielle en Bretagne"> 
    <meta name="keywords" content="designer industriel, design, Lannion, conception produit, Bretagne, modélisation 3D, écodesign, Breton, Trégor">
    <meta name="author" content="LEANO DESIGN+ ENGINEERING">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.leanodesign.com/" />

    <!-- Icon de l'onglet -->
    <link rel="icon" type="image/png" href="assets/images/D+_EMBLEMEOnglet.png"/>

    <!-- Permet l'adaptation du site sur mobile/tablette -->
    <title>LeanoDesign - Mentions Légales</title>
    <!-- Titre de l'onglet du navigateur -->
    <!-- Bootstrap CSS pour le style responsive -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mentions-legales.css">
    <!-- Feuille de style spécifique à la page Mentions Légales -->
    <!-- Google Fonts pour les polices personnalisées -->
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sean+Slab:wght@400;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Import de la navbar via PHP (barre de navigation commune à toutes les pages) -->
    <header class="Navbar_centrer NavPresentationProduit">
        <?php include 'NavbarSansAOS.php'; ?>
    </header>
    
    <div class="content">
        <div class="legal-container">
            <h1>Mentions Légales</h1>
            
            <!-- Section 1 : Informations légales sur l'éditeur du site -->
            <section>
                <h2>1. Informations légales</h2>
                <p>Le site leano-design.com est édité par :</p>
                <ul>
                    <li>LEANO DESIGN</li>
                    <li>3 Pen Her</li>
                    <li>22200 Le Merzer</li>
                    <li>France</li>
                </ul>
                
                <p>Représenté par : Vincent Beaucourt</p>
                <p>Contact : <a href="mailto:leanodesign@gmail.com">leanodesign@gmail.com</a></p>
            </section>

            <!-- Section 2 : Informations sur l'hébergeur du site (à compléter) -->
            <section>
                <h2>2. Hébergement</h2>
                <p>[Informations sur l'hébergeur à compléter]</p>
            </section>

            <!-- Section 3 : Propriété intellectuelle -->
            <section>
                <h2>3. Propriété intellectuelle</h2>
                <p>L'ensemble du contenu de ce site (textes, images, vidéos, etc.) est protégé par le droit d'auteur. Toute reproduction ou représentation, totale ou partielle, est interdite sans autorisation préalable.</p>
            </section>

            <!-- Section 4 : Protection des données personnelles (RGPD) -->
            <section>
                <h2>4. Protection des données personnelles</h2>
                <p>Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et de suppression de vos données personnelles. Pour exercer ces droits, contactez-nous à l'adresse : leanodesign@gmail.com</p>
            </section>

            <!-- Section 5 : Utilisation des cookies -->
            <section>
                <h2>5. Cookies</h2>
                <p>Notre site utilise des cookies pour améliorer votre expérience de navigation. Vous pouvez à tout moment modifier vos préférences concernant les cookies dans les paramètres de votre navigateur.</p>
            </section>
        </div>
    </div>

    <!-- Pied de page importé via PHP (footer commun à toutes les pages) -->
    <?php include 'footer.php'; ?>

    <!-- Script Bootstrap pour les composants interactifs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>