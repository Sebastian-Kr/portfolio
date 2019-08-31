
    $(document).ready(function()
    {

        var swiper_podst = new Swiper('.swiper-podst', {
        paginationClickable: true,
        slidesPerView: 6,
        spaceBetween: 50,
        loop: true,
        breakpoints: {
            1500: {
                slidesPerView: 5,
                spaceBetween: 40
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            900: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            501: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
        });

        $('#pods-prev').click(function()
        {
            swiper_podst.slidePrev();

            return false;
        });

        $('#pods-next').click(function()
        {
            swiper_podst.slideNext();

            return false;
        });


        var swiper_heavy = new Swiper('.swiper-heavy', {
        paginationClickable: true,
        slidesPerView: 6,
        spaceBetween: 50,
        loop: true,
        breakpoints: {
            1500: {
                slidesPerView: 5,
                spaceBetween: 40
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            900: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            501: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
        });

        $('#heavy-prev').click(function()
        {
            swiper_heavy.slidePrev();

            return false;
        });

        $('#heavy-next').click(function()
        {
            swiper_heavy.slideNext();

            return false;
        });

// ///////////////// PARALLAX

        if($(window).width() > 1030)
        {
            // $('.gravedigger').css('position', 'fixed');
            $('.nurse').css('position', 'fixed');
            // $('.blog').css('position', 'relative');
            $('.kontakt').css('position', 'relative');
            $('.nurse-poj').css('bottom', '-5px');
            $('.main-footer').css('position', 'relative');
            $('#start-person').css('position', 'fixed').css('top', '0px');

            var w_width = $(window).width();

            //var elementOffset = 2150;
            //var elementOffset = $(window).height() + Number(1075); //przed heavy
            var elementOffset = $(window).height() + Number(1375); // przed new eksperyment
            // var elementOffset = $(window).height() + Number(1625);
            //var elementOffset_2 = 2900;
            //var elementOffset_2 = $(window).height() + Number(1850);
            //var elementOffset_2 = $(window).height() + Number(1990); //przed heavy
             var elementOffset_2 = $(window).height() + Number(2290); // przed new eksperyment
            // var elementOffset_2 = $(window).height() + Number(2440);

            if(w_width <= 1500)
            {
                //var elementOffset = $(window).height() + Number(836);
                //var elementOffset = $(window).height() + Number(1130); //przed heavy
                // var elementOffset = $(window).height() + Number(1420); // przed new eksperyment
                var elementOffset = $(window).height() + Number(1670);
                //var elementOffset_2 = $(window).height() + Number(1868); //przed heavy
                // var elementOffset_2 = $(window).height() + Number(2100); // przed new eksperyment
                var elementOffset_2 = $(window).height() + Number(2350);
            }

            if(w_width <= 1300)
            {
                // elementOffset_2 = $(window).height() + Number(1890); // przed new eksperyment
                elementOffset_2 = $(window).height() + Number(2290);
            }

            if(w_width <= 1230)
            {
                // elementOffset = $(window).height() + Number(1180); // przed new eksperyment
                elementOffset = $(window).height() + Number(1500);
            }

            $('.gravedigger').css('bottom', 'none').css('top', elementOffset + 'px');
            $('.nurse').css('bottom', 'none').css('top', elementOffset_2 + 'px');

            $(window).scroll(function ()
            {

                $('.gravedigger').css({
                   'top' : -($(this).scrollTop()/2.25)+Number(elementOffset)+"px"
                });

                if(w_width > 1500)
                {
                    $('.nurse').css({
                       'top' : -($(this).scrollTop()/2.1)+Number(elementOffset_2)+"px"
                    });
                }
                else
                {
                    $('.nurse').css({
                       'top' : -($(this).scrollTop()/2.25)+Number(elementOffset_2)+"px"
                    });
                }

                if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
                {
                    $('#start-person').css({
                       'top' : -($(this).scrollTop()/2.25)+Number(0)+"px"
                    });
                }
            });
        }

        // ///////////////// PARALLAX END



        $('#mobile-menu a').click(function()
        {
            $('#show-menu').click();
        });



        $('section').each(function()
        {
            $('.r-line', this).css('height', $(this).height());
        });


        $(window).resize(function()
        {
            $('section').each(function()
            {
                $('.r-line', this).css('height', $(this).height());
            });
        });




        $('.product-list .product .image, .product-list .product a').click(function()
        {
            var url = $(this).parent().find('a').attr('href');
            location.href = url;
        });







        $('.start .arrow').on('click', function (event)
        {
            event.preventDefault();
            $('html,body').animate({scrollTop: ($(this.hash).offset().top)}, 500);
        });


        if($(window).width() < 768)
        {
            $('nav ul li a').on('click', function (event)
            {
                event.preventDefault();
                $('html,body').animate({scrollTop: ($(this.hash).offset().top + Number(90))}, 500);
            });
        }


        // Cache selectors
        var lastId,
            topMenu = $("#nav"),
            topMenuHeight = topMenu.outerHeight()+15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
              var item = $($(this).attr("href"));
              if (item.length) { return item; }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e){
          var href = $(this).attr("href"),
              offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;

          $('html, body').stop().animate({
              scrollTop: offsetTop
          }, 200);

          e.preventDefault();
        });

        // Bind to scroll
        $(window).scroll(function(){
           // Get container scroll position
           var fromTop = $(this).scrollTop()+topMenuHeight;

           // Get id of current scroll item
           var cur = scrollItems.map(function(){
             if ($(this).offset().top < fromTop)
               return this;
           });
           // Get the id of the current element
           cur = cur[cur.length-1];
           var id = cur && cur.length ? cur[0].id : "";

           if (lastId !== id) {
               lastId = id;
               // Set/remove active class
               menuItems
                 .parent().removeClass("active")
                 .end().filter("[href='#"+id+"']").parent().addClass("active");
           }
        });



// ///////////// START ARROW
        $('.start .arrow').click(function()
        {
            if($(window).width() > 767) { $('#std-nav li a[href="#browar"]').click(); }
            else { $('#mob-nav li a[href="#browar"]').click(); }

            return false;
        });




////////////////// DYNAMIC MENU HIDE/SHOW

    // if($(window).width() > 991)
    // {
    //     var didScroll;
    //     var lastScrollTop = 0;
    //     var delta = 5;
    //     var navbarHeight = $('.main-header').outerHeight();
    //
    //     $(window).scroll(function(event){
    //         didScroll = true;
    //     });
    //
    //     setInterval(function() {
    //         if (didScroll) {
    //             hasScrolled();
    //             didScroll = false;
    //         }
    //     }, 250);

        // function hasScrolled() {
        //     var st = $(this).scrollTop();
        //
        //     // Make sure they scroll more than delta
        //     if(Math.abs(lastScrollTop - st) <= delta)
        //         return;
        //
        //     // If they scrolled down and are past the navbar, add class .nav-up.
        //     // This is necessary so you never see what is "behind" the navbar.
        //     if (st > lastScrollTop && st > navbarHeight){
        //         // Scroll Down
        //         $('.main-header').removeClass('nav-down').addClass('nav-up');
        //     } else {
        //         // Scroll Up
        //         if(st + $(window).height() < $(document).height()) {
        //             $('.main-header').removeClass('nav-up').addClass('nav-down');
        //         }
        //     }
        //
        //     lastScrollTop = st;
        // }


        // $(window).mousemove(function(event)
        // {
        //     if(event.clientY <= 90)
        //     {
        //         if($('.main-header').hasClass('nav-up'))
        //         {
        //             $('.main-header').removeClass('nav-up').addClass('nav-down');
        //         }
        //     }
        // });

        // $('#nav ul li a').click(function()
        // {
        //     $('.main-header').css('top', '0', 'important');
        //
        //     setTimeout(function(){ $('.main-header').removeAttr('style').removeClass('nav-up').addClass('nav-down'); }, 500);
        //
        //     //setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 400);
        //     /*setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 200);
        //     setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 250);
        //     setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 300);
        //     setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 350);
        //     setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 400);
        //     setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 450);
        //     setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 500);*/
        //
        // });
    // }
    ////////////////// DYNAMIC MENU HIDE/SHOW END






    });
