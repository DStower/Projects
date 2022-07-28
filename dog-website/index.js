window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    const menuIcon = document.querySelector('.menu--toggle');

    header.classList.toggle('sticky', window.scrollY > 0);
    menuIcon.classList.toggle('sticky', window.scrollY > 0);
});

function toggleMenu(){
    let menuToggle = document.querySelector('.menu--toggle');
    let navigation = document.querySelector('.navigation');

    if(menuToggle.classList.toggle('active')){
        menuToggle.innerHTML = "&#120;";
    }else{
        menuToggle.innerHTML = "&#9776;";
    }

    navigation.classList.toggle('active');
}