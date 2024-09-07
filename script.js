// JavaScript for Auto-Sliding with Fade Effect
document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.profile-slider .slide');
    let currentSlide = 0;
    const totalSlides = slides.length;
    const slideInterval = 3000; // Change slide every 5 seconds
    let intervalId;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function startSlider() {
        intervalId = setInterval(nextSlide, slideInterval);
    }

    startSlider();
});

