
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
var fotos_list = fotos_php_array;
    slide1 = document.getElementById('slide1');
    slide2 = document.getElementById('slide2');
    slide3 = document.getElementById('slide3');
    slides = document.querySelector('.slide_bg')
    arrow_left = document.querySelector('.arrow-left');
    arrow_right = document.querySelector('.arrow-right');
    activ_foto_index = 0;

    activ_foto_src = null;
    prev_foto_src = null;
    next_foto_src = null;

    prev_img = null;
    next_img = null;

    prev_index = null;
    next_index = null;
    load_image(0);

arrow_left.addEventListener('click', function(){
activ_foto_index--;
if (activ_foto_index < 0) {activ_foto_index = fotos_list.length-1;}
change_slide(activ_foto_index);
load_image(activ_foto_index);
});

arrow_right.addEventListener('click', function(){
activ_foto_index++;
if (activ_foto_index > fotos_list.length-1) {activ_foto_index = 0;}
change_slide(activ_foto_index);
load_image(activ_foto_index);
});

function change_slide(index) {

  console.log('zmieniam slajda');
  activ_foto_src = fotos_list[index];
  console.log(activ_foto_src);
  // background_string = '"url(\''+activ_foto_src+'\')"'
  // console.log(background_string);
  // slider_bg.style.backgroundImasge = '';
  slider_bg.style.backgroundImage = 'url(' + activ_foto_src + ')';
  // slider_bg.style.display = 'none';
  // slider_bg.style.background-image = background_string;
}

function load_image(index) {

  console.log('index = '+index);
      prev_index = index - 1;
      if (prev_index < 0) {prev_index = fotos_list.length-1;}

      prev_foto_src = fotos_list[prev_index];
      prev_img = document.createElement('img');
      prev_img.src = prev_foto_src;
      // document.querySelector('.prev_img').appendChild(prev_img);
      console.log('prev_index ='+prev_index);

      next_index = index + 1;
      if (next_index > fotos_list.length-1) {next_index = 0;}

      console.log('next_index ='+next_index);
      next_foto_src = fotos_list[1];
      next_img = document.createElement('img');
      next_img.src = next_foto_src;
      // document.querySelector('.next_img').appendChild(next_img);
}



// FULL_SLIDER END
