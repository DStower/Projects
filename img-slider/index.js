let slideIndex = 1,
    myTimer;

window.addEventListener("load", function(){
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
});

/* Click through slides using prev & next arrows */
function plusSlides(n){
    clearInterval(myTimer);
    if(n < 0){
        showSlides(slideIndex -= 1);
    }else{
        showSlides(slideIndex += 1);
    }
    if(n === -1){
        myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
    }else{
        myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
    }
}

/* Go to specific slide clicking dots */
function currentSlide(n){
    clearInterval(myTimer);
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
    showSlides(slideIndex = n);
}

function showSlides(n){
    let i,
        slides = document.getElementsByClassName("slides"),
        dots = document.getElementsByClassName("dot");

    if(n > slides.length){slideIndex = 1}
    if(n < 1){slideIndex = slides.length}
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    for(i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}