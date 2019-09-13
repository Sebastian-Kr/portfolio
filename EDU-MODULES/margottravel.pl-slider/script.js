
////////////////////////////////////////////////
///////// FULL_SLIDER
////////////////////////////////////////////////



var fotos_php_array = [
  "https://margottravel.pl/wp-content/uploads/2019/02/10a-1.jpg",
  "https://margottravel.pl/wp-content/uploads/2019/02/11a-1.jpg",
  "https://margottravel.pl/wp-content/uploads/2019/02/główne.jpg",
  "https://margottravel.pl/wp-content/uploads/2019/02/2b.jpg",
  "https://margottravel.pl/wp-content/uploads/2019/02/3a-1.jpg",
  "https://margottravel.pl/wp-content/uploads/2019/02/9a-1.jpg",
];



slider('slider_id1', fotos_php_array);



function slider(slider_id, fotos_php_array) {
	var slider = document.getElementById(slider_id);
  console.log(slider);
	if (slider !== null) {
		// Variable declaration
		   var fotos_list = fotos_php_array;
		   var slide_box = document.querySelector('#'+slider_id+'.imgbox_slider .slides_box');
			 var arrow_left = document.querySelector('#'+slider_id+' .arrow-left');
			 // console.log(arrow_left);
		   var arrow_right = document.querySelector('#'+slider_id+' .arrow-right');
		   var activ_foto_index = 0;



		// Create slides all items
		  function add_foto(src, index) {
		    var  new_slide = document.createElement('div')
		    new_slide.classList.add('slide_bg');
		    new_slide.style.backgroundImage = 'url(' + src + ')';
		      slide_box.appendChild(new_slide);
					// console.log('slide add');
		  }

		  window.addEventListener("DOMContentLoaded", function() {
				// console.log('fotos_list = '+fotos_list);
		    fotos_list.forEach(add_foto);
				var first_slide = document.querySelector('#'+slider_id+' .slide_bg');
				// console.log(slide_box);
				// console.log('first_slide deklaracja = ');
				// console.log(first_slide);
				first_slide.classList.add('active_slide');
				// console.log('active class added');
		  }, false);


		  function change_slide(index) {
		    // console.log('zmieniam slajda');
		    slides = document.querySelectorAll('#'+slider_id+' .slides_box .slide_bg');
				// console.log(slider_id+' SLIDES= '+slides);
		   // remove active slide
		    for (var i = 0; i < slides.length; i++) {
		       slides[i].classList.remove('active_slide');
		    }
		  // show new slie
			// console.log(slider_id+' index '+index);
		    slides[index].classList.add('active_slide');
		    // console.log('Slide index = '+index);
		  }


		  function prev_slide(){
				// console.log('change slide');
		    clearInterval(interval);
		    activ_foto_index--;
		    if (activ_foto_index < 0) {activ_foto_index = fotos_list.length-1;}
		    change_slide(activ_foto_index);
		  }

		  function next_slide() {
				// console.log('change slide');
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

	} else {
		console.log('BRAK SLIDERA: '+slider_id);
	}


};
