// Écoute l'événement de chargement complet du DOM avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionne tous les blocs de prestation dans la page
    const prestationBlocks = document.querySelectorAll('.prestation-item-block');
    
    // Pour chaque bloc de prestation trouvé
    prestationBlocks.forEach(block => {
        // Ajoute un écouteur d'événement au clic
        block.addEventListener('click', function() {
            // Récupère le contenu associé au bloc cliqué (l'élément frère suivant en DOM)
            const content = this.nextElementSibling;
            
            // Bascule la classe 'active' sur le bloc cliqué (pour le style visuel)
            this.classList.toggle('active');
            // Bascule la classe 'active' sur le contenu associé (pour l'affichage/masquage)
            content.classList.toggle('active');
        });
    });

    // Colonne de gauche : fade-in depuis la gauche
    var leftBlock = document.querySelector('.row .col-md-8 .prestation-block');
    if (leftBlock) {
        leftBlock.classList.add('fade-in-left');
    }
    // Colonne de droite : fade-in depuis la droite
    var rightBlock = document.querySelector('.row .col-md-4 .prestation-block');
    if (rightBlock) {
        rightBlock.classList.add('fade-in-right');
    }
});