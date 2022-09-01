let toggle = document.querySelector('.popup-container'),
    openButton = document.getElementById('button'),
    closeButton = document.getElementById('close');

openButton.onclick = () =>{
    toggle.classList.toggle('toggle');
}

closeButton.onclick = () =>{
    toggle.classList.toggle('toggle');
}