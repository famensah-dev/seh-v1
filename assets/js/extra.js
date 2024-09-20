
const scrollLeftButton = document.getElementById('scroll-left-button');
const scrollRightButton = document.getElementById('scroll-right-button');
const container = document.querySelector('.scroll-container');

scrollLeftButton.addEventListener('click', scrollLeft);
scrollRightButton.addEventListener('click', scrollRight);

function scrollLeft() {
    const container = document.querySelector('.scroll-container');
    const itemWidth = container.querySelector('.scroll-item').offsetWidth;
    container.scrollBy({
        left: -container.offsetWidth,
        behavior: 'smooth'
    });
}

function scrollRight() {
    const container = document.querySelector('.scroll-container');
    const itemWidth = container.querySelector('.scroll-item').offsetWidth;
    container.scrollBy({
        left: container.offsetWidth,
        behavior: 'smooth'
    });
}
