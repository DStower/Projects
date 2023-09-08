let menu = document.getElementById('menu-btn'),
    navigation = document.querySelector('.navigation');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navigation.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navigation.classList.remove('active');
}

let slideIndex = 1;

function showSlides(n) {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    if(n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }

    slides.forEach((slide) => slide.style.display = 'none');
    dots.forEach((dot) => dot.classList.remove ('active'));

    slides[slideIndex - 1].style.display = 'block';

    dots[slideIndex - 1].classList.add('active');
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

showSlides(slideIndex);