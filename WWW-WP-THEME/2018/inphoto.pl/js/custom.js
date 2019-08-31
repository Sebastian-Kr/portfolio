console.log('1');

 window.onload = function(){
// alert('test1');
var burger = document.querySelector(".toggle_desktop_menu");
var open = 0;
var navbarNav = document.getElementById("navbarNav");
var nav_icon2 = document.getElementById("nav-icon2");
var navbar = document.getElementById("navbar");
var open_menu_flag = false;
// alert(navbar);
// alert(burger);
function open_menu() {
navbarNav.classList.add('open-menu');
nav_icon2.classList.add('open');
navbar.classList.add('open-menu-bar');
open_menu_flag = true;
console.log(open_menu_flag);
};
function close_menu(){
navbarNav.classList.remove('open-menu');
nav_icon2.classList.remove('open');
if (window.pageYOffset < 100) {
  navbar.classList.remove('open-menu-bar');
};
open_menu_flag = false;
console.log(open_menu_flag);
};

burger.addEventListener('click', function(){
 if ( open == 0) {
	 open = 1;
	 open_menu();
 }
 else {
	 open = 0;
	 close_menu()
 };
});
// alert('test2');

// // VanilaJS Menu support ////////////////////////////////////
// $(window).scroll(function () {
//    $('.class').each(function () {
//       if (isScrolledIntoView(this) === true) {
//           $(this).addClass('in-view')
//       }
//    });
// });


window.onscroll = function() {changeOnscroll()};
	function changeOnscroll() {
    if (window.innerWidth > 991) {
// Toogle Menu
   if ((window.pageYOffset < 100) && (open_menu_flag == true)) {close_menu();};
   if ((window.pageYOffset > 100) && (open_menu_flag == false)) {open_menu();};
  };
};

//
// Animations if is in viewport
var animateHTML = function () {
  var elems,
    windowHeight
  var init = function () {
    elems = document.getElementsByClassName('animate')
    windowHeight = window.innerHeight
    _addEventHandlers()
  }
  var _addEventHandlers = function () {
    window.addEventListener('scroll', _checkPosition)
    // window.addEventListener('resize', init)
  }
  var _checkPosition = function () {
    for (var i = 0; i < elems.length; i++) {
      var posFromTop = elems[i].getBoundingClientRect().top
      if (posFromTop - windowHeight <= -150) {
        elems[i].className = elems[i].className.replace('animate', 'fade-in-element')
      }
    }
  }
  return {
    init: init

  }
}
animateHTML().init();


///////////////////////////////////////////////////



console.log('100');



	// // VanilaJS Menu support end ////////////////////////////////////
	// slider VanilaJS (upgrade to DRY CODE)/////////////////////////////
	var arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
	// Slider 1 start
	if (arrowRight !== null) {
	var sliderImages = document.querySelectorAll('#sliderVJS1 .slide');
	var arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
	var arrowLeft = document.querySelector('#sliderVJS1 #arrow-left');
	var currentSlide = 0;


	function reset() {
		for(var i = 0; i < sliderImages.length; i++) {

			sliderImages[i].classList.remove('activeSlide');
		};
	};

// 	// Init slider
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
// alert('slider1-2')
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
	// alert('slider1-1');

	startSlide();
	}; //end if !== arrowRight1
	// Slider 1 end
	// alert('test slider1');

	var arrowRight2 = document.querySelector('#sliderVJS2 #arrow-right');


	// Slider 2 start
	if (arrowRight2 !== null) {
	var sliderImages2 = document.querySelectorAll('#sliderVJS2 .slide');
	var arrowLeft2 = document.querySelector('#sliderVJS2 #arrow-left');
	var currentSlide2 = 0;

	function reset2() {
		for(var i = 0; i < sliderImages2.length; i++) {

			sliderImages2[i].classList.remove('activeSlide');
		}
	};


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
	}; //end if !== arrowRight2
	// alert('test slider2');

	var arrowRight3 = document.querySelector('#sliderVJS3 #arrow-right');

	// Slide 3 start
	if (arrowRight3 !== null) {

		var sliderImages3 = document.querySelectorAll('#sliderVJS3 .slide');
		var arrowLeft3 = document.querySelector('#sliderVJS3 #arrow-left');
		var currentSlide3 = 0;


		function reset3() {
			for(var i = 0; i < sliderImages3.length; i++) {

				sliderImages3[i].classList.remove('activeSlide');
			}
		};

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
	};
	// alert('test slider3');

console.log('273');

// }  ???????????????????????????????

// // END  slider VanilaJS /////////////////////////////
//
// // Film box module VanilaJS ////////////////////////
var film_list = document.querySelectorAll('#film_list .media')
var filmbox, filmURL, filmContent;

function reset_filmbox() {
	for(var i = 0; i < film_list.length; i++) {
		// console.log(film_list[i]);
var otherfilmbox = film_list[i];
otherfilmbox.innerHTML = '  <div class="play fadein"><div class="playin"></div></div>';
	};
}


var clicked = false;
for(var i = 0; i < film_list.length; i++) {
  filmbox = film_list[i];
	filmbox.addEventListener('click', function(){
    filmURL = this.getAttribute('data-filmURL');
    filmContent = '  <iframe  src="'+filmURL+'&autoplay=1" ></iframe>';

if (clicked == true) {
	reset_filmbox();
}
// console.log(filmURL);

		this.innerHTML = filmContent;
clicked = true;
	});
}
//
// // Film box module VanilaJS  END////////////////////////
//
// alert('film slider ');
//
// // SCROLLS FUNCTIONS ////////////////////
var target = document.getElementById('portfilio');
var tracker = document.getElementById('portfiliolink');
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
// alert('scrolls');

//
// behavior: "auto"  | "instant" | "smooth",
//   block:    "start" | "end",


// // SCROLLS FUNCTIONS END////////////////////
// alert('test8');
// ////////////////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////////////////
// ////////////////////////////////////////////////////////////////////////
// // GALLERY MODULE /////////////////////////////////////
// document.addEventListener('keypress', function(event) {
//   if (event.code == 'ArrowRight') {
//     alert('Undo!')
//   }
// });


console.log('348');

var gallery = document.querySelector('#Filtergallery');
// alert('gallery check');
if (gallery !== null) {
	// alert('gallery start');

//Variable declarations
	var FotoList = allFotosjson;
	// alert(FotoList);
	var FotosContainer = gallery.querySelector('.fotos');
	var i = 0;
	var viewmore = document.querySelector('#viewmore');
// Items on start
	var galleryCounter = 9;
// Items after download more
	var galleryLoader = 3;
	var activeItems = 0;
	var cat1 = '';
	var cat2 = '';
	var cat3 = '';
	var lightbox = document.querySelector('.LigthboxContent img');
	var lightboxCon = document.querySelector('.lighbox_container');
	var backdrop = document.querySelector('.backdrop');
	var activeLlightbox = null;
var loader = document.querySelector('#loader');

// alert('test9');
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
	var close = document.querySelector('.lighbox_container .close');
	var backdrop2 = document.querySelector('.backdrop2');
		close.addEventListener('click', function(){
closeLightbox();
		});
		backdrop2.addEventListener('click', function(){
		closeLightbox();
		});

// Prev lighbox function

function prevLightbox() {
  activeLlightbox--;
	if (activeLlightbox<0) {
		activeLlightbox=FotoList.length-1;
	}
	// console.log(activeLlightbox);
	url2=FotoList[activeLlightbox].url2;
  loader.setAttribute("style", "opacity:1!important");

  objImg = new Image();
  objImg.src = url2;
   objImg.onload = function() {
     lightbox.setAttribute('src', url2);
     setTimeout(function(){ loader.removeAttribute("style", "opacity:1!important"); }, 500);
    }
}

var prev = document.querySelector('.lightbox_cont_prev')
prev.addEventListener('click', function(){
prevLightbox();
  });


// Next lighbox function
function nextLightbox() {
  activeLlightbox++;
	if (activeLlightbox>FotoList.length-1) {
		activeLlightbox=0;
	}
	// console.log(activeLlightbox);
	url2=FotoList[activeLlightbox].url2;
     loader.setAttribute("style", "opacity:1!important");

	objImg = new Image();
	objImg.src = url2;
   objImg.onload = function() {
     lightbox.setAttribute('src', url2);

     setTimeout(function(){ loader.removeAttribute("style", "opacity:1!important"); }, 500);
	  }
}

var next = document.querySelector('.lightbox_next')
next.addEventListener('click', function(){
	nextLightbox();
});

console.log('454');
// KEYBOARD EVENT GALLERY

window.addEventListener('keydown', function (event) {
  // console.log('keydown');
var key = event.key || event.keyCode;
console.log(key);
if ( key === 'Escape' || key === 'Esc' || key === 27) {
	closeLightbox();
}

if ( key === 'ArrowLeft' || key === 37 || key === 'Left') {
  console.log('prev button');
  prevLightbox();
}

if ( key === 'ArrowRight' || key === 39 || key === 'Right') {
  console.log('next button');
  nextLightbox();
}

});




console.log('513');
// MOBILE EVENTS GALLERY

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;
var yDown = null;

function handleTouchStart(evt) {
    xDown = evt.touches[0].clientX;
    yDown = evt.touches[0].clientY;
};

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
        if ( xDiff > 0 ) {
          console.log('  /* left swipe */ ');
          prevLightbox();
        } else {
            console.log('/* right swipe */');
              nextLightbox();
        }
    }
    // else {
    //     if ( yDiff > 0 ) {
    //         // console.log('/* up swipe */ ');
    //         	closeLightbox();
    //     } else {
    //       // console.log('  /* down swipe */');
    //       	closeLightbox();
    //     }
    // }
    /* reset values */
    xDown = null;
    yDown = null;
};

console.log('test');

// reset filters
function resetGallery(){
	galleryCounter = 9;
	viewmore.classList.remove('hidden');
var filtersAll = gallery.querySelectorAll('.filter')
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
    position = currentFoto.position;
    // console.log(position);
		gallery_item = document.createElement("div");
		gallery_item.classList.add('item', 'gallery_item', 'fadein', position);
		gallery_item.style.backgroundImage = "url("+url1+")";
		gallery_item.setAttribute('categories', cat1+' '+cat2+' '+cat3 );
		FotosContainer.appendChild(gallery_item);
// console.log(url2);
openLighbox(i, url2)
	};

// alert('test10');
// Generate gallery
	function startGallery() {
		// console.log('start gallery fotos = '+fotos.length);
		// console.log('gallery counter= '+galleryCounter);

		for (var i = 0; i < galleryCounter; i++) {
			if ((FotoList[i]) != null) {
				insertImage(i);
				activeItems++;
			}
			else {
					 viewmore.classList.add('hidden');
			}
		};
		// console.log('active items= '+activeItems);
	};
	startGallery();

// Generate no filter gallery
var resetFilter = gallery.querySelector('.resetfilter')
resetFilter.addEventListener('click', function(){
resetGallery();
this.classList.add('active');
FotoList = allFotosjson;
startGallery();
});


// Generate start filter gallery
var filters = gallery.querySelectorAll('.triggerfilter');
// console.log(filters);
for (i = 0; i < filters.length; i++) {
	var filter = filters[i];
	filter.addEventListener('click', function(){

	var filtername = this.getAttribute('data-filtername');
	console.log('wybrany filter= '+filtername);
		resetGallery();
			this.classList.add('active');
		startFilterGalery(filtername)
	});
};


function startFilterGalery(filtername) {
		// console.log('gallery counter= '+galleryCounter);
		FotoList = [];
				for (var i = 0; i < allFotosjson.length; i++) {
					var currentFoto = allFotosjson[i];
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
		for (var i = 0; i < FotoList.length; i++) {
			if ((FotoList[i] != null) && (activeItems < galleryCounter)) {
insertImage(i);
activeItems++;
			}
		}
		if (galleryCounter >= FotoList.length) {
			 // console.log('end gallery');
			viewmore.classList.add('hidden');
		}
};



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
 };
// Generate "view more" images

viewmore.addEventListener('click', function(){
	// console.log('add more from = '+galleryCounter);
if (galleryCounter < FotoList.length) {
viewmorefn();
}
});
}; // if gallery not null

//
// // GALLERY MODULE END ////////////////////////////////
// alert('gallery end');
}; // window on load end tag
console.log('700');
