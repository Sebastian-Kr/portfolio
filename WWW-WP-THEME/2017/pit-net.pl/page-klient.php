<?php
/*
Template Name: Strefa klienta
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>

<h2>NAJCZĘŚCIEJ ZADAWANE PYTANIA</h2>



<!--  oferta -->
<section id="offer-hide">
  <div class="semisepar"></div>


  <div class="container">
<div class="row main-content">
<div class="col-sm-8">
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

<div class="col-sm-4"><img src="<?php echo get_template_directory_uri() ?>/img/biuro-rachunkowe-ropczyce-jak.jpg" alt="Doradca podatkowy Ropczyce"></div>


</div>
  </div>
</section>
<!-- oferta end -->


<section id="doradca" class="mt">
<div class="container bordo">
  <h3>PRZYDATNE LINKI I WZORY DOKUMENTÓW</h3>


  <div class="row">
  <div class="til col-sm-6"><?php the_field('linki1') ?></div>
  <div class="til col-sm-6"><?php the_field('linki2') ?></div>
    <div class="til col-sm-6"><?php the_field('linki3') ?></div>
    <div class="til col-sm-6"><?php the_field('linki4') ?></div>
    </div>
</div>


<div class="container mt">
  <div class="row hrcont">
    <div class="col-lg-12">
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
</div>
<div class="row mt">
  <div class="col-sm-6"><a href="<?php echo esc_url( get_permalink(6) ); ?>"><div class="btn">O NAS</div></a></div>
  <div class="col-sm-6"><a href="<?php echo esc_url( get_permalink(12) ); ?>"><div class="btn">CENNIK</div></a></div>
</div>

</div>
</section>






  <?php get_footer(); ?>
