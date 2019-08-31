
  $(document).ready(function () {
      var slider = $('#first-slider').bxSlider({
          mode: 'vertical',
          controls: false,
          pager: false,
          auto: true,
          minSlides: 5,
          moveSlides: 1,
          slideWidth: 600,
          speed:500,
          pause:6000,
          onSliderLoad: function () {
              $('#first-slider>div:not(.bx-clone)').eq(2).addClass('active-slide');
          },
          onSlideAfter: function ($slideElement, oldIndex, newIndex) {
              $('#first-slider').find('.box').removeClass('active-slide');
              $($slideElement).next().next().addClass('active-slide');
          }
      });

      var slider2 = $('#second-slider').bxSlider({
          mode: 'vertical',
          controls: false,
          pager: false,
          auto: true,
          minSlides: 5,
          moveSlides: 1,
          slideWidth: 600,
          speed:500,
          pause:6000,
          onSliderLoad: function () {
              $('#second-slider>div:not(.bx-clone)').eq(2).addClass('active-slide');
          },
          onSlideAfter: function ($slideElement, oldIndex, newIndex) {
              $('#second-slider').find('.box').removeClass('active-slide');
              $($slideElement).next().next().addClass('active-slide');
          }
      });

  });
