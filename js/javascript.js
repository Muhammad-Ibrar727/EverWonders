


document.querySelector('.hamburger').addEventListener('click', function() {
    console.log('Hamburger clicked'); 
    document.querySelector('.nav-links').classList.toggle('nav-active');
});




let currentSlide = 0;

function changeSlide(direction) {
    const slides = document.querySelectorAll('.slide');
    currentSlide = (currentSlide + direction + slides.length) % slides.length;
    document.querySelector('.slides').style.transform = `translateX(-${currentSlide * 100}%)`;
}

document.addEventListener('DOMContentLoaded', () => {
    setInterval(() => changeSlide(1), 5000); // Change slide every 5 seconds
});




document.addEventListener('DOMContentLoaded', function() {
    const offerCardsContainer = document.querySelector('.offer-cards');
    const offerCards = document.querySelectorAll('.offer-card');
    const totalCards = offerCards.length;
    const cardWidth = offerCards[0].offsetWidth + 20; 
    const visibleCards = 3;
    const maxPosition = (totalCards - visibleCards) * cardWidth;
    const intervalDuration = 3000; 
    let currentPosition = 0;
    let interval;
    let scrollingForward = true; 

    function changeOfferCard(direction) {
        currentPosition += direction * cardWidth;

        // Circular motion logic
        if (currentPosition < 0) {
            currentPosition = maxPosition; 
        } else if (currentPosition > maxPosition) {
            currentPosition = 0; // If going beyond the last card, move to the first card
        }

        offerCardsContainer.style.transform = `translateX(-${currentPosition}px)`;

        // If reached the end of the slider, change scrolling direction
        if (currentPosition === maxPosition) {
            scrollingForward = false;
        } else if (currentPosition === 0) {
            scrollingForward = true;
        }
    }

    // Function to start automatic scrolling
    function startAutoScroll() {
        interval = setInterval(function() {
            if (scrollingForward) {
                
                changeOfferCard(1); 
                changeOfferCard(-1); // Scrolls to the previous card (in reverse order)
            }
        }, intervalDuration);
    }

    // Function to stop automatic scrolling
    function stopAutoScroll() {
        clearInterval(interval);
    }

    startAutoScroll();


    offerCardsContainer.addEventListener('mouseenter', stopAutoScroll);

    
    offerCardsContainer.addEventListener('mouseleave', startAutoScroll);
});
