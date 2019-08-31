

<footer id="prgrm-footer" class="">

<div class="container">

<div class="row logo">

<div class="row mt40">



  <div id="col1" class="col-lg-3 col-sm-6 ">
    <?php echo the_field('stopka_kolumna_1', 52) ?>
  </div>

  <div id="col2" class="col-lg-3 col-sm-6 social_icon">
    <p><strong>Obserwuj nas na:</strong></p>

    <a href="https://www.facebook.com/pracowniagrafor"><div><img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-kosz-facebook.svg" alt="Grafor - krakowski kurs rysunku przygotowujący ASP"><p>Facebook</p></div></a>
    <a href="https://plus.google.com/104149770143286866613"><div><img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-kosz-google.svg" alt="Grafor - krakowski kurs malarstwa pod ASP"><p>Google+</p></div></a>
  </div>

<div id="col3" class="col-lg-4 col-sm-6 ">
  <?php echo the_field('stopka_kolumna_3', 52) ?>
</div>


  <div id="col4" class="col-lg-2 col-sm-6 ">
<p><strong>Najczęściej zadawane pytania</strong></p>
<a href="<?php echo home_url() ?>/blog" ?>"><div class="btn btn-secondary">Sprawdź FAQ</div></a>
  </div>


<div class="container mt50"><div id="copyright" class="row">
<div class="col-lg-12">
  <img src="<?php echo get_template_directory_uri()?>/img/grafor-kurs-rysunku-i-malarstwa-krakow-logo-white.png" alt="Grafor - kurs rysunku ASP">
  <div style="float: left">© <?php echo the_date('Y') ?> - Pracownia Grafor. All rights reserved.</div>
  <div style="float: right"> <a target="blank" href="<?php echo home_url()?>/sitemap">Mapa witryny</a> | <a href="http://wszystkoociasteczkach.pl/">Polityka prywatności</a></div>
</div>
</div></div>
</footer>





<?php wp_footer(); ?>



<?php if (is_page(17)): ?>
  <script type="text/javascript">
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
  </script>
<?php endif; ?>


<?php if (is_front_page()): ?>
<script type="text/javascript">
  $( document ).ready(function() {

    if (screen.width < 568) {
      var bg_slide1 = '<?php if (get_field('progremo_slide-img1_mobile')) {echo the_field('progremo_slide-img1_mobile');} else  {echo get_field('progremo_slide-img1');}?>';
      var bg_slide2 = '<?php if (get_field('progremo_slide-img2_mobile')) {echo the_field('progremo_slide-img2_mobile');} else  {echo get_field('progremo_slide-img2');}?>';
      var bg_slide3 = '<?php if (get_field('progremo_slide-img3_mobile')) {echo the_field('progremo_slide-img3_mobile');} else  {echo get_field('progremo_slide-img3');}?>';
  }
  else {
    var bg_slide1 = '<?php echo get_field('progremo_slide-img1')?>';
    var bg_slide2 = '<?php echo get_field('progremo_slide-img2')?>';
    var bg_slide3 = '<?php echo get_field('progremo_slide-img3')?>';
  }
    $("#bg_slide1").css("background-image", 'url("' + bg_slide1 + '")');
    $("#bg_slide2").css("background-image", 'url("' + bg_slide2 + '")');
    $("#bg_slide3").css("background-image", 'url("' + bg_slide3 + '")');
});
</script>
<?php else: ?>
<?php
$post_id = get_the_ID();
if (in_category('nasze-kursy')) {
  $post_id = 8;
}
elseif (in_category('blog')) {
  $post_id = 673;
}
else $postid = get_the_ID();
 ?>

  <script type="text/javascript">
    $( document ).ready(function() {

      if (screen.width < 568) {
        var bg_header = '<?php if (get_field('img_mobile_header', $post_id)) {echo the_field('img_mobile_header', $post_id);} else  {echo get_the_post_thumbnail_url($post_id) ;}?>';
    }
    else {
      var bg_header = '<?php echo get_the_post_thumbnail_url($post_id) ?>';
    }
      $(".bgheader").css("background-image", 'url("' + bg_header + '")');
  });
  </script>


<?php endif; ?>

</script>
</body>
</html>
