const noButton = document.querySelector('.no');

noButton.addEventListener('mouseover', () => {
    const randomX = Math.floor(Math.random() * window.innerWidth);
    const randomY = Math.floor(Math.random() * window.innerHeight);
    noButton.style.left = `${randomX}px`;
    noButton.style.top = `${randomY}px`;
});