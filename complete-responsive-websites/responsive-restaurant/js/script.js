let menu = document.getElementById('menu-btn'),
    navigation = document.querySelector('.navigation');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navigation.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navigation.classList.remove('active');

    if(window.scrollY > 60){
        document.getElementById('scroll-top').classList.add('active');
    }else{
        document.getElementById('scroll-top').classList.remove('active');
    }
}

function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
    setInterval(loader, 3000);
}

window.onload = fadeOut();