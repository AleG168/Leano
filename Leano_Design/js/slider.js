// Sélection des éléments du DOM nécessaires pour le slider
const container = document.querySelector(".slider-container");// Conteneur principal
const before = document.querySelector(".before");// Image "avant" (à gauche)
const slider = document.querySelector(".slider");// Curseur de contrôle

// Ajout d'un écouteur d'événement pour le mouvement de la souris sur le conteneur
container.addEventListener("mousemove", (e) => {

    // Récupère les dimensions et position du conteneur dans la page
    let rect = container.getBoundingClientRect();

    // Calcule la position horizontale relative (en pourcentage) de la souris dans le conteneur
    // e.clientX = position X absolue du curseur
    // rect.left = position X absolue du conteneur
    // rect.width = largeur du conteneur
    let position = ((e.clientX - rect.left) / rect.width) * 100;

    // Assure que la position reste entre 0% et 100%
    position = Math.max(0, Math.min(100, position));

    // Applique un masque de découpe à l'image "avant" pour révéler l'image "après"
    // inset(top right bottom left) - ici on ajuste seulement le côté droit
    before.style.clipPath = `inset(0 ${100 - position}% 0 0)`;

    // Positionne le curseur slider à la position calculée
    slider.style.left = `${position}%`;
}); 