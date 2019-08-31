
/*=======================================
// "Lightbox Gallry" Progremo module
/*=======================================*/

// Variable declarations
var lightbox = document.querySelector('.LigthboxContent img'),
  lightboxCon = document.querySelector('.lighbox_container'),
  backdrop = document.querySelector('.backdrop'),
  loader = document.querySelector('#loader'),
  galleryItems_items = $('.progremo_lightboxGallery_module .gallery_item'),
  close = document.querySelector('.lighbox_container .close'),
  backdrop2 = document.querySelector('.backdrop2'),
  prev = document.querySelector('.lightbox_cont_prev'),
  next = document.querySelector('.lightbox_next'),
  fotoList = [],
  activeLightbox = 0,
  xDown = null,
  yDown = null;

//Generate Gallery
galleryItems_items.each(function(index) {
  var imageFull_url = $(this).attr('data-fullURL');
  fotoList.push(imageFull_url);
  $(this).on("click", function() {
    var imageID = $(this).attr('data-id');
    console.log(imageID);
    openLighbox(imageID, imageFull_url);
  });
});




// NVIGATION MOUSE EVENTS LISTENER
close.addEventListener('click', function() {
  closeLightbox();
});
backdrop2.addEventListener('click', function() {
  closeLightbox();
});
prev.addEventListener('click', function() {
  prevLightbox();
	console.log('prev');
});
next.addEventListener('click', function() {
  nextLightbox();
	console.log('next');
});


// KEYBOARD EVENTS LISTENER

window.addEventListener('keydown', function(event) {
  // console.log('keydown');
  var key = event.key || event.keyCode;
  console.log(key);
  if (key === 'Escape' || key === 'Esc' || key === 27) {
    closeLightbox();
  }

  if (key === 'ArrowLeft' || key === 37 || key === 'Left') {
    // console.log('prev button');
    prevLightbox();
  }

  if (key === 'ArrowRight' || key === 39 || key === 'Right') {
    // console.log('next button');
    nextLightbox();
  }

});




// TOUTCH EVENTS LISTENER

document.addEventListener('touchstart', handleTouchStart, false);
document.addEventListener('touchmove', handleTouchMove, false);



function handleTouchStart(evt) {
  xDown = evt.touches[0].clientX;
  yDown = evt.touches[0].clientY;
};

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;

  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    if (xDiff > 0) {
      // console.log('  /* left swipe */ ');
      prevLightbox();
    } else {
      // console.log('/* right swipe */');
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


// Open lighbox function
function openLighbox(i, url) {
  activeLightbox = i;
  lightbox.setAttribute('src', url);
  backdrop.setAttribute("style", "visibility:visible;opacity:0.9");
  setTimeout(function() {
    lightboxCon.setAttribute("style", "transform:scale(1);");
  }, 1000);
}


// Close lighbox function
function closeLightbox() {
  backdrop.removeAttribute("style", "visibility:visible;opacity:1");
  lightboxCon.removeAttribute("style", "transform:scale(1);");
  setTimeout(function() {
    lightbox.removeAttribute('src')
  }, 1000)
}




// Prev lighbox function
function prevLightbox() {
  activeLightbox--;
	// console.log(activeLightbox);
  if (activeLightbox < 0) {
    activeLightbox = fotoList.length - 1;
  }
  // console.log(activeLightbox);
  url = fotoList[activeLightbox];
	// console.log(url);
  loader.setAttribute("style", "opacity:1!important");
  prgrmLoader();
}




// Next lighbox function
function nextLightbox() {
  activeLightbox++;
  if (activeLightbox > fotoList.length - 1) {
    activeLightbox = 0;
  }
  // console.log(activeLightbox);
  url = fotoList[activeLightbox];
  loader.setAttribute("style", "opacity:1!important");
  prgrmLoader();
}

// Loader function
function prgrmLoader() {
  objImg = new Image();
  objImg.src = url;
  objImg.onload = function() {
    lightbox.setAttribute('src', url);
    setTimeout(function() {
      loader.removeAttribute("style", "opacity:1!important");
    }, 500);
  }
};



/*=======================================
// "Lightbox Gallry" Progremo module end
/*=======================================*/
