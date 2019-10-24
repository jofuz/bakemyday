// set slide count to 1
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    //current slide is assigned the variable n
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    // if the current slide number is greater than the total amount of slides
    // set the current slide back to 1
    if (n > slides.length) { slideIndex = 1 }
    
    // if the current slide is less than 1 
    // set the current slide number to the total amount number
    if (n < 1) { slideIndex = slides.length }

    // if there are no slides, set the slide style to display none - hide the slide elements
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
} 