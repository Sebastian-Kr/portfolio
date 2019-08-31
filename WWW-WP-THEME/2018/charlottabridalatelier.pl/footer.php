
<footer id="prgrm-footer" class="">
<div class="container"><div class="row d-flex">

<div class="col-lg-4">
  <a href="<?php echo home_url() ?>"><img class="logo" src="<?php echo get_template_directory_uri() ?>/img/log_stopka.png" alt=""></a>
  <div class="d-none d-lg-block mt30 footer_copyright">
    copyright @ <?php echo get_the_date('Y'); ?> by Charlotta bridal atelier
  </div>
</div>


<div class="col-lg-4">
  <div class="mail_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/home.png" alt="">
    <span>KRAKÓW, UL. DŁUGA 26</span>
  </div>

  <div class="mail_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/tel.png" alt="">
    <a href="tel:+48791780980">+48 791 780 980</a>
  </div>


  <div class="mail_box">
    <img src="<?php echo get_template_directory_uri() ?>/img/mail.png" alt="">
    <a href="mailto:kontakt@charlottabridalatelier.pl">KONTAKT@CHARLOTTABRIDALATELIER.PL</a>
  </div>


  <div class="social_box d-block d-lg-none">
    <a href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/FB.png" alt=""></a>
    <a href="<?php the_field('instagram_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/IN.png" alt=""></a>
  </div>

  <div class="d-block d-lg-none mt30 footer_copyright">
    copyright @ <?php echo get_the_date('Y'); ?> by Charlotta bridal atelier
  </div>
</div>


<div class="col-lg-4 column-3">
  <div class="gallery_menu">
  <span><?php echo __('[:pl]GALERIA:[:en]GALLERY:'); ?></span>
        <a href="<?php echo get_permalink(823) ?>"><?php echo get_the_title(823) ?></a>
        <a href="<?php echo get_permalink(1027) ?>"><?php echo get_the_title(1027) ?></a>
        <a href="<?php echo get_permalink(1032) ?>"><?php echo get_the_title(1032) ?></a>
  </div>

  <div class="social_box d-none d-lg-block">
    <a href="<?php the_field('facebook_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/FB.png" alt=""></a>
    <a href="<?php the_field('instagram_link')?>"><img src="<?php echo get_template_directory_uri() ?>/img/IN.png" alt=""></a>
  </div>
</div>


</div></div>



</footer>
<script src="http://localhost:35729/livereload.js"></script>
<?php wp_footer() ?>
</body>
</html>
