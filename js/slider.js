const slider = document.querySelector('.slider');
let slideIndex = 0;
const slideCount = slider.childElementCount;

function showSlide() {
  slider.style.transform = `translateX(-${slideIndex * 10}%)`;
}

function nextSlide() {
  slideIndex = (slideIndex + 1) % slideCount;
  showSlide();
}

setInterval(nextSlide, 5000);