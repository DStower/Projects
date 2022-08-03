function toggleMenu(){
    let menuToggle = document.querySelector('.menu--toggle');
    let navigation = document.querySelector('.navigation');

    if(menuToggle.classList.toggle('active')){
        menuToggle.innerHTML = '&#120;';
    }else{
        menuToggle.innerHTML = '&#9776;';
    }

    navigation.classList.toggle('active');
}