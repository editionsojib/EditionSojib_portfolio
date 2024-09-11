document.addEventListener('DOMContentLoaded', function () {
    //================= Profile Slider Auto-Sliding with Fade Effect =============
    const slides = document.querySelectorAll('.profile-slider .slide');
    let currentSlide = 0;
    const totalSlides = slides.length;
    const slideInterval = 3000; // Change slide every 3 seconds

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
        setInterval(nextSlide, slideInterval);
    }

    startSlider();

    //================= Typing Animation ================
    const profileName = document.querySelector('.profile-name');
    const texts = [
        'MD Sojib Farazi..',
        'Skill: Android App Developer..',
        'Skill: About Mobile Tech..',
        'Skill: Web Developer..',
        'Skill: About Web App..'
    ];
    let textIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < texts[textIndex].length) {
            profileName.textContent += texts[textIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, 120);
        } else {
            setTimeout(erase, 2000);
        }
    }

    function erase() {
        if (charIndex > 0) {
            profileName.textContent = texts[textIndex].substring(0, charIndex - 1);
            charIndex--;
            setTimeout(erase, 50);
        } else {
            textIndex = (textIndex + 1) % texts.length;
            setTimeout(type, 300);
        }
    }

    type();

    //================= Experience Image Slider ================
    let experienceIndex = 0;
    const experienceImages = document.querySelectorAll('.experience-photo');
    const totalExperienceImages = experienceImages.length;

    function initializeSlider() {
        experienceImages.forEach((image, index) => {
            image.style.display = (index === experienceIndex) ? 'block' : 'none';
        });
    }

    function showNextExperienceImage() {
        experienceImages[experienceIndex].style.display = 'none';
        experienceIndex = (experienceIndex + 1) % totalExperienceImages;
        experienceImages[experienceIndex].style.display = 'block';
    }

    function startExperienceSlider() {
        initializeSlider();
        setInterval(showNextExperienceImage, 3000); // Change image every 3 seconds
    }

    startExperienceSlider();

    //================= Team Scrolling with Buttons and Auto-Scroll ================
    function scrollTeam(direction) {
        const container = document.querySelector('.team-container');
        const scrollAmount = 200;

        if (direction === 'left') {
            container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            if (container.scrollLeft === 0) {
                container.scrollBy({ left: container.scrollWidth, behavior: 'smooth' });
            }
        } else {
            container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
                container.scrollBy({ left: -container.scrollWidth, behavior: 'smooth' });
            }
        }
    }

    document.querySelector('.scroll-button.left').onclick = () => scrollTeam('left');
    document.querySelector('.scroll-button.right').onclick = () => scrollTeam('right');

    // Auto-scroll team section every 5 seconds
    function startAutoScroll() {
        setInterval(() => {
            scrollTeam('right');
        }, 5000);
    }

    startAutoScroll();
});
