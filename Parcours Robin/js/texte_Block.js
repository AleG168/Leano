// Écouteur d'événement qui se déclenche quand le DOM est complètement chargé
document.addEventListener('DOMContentLoaded', () => {

    // Sélectionne tous les éléments avec la classe 'engagement-block'
    const blocks = document.querySelectorAll('.engagement-block');

    // Tableau contenant les textes supplémentaires qui apparaîtront au survol
    const extraTexts = [
        'Pousser les limites de la créativité et proposer des solutions nouvelles avant-gardistes.',
        'Concevoir des produits éco-responsables avec des matériaux durables en optimisant les processus de fabrication.',
        'Créer et concevoir des solutions fonctionnelles et faciles à utiliser.',
        'Créer des produits distinctifs aux détails soignés.',
        'Co-créer avec les clients et les partenaires des solutions adaptées aux contraintes identifiées.',
        'Intégrer des technologies innovantes pour optimiser la conception des produits.',
        'Livrer des produits de qualité en respectant les délais et les budgets.',
        'S’adapter aux évolutions du marché et aux exigences spécifiques de chaque projet.',
        'Concevoir des produits non seulement esthétiques, mais aussi performants et durables.',
        'Co-créer avec transparence et intégrité, en respectant les normes de qualité et de sécurité.'
    ];

    // Pour chaque bloc d'engagement...
    blocks.forEach((block, index) => {
        // Sauvegarde le texte original du bloc
        const originalText = block.textContent;

        // Événement déclenché quand la souris entre dans le bloc
        block.addEventListener('mouseenter', () => {
            // Remplace le texte par le texte supplémentaire correspondant
            // Si aucun texte supplémentaire n'existe pour cet index, conserve le texte original
            block.textContent = extraTexts[index] || originalText;

            // Ajoute une classe pour le style de survol
            block.classList.add('hovered');
        });

        // Événement déclenché quand la souris quitte le bloc
        block.addEventListener('mouseleave', () => {

            // Rétablit le texte original
            block.textContent = originalText;

            // Supprime la classe de style de survol
            block.classList.remove('hovered');
        });
    });
});
