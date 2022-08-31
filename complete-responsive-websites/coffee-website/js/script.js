let menu = document.getElementById('menu-btn'),
    navigation = document.querySelector('.header .flex .navigation');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navigation.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navigation.classList.remove('active');
}