AOS.init({
    duration: 800
});

let searchBtn = document.getElementById('search-btn'),
    searchForm = document.querySelector('.header .search-form'),
    menuBtn = document.getElementById('menu-btn'),
    navigation = document.querySelector('.header .navigation');

searchBtn.onclick = () =>{
    searchBtn.classList.toggle('fa-times');
    searchForm.classList.toggle('active');
    menuBtn.classList.remove('fa-times');
    navigation.classList.remove('active');
}

menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navigation.classList.toggle('active')
    searchBtn.classList.remove('fa-times');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    menuBtn.classList.remove('fa-times');
    navigation.classList.remove('active')
    searchBtn.classList.remove('fa-times');
    searchForm.classList.remove('active');
}