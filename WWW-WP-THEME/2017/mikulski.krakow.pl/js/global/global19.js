
$(document).ready(function() {
  $('.first-slider').lightSlider({
      item:4,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      controls:true,
      prevHtml: '',
      nextHtml: '',
      pager: false,
      responsive : [
          {
              breakpoint:1200,
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
  $('.second-slider').lightSlider({
      item:4,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      controls:true,
      prevHtml: '',
      nextHtml: '',
      pager: false,
      responsive : [
                 {
              breakpoint:1200,
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
  $('.third-slider').lightSlider({
      item:4,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      controls:true,
      prevHtml: '',
      nextHtml: '',
      pager: false,
      responsive : [
                 {
              breakpoint:1200,
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

  $('.fourth-slider').lightSlider({
      item:4,
      loop:false,
      slideMove:2,
      easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
      speed:600,
      controls:true,
      prevHtml: '',
      nextHtml: '',
      pager: false,
      responsive : [
          {
              breakpoint:1200,
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

  $(".prev").click(function () {
 $(".first .lSPrev").trigger("click");
});
$(".next").click(function () {
 $(".first .lSNext").trigger("click");
});

  $(".second-prev").click(function () {
 $(".second .lSPrev").trigger("click");
});
$(".second-next").click(function () {
 $(".second .lSNext").trigger("click");
});

  $(".third-prev").click(function () {
 $(".third .lSPrev").trigger("click");
});
$(".third-next").click(function () {
 $(".third .lSNext").trigger("click");
});

  $(".fourth-prev").click(function () {
      $(".fourth .lSPrev").trigger("click");
  });
  $(".fourth-next").click(function () {
      $(".fourth .lSNext").trigger("click");
  });

   // Initialize the plugin
   $('.news-info').popup({
     opacity: 0.3,
     transition: 'all 0.3s'
   });

  $(".more").click(function() {
    var iId = $(this).attr('id');
    $('#window_'+iId).popup('show');
    // window.history.pushState("object", "aktualnosci", "/aktualnosci/#"+iId);
  });


});
