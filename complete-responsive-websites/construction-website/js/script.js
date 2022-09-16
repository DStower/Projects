lightGallery(document.querySelector('.projects .box-container'));

let navigation = document.querySelector('.header .navigation'),
    searchForm = document.querySelector('.header .search-form'),
    loginForm = document.querySelector('.header .login-form'),
    contactInfo = document.querySelector('.contact-info'),
    menu = document.getElementById('menu-btn');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navigation.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

document.getElementById('search-btn').onclick = () =>{
    menu.classList.remove('fa-times');
    searchForm.classList.toggle('active');
    navigation.classList.remove('fa-times');
    loginForm.classList.remove('active');
}

document.getElementById('login-btn').onclick = () =>{
    menu.classList.remove('fa-times');
    searchForm.classList.remove('active');
    navigation.classList.remove('active');
    loginForm.classList.toggle('active');
}

document.getElementById('info-btn').onclick = () =>{
    menu.classList.remove('fa-times');
    contactInfo.classList.add('active');
    navigation.classList.remove('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

document.getElementById('close-contact-info').onclick = () =>{
    contactInfo.classList.remove('active');
    menu.classList.remove('fa-times');
    navigation.classList.remove('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navigation.classList.remove('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    contactInfo.classList.remove('active');
 }
 
 var swiper = new Swiper(".home-slider", {
    loop: true,
    grabCursor: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
 });
 
 var swiper = new Swiper(".reviews-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
       640: {
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
 
 var swiper = new Swiper(".blogs-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
       640: {
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
 
 var swiper = new Swiper(".logo-slider", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    breakpoints: {
       450: {
          slidesPerView: 2,
        },
       640: {
         slidesPerView: 3,
       },
       768: {
         slidesPerView: 4,
       },
       1000: {
         slidesPerView: 5,
       },
    },
 });