<?php
// CSS should be included in the head of the document
if (!isset($footerCssIncluded)) {
    echo '<style>';
    include 'css/footer.css';
    echo '</style>';
    $footerCssIncluded = true;
}
$current_year = date('Y');
?>

<footer class="footer">
    <!-- Ajout du carrousel des références -->
    <div class="references-carousel-section">
        <h3>Ils nous ont fait confiance</h3>
        <div class="references-carousel">
            <div class="carousel-container">
                <div class="carousel-track">
                    <?php
                    // Récupération des images du dossier assets/refs
                    $refs_dir = 'assets/refs/';
                    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                    
                    if (is_dir($refs_dir)) {
                        $files = scandir($refs_dir);
                        
                        foreach ($files as $file) {
                            $file_parts = pathinfo($file);
                            if (isset($file_parts['extension']) && in_array(strtolower($file_parts['extension']), $allowed_extensions)) {
                                echo '<div class="carousel-item">';
                                echo '<img src="' . $refs_dir . $file . '" alt="Référence client">';
                                echo '</div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="footer-content">
        <div class="footer-section">
            <p>&copy; <?php echo $current_year; ?> LeanoDesign. Tous droits réservés.</p>
        </div>
        
        <!-- Ajout du logo Breizh Fab au centre -->
        <div class="footer-section footer-logo">
            <img src="assets/images/Logo-Breizh-Fab.png" alt="Logo Breizh Fab" class="breizh-fab-logo">
        </div>
        
        <div class="footer-section">
            <a href="mentions-legales.php">Mentions Légales</a>
            <span class="separator">|</span>
            <a href="#" id="cookie-settings">Paramètres des Cookies</a>
            <span class="separator">|</span>
            <a href="contact.php">Contact</a>
        </div>
    </div>
</footer>

<!-- Cookie Banner -->
<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-content">
        <p>Nous utilisons des cookies pour améliorer votre expérience sur notre site. En continuant à naviguer, vous acceptez notre utilisation des cookies.</p>
        <div class="cookie-buttons">
            <button id="accept-cookies" class="cookie-button accept">Accepter</button>
            <button id="reject-cookies" class="cookie-button reject">Refuser</button>
            <button id="customize-cookies" class="cookie-button customize">Personnaliser</button>
        </div>
    </div>
</div>

<!-- Cookie Settings Modal -->
<div id="cookie-modal" class="cookie-modal">
    <div class="modal-content">
        <h2>Paramètres des Cookies</h2>
        <div class="cookie-options">
            <div class="cookie-option">
                <label>
                    <input type="checkbox" id="essential-cookies" checked disabled>
                    Cookies essentiels (obligatoires)
                </label>
                <p>Ces cookies sont nécessaires au fonctionnement du site.</p>
            </div>
            <div class="cookie-option">
                <label>
                    <input type="checkbox" id="analytics-cookies">
                    Cookies analytiques
                </label>
                <p>Ces cookies nous permettent d'analyser l'utilisation du site pour en améliorer les performances.</p>
            </div>
        </div>
        <div class="modal-buttons">
            <button id="save-preferences" class="cookie-button accept">Enregistrer les préférences</button>
            <button id="close-modal" class="cookie-button reject">Fermer</button>
        </div>
    </div>
</div>

<script src="js/cookies.js"></script>
<script src="js/carousel.js"></script>
