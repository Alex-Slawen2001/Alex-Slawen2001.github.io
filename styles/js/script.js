document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.carousel-slide');
    const prevBtn = document.querySelector('.carousel-prev');
    const nextBtn = document.querySelector('.carousel-next');
    let current = 0;
    const total = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
        });
    }

    function nextSlide() {
        current = (current + 1) % total;
        showSlide(current);
    }

    function prevSlide() {
        current = (current - 1 + total) % total;
        showSlide(current);
    }

    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    // Автопрокрутка каждые 5 секунд
    setInterval(nextSlide, 5000);

    showSlide(current);
});





document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.product-slider');
    const slides = document.querySelectorAll('.product-slide');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');

    let index = 0;
    const slideWidth = slides[0].offsetWidth + 20; // ширина + gap

    function updateSlider() {
        slider.style.transform = `translateX(-${index * slideWidth}px)`;
    }

    nextBtn.addEventListener('click', () => {
        if(index < slides.length - 1) {
            index++;
        } else {
            index = 0;
        }
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        if(index > 0) {
            index--;
        } else {
            index = slides.length - 1;
        }
        updateSlider();
    });
});


//     const burger = document.getElementById('burger');
//     const nav = document.querySelector('.header__nav');
//
//     if (burger && nav) {
//     burger.addEventListener('click', () => {
//         nav.classList.toggle('is-open');
//     });
// }

