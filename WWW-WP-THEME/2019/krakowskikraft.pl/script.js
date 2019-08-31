


  $(document).ready(function() {
// SEKCJE HIDE SHOW




    // MENU MOBILE

    var menu_button = document.querySelector('.menu-button');
    var nav_icon2 = document.querySelector('#nav-icon2');
    var menu_dropdown_box = document.querySelector('.menu-dropdown-box');
    var menu_blackdrop = document.querySelector('.menu-blackdrop');
    var menu_items = document.querySelectorAll('.main-menu-mobile a');

    function toggle_menu() {
      nav_icon2.classList.toggle('open');
      menu_dropdown_box.classList.toggle('open');
      menu_blackdrop.classList.toggle('open');
    }

    menu_button.addEventListener('click', function(){
        toggle_menu();
    });

    menu_blackdrop.addEventListener('click', function(){
        toggle_menu();
    });

    //
    // menu_item.addEventListener('click', function(){
    // });

    for (var i = 0; i < menu_items.length; i++) {
    	menu_items[i].addEventListener('click', function (event) {
        toggle_menu();
    	}, false);
    }



    // UNIVERSAL SCROLL BUTTON

    var scroll_buttons = $('.scroll-button');
    if (scroll_buttons) {
      // console.log('find-buttons');
      scroll_buttons.each(function(){
        $(this).on("click", function(){
  console.log('scroll');
          var $el = $(this);
          var targetID = $(this).attr("data-target");
          var target2  = $('#'+targetID);
          // console.log(target2);

          $('html, body').animate({
            scrollTop: target2.offset().top - nav_height + 1
          }, 500);

          return false;

        })
      });
    };
    // UNIVERSAL SCROLL BUTTON END

    // ONE PAGE MENU BEGIN
  if ($(window).width() > 991) {

    // TRANSFORM MENU BAR AFTER SCROLL

    var $document = $(document),
      $element = $('header.main-menu-desktop'),
      className = 'scroll';

  $document.scroll(function() {
    $element.toggleClass(className, $document.scrollTop() >= 50);
  });





    // ADD ACTIVE-CLASS AFTER SCROLL PAGE  //
      var menuSections = $('.menuSection'),
        nav = $('nav'),
        nav_height = 15,
        menu_container = $('.main-menu-desktop');
        var window_top = true;

      $(window).on('scroll', function() {
        var cur_pos = $(this).scrollTop();


        menuSections.each(function() {
          var top = $(this).offset().top - nav_height - 100,
            bottom = top + $(this).outerHeight();

          if (cur_pos >= top && cur_pos <= bottom) {

            nav.find('a').removeClass('activeItem');
            nav.find('a[data-activeSection="' + $(this).attr('id') + '"]').addClass('activeItem');

          }
        });

      });




  	// ADD ACTIVE-CLASS AFTER CLICK MENU
  	$('.main-menu-desktop nav a[href*="#"]').click(function(event){
    var selector = location.hash;
    var target = $(selector);
    console.log(target);
     $(this).addClass('activeItem');
  	 $(this).siblings().removeClass('activeItem');
  	});



  }; // ONE PAGE MENU END



  });



  ///////////////////////////////////// View animation checker on scroll


    $(document).ready(function() {
  $('.animate2').addClass( 'anime_show' );
  $('.animate3').addClass( 'anime_show3' );

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
        var posFromTop = elems[i].getBoundingClientRect().top + 100;
        if (posFromTop - windowHeight <= 0) {
          elems[i].className = elems[i].className.replace('animate', 'fadeInUp')
        }
      }
    }
    return {
      init: init

    }
  }
  animateHTML().init()

  });
