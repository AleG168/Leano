const container = document.querySelector(".slider-container");
const before = document.querySelector(".before");
const slider = document.querySelector(".slider");

container.addEventListener("mousemove", (e) => {
    let rect = container.getBoundingClientRect();
    let position = ((e.clientX - rect.left) / rect.width) * 100;
    position = Math.max(0, Math.min(100, position));
    before.style.clipPath = `inset(0 ${100 - position}% 0 0)`;
    slider.style.left = `${position}%`;
}); 