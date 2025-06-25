// Attend que le DOM soit complètement chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function() {
    console.log('Cookie script loaded');
    
    // Récupère tous les éléments du DOM nécessaires
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal = document.getElementById('cookie-modal');
    const acceptButton = document.getElementById('accept-cookies');
    const rejectButton = document.getElementById('reject-cookies');
    const customizeButton = document.getElementById('customize-cookies');
    const settingsButton = document.getElementById('cookie-settings');
    const closeModalButton = document.getElementById('close-modal');
    const savePreferencesButton = document.getElementById('save-preferences');
    const analyticsCheckbox = document.getElementById('analytics-cookies');

    // Vérifie que tous les éléments nécessaires existent
    if (!cookieBanner) console.error('Cookie banner not found');
    if (!cookieModal) console.error('Cookie modal not found');
    if (!acceptButton) console.error('Accept button not found');
    if (!rejectButton) console.error('Reject button not found');
    if (!customizeButton) console.error('Customize button not found');
    if (!settingsButton) console.error('Settings button not found');

    // Force l'affichage de la bannière pour les tests (à supprimer en production)
    cookieBanner.style.display = 'block';
    console.log('Cookie banner should be visible');

    // Vérifie si des préférences de cookies existent déjà
    const existingPreferences = getCookie('cookie_preferences');
    console.log('Existing preferences:', existingPreferences);

    // Affiche la bannière si aucune préférence n'est définie
    if (!existingPreferences) {
        cookieBanner.style.display = 'block';
        console.log('No preferences found, showing banner');
    }

    // Gestionnaire d'événement pour le bouton "Accepter"
    acceptButton.addEventListener('click', function() {
        setPreferences(true);
        hideBanner();
    });

    // Gestionnaire d'événement pour le bouton "Refuser"
    rejectButton.addEventListener('click', function() {
        setPreferences(false);
        hideBanner();
    });

    // Gestionnaire d'événement pour le bouton "Personnaliser"
    customizeButton.addEventListener('click', function() {
        cookieBanner.style.display = 'none';
        showModal();
    });

    // Gestionnaire d'événement pour le bouton "Paramètres" dans le footer
    settingsButton.addEventListener('click', function(e) {
        e.preventDefault();
        showModal();
    });

    // Gestionnaire d'événement pour fermer la modal
    closeModalButton.addEventListener('click', hideModal);

    // Gestionnaire d'événement pour sauvegarder les préférences
    savePreferencesButton.addEventListener('click', function() {
        setPreferences(analyticsCheckbox.checked);
        hideModal();
    });

    // Ferme la modal quand on clique à l'extérieur
    window.addEventListener('click', function(e) {
        if (e.target === cookieModal) {
            hideModal();
        }
    });

    // Définit les préférences de cookies
    function setPreferences(acceptAnalytics) {
        // Enregistre les préférences dans les cookies
        setCookie('cookie_preferences', 'set', 365);
        setCookie('accept_analytics', acceptAnalytics ? 'true' : 'false', 365);
        
        // Initialise les analytics si acceptés
        if (acceptAnalytics) {
            initializeAnalytics();
        }
    }

    // Affiche la modal de personnalisation
    function showModal() {
        cookieModal.style.display = 'flex';
        // Met à jour la checkbox en fonction des préférences existantes
        const analyticsAccepted = getCookie('accept_analytics');
        if (analyticsAccepted) {
            analyticsCheckbox.checked = analyticsAccepted === 'true';
        }
    }

    // Cache la modal
    function hideModal() {
        cookieModal.style.display = 'none';
    }

    // Cache la bannière
    function hideBanner() {
        cookieBanner.style.display = 'none';
    }

    // Fonction utilitaire pour définir un cookie
    function setCookie(name, value, days) {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + value + expires + '; path=/; SameSite=Lax';
    }

    // Fonction utilitaire pour récupérer un cookie
    function getCookie(name) {
        const nameEQ = name + '=';
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Fonction pour initialiser les outils d'analyse
    function initializeAnalytics() {
        // Ajoutez ici le code d'initialisation des analytics
        // Par exemple, Google Analytics ou autre
    }
});