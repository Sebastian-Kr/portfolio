// AUTOR: Sebastian Krajewski Progremo.pl


// POPUP BOX

var body_glass2 = document.querySelector('.body_glass2');
if (body_glass2) {
  body_glass2.addEventListener('click', function() {
    body_glass2.classList.add('fadeOut');
    setInterval(function(){ body_glass2.remove(); }, 1000);

  });
}
// POPUP BOX END




//MAIN MENU
var menu_container= document.querySelector('#menu_container')
var body_glass = document.querySelector('.body_glass');
var nav_icon2 =document.querySelector('#nav-icon2');

nav_icon2.addEventListener('click', function(){
scroll_menu();
});
body_glass.addEventListener('click', function(){
scroll_menu();
});

function scroll_menu(){
  nav_icon2.classList.toggle('open');
  body_glass.classList.toggle('display');
  menu_container.classList.toggle('open-menu');
};

//MAIN MENU END





// FULL_SLIDER

// Variable declaration
var fotos_list = fotos_php_array;
var opis1_list = opis1_php_array;
var opis2_list = opis2_php_array;
console.log(fotos_list);
console.log(opis1_list);
console.log(opis2_list);

    slide_box = document.querySelector('.slides_box');
    arrow_left = document.querySelector('.arrow-left');
    arrow_right = document.querySelector('.arrow-right');
    activ_foto_index = 0;



// Create slides items
  function add_foto(src, index) {

    var  new_slide = document.createElement('div')
    new_slide.classList.add('slide_bg');

    var  new_slide_img = document.createElement('img')
    new_slide_img.src = src;
    new_slide_img.classList.add('logo');
    new_slide.appendChild(new_slide_img);


    var  new_slide_content1 = document.createElement('div')
    new_slide_content1.classList.add('content1');
    new_slide.appendChild(new_slide_content1);


    var  new_slide_content1_collection = document.createElement('h3')
    new_slide_content1_collection.classList.add('collection');
      new_slide_content1_collection.innerHTML = opis1_list[index];
    new_slide_content1.appendChild(new_slide_content1_collection);


// Create new contetnt2 for testimonials
    var  new_slide_content2 = document.createElement('div')
    new_slide_content2.classList.add('content2');
    new_slide.appendChild(new_slide_content2);


    var  new_slide_content2_collection = document.createElement('h3')
    new_slide_content2_collection.classList.add('collection');
      new_slide_content2_collection.innerHTML = opis2_list[index];
    new_slide_content2.appendChild(new_slide_content2_collection);




    new_slide.style.backgroundImage = 'url(' + src + ')';
      slide_box.appendChild(new_slide);

  }

  window.addEventListener("DOMContentLoaded", function() {
    fotos_list.forEach(add_foto);
    				var first_slide = document.querySelector('.full_slider .slide_bg');
    			first_slide.classList.add('active_slide');
  }, false);


  function change_slide(index) {
    // console.log('zmieniam slajda');
    slides = document.querySelectorAll('.slides_box .slide_bg');
   // remove active slide
    for (var i = 0; i < slides.length; i++) {
       slides[i].classList.remove('active_slide');
    }
  // show new slie
    slides[index].classList.add('active_slide');
    // console.log('Slide index = '+index);
  }


  function prev_slide(){
    clearInterval(interval);
    activ_foto_index--;
    if (activ_foto_index < 0) {activ_foto_index = fotos_list.length-1;}
    change_slide(activ_foto_index);
  }

  function next_slide() {
    clearInterval(interval);
    activ_foto_index++;
    if (activ_foto_index > fotos_list.length-1) {activ_foto_index = 0;}
    change_slide(activ_foto_index);
  }
  function auto_next_slide() {
    activ_foto_index++;
    if (activ_foto_index > fotos_list.length-1) {activ_foto_index = 0;}
    change_slide(activ_foto_index);
  }


var interval;
function auto_slide() {
    interval = setInterval(function() {auto_next_slide()}, 4000);
}
auto_slide();

arrow_left.addEventListener('click', prev_slide);
arrow_right.addEventListener('click', next_slide);

// Mobile event gallery
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
          prev_slide();
        } else {
            console.log('/* right swipe */');
              next_slide();
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
// FULL_SLIDER END
