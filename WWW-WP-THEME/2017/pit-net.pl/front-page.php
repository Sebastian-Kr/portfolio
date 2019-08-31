<?php get_header(); ?>

<?php get_template_part( 'content', 'men2' );?>
<?php get_template_part( 'content', 'slider' );?>



<!-- // /* ====================================
// rotate tiles
// ======================================= */ -->
<section id="rot-tiles">

<div  class="container mt">
<h3>ZAKRES USŁUG</h3>
<hr class="center">
<div class="row">

<div class="col-sm-4">
  <div class="zoombox vpc">
    <a href="http://pit-net.pl/oferta/" class="zoom">
  <div class="item vcc gtiles" style='background-image: url("<?php the_field('pcf-zu-f1');?>")'>
      <div class="item-filtr"></div>
    <h2 class="vc"><?php the_field('pcf-zu-t1'); ?></h2>
    <div class="content vc2">
      <?php the_field('pcf-zu-d1'); ?>
    </div>
  </div>
</a>
  </div>
</div>

<div class="col-sm-4">
  <div class="zoombox vpc">
    <a href="http://pit-net.pl/oferta/" class="zoom">
  <div class="item vcc gtiles" style='background-image: url("<?php the_field('pcf-zu-f2');?>")'>
      <div class="item-filtr"></div>
    <h2 class="vc"><?php the_field('pcf-zu-t2'); ?></h2>
    <div class="content vc2">
      <?php the_field('pcf-zu-d2'); ?>
    </div>
  </div>
</a>
  </div>
</div>

<div class="col-sm-4">
  <div class="zoombox vpc">
    <a href="http://pit-net.pl/oferta/" class="zoom">
  <div class="item vcc gtiles" style='background-image: url("<?php the_field('pcf-zu-f3');?>")'>
      <div class="item-filtr"></div>
    <h2 class="vc"><?php the_field('pcf-zu-t3'); ?></h2>
    <div class="content vc2">
      <?php the_field('pcf-zu-d3'); ?>
    </div>
  </div>
</a>
  </div>
</div>

</div>
<div class="row">

  <div class="col-sm-4">
    <div class="zoombox vpc">
      <a href="http://pit-net.pl/oferta/" class="zoom">
    <div class="item vcc gtiles" style='background-image: url("<?php the_field('pcf-zu-f4');?>")'>
        <div class="item-filtr"></div>
      <h2 class="vc"><?php the_field('pcf-zu-t4'); ?></h2>
      <div class="content vc2">
        <?php the_field('pcf-zu-d4'); ?>
      </div>
    </div>
  </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="zoombox vpc">
      <a href="http://pit-net.pl/oferta/" class="zoom">
    <div class="item vcc gtiles" style='background-image: url("<?php the_field('pcf-zu-f5');?>")'>
        <div class="item-filtr"></div>
      <h2 class="vc"><?php the_field('pcf-zu-t5'); ?></h2>
      <div class="content vc2">
        <?php the_field('pcf-zu-d5'); ?>
      </div>
    </div>
  </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="zoombox vpc vpc">
      <a href="http://pit-net.pl/oferta/" class="zoom">
    <div class="item vcc gtiles" style='background-image: url("<?php the_field('pcf-zu-f6');?>")'>
        <div class="item-filtr"></div>
      <h2 class="vc"><?php the_field('pcf-zu-t6'); ?></h2>
      <div class="content vc2">
        <?php the_field('pcf-zu-d6'); ?>
      </div>
    </div>
  </a>
    </div>
  </div>

</div>

</div>
</section>

<!-- // /* ====================================
// END rotate tiles
// ======================================= */ -->

<?php get_template_part( 'content', 'count' );?>

<section id="paralax1">

<div class="container vcc">
  <div class="glass vcr">
    <div class="vpc">
  <h2>Stawiamy na dokładność</h2>
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
      if (get_the_content()){
                the_content();
      } // end is content statment
        } // end while
      } // end if
      ?>
      </div>
</div></div>

</section>

<!--=======================================
PARTNERS
==========================================-->
<div class="semisepar"></div>
<section id="partners">
  <div class="container">

<h3>NASI PARTNERZY</h3>
<div class="slide-items1 mt">
<div><a href="<?php the_field('pcf-sp-l1'); ?>" rel="index, follow" target="_blank"><img src="<?php the_field('pcf-sp-f1'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l2'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f2'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l3'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f3'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l4'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f4'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l4'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f4'); ?>"></a></div>
<div><a href="<?php the_field('pcf-sp-l4'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f4'); ?>"></a></div>
</div>

</div>



</section>



<?php get_footer(); ?>
