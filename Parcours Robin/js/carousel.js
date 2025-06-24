// Attendre que le DOM soit entièrement chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function () {
    // Sélectionner la piste (track) du carrousel et tous les éléments du carrousel
    const track = document.querySelector('.custom-carousel-track');
    const items = document.querySelectorAll('.custom-carousel-item');

    // Vérifier si les éléments du carrousel existent
    if (!track || items.length === 0) {
        console.error('Éléments du carrousel non trouvés');
        return;
    }

    // Fonction pour calculer la largeur totale d'un élément (incluant les marges)
    const getItemWidth = (item) => {
        const style = getComputedStyle(item);
        return item.offsetWidth + parseInt(style.marginLeft) + parseInt(style.marginRight);
    };

    // Fonction pour créer un défilement infini en clonant les éléments
    const setupInfiniteScroll = () => {
        const clonesNeeded = 10;
        // Cloner chaque élément plusieurs fois pour créer une longue bande
        for (let i = 0; i < clonesNeeded; i++) {
            items.forEach(item => {
                const clone = item.cloneNode(true);
                track.appendChild(clone);
            });
        }
    };

    // Initialiser le défilement infini
    setupInfiniteScroll();

    // Sélectionner tous les éléments (originaux + clones)
    const allItems = track.querySelectorAll('.custom-carousel-item');

    // Calculer la largeur totale de tous les éléments combinés
    let totalScrollWidth = 0;
    allItems.forEach(item => {
        totalScrollWidth += getItemWidth(item);
    });

    // Variables pour gérer l'animation
    let position = 0; // Position actuelle du défilement
    let speed = 0.5; // Vitesse actuelle
    let targetSpeed = 0.5; // Vitesse cible
    const easing = 0.05; // Facteur de lissage pour les changements de vitesse
    let animationFrameId; // ID de l'animation frame

    let lastTimestamp = null; // Dernier timestamp pour calculer le delta

    // Fonction principale pour le défilement continu
    const continuousScroll = (timestamp) => {
        if (!lastTimestamp) lastTimestamp = timestamp;
        const delta = (timestamp - lastTimestamp) / 1000; // temps écoulé en secondes
        lastTimestamp = timestamp;

        // Lisser la transition de vitesse
        speed += (targetSpeed - speed) * easing;
        // Mettre à jour la position en fonction de la vitesse
        position += speed * delta * 180;

        // Réinitialiser la position quand on atteint la fin pour l'effet infini
        if (position >= totalScrollWidth) {
            position -= totalScrollWidth;
        }

        // Appliquer la transformation pour le défilement
        track.style.transition = 'none';
        track.style.transform = `translateX(-${position}px)`;

        // Demander la prochaine frame d'animation
        animationFrameId = requestAnimationFrame(continuousScroll);
    };

    // Démarrer l'animation
    animationFrameId = requestAnimationFrame(continuousScroll);

    // Événements pour changer la vitesse au survol
    track.parentElement.addEventListener('mouseenter', () => {
        targetSpeed = 2; // Accélérer au survol
    });

    track.parentElement.addEventListener('mouseleave', () => {
        targetSpeed = 0.5; // Ralentir quand la souris quitte
    });

    // Recalculer la largeur totale si la fenêtre est redimensionnée
    window.addEventListener('resize', () => {
        totalScrollWidth = 0;
        const updatedItems = track.querySelectorAll('.custom-carousel-item');
        updatedItems.forEach(item => {
            totalScrollWidth += getItemWidth(item);
        });
    });
});