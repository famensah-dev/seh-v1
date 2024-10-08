
const scrollLeftButton = document.getElementById('scroll-left-button');
const scrollRightButton = document.getElementById('scroll-right-button');
const scrollContainer = document.querySelector('.scroll-container');

scrollLeftButton.addEventListener('click', scrollLeft);
scrollRightButton.addEventListener('click', scrollRight);


function scrollLeft() {
    const scrollContainer = document.querySelector('.scroll-container');
    scrollContainer.scrollBy({
        left: -scrollContainer.offsetWidth,
        behavior: 'smooth'
    });
}

function scrollRight() {
    const scrollContainer = document.querySelector('.scroll-container');
    scrollContainer.scrollBy({
        left: scrollContainer.offsetWidth,
        behavior: 'smooth'
    });
}


// function scrollRight() {
//     const scrollContainer = document.querySelector('.scroll-container');
//     if (scrollContainer.scrollLeft + scrollContainer.offsetWidth >= scrollContainer.scrollWidth) {
//         scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
//     } else {
//         scrollContainer.scrollBy({ left: scrollContainer.offsetWidth, behavior: 'smooth' });
//     }
// }

// setInterval(scrollRight, 10000);

function autoScrollRight() {
    const scrollContainer = document.querySelector('.scroll-container');
    if (scrollContainer.scrollLeft + scrollContainer.offsetWidth >= scrollContainer.scrollWidth) {
        scrollContainer.scrollTo({ left: 0, behavior: 'smooth' });
    } else {
        scrollContainer.scrollBy({ left: scrollContainer.offsetWidth, behavior: 'smooth' });
    }
}

function setScrollInterval() {
    let interval;
    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    if (isMobile) {
        interval = 8000; // 3 seconds for mobile
    } else {
        interval = 15000; // 5 seconds for desktop
    }

    setInterval(autoScrollRight, interval);
}

setScrollInterval();
window.addEventListener('resize', setScrollInterval);


// const cards = document.querySelectorAll('.card-testimonial');
// const indicators = document.querySelectorAll('.indicator');
// let currentIndex = 0;

// function setActiveCard(index) {
//     cards.forEach((card, i) => {
//         card.classList.toggle('active', i === index);
//         indicators[i].classList.toggle('active', i === index);
//     });

//     const cardWrapper = document.querySelector('.card-wrapper');
//     const cardWidth = cards[0].offsetWidth;
//     cardWrapper.style.transform = `translateX(-${index * cardWidth}px)`;
// }

// function autoScroll() {
//     currentIndex = (currentIndex + 1) % cards.length; // Loop back to the first card
//     setActiveCard(currentIndex);
// }

// // Set up indicators to be clickable
// indicators.forEach((indicator) => {
//     indicator.addEventListener('click', () => {
//         currentIndex = parseInt(indicator.getAttribute('data-index'));
//         setActiveCard(currentIndex);
//     });
// });

// // Start automatic scrolling
// setInterval(autoScroll, 10000); // Scroll every 10 seconds

// // Initialize the first card as active
// setActiveCard(currentIndex);




const cards = document.querySelectorAll('.scroll-carousel .custom-card');
const indicators = document.querySelectorAll('.carousel-indicator');
let currentIndex = 0;

// Clone the first card and append it to the end
const firstCardClone = cards[0].cloneNode(true);
document.querySelector('.carousel-track').appendChild(firstCardClone);

function setActiveCard(index) {
    cards.forEach((card, i) => {
        card.classList.toggle('active', i === index);
        indicators[i].classList.toggle('active', i === index);
    });

    const cardWrapper = document.querySelector('.carousel-track');
    const cardWidth = cards[0].offsetWidth;
    cardWrapper.style.transform = `translateX(-${index * cardWidth}px)`;
}

function autoScroll() {
    currentIndex = (currentIndex + 1) % cards.length; // Loop back to the first card
    setActiveCard(currentIndex);
}

// Set up indicators to be clickable
indicators.forEach((indicator) => {
    indicator.addEventListener('click', () => {
        currentIndex = parseInt(indicator.getAttribute('data-index'));
        setActiveCard(currentIndex);
    });
});

// Start automatic scrolling
setInterval(autoScroll, 10000); // Scroll every 10 seconds

// Initialize the first card as active
setActiveCard(currentIndex);
