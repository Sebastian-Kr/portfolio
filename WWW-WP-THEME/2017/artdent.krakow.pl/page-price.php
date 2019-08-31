<?php
/*
Template Name: Cennik
*/

?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'main' );?>

<!-- MAIN CONTENT  -->
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post();


if (get_the_content()){
echo '<div class=" container">';
          the_content();
echo '</div>';
} // end is content statment


  } // end while
} // end if
?>
<!-- END MAIN CONTENT -->

<!--  oferta -->
<section id="offer-hide">

  <div class="container">
<div class="row main-content">


<?php if (get_field('pcf26')): ?>
  <div class="offer-part">
    <div class="offer-head offer-head-open" data-panelid="panel28"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf26') ?></div>
    <div id="panel28" class="offer-dest" data-panelid="panel28"><?php the_field('pcf27') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf28')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel29"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf28') ?></div>
    <div id="panel29" class="offer-dest" data-panelid="panel29"><?php the_field('pcf29') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf30')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel30"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf30') ?></div>
    <div id="panel30" class="offer-dest" data-panelid="panel30"><?php the_field('pcf31') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf32')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel31"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf32') ?></div>
    <div id="panel31" class="offer-dest" data-panelid="panel31"><?php the_field('pcf33') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf34')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel32"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf34') ?></div>
    <div id="panel32" class="offer-dest" data-panelid="panel32"><?php the_field('pcf35') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf36')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel33"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf36') ?></div>
    <div id="panel33" class="offer-dest" data-panelid="panel33"><?php the_field('pcf37') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf38')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel34"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf38') ?></div>
    <div id="panel34" class="offer-dest" data-panelid="panel34"><?php the_field('pcf39') ?></div>
  </div>

<?php endif; ?>

<?php if (get_field('pcf40')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel35"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf40') ?></div>
    <div id="panel35" class="offer-dest" data-panelid="panel35"><?php the_field('pcf41') ?></div>
  </div>
<?php endif; ?>



<?php if (get_field('pcf42')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel36"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf42') ?></div>
    <div id="panel36" class="offer-dest" data-panelid="panel36"><?php the_field('pcf43') ?></div>
  </div>
<?php endif; ?>


<?php if (get_field('pcf44')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel37"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf44') ?></div>
    <div id="panel37" class="offer-dest" data-panelid="panel37"><?php the_field('pcf45') ?></div>
  </div>
<?php endif; ?>


<?php if (get_field('pcf46')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel38"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf46') ?></div>
    <div id="panel38" class="offer-dest" data-panelid="panel38"><?php the_field('pcf47') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf48')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel39"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf48') ?></div>
    <div id="panel39" class="offer-dest" data-panelid="panel39"><?php the_field('pcf49') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf50')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel40"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf50') ?></div>
    <div id="panel40" class="offer-dest" data-panelid="panel40"><?php the_field('pcf51') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf52')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel41"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf52') ?></div>
    <div id="panel41" class="offer-dest" data-panelid="panel41"><?php the_field('pcf53') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf54')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel42"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf54') ?></div>
    <div id="panel42" class="offer-dest" data-panelid="panel42"><?php the_field('pcf55') ?></div>
  </div>
<?php endif; ?>

<?php if (get_field('pcf56')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel43"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf56') ?></div>
    <div id="panel43" class="offer-dest" data-panelid="panel43"><?php the_field('pcf57') ?></div>
  </div>
<?php endif; ?>


<?php if (get_field('pcf58')): ?>
  <div class="offer-part">
    <div class="offer-head" data-panelid="panel44"><span class="glyphicon glyphicon glyphicon-hand-right" aria-hidden="true"></span><?php the_field('pcf58') ?></div>
    <div id="panel44" class="offer-dest" data-panelid="panel44"><?php the_field('pcf59') ?></div>
  </div>
<?php endif; ?>




</div>
  </div>
</section>
<!-- oferta end -->

<!-- END MAIN CONTENT -->
<div class="semisepar"></div>

<?php get_template_part( 'content', 'theme'); ?>
<?php get_footer(); ?>
