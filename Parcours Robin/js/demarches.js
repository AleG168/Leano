// Animation d'entrée des cartes
function animateCards() {
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.classList.add('animate');
    });
}

// Initialiser les animations quand la page est chargée
window.addEventListener('load', () => {
    animateCards();
});

// Animation pour le bouton CTA
document.querySelector('.cta-button').addEventListener('click', function() {
    this.textContent = 'Redirection...';
    this.style.backgroundColor = '#45a049';
    setTimeout(() => {
        alert('Merci pour votre intérêt ! Cette fonctionnalité est une démonstration.');
        this.textContent = 'Contactez-nous';
        this.style.backgroundColor = '';
    }, 1000);
});