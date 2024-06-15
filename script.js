// элементы слайдера
const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const slides = Array.from(slider.querySelectorAll('img'));
const slideCount = slides.length;
let slideIndex = 0;

// обработчики событий для кнопок
prevButton.addEventListener('click', showPreviousSlide);
nextButton.addEventListener('click', showNextSlide);

// функция показа предыдущего слайда
function showPreviousSlide(){
  slideIndex = (slideIndex - 1 + slideCount) % slideCount;
  updeateSlider();
}

// функция показа следующего слайда
function showNextSlide(){
  slideIndex = (slideIndex + 1) % slideCount;
  updeateSlider();
}

// функция для обновления отбражения слайдера
function updeateSlider(){
  slides.forEach((slide, index) =>{
    if(index === slideIndex){
      slide.style.display = 'block';
    }
    else{
      slide.style.display = 'none';
    }
  });
}

// инициализация слайдера
updeateSlider();