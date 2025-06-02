document.addEventListener('DOMContentLoaded', () => {
    const blocks = document.querySelectorAll('.engagement-block');
    const extraTexts = ['Pousser les limites de la créativité et proposer des solutions nouvelles avant-gardistes.', 'Concevoir des produits éco-responsables avec des matériaux durables en optimisant les processus de fabrication.', 'Créer et concevoir des solutions fonctionnelles et faciles à utiliser.', 'Créer des produits distinctifs aux détails soignés.', 'Co-créer avec les clients et les partenaires des solutions adaptées aux contraintes identifiés.', 'Intègrer des technologies inovantes pour optimiser la conceptions des produits', 'Livrer des produits de qualité en respectant les délais et les budgets.', 'S’adapter aux évolutions du marché et aux exigences spécifiques de chaque projet.', 'Conçevoir des produits non seulement esthétiques, mais aussi performants et durables.', 'Co-créer avec transparence et intégrité, en respectant les normes de qualité et de sécurité.']; // 10 blocs

    blocks.forEach((block, index) => {
        // Crée l'élément de texte supplémentaire
        const extra = document.createElement('div');
        extra.classList.add('extra-text');
        extra.textContent = extraTexts[index] || '';
        block.appendChild(extra);

        block.addEventListener('mouseenter', () => {
            block.classList.add('hovered');
        });

        block.addEventListener('mouseleave', () => {
            block.classList.remove('hovered');
        });
    });
});

