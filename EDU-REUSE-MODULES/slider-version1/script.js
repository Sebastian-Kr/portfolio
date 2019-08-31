
// slider VanilaJS /////////////////////////////

let sliderImages = document.querySelectorAll('#sliderVJS1 .slide');
let arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
let arrowLeft = document.querySelector('#sliderVJS1 #arrow-left');
let currentSlide = 0;

console.log(arrowLeft);
console.log(arrowRight);

function reset() {
	for(let i = 0; i < sliderImages.length; i++) {
		sliderImages[i].classList.remove('activeSlide');
	}
}

// Init slider
function startSlide() {
	reset();
	sliderImages[0].classList.add('activeSlide')
};

// Show next
function slideRight(){
	reset();
	sliderImages[currentSlide + 1].classList.add('activeSlide');
	currentSlide++;
};

// Show prev
function slideLeft(){
	reset();
	sliderImages[currentSlide - 1].classList.add('activeSlide');
	currentSlide--;
};

// Event left arrow click
arrowLeft.addEventListener('click', function(){
	if(currentSlide === 0) {
		currentSlide = sliderImages.length;
	}
	slideLeft();
});

// Event right arrow click
arrowRight.addEventListener('click', function(){
	if(currentSlide === sliderImages.length - 1) {
		currentSlide = -1;
	}
	slideRight();
});

startSlide();


// END  slider VanilaJS /////////////////////////////
