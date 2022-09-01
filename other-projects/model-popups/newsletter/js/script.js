let open = document.getElementById('open'),
    close = document.getElementById('close'),
    box = document.querySelector('.box');

open.addEventListener('click', () =>{
    box.style.display = 'block';
});

close.addEventListener('click', () =>{
    box.style.display = 'none';
});