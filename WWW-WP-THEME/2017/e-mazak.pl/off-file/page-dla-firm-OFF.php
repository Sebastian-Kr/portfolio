<?php
/*
Template Name: Dla firm -- OFF
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>


<!--  oferta -->
<section id="offer-hide">

  <div class="container">
<div class="row main-content">
    <div class="hrcont">
    <h2>ZAKRES USŁUG</h2>
    <hr class="left gold">
    </div>



  <div class="offer-part">

    <div class="offer-head" data-panelid="panel28"><?php the_field('pcf26') ?></div>
    <div id="panel28" class="offer-dest"><?php the_field('pcf27') ?></div>
  </div>

  <div class="offer-part">
    <div class="offer-head" data-panelid="panel29"><?php the_field('pcf28') ?></div>
    <div id="panel29" class="offer-dest"><?php the_field('pcf29') ?></div>
  </div>

  <div class="offer-part">
    <div class="offer-head" data-panelid="panel30"><?php the_field('pcf30') ?></div>
    <div id="panel30" class="offer-dest"><?php the_field('pcf31') ?></div>
  </div>


  <div class="offer-part">
    <div class="offer-head" data-panelid="panel31"><?php the_field('pcf32') ?></div>
    <div id="panel31" class="offer-dest"><?php the_field('pcf33') ?></div>
  </div>


  <div class="offer-part">
    <div class="offer-head" data-panelid="panel32"><?php the_field('pcf34') ?></div>
    <div id="panel32" class="offer-dest"><?php the_field('pcf35') ?></div>
  </div>

  <div class="offer-part">
    <div class="offer-head" data-panelid="panel33"><?php the_field('pcf36') ?></div>
    <div id="panel33" class="offer-dest"><?php the_field('pcf37') ?></div>
  </div>



</div>
  </div>
</section>
<!-- oferta end -->



<?php get_template_part('special_section/content', 'generator') ?>





  <?php get_footer(); ?>
