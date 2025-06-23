document.addEventListener('DOMContentLoaded', function() {
    const prestationBlocks = document.querySelectorAll('.prestation-item-block');
    
    prestationBlocks.forEach(block => {
        block.addEventListener('click', function() {
            // Récupère le contenu associé au bloc
            const content = this.nextElementSibling;
            
            // Bascule l'état actif du bloc cliqué
            this.classList.toggle('active');
            content.classList.toggle('active');
        });
    });
}); 