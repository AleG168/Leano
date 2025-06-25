<?php
// Vérifie si le CSS du footer a déjà été inclus pour éviter les doublons
if (!isset($footerCssIncluded)) {
    echo '<link rel="stylesheet" href="css/footer.css">';
    $footerCssIncluded = true; // Marqueur pour éviter la réinclusion
}

// Récupère l'année courante pour le copyright
$current_year = date('Y');
?>

<!-- Début du footer -->
<footer class="footer">
    <!-- Section carrousel des références clients -->
    <div class="references-carousel-section">

        <!-- Texte au dessus du carousel -->
        <h3>Références</h3>
        <div class="references-carousel">
            <div class="carousel-container">
                <div class="custom-carousel-track">
                    <?php
                    // Scan du dossier des références (assets/refs)
                    $refs_dir = 'assets/refs/';
                    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg']; // Extensions autorisées
                    
                    if (is_dir($refs_dir)) {
                        $files = scandir($refs_dir);
                        
                        // Affichage de chaque image valide
                        foreach ($files as $file) {
                            $file_parts = pathinfo($file);
                            // Vérification de l'extension
                            if (isset($file_parts['extension']) && in_array(strtolower($file_parts['extension']), $allowed_extensions)) {
                                echo '<div class="custom-carousel-item">';
                                echo '<img src="' . $refs_dir . $file . '" alt="Leano Design Référence - ' . $file_parts['filename'] . '">';
                                echo '</div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section partenaires -->
    <div class="partenaires-bandeau">

        <!-- Texte au dessus des logos des Partenaires -->
        <h3 id="Titre_Partenaire">Partenaires</h3>
        <div class="partenaires-conteneur">
            <?php
            // Scan du dossier des partenaires (assets/Partenaires)
            $partenaires_dir = 'assets/Partenaires/';
            $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
            
            if (is_dir($partenaires_dir)) {
                $files = scandir($partenaires_dir);
                
                // Affichage des logos partenaires
                foreach ($files as $file) {
                    $file_parts = pathinfo($file);
                    if (isset($file_parts['extension']) && in_array(strtolower($file_parts['extension']), $allowed_extensions)) {
                        $filename = $file_parts['filename']; // Nom sans extension pour l'alt
                        echo '<img class="LogoPart" src="' . $partenaires_dir . $file . '" alt="Leano Design & ' . $filename . '">';
                    }
                }
            }
            ?>
        </div>
    </div>

    <!-- Pied de page principal -->
    <div class="footer-background">
        <div class="footer-content">
            <!-- Section copyright -->
            <div class="footer-section">
                <p>&copy; <?php echo $current_year; ?> LeanoDesign. Tous droits réservés.</p>
            </div>
            
            <!-- Logo central -->
            <div class="footer-section footer-logo">
                <img src="assets/images/EMBLEME-BLANC.svg" alt="Logo Leano Design" class="LOGO_COULEUR">
            </div>
            
            <!-- Liens légaux -->
            <div class="footer-section">
                <a href="mentions-legales.php">Mentions Légales</a>
                <span class="separator">|</span>
                <a href="#" id="cookie-settings">Paramètres des Cookies</a>
                <span class="separator">|</span>
                <a href="contact.php">Contact</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bannière cookies -->
<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-content">
        <p>Ce site utilise des cookies pour améliorer votre expérience utilisateur. En continuant à naviguer, vous acceptez l'utilisation de vos cookies.</p>
        <div class="cookie-buttons">
            <button id="accept-cookies" class="cookie-button accept">Accepter</button>
            <button id="reject-cookies" class="cookie-button reject">Refuser</button>
            <button id="customize-cookies" class="cookie-button customize">Personnaliser</button>
        </div>
    </div>
</div>

<!-- Modal de paramétrage des cookies -->
<div id="cookie-modal" class="cookie-modal">
    <div class="modal-content">
        <h2>Paramètres des Cookies</h2>
        <div class="cookie-options">
            <!-- Option cookies essentiels (toujours activés) -->
            <div class="cookie-option">
                <label>
                    <input type="checkbox" id="essential-cookies" checked disabled>
                    Cookies essentiels (obligatoires)
                </label>
                <p>Ces cookies sont nécessaires au fonctionnement du site.</p>
            </div>
            <!-- Option cookies analytiques -->
            <div class="cookie-option">
                <label>
                    <input type="checkbox" id="analytics-cookies">
                    Cookies analytiques
                </label>
                <p>Ces cookies permettent d'analyser l'utilisation du site pour en améliorer les performances.</p>
            </div>
        </div>
        <div class="modal-buttons">
            <button id="save-preferences" class="cookie-button accept">Enregistrer les préférences</button>
            <button id="close-modal" class="cookie-button reject">Fermer</button>
        </div>
    </div>
</div>

<!-- Scripts JS -->
<script src="js/cookies.js"></script> <!-- Gestion des cookies -->
<script src="js/carousel.js"></script> <!-- Script du carrousel -->