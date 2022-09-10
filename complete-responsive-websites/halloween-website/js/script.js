AOS.init({
    delay: 400,
    duration: 800
});

let searchForm = document.querySelector('.search-form'),
    navigation = document.querySelector('.navigation');

document.getElementById('search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navigation.classList.remove('active');
}

document.getElementById('menu-btn').onclick = () =>{
    navigation.classList.toggle('active');
    searchForm.classList.remove('active');
}

// Scroll Spy
let section = document.querySelectorAll('section'),
    navLinks = document.querySelectorAll('.header .navigation a');

window.onscroll = () =>{
    searchForm.classList.remove('active');
    navigation.classList.remove('active');

    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }

    section.forEach(sec =>{
        let top = window.scrollY;
        let offset = sec.offsetTop - 200;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(link =>{
                link.classList.remove('active');
                document.querySelector('.header .navigation a[href*='+id+']').classList.add('active');
            });
        }
    });
}

window.onload = () =>{
    if(window.scrollY > 0){
        document.querySelector('.header').classList.add('active');
    }else{
        document.querySelector('.header').classList.remove('active');
    }
}

var swiper = new Swiper('.home-slider', {
    spaceBetween: 20,
    effect: 'fade',
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    centeredSlides: true,
    autoplay: {
        delay: 9500,
        disableOnInteraction: false,
    },
});

var swiper = new Swiper('.products-slider', {
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 9500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        },
    },
});

