let moreBtn = document.querySelector('.more-btn'),
    moreIcon = document.getElementById('more-icon'),
    moreList = document.querySelector('.header .navigation ul li ul');

moreBtn.onclick = () =>{
    moreIcon.classList.toggle('fa-angle-up');
    moreList.classList.toggle('active');
}

let homeSlider = new Swiper(".home-slider", {
    loop: true,
    speed: 1500,
    grabCursor: true,
    effect: 'fade',
    allowTouchMove: false,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'bullets',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
    },
});

let mainSliderSelector = '.main-slider',
    thumbSliderSelector = '.thumb-slider';

let mainSliderOptions = {
    loop: true,
    speed: 1500,
    parallax: true,
    loopAdditionalSlides: 5,
    grabCursor: true,
    watchSlidesProgress: true,
    autoplay: {
        delay: 9000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
};

let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

let thumbSliderOptions = {
    loop: true,
    speed: 1500,
    spaceBetween: 10,
    slidesPerView: 5,
    centeredSlides: true,
    touchRatio: .2,
    slideToClickedSlide: true,
    simulateTouchMove: false,
    threshold: 5,
    direction: 'horizontal',
    observer: true,
    observeParents: true,
};

let thumbSlider = new Swiper(thumbSliderSelector, thumbSliderOptions);

mainSlider.controller.control = thumbSlider;
thumbSlider.controller.control = mainSlider;