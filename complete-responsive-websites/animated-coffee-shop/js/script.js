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

document.querySelectorAll('.image-slider img').forEach(images =>{
    images.onclick = () =>{
        let src = images.getAttribute('src');
        document.querySelector('.main-home-image').src = src;
    }
});

let swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop : true,
    grabCursor: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
    },
});