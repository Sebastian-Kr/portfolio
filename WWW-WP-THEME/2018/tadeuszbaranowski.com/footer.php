

<footer id="prgrm-footer" class="">

<div class="container-fluid">
<div class="row mt40">
<img src="<?php echo get_template_directory_uri() ?>/img/tadeusz_baranowski_stopka.svg" alt="">

<div class="col-md-12 footer_content">

<div class="footer_menu">

  <a <?php if (get_the_ID()==6) {echo 'class="current-menu-item"';} ?> href="<?php echo get_permalink('6') ?>"><?php echo __('HOME'); ?></a>
  <a <?php if (get_the_ID()==16) {echo 'class="current-menu-item"';} ?> href="<?php echo get_permalink('16') ?>"><?php echo __('ATELIER'); ?></a>
  <a <?php if (get_the_ID()==412) {echo 'class="current-menu-item"';} ?> href="<?php echo get_permalink('412') ?>"><?php echo __('[:pl]O MNIE[:en]ABOUT ME'); ?></a>
 <a <?php if (get_the_ID()==436) {echo 'class="current-menu-item"';} ?> href="<?php echo get_permalink('436') ?>"><?php echo __('[:pl]WYSTAWY[:en]EXHIBITIONS'); ?></a>
 <a <?php if (get_the_ID()==23) {echo 'class="current-menu-item"';} ?> href="<?php echo get_permalink('23') ?>"><?php echo __('[:pl]KONTAKT[:en]CONTACT'); ?></a>
</div>


<div class="footer_contact">
  <a href="tel:<?php the_field('telefon', 23)?>">
<img src="<?php echo get_template_directory_uri() ?>/img/TEL_icona_stopka_mala.png" alt="">
    <?php the_field('telefon', 23)?></a>
  <a href="mailto:<?php the_field('email', 23)?>">
<img src="<?php echo get_template_directory_uri() ?>/img/EM_icona_stopka_mala.png" alt="">
    <?php the_field('email', 23)?></a>
</div>


<div class="footer_social">
  <a  class="mobi_text_hide" href="<?php the_field('link_facebook', 23)?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/FB_icona_stopka_mala.png" alt="">
    <span >Facebook</span></a>

  <a  class="mobi_text_hide" href="<?php the_field('link_instagram', 23)?>">
    <img src="<?php echo get_template_directory_uri() ?>/img/IN_icona_stopka_mala.png" alt="">
    <span >Instagram</span></a>
</div>

</div></div></div>

<div class="container-fluid mt50"><div id="copyright" class="row">
<div class="col-lg-12">

  <div style="float: left">copyright © <?php echo date("Y") ?> by Tadeusz Baranowski</div>
  <div class="autor" style="float: right">
    <a href="http://emiliawojcik.pl/">design by art-e </a>
<a href="http://progremo.pl/">  powered by progremo </a>
  </div>
</div>
</div>
</div>

</footer>
<?php wp_footer(); ?>
<!-- <script src="http://localhost:35729/livereload.js">  </script> -->

</body>
</html>
