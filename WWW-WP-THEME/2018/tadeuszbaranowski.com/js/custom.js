console.log('1');

 window.onload = function(){


var pop_up_info = document.getElementById("pop_up_info");
var pop_up_info_close = document.getElementById("pop_up_info_close");

if (pop_up_info !==null) {
  pop_up_info_close.addEventListener('click', function() {
    pop_up_info.classList.add('d-none');
  });
}


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
      if (posFromTop - windowHeight <= -200) {
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
//
//
//
// 	// // VanilaJS Menu support end ////////////////////////////////////
// 	// slider VanilaJS (upgrade to DRY CODE)/////////////////////////////
// 	var arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
// 	// Slider 1 start
// 	if (arrowRight !== null) {
// 	var sliderImages = document.querySelectorAll('#sliderVJS1 .slide');
// 	var arrowRight = document.querySelector('#sliderVJS1 #arrow-right');
// 	var arrowLeft = document.querySelector('#sliderVJS1 #arrow-left');
// 	var currentSlide = 0;
//
//
// 	function reset() {
// 		for(var i = 0; i < sliderImages.length; i++) {
//
// 			sliderImages[i].classList.remove('activeSlide');
// 		};
// 	};
//
// // 	// Init slider
// 	function startSlide() {
// 		reset();
// 		sliderImages[0].classList.add('activeSlide')
// 	};
//
// 	// Show next
// 	function slideRight(){
// 		reset();
// 		sliderImages[currentSlide + 1].classList.add('activeSlide');
// 		currentSlide++;
// 	};
//
// 	// Show prev
// 	function slideLeft(){
// 		reset();
// 		sliderImages[currentSlide - 1].classList.add('activeSlide');
// 		currentSlide--;
// 	};
// // alert('slider1-2')
// 	// Event left arrow click
// 	arrowLeft.addEventListener('click', function(){
// 		if(currentSlide === 0) {
// 			currentSlide = sliderImages.length;
// 		}
// 		slideLeft();
// 	});
//
// 	// Event right arrow click
// 	arrowRight.addEventListener('click', function(){
// 		if(currentSlide === sliderImages.length - 1) {
// 			currentSlide = -1;
// 		}
// 		slideRight();
// 	});
// 	// alert('slider1-1');
//
// 	startSlide();
// 	}; //end if !== arrowRight1
	// Slider 1 end
	// alert('test slider1');

console.log('273');

// }  ???????????????????????????????

// // END  slider VanilaJS /////////////////////////////

// // // SCROLLS FUNCTIONS ////////////////////
var target = document.getElementById('gallerytarget');
var tracker = document.getElementById('gallerylink');
// console.log(target);
// console.log(tracker);
if (target != null) {

	tracker.addEventListener('click', function(){
		target.scrollIntoView({
			behavior: 'smooth',
			block: 'start'
		});
	});
}
console.log('scroll center');

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
	var galleryCounter = 12;
// Items after download more
	var galleryLoader = 4;
	var activeItems = 0;
  var autor_box = document.getElementById('gallery_item_autor');
  var title_box = document.getElementById('gallery_item_title');
  var tech_box = document.getElementById('gallery_item_tech');
  var size_box = document.getElementById('gallery_item_size');
  var year_box = document.getElementById('gallery_item_year');
	var lightbox = document.querySelector('.LigthboxContent img');
	var lightboxCon = document.querySelector('.lighbox_container');
	// var backdrop = document.querySelector('.backdrop');
	var activeLlightbox = null;
var loader = document.querySelector('#loader2');
console.log(FotoList[0].title);
lightbox.setAttribute('src', FotoList[0].url2);
autor_box.innerHTML = FotoList[0].autor;
title_box.innerHTML = FotoList[0].title;
tech_box.innerHTML = FotoList[0].tech;
size_box.innerHTML = FotoList[0].size;
year_box.innerHTML = FotoList[0].year;

// alert('test9');
	// GALLERY LIGHTBOX //////////////////////////////////
	// Open lighbox function
		function openLighbox(i, url2){

			gallery_item.addEventListener('click', function(){
					// console.log('current id = '+i);
					activeLlightbox = i;
			lightbox.setAttribute('src', url2);
      autor_box.innerHTML = FotoList[i].autor;
      title_box.innerHTML = FotoList[i].title;
      tech_box.innerHTML = FotoList[i].tech;
      size_box.innerHTML = FotoList[i].size;
      year_box.innerHTML = FotoList[i].year;
var start_page = document.getElementById('start_page');
start_page.scrollIntoView({
  behavior: 'smooth',
  block: 'start'
});

			// backdrop.setAttribute("style", "visibility:visible;opacity:0.9");
			setTimeout(function(){lightboxCon.setAttribute("style", "transform:scale(1);");},1000);
			});
		}
	// Close lighbox function

function closeLightbox(){
console.log('Close lighbox OFF');
	// backdrop.removeAttribute("style", "visibility:visible;opacity:1");
	// lightboxCon.removeAttribute("style", "transform:scale(1);");
	// setTimeout(function() {lightbox.removeAttribute('src')}, 1000)

}
	// var close = document.querySelector('.lighbox_container .close');
	// var backdrop2 = document.querySelector('.backdrop2');
// 		close.addEventListener('click', function(){
// closeLightbox();
// 		});
// 		backdrop2.addEventListener('click', function(){
// 		closeLightbox();
// 		});

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
     autor_box.innerHTML = FotoList[activeLlightbox].autor;
     title_box.innerHTML = FotoList[activeLlightbox].title;
     tech_box.innerHTML = FotoList[activeLlightbox].tech;
     size_box.innerHTML = FotoList[activeLlightbox].size;
     year_box.innerHTML = FotoList[activeLlightbox].year;

     // alert('test9');
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
     autor_box.innerHTML = FotoList[activeLlightbox].autor;
     title_box.innerHTML = FotoList[activeLlightbox].title;
     tech_box.innerHTML = FotoList[activeLlightbox].tech;
     size_box.innerHTML = FotoList[activeLlightbox].size;
     year_box.innerHTML = FotoList[activeLlightbox].year;

     setTimeout(function(){ loader.removeAttribute("style", "opacity:1!important"); }, 500);
	  }
}

var next = document.querySelector('.lightbox_cont_next')
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
console.log('reset filter OFF');
// 	galleryCounter = 9;
// 	viewmore.classList.remove('hidden');
// var filtersAll = gallery.querySelectorAll('.filter')
// for (var i = 0; i < filtersAll.length; i++) {
// 	filtersAll[i].classList.remove('active');
// }
// FotosContainer.innerHTML="";
// activeItems=0;
}


// add image functions
	function insertImage(i) {
		currentFoto = FotoList[i];
    url1 = currentFoto.url1;
    url2 = currentFoto.url2;
		autor = currentFoto.autor;
    title = currentFoto.title;
		tech = currentFoto.tech;
		size = currentFoto.size;
    year = currentFoto.year;
    // console.log(position);
		gallery_item = document.createElement("div");
		gallery_item.classList.add('item', 'gallery_item', 'animate');
    gallery_item_img = document.createElement("img");
    gallery_item_img.setAttribute('src', url1);
    gallery_item_title_box = document.createElement("h5");
    gallery_item_title_box.classList.add('gallery_item_title_box');
    gallery_item_title_box.innerHTML = title;
    gallery_item_size_box = document.createElement("h6");
    gallery_item_size_box.classList.add('gallery_item_size_box');
    gallery_item_size_box.innerHTML = size;
    gallery_item.appendChild(gallery_item_img);
    gallery_item.appendChild(gallery_item_title_box);
    gallery_item.appendChild(gallery_item_size_box);

		// gallery_item.setAttribute('categories', cat1+' '+cat2+' '+cat3 );
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




// FILTER OFF
// Generate no filter gallery
// var resetFilter = gallery.querySelector('.resetfilter')
// resetFilter.addEventListener('click', function(){
// resetGallery();
// this.classList.add('active');
// FotoList = allFotosjson;
// startGallery();
// });


// // Generate start filter gallery
// var filters = gallery.querySelectorAll('.triggerfilter');
// // console.log(filters);
// for (i = 0; i < filters.length; i++) {
// 	var filter = filters[i];
// 	filter.addEventListener('click', function(){
//
// 	var filtername = this.getAttribute('data-filtername');
// 	console.log('wybrany filtr= '+filtername);
// 		resetGallery();
// 			this.classList.add('active');
// 		startFilterGalery(filtername)
// 	});
// };
//
// function startFilterGalery(filtername) {
// 		// console.log('gallery counter= '+galleryCounter);
// 		FotoList = [];
// 				for (var i = 0; i < allFotosjson.length; i++) {
// 					var currentFoto = allFotosjson[i];
// 					 cat1 = currentFoto.category1;
// 					 cat2 = currentFoto.category2;
// 					 cat3 = currentFoto.category3;
// 					if ((cat1 == filtername) || (cat2 == filtername) || (cat3 == filtername)) {
// 					FotoList.push(allFotosjson[i]);
// 					}
// 				}
// 				// console.log('Nowy obiekt fotolist:');
// 				// console.log(FotoList.length);
// 				// console.log(FotoList);
// 		for (var i = 0; i < FotoList.length; i++) {
// 			if ((FotoList[i] != null) && (activeItems < galleryCounter)) {
// insertImage(i);
// activeItems++;
// 			}
// 		}
// 		if (galleryCounter >= FotoList.length) {
// 			 // console.log('end gallery');
// 			viewmore.classList.add('hidden');
// 		}
// };
// FILTER OFF END



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
