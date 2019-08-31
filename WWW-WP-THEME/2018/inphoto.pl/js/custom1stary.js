alert('test1');
let burger = document.getElementById("nav-icon2");
let open = 0;
let navbarNav = document.getElementById("navbarNav");
let nav_icon2 =document.getElementById("nav-icon2");
let navbar = document.getElementById("navbar");

function open_menu() {
	navbarNav.classList.add('open-menu');
 nav_icon2.classList.add('open');
	 navbar.classList.add('open-menu-bar');
};
function close_menu(){
	navbarNav.classList.remove('open-menu');
 nav_icon2.classList.remove('open');
	 navbar.classList.remove('open-menu-bar');
};

burger.addEventListener('click', function(){

 if ( open == 0) {
	 open=1;
	 open_menu();
	 // console.log(open);
 }

 else {
	 open = 0;
	 close_menu()
	 // console.log(open);
 };

});

// VanilaJS Menu support ////////////////////////////////////
alert('test2');

window.onscroll = function() {changeMenuOnscroll()};
	function changeMenuOnscroll() {
		if (window.innerWidth > 991) {

		// console.log('scroll menu');
		if (document.documentElement.scrollTop > 200) {
			open_menu();
		} else {
				close_menu();
		}
		}
	}


// VanilaJS Menu support end ////////////////////////////////////
alert('test3');
// slider VanilaJS (upgrade to DRY CODE)/////////////////////////////
let arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
if (arrowRight !== null) {
let sliderImages = document.querySelectorAll('#sliderVJS1 .slide');
let arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
let arrowLeft = document.querySelector('#sliderVJS1 #arrow-left');
let currentSlide = 0;

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
}

let arrowRight2 = document.querySelector('#sliderVJS2 #arrow-right');
if (arrowRight2 !== null) {
let sliderImages2 = document.querySelectorAll('#sliderVJS2 .slide');
let arrowLeft2 = document.querySelector('#sliderVJS2 #arrow-left');
let currentSlide2 = 0;

function reset2() {
	for(let i = 0; i < sliderImages2.length; i++) {

		sliderImages2[i].classList.remove('activeSlide');
	}
}

alert('test4');
// Init slider
function startSlide2() {
	reset2();
	sliderImages2[0].classList.add('activeSlide')
};

// Show next
function slideRight2(){
	reset2();
	sliderImages2[currentSlide2 + 1].classList.add('activeSlide');
	currentSlide2++;
};

// Show prev
function slideLeft2(){
	reset2();
	sliderImages2[currentSlide2 - 1].classList.add('activeSlide');
	currentSlide2--;
};

// Event left arrow click
arrowLeft2.addEventListener('click', function(){
	if(currentSlide2 === 0) {
		currentSlide2 = sliderImages2.length;
	}
	slideLeft2();
});

// Event right arrow click
arrowRight2.addEventListener('click', function(){
	if(currentSlide2 === sliderImages2.length - 1) {
		currentSlide2 = -1;
	}
	slideRight2();
});

startSlide2();


}

alert('test5');
let arrowRight3 = document.querySelector('#sliderVJS3 #arrow-right');

if (arrowRight3 !== null) {

	let sliderImages3 = document.querySelectorAll('#sliderVJS3 .slide');
	let arrowLeft3 = document.querySelector('#sliderVJS3 #arrow-left');
	let currentSlide3 = 0;


	function reset3() {
		for(let i = 0; i < sliderImages3.length; i++) {

			sliderImages3[i].classList.remove('activeSlide');
		}
	}

	// Init slider
	function startSlide3() {
		reset3();
		sliderImages3[0].classList.add('activeSlide')
	};

	// Show next
	function slideRight3(){
		reset3();
		sliderImages3[currentSlide3 + 1].classList.add('activeSlide');
		currentSlide3++;
	};

	// Show prev
	function slideLeft3(){
		reset3();
		sliderImages3[currentSlide3 - 1].classList.add('activeSlide');
		currentSlide3--;
	};

	// Event left arrow click
	arrowLeft3.addEventListener('click', function(){
		if(currentSlide3 === 0) {
			currentSlide3 = sliderImages3.length;
		}
		slideLeft3();
	});

	// Event right arrow click
	arrowRight3.addEventListener('click', function(){
		if(currentSlide3 === sliderImages3.length - 1) {
			currentSlide3 = -1;
		}
		slideRight3();
	});

	startSlide3();
}
// END  slider VanilaJS /////////////////////////////
alert('test6');

// Film box module VanilaJS ////////////////////////
let film_list = document.querySelectorAll('#film_list .media')


function reset_filmbox() {
	for(let i = 0; i < film_list.length; i++) {
		// console.log(film_list[i]);
let otherfilmbox = film_list[i];
otherfilmbox.innerHTML = '  <div class="play fadein"><div class="playin"></div></div>';
	};
}
let clicked = false;
for(let i = 0; i < film_list.length; i++) {
let filmbox = film_list[i];
let filmURL = filmbox.getAttribute('data-filmURL');
let filmContent = '  <iframe  src="'+filmURL+'&autoplay=1" ></iframe>';

	filmbox.addEventListener('click', function(){

if (clicked == true) {
	reset_filmbox();
}
// console.log(filmURL);

		this.innerHTML = filmContent;
clicked = true;
	});
}

// Film box module VanilaJS  END////////////////////////

alert('test7');

// SCROLLS FUNCTIONS ////////////////////
let target = document.getElementById('portfilio');
let tracker = document.getElementById('portfiliolink');
// console.log(target);
// console.log(tracker);
if (target != null) {

	tracker.addEventListener('click', function(){
		target.scrollIntoView({
			behavior: 'smooth',
			block: 'start'
		});
	// $("html, body").animate({ scrollTop: $('#portfilio').position().top }, 1000);
	});
}

//
// behavior: "auto"  | "instant" | "smooth",
//   block:    "start" | "end",


// SCROLLS FUNCTIONS END////////////////////
alert('test8');
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////
// GALLERY MODULE /////////////////////////////////////
let gallery = document.querySelector('#Filtergallery')
if (gallery !== null) {

//Variable declarations
	let FotoList = allFotosjson;
	let FotosContainer = gallery.querySelector('.fotos');
	let i = 0;
	let viewmore = document.querySelector('#viewmore');
// Items on start
	let galleryCounter = 9;
// Items after download more
	let galleryLoader = 3;
	let activeItems = 0;
	let cat1 = '';
	let cat2 = '';
	let cat3 = '';
	let lightbox = document.querySelector('.LigthboxContent img');
	let lightboxCon = document.querySelector('.lighbox_container');
	let backdrop = document.querySelector('.backdrop');
	let activeLlightbox = null;


alert('test9');
	// GALLERY LIGHTBOX //////////////////////////////////
	// Open lighbox function
		function openLighbox(i, url2){

			gallery_item.addEventListener('click', function(){
					// console.log('current id = '+i);
					activeLlightbox = i;
			lightbox.setAttribute('src', url2);
			backdrop.setAttribute("style", "visibility:visible;opacity:0.9");
			setTimeout(function(){lightboxCon.setAttribute("style", "transform:scale(1);");},1000);
			});
		}

	// Close lighbox function
function closeLightbox(){
	backdrop.removeAttribute("style", "visibility:visible;opacity:1");
	lightboxCon.removeAttribute("style", "transform:scale(1);");
	setTimeout(function() {lightbox.removeAttribute('src')}, 1000)

}
	let close = document.querySelector('.lighbox_container .close');
		close.addEventListener('click', function(){
closeLightbox();

		});

// Prev lighbox function
let prev = document.querySelector('.lightbox_cont_prev')
prev.addEventListener('click', function(){
	activeLlightbox--;
	if (activeLlightbox<0) {
		activeLlightbox=FotoList.length-1;
	}
	// console.log(activeLlightbox);
	url2=FotoList[activeLlightbox].url2;
	lightbox.setAttribute('src', url2);
});


// Next lighbox function
let next = document.querySelector('.lightbox_next')
next.addEventListener('click', function(){
	activeLlightbox++;
	if (activeLlightbox>FotoList.length-1) {
		activeLlightbox=0;
	}
	// console.log(activeLlightbox);
	url2=FotoList[activeLlightbox].url2;
	lightbox.setAttribute('src', url2);
});



// reset filters
function resetGallery(){
	galleryCounter = 9;
	viewmore.classList.remove('hidden');
let filtersAll = gallery.querySelectorAll('.filter')
for (var i = 0; i < filtersAll.length; i++) {
	filtersAll[i].classList.remove('active');
}
FotosContainer.innerHTML="";
activeItems=0;
}


// add image functions
	function insertImage(i) {
		currentFoto = FotoList[i];
		cat1 = currentFoto.category1;
		cat2 = currentFoto.category2;
		cat3 = currentFoto.category3;
		url1 = currentFoto.url1;
		url2 = currentFoto.url2;
		gallery_item = document.createElement("div");
		gallery_item.classList.add('item', 'gallery_item', 'fadein');
		gallery_item.style.backgroundImage = "url("+url1+")";
		gallery_item.setAttribute('categories', cat1+' '+cat2+' '+cat3 );
		FotosContainer.appendChild(gallery_item);
// console.log(url2);
openLighbox(i, url2)
	};

alert('test10');
// Generate gallery
	function startGallery() {
		// console.log('start gallery fotos = '+fotos.length);
		// console.log('gallery counter= '+galleryCounter);

		for (let i = 0; i < galleryCounter; i++) {
			if ((FotoList[i]) != null) {
				insertImage(i);
				activeItems++;
			}
			else {
					 viewmore.classList.add('hidden');
			}
		}
		// console.log('active items= '+activeItems);
	}
	startGallery();

// Generate no filter gallery
let resetFilter = gallery.querySelector('.resetfilter')
resetFilter.addEventListener('click', function(){
resetGallery();
this.classList.add('active');
FotoList = allFotosjson;
startGallery();
});


// Generate start filter gallery
let filters = gallery.querySelectorAll('.triggerfilter');
// console.log(filters);
for (i = 0; i < filters.length; i++) {
	let filter = filters[i];
	filter.addEventListener('click', function(){

	let filtername = filter.getAttribute('data-filtername');
	// console.log('wybrany filter= '+filtername);
		resetGallery();
			this.classList.add('active');
		startFilterGalery(filtername)
	});
}


function startFilterGalery(filtername) {
		// console.log('gallery counter= '+galleryCounter);
		FotoList = [];
				for (var i = 0; i < allFotosjson.length; i++) {
					let currentFoto = allFotosjson[i];
					 cat1 = currentFoto.category1;
					 cat2 = currentFoto.category2;
					 cat3 = currentFoto.category3;
					if ((cat1 == filtername) || (cat2 == filtername) || (cat3 == filtername)) {
					FotoList.push(allFotosjson[i]);
					}
				}
				// console.log('Nowy obiekt fotolist:');
				// console.log(FotoList.length);
				// console.log(FotoList);
		for (let i = 0; i < FotoList.length; i++) {
			if ((FotoList[i] != null) && (activeItems < galleryCounter)) {
insertImage(i);
activeItems++;
			}
		}
		if (galleryCounter >= FotoList.length) {
			 // console.log('end gallery');
			viewmore.classList.add('hidden');
		}
}



// view more function
 function viewmorefn(){
	 for (var i = galleryCounter; i < galleryCounter+galleryLoader ; i++) {
	 if (FotoList[i] != null) {
		 insertImage(i);
		activeItems++;
	 }

	 }
	 galleryCounter= galleryCounter+galleryLoader;
		 // console.log('galleryCounter = '+galleryCounter);
	 // console.log(galleryCounter);
	 if (galleryCounter >= FotoList.length) {
		 // console.log('end gallery');
		 viewmore.classList.add('hidden');
	 }
 }
// Generate "view more" images

viewmore.addEventListener('click', function(){
	// console.log('add more from = '+galleryCounter);
if (galleryCounter < FotoList.length) {
viewmorefn();
}
});
}


// GALLERY MODULE END ////////////////////////////////
