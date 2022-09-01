let menu = document.getElementById('menu-btn'),
    navigation = document.querySelector('.navigation');

menu.onclick = () =>{
    navigation.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navigation.classList.remove('active');
    menu.classList.remove('fa-times');
}