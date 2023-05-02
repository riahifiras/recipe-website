​function Once(){                                 
  localStorage.setItem("lang", "eng");
  Once = undefined;
}


Once();


localStorage.setItem("lang", "eng");

let slideIndex = 1;
showSlides(slideIndex);
/* These lines initialize a variable called slideIndex to 1 and then call the showSlides function
   with the current value of slideIndex. This is used to display the first slide in a slideshow.
*/
function plusSlides(n) {
    showSlides(slideIndex += n);
}
/* This is a function called plusSlides that takes a parameter n. 
It adds n to the current value of slideIndex and then calls the showSlides function 
with the updated value of slideIndex. This function is used to move to the next or previous slide in the slideshow.
*/

function currentSlide(n) {
    showSlides(slideIndex = n);
}
/* This is a function called currentSlide that takes a parameter n. 
  It sets slideIndex to the value of n and then calls the showSlides function 
  with the updated value of slideIndex. 
  This function is used to move directly to a specific slide in the slideshow.
*/

function showSlides(n) { //n that represents the index of the slide to be displayed
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("demo");
    let captionText = document.getElementById("caption");
    if (n > slides.length)  //checks if n is greater than the total number of slides in the slideshow
    {slideIndex = 1} //sets slideIndex to 1 to display the first slide
    if (n < 1) {slideIndex = slides.length} //sets slideIndex to the last slide in the slideshow.
    for (i = 0; i < slides.length; i++) { 
      slides[i].style.display = "none"; //hides all of the slides 
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", ""); //removes the "active" class from all of the dots
    }
    slides[slideIndex-1].style.display = "block"; //displays the slide with the index of slideIndex-1
    dots[slideIndex-1].className += " active"; //adds the "active" class to the dot corresponding to that slide
    captionText.innerHTML = dots[slideIndex-1].alt; //updates the caption text
}
