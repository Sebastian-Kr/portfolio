// gallery VanilaJS//////////////////////////

const current = document.querySelector('.galleryVJS #current');
const imgs = document.querySelectorAll('.galleryVJS .imgs img');
const opacity = 0.4;


imgs.forEach(img => img.addEventListener('click', imgClick));

function imgClick(e) {
	// Reset the opacity
	imgs.forEach(img => img.style.opacity = 1);
	// Change current image to src of clicked image
	current.src = e.target.src;
// Ad fadeIn class
current.classList.add('fade-in');
// Remove fade-in class afete .5sec
setTimeout(() => current.classList.remove('fade-in'), 500);
	// Change the opacity to opacity var
  e.target.style.opacity = opacity;
}

//END  gallery VanilaJS//////////////////////////
