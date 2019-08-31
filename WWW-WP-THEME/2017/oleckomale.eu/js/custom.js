// AUTOR: Sebastian Krajewski Progremo.pl


//MAIN MENU
var prgrm_mobile_menu_container= document.querySelector('#prgrm_mobile_menu_container')
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
  prgrm_mobile_menu_container.classList.toggle('open-menu');
};

//MAIN MENU END





// FULL_SLIDER

// Variable declaration
var fotos_list = fotos_php_array;
    slide_box = document.querySelector('.slides_box');
    arrow_left = document.querySelector('.arrow-left');
    arrow_right = document.querySelector('.arrow-right');
    activ_foto_index = 0;



// Create slides items
  function add_foto(src, index) {

    var  new_slide = document.createElement('div')
    new_slide.classList.add('slide_bg');
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


// FULL_SLIDER END
