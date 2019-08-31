$(document).ready(function() {

    setCategoryView();
    showInfo();

     $('.small-slider').lightSlider({
        item:3,
        slideMove:3,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
         pause: 6000,
        controls:true,
        prevHtml: 'a',
        nextHtml: 'b',
        pager: false,
        auto:true,
        loop:true,
        responsive : [
            {
                breakpoint:1260,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6
                  }
            },
            {
                breakpoint:800,
                settings: {
                    item:1,
                    slideMove:1,
                    slideMargin:6
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });

  $(".third-prev").click(function () {
      showInfo();
   $(".lSPrev").trigger("click");
  });

  $(".third-next").click(function () {
      showInfo();
   $(".lSNext").trigger("click");
  });

  });
