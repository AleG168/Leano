document.addEventListener('DOMContentLoaded', function() {
    console.log('Cookie script loaded');
    
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal = document.getElementById('cookie-modal');
    const acceptButton = document.getElementById('accept-cookies');
    const rejectButton = document.getElementById('reject-cookies');
    const customizeButton = document.getElementById('customize-cookies');
    const settingsButton = document.getElementById('cookie-settings');
    const closeModalButton = document.getElementById('close-modal');
    const savePreferencesButton = document.getElementById('save-preferences');
    const analyticsCheckbox = document.getElementById('analytics-cookies');

    // Verify elements are found
    if (!cookieBanner) console.error('Cookie banner not found');
    if (!cookieModal) console.error('Cookie modal not found');
    if (!acceptButton) console.error('Accept button not found');
    if (!rejectButton) console.error('Reject button not found');
    if (!customizeButton) console.error('Customize button not found');
    if (!settingsButton) console.error('Settings button not found');

    // Force show banner for testing
    cookieBanner.style.display = 'block';
    console.log('Cookie banner should be visible');

    // Check if cookie preferences are already set
    const existingPreferences = getCookie('cookie_preferences');
    console.log('Existing preferences:', existingPreferences);

    if (!existingPreferences) {
        cookieBanner.style.display = 'block';
        console.log('No preferences found, showing banner');
    }

    // Accept all cookies
    acceptButton.addEventListener('click', function() {
        setPreferences(true);
        hideBanner();
    });

    // Reject non-essential cookies
    rejectButton.addEventListener('click', function() {
        setPreferences(false);
        hideBanner();
    });

    // Open customization modal
    customizeButton.addEventListener('click', function() {
        cookieBanner.style.display = 'none';
        showModal();
    });

    // Settings button in footer
    settingsButton.addEventListener('click', function(e) {
        e.preventDefault();
        showModal();
    });

    // Close modal
    closeModalButton.addEventListener('click', hideModal);

    // Save preferences from modal
    savePreferencesButton.addEventListener('click', function() {
        setPreferences(analyticsCheckbox.checked);
        hideModal();
    });

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target === cookieModal) {
            hideModal();
        }
    });

    function setPreferences(acceptAnalytics) {
        // Set cookie preferences
        setCookie('cookie_preferences', 'set', 365);
        setCookie('accept_analytics', acceptAnalytics ? 'true' : 'false', 365);
        
        // If analytics are accepted, initialize them
        if (acceptAnalytics) {
            initializeAnalytics();
        }
    }

    function showModal() {
        cookieModal.style.display = 'flex';
        // Set checkbox state based on existing preference
        const analyticsAccepted = getCookie('accept_analytics');
        if (analyticsAccepted) {
            analyticsCheckbox.checked = analyticsAccepted === 'true';
        }
    }

    function hideModal() {
        cookieModal.style.display = 'none';
    }

    function hideBanner() {
        cookieBanner.style.display = 'none';
    }

    function setCookie(name, value, days) {
        let expires = '';
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = '; expires=' + date.toUTCString();
        }
        document.cookie = name + '=' + value + expires + '; path=/; SameSite=Lax';
    }

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

    function initializeAnalytics() {
        // Add your analytics initialization code here
        // For example, Google Analytics or similar
    }
}); 