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

window.onscroll = () =>{
    profile.classList.remove('active');
    navigation.classList.remove('active');
}

let subImages = document.querySelectorAll('.update-product .image-container .sub-images img');
let mainImage = document.querySelector('.update-product .image-container .main-image img');

subImages.forEach(images =>{
    images.onclick = () =>{
        let src = images.getAttribute('src');
        mainImage.src = src;
    }
});