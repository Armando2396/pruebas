//js para dar movimientos a las imagenes del carrusel(slide)
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function currentSlides(n){
    showSlides(slideIndex = n);
}

function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    
    //h
    if(n > slides.length){ slideIndex= 1}
    if(n < 1){ slideIndex = slides.length}
    for( i=0; i < slides.length; i++){
        slides[i].style.display = "none";
    }

    for(i=0; i<dots.length; i++){
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";//los espacios son importantes para pasar la imagen
}

//------auto slide ->
var slideIndex =0;
showSlides()
function showSlides(){
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for(i=0; i<slides.length; i++){
        slides[i].style.display = "none";
    }
    slideIndex++;
    if(slideIndex > slides.length){
        slideIndex=1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 9000);
    //changge image every 2 seconds
}
 //Fin js para dar movimientos a las imagenes del carrusel(slide)