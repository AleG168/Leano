document.addEventListener('DOMContentLoaded', function () {
    const track = document.querySelector('.custom-carousel-track');
    const items = document.querySelectorAll('.custom-carousel-item');

    if (!track || items.length === 0) {
        console.error('Éléments du carrousel non trouvés');
        return;
    }

    const getItemWidth = (item) => {
        const style = getComputedStyle(item);
        return item.offsetWidth + parseInt(style.marginLeft) + parseInt(style.marginRight);
    };

    // Crée une bande très longue pour l’effet d'infini
    const setupInfiniteScroll = () => {
        const clonesNeeded = 10;
        for (let i = 0; i < clonesNeeded; i++) {
            items.forEach(item => {
                const clone = item.cloneNode(true);
                track.appendChild(clone);
            });
        }
    };

    setupInfiniteScroll();

    const allItems = track.querySelectorAll('.custom-carousel-item');

    let totalScrollWidth = 0;
    allItems.forEach(item => {
        totalScrollWidth += getItemWidth(item);
    });

    let position = 0;
    let speed = 0.5;
    let targetSpeed = 0.5;
    const easing = 0.05;
    let animationFrameId;

    const continuousScroll = () => {
        speed += (targetSpeed - speed) * easing;
        position += speed;

        if (position >= totalScrollWidth) {
            position -= totalScrollWidth;
        }

        track.style.transition = 'none';
        track.style.transform = `translateX(-${position}px)`;

        animationFrameId = requestAnimationFrame(continuousScroll);
    };

    animationFrameId = requestAnimationFrame(continuousScroll);

    track.parentElement.addEventListener('mouseenter', () => {
        targetSpeed = 2;
    });

    track.parentElement.addEventListener('mouseleave', () => {
        targetSpeed = 0.5;
    });

    window.addEventListener('resize', () => {
        totalScrollWidth = 0;
        const updatedItems = track.querySelectorAll('.custom-carousel-item');
        updatedItems.forEach(item => {
            totalScrollWidth += getItemWidth(item);
        });
    });
});
