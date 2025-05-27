document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.carousel-item');

    if (!track || items.length === 0) {
        console.error('Éléments du carrousel non trouvés');
        return;
    }

    const getItemWidth = (item) => {
        const style = getComputedStyle(item);
        return item.offsetWidth + parseInt(style.marginLeft) + parseInt(style.marginRight);
    };

    // Dupliquer les éléments pour créer l'effet infini
    const setupInfiniteScroll = () => {
        for (let i = 0; i < 3; i++) {
            items.forEach(item => {
                const clone = item.cloneNode(true);
                track.appendChild(clone);
            });
        }
    };

    setupInfiniteScroll();

    const allItems = track.querySelectorAll('.carousel-item');

    let totalOriginalWidth = 0;
    for (let i = 0; i < items.length; i++) {
        totalOriginalWidth += getItemWidth(items[i]);
    }

    let position = 0;
    let speed = 0.5;
    let targetSpeed = 0.5;
    const easing = 0.05; // plus petit = plus lent, ajustable
    let animationFrameId;

    const continuousScroll = () => {
        // Appliquer un easing pour ralentir ou accélérer en douceur
        speed += (targetSpeed - speed) * easing;

        position += speed;
        if (position >= totalOriginalWidth) {
            position -= totalOriginalWidth;
        }

        track.style.transition = 'none';
        track.style.transform = `translateX(-${position}px)`;

        animationFrameId = requestAnimationFrame(continuousScroll);
    };

    animationFrameId = requestAnimationFrame(continuousScroll);

    // Survol : ralentir progressivement à 0
    track.parentElement.addEventListener('mouseenter', () => {
        targetSpeed = 0;
    });

    // Quitter : reprendre la vitesse normale
    track.parentElement.addEventListener('mouseleave', () => {
        targetSpeed = 0.5;
    });

    window.addEventListener('resize', () => {
        totalOriginalWidth = 0;
        for (let i = 0; i < items.length; i++) {
            totalOriginalWidth += getItemWidth(items[i]);
        }
    });
});
