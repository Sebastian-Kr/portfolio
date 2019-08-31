<footer>
<a id="kontakt-hook" name="kontakt"></a>
        <div class="hr2">
            <div>

            </div>
        </div>
        <section class="b-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-lg-5">


                         <?php dynamic_sidebar('footer5'); ?>

                    </div>
                    <div class="col-md-9 col-lg-7">


                        <div id="contact-form">
                       <?php echo do_shortcode('[contact-form-7 id="415" title="Formularz 1"]'); ?>
                       </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT -->
        <section class="r-section">

            <div class="container-fluid">
                <div><span>Spółki z grupy OPC</span></div>
                <div class="row">
                    <div class="col-md-3 offset-md-1">
                        <?php dynamic_sidebar('footer1'); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar("footer2"); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar("footer3"); ?>
                    </div>
                    <div class="col-md-3">
                        <?php dynamic_sidebar("footer4"); ?>
                    </div>
                </div>
            </div>
        </section>





    </footer>



   <?php wp_footer(); ?>

   <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyALpnLaIcUwvk7J2WaLbOQS76muPalqmf4"></script>

       


<!--/*STR STICKY MENU */-->
<?php if (is_front_page()): ?>


<script>

$("document").ready(function() {

$(window).scroll(function(){

    if ($(this).scrollTop() > 1){

$("#wrapper").addClass("bg-nav");
$("#home-menu-logo").css("display","block");
$(".hr-hidden").css("display","block");
}

if($(this).scrollTop() < 1) {
    $("#wrapper").removeClass("bg-nav");
    $("#home-menu-logo").css("display", "none");
    $(".hr-hidden").css("display", "none");
}
});
});


</script>
<?php endif; ?>
<!--/*END STICKY MENU*/-->



<!-- /*STR CONTACT SCROLL */    -->
<script>



  function scroll_to(selector) {
    $('html,body').animate({scrollTop: $(selector).offset().top}, 1000);
     $("#wrapper").toggleClass("active");
    return false;

}

</script>
<!-- /*END CONTACT SCROLL */    -->


<script>


    /*Menu-toggle*/
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });


</script>


<?php if (is_page(20)): ?>
  <script type="text/javascript">
      $(document).ready(function(){
          var styles = [
              {
                  stylers: [
                      { hue: "gray" },
                      { saturation: -100 }
                  ]
              },
              {
                  featureType: "road",
                  elementType: "geometry",
                  stylers: [
                      { lightness: 50 },
                      { visibility: "simplified" }
                  ]
              },
              {
                  featureType: "road",
                  elementType: "labels",
                  stylers: [
                      { visibility: "on" },
                      { lightness: 50 },
                      { hue: "#1d94d5" }
                  ]
              }
    ];


       $("#map").gmap3({
    map:{
      options:{
     key: 'AIzaSyALpnLaIcUwvk7J2WaLbOQS76muPalqmf4',
            //  center:[50.133664, 19.628180],
             center:[<?php echo the_field('center_gps1') ?>, <?php echo the_field('center_gps2') ?>],
             zoom: <?php echo the_field('map_zoom') ?>,
             styles: styles,
             scrollwheel: false,
      navigationControl: false,
      mapTypeControl: false,
      scaleControl: false,
      draggable: true
      }
    },
    marker:{
      values:[


        <?php

      if( have_rows('all_pins') ):
          while ( have_rows('all_pins') ) : the_row();
              $gps1 = get_sub_field('gps1');
              $gps2 = get_sub_field('gps2');
              $desc = get_sub_field('desc');
              $pin_icon = get_sub_field('pin_icon');
              echo '{latLng:['.$gps1.', '.$gps2.'], data: "'.$desc.'", options:{icon: "'.$pin_icon.'"}},';
          endwhile;
      endif;
      ?>

      ],
      options:{
        draggable: false
      },
      events:{
        mouseover: function(marker, event, context){
          var map = $(this).gmap3("get"),
            infowindow = $(this).gmap3({get:{name:"infowindow"}});
          if (infowindow){
            infowindow.open(map, marker);
            infowindow.setContent(context.data);
          } else {
            $(this).gmap3({
              infowindow:{
                anchor:marker,
                options:{content: context.data}
              }
            });
          }
        },

      }
    }
  });

      });

  </script>
<?php endif; ?>





</body>
</html>
