

<footer id="prgrm-footer" class="">

<section class="top_footer" style="background-image: url('<?php echo get_the_post_thumbnail_url(261) ?>')">
  <div class="container">
  <div class="row">


<div class="col-md-5">

<?php the_field('kolumna_1', 261)?>

</div>

<div class="col-md-4 mt30 scroll_menu" >
  <a href="<?php  echo home_url();?>/#okonferencji"><?php echo __('[:pl]O Konferencji[:en]About the Conference'); ?></a>
  <a href="<?php  echo home_url();?>/#kategorieprezentacji"><?php echo __('[:pl]Kategorie Prezentacji[:en]Presentation categories'); ?></a>
  <a href="<?php  echo home_url();?>/#tematysesji"><?php echo __('[:pl]Tematy Sesji[:en]Session topics'); ?></a>
  <a href="<?php  echo home_url();?>/#nagrody"><?php echo __('[:pl]Nagrody[:en]Awards'); ?></a>
  <a href="<?php  echo home_url();?>/#program"><?php echo __('[:pl]Program[:en]Program'); ?></a>
  <a href="<?php  echo home_url();?>/#prelegenci"><?php echo __('[:pl]Prelegenci[:en]Speakers'); ?></a>
  <a href="<?php  echo home_url();?>/#rejestracja"><?php echo __('[:pl]ZAREJESTRUJ SIĘ![:en]REGISTER'); ?></a>
  <a href="<?php  echo home_url();?>/#partnerzy"><?php echo __('[:pl]Partnerzy[:en]Partners'); ?></a>
  <a href="<?php  echo home_url();?>/#wolontariat"><?php echo __('[:pl]Wolontariat[:en]Volunteers'); ?></a>

  <a class="mt20" href="#"><?php echo __('[:pl]O Krakowie[:en]About Krakow'); ?></a>
  <a href="#"><?php echo __('[:pl]Zarezerwuj Hotel[:en]Book Hotel'); ?></a>
</div>

<div class="col-md-3 mt30">
<?php the_field('kolumna_3', 579)?>
</div>

  </div>

  </div>
</section>

<section class="bottom_footer mb30" >
  <div class="container  mt50">
    <div class="row">

<div class="col-md-12">
<?php the_field('social_media', 579)?>
</div>


    </div>
  <div id="copyright" class="row">
  <div class="col-lg-12">

    <div style="float: left">© 2018 - copyright. All rights reserved.</div>

      <div class="autor" style="float: right">
          <a href="http://emiliawojcik.pl/">design by art-e </a>
      <a href="http://progremo.pl/">  powered by progremo </a>
        </div>

  </div>
  </div>
  </div>
</section>

</footer>

<?php wp_footer(); ?>



<!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>
