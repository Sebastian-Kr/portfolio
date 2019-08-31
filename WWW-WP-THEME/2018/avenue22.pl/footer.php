

<footer id="prgrm-footer" class="">

<div class="left-box">
  <a href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/LOGO_MENU_DOLNE.png" alt=""></a>
  <div class="mt20">
    copyright @ <?php echo the_date('Y'); ?> by AVENUE | 22
  </div>
</div>



<div class=" right-box">

<div class="gallery_menu">
  <a href="<?php echo get_permalink(823) ?>"><?php echo __('[:pl]GALERIA[:en]GALLERY'); ?></a>


    <a href="<?php echo get_permalink(803) ?>"><?php echo get_the_title(803) ?></a>
    <a href="<?php echo get_permalink(941) ?>"><?php echo get_the_title(941) ?></a>
    <a href="<?php echo get_permalink(944) ?>"><?php echo get_the_title(944) ?></a>
    <a href="<?php echo get_permalink(947) ?>"><?php echo get_the_title(947) ?></a>
      <a href="<?php echo get_permalink(1240) ?>"><?php echo get_the_title(1240) ?></a>
      <a href="<?php echo get_permalink(1283) ?>"><?php echo get_the_title(1283) ?></a>
      <a href="<?php echo get_permalink(1287) ?>"><?php echo get_the_title(1287) ?></a>

</div>

<div class="mail_box">
  <img src="<?php echo get_template_directory_uri() ?>/img/EM_icona_mail.png" alt="">
  <a href="mailto:kontakt@avenue22.pl">KONTAKT@AVENUE22.PL</a>
</div>



</div>

</footer>


<?php wp_footer() ?>
</body>
</html>
