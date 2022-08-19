let profile = document.querySelector('.header .flex .profile');

document.getElementById('user-btn').onclick = () =>{
    profile.classList.toggle('active');
    navigation.classList.remove('active');
}

let navigation = document.querySelector('.header .flex .navigation');

document.getElementById('menu-btn').onclick = () =>{
    navigation.classList.toggle('active');
    profile.classList.remove('active');
}

let slideIndex = 1,
    myTimer;

window.addEventListener('load', () =>{
    showSlides(slideIndex);
    myTimer = setInterval(() => {plusSlides(1)}, 4000);
});

let plusSlides = (n) =>{
    clearInterval(myTimer);
    if(n < 0){
        showSlides(slideIndex -= 1);
    }else{
        showSlides(slideIndex += 1);
    }
    if(n === -1){
        myTimer = setInterval(() => {plusSlides(n + 2)}, 4000);
    }else{
        myTimer = setInterval(() => {plusSlides(n + 1)}, 4000);
    }
}

let currentSlide = (n) => {
    clearInterval(myTimer);
    myTimer = setInterval(() => {plusSlides(n + 1)}, 4000);
    showSlides(slideIndex = n);
}

let showSlides = (n) => {
    let i,
        slides = document.getElementsByClassName('slide'),
        dots = document.getElementsByClassName('dot');

    if(n > slides.length){slideIndex = 1}
    if(n < 1){slideIndex = slides.length}
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
    }
    for(i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(' active', '');
    }
    slides[slideIndex - 1].style.display = 'block';
    dots[slideIndex - 1].className += ' active';
}

let subImages = document.querySelectorAll('.quick-view .image-container .sub-images img');
let mainImage = document.querySelector('.quick-view .image-container .main-image img');

subImages.forEach(images =>{
    images.onclick = () =>{
        let src = images.getAttribute('src');
        mainImage.src = src;
    }
});