<?php
/*
Template Name: Oferta
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

<div class="semisepar"></div>
<section id="doradca">

<div class="container-fluid"><div class="row bordo">
  <div class="col-sm-5 bg" style="background-image: url('<?php the_field('pcf-of-f') ?>')"></div>
  <div class="col-sm-7 bordo2">
    <h3>DORADCA PODATKOWY</h3>
    <hr class="left gold">
    <p><?php the_field('pcf-of-desc') ?></p>
  </div>



</div></div>

<div class="container mt">

  <div class="row iconrow1 mt">
  <h2>CO ZYSKUJESZ KORZYSTAJĄC Z USŁUG DORADCY PODATKOWEGO?</h2>
    <div class="col-sm-3 col-xs-6 text">
      <div class="icon icon1"></div>

      <h4><?php the_field('pcf-icon1'); ?></h4>
<hr class="center">
  <img src="<?php the_field('pcf-icon2'); ?>">
    </div>



      <div class="col-sm-3 col-xs-6 text">
        <div class="icon icon2"></div>

        <h4><?php the_field('pcf-icon3'); ?></h4>
    <hr class="center">
    <img src="<?php the_field('pcf-icon4'); ?>">
      </div>



      <div class="col-sm-3 col-xs-6 text">
        <div class="icon icon3"></div>

        <h4><?php the_field('pcf-icon5'); ?></h4>
    <hr class="center">
    <img src="<?php the_field('pcf-icon6'); ?>">
      </div>

      <div class="col-sm-3 col-xs-6 text">
        <div class="icon  icon4"></div>

        <h4><?php the_field('pcf-icon7'); ?></h4>
      <hr class="center">
      <img src="<?php the_field('pcf-icon8'); ?>">
      </div>




  </div>
</div>


<div class="container mt"><div class="row hrcont">
<h2>ZAPRASZAMY</h2>
<hr class="left gold">
<!-- MAIN CONTENT  -->
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
<!-- END MAIN CONTENT -->


</div>
<div class="row mt">
  <div class="col-sm-6"><a href="<?php echo esc_url( get_permalink(6) ); ?>"><div class="btn">O NAS</div></a></div>
  <div class="col-sm-6"><a href="<?php echo esc_url( get_permalink(12) ); ?>"><div class="btn">CENNIK</div></a></div>
</div>

</div>
</section>






  <?php get_footer(); ?>
