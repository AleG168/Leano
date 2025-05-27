document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner tous les éléments avec la classe count-up
    const counters = document.querySelectorAll('.count-up');
    
    // Préparer les éléments pour l'animation
    counters.forEach(counter => {
        // Stocker la valeur cible dans un attribut data
        const targetValue = counter.textContent;
        counter.setAttribute('data-target', targetValue);
        
        // Préparer l'élément pour l'animation
        counter.innerHTML = '';
        counter.classList.add('roller-counter-container');
        
        // Créer les éléments du compteur
        setupCounter(counter, targetValue);
    });
    
    // Fonction pour configurer le compteur
    function setupCounter(container, targetValue) {
        // Convertir le nombre cible en chaîne de caractères
        const targetString = targetValue.toString();
        
        // Pour chaque chiffre du nombre cible
        for (let i = 0; i < targetString.length; i++) {
            // Créer un conteneur pour ce chiffre
            const digitContainer = document.createElement('div');
            digitContainer.className = 'digit-container';
            
            // Créer le barillet de chiffres
            const roller = document.createElement('div');
            roller.className = 'digit-roller';
            roller.style.transform = 'translateY(0%)'; // Position initiale à 0
            
            // Ajouter tous les chiffres possibles (0-9) au barillet
            for (let n = 0; n <= 9; n++) {
                const digit = document.createElement('div');
                digit.className = 'digit';
                digit.textContent = n;
                roller.appendChild(digit);
            }
            
            // Ajouter le barillet au conteneur
            digitContainer.appendChild(roller);
            
            // Ajouter le conteneur de chiffre au conteneur principal
            container.appendChild(digitContainer);
        }
    }
    
    // Observer pour démarrer l'animation quand les éléments sont visibles
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Démarrer l'animation avec un délai d'une seconde
                setTimeout(() => {
                    startRollerAnimation(entry.target);
                }, 500); // Délai d'une seconde (1000ms)
                
                // Ne plus observer cet élément
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    // Observer chaque élément
    counters.forEach(counter => {
        observer.observe(counter);
    });
    
    // Fonction pour démarrer l'animation des rouleaux
    function startRollerAnimation(container) {
        const targetString = container.getAttribute('data-target');
        const rollers = container.querySelectorAll('.digit-roller');
        
        rollers.forEach((roller, index) => {
            // Réinitialiser la position à 0 (visible) avant de commencer l'animation
            roller.style.transition = 'none';
            roller.style.transform = 'translateY(0%)';
            
            // Forcer un reflow pour que la réinitialisation prenne effet
            roller.offsetHeight;
            
            // Calculer le délai pour cette position
            const delay = index * 300; // 300ms de délai entre chaque position
            
            // Calculer la position finale
            const finalDigit = parseInt(targetString[index], 10);
            
            // Animation en plusieurs étapes pour simuler un défilement réaliste
            setTimeout(() => {
                // Activer la transition
                roller.style.transition = 'transform 2s cubic-bezier(0.23, 1, 0.32, 1)';
                
                // Animer vers la position finale
                roller.style.transform = `translateY(${-finalDigit * 10}%)`;
            }, delay);
        });
    }
});
