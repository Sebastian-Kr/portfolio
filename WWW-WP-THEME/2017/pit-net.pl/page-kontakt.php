<?php
/*
Template Name: Kontakt
*/

?>
<?php get_header(); ?>

<?php get_template_part(content, men2);?>
<?php get_template_part(content, header);?>

<!-- MAIN CONTENT  -->

<div class="container"><div class="row">
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
</div></div>
<!-- END MAIN CONTENT -->

<!-- ========================================================================
   CONTACT SECTION
  =========================================================================*/ -->
<div id="kontakt"></div>
<section id="contact" class="">

  <div class="container block shadow-btn">

    <div class="row padtb">


<div class="col-sm-5">

<!-- <?php the_field('DANE-KONTAKTOWE') ?> -->

<address>
  <span class="adress">BIURO RACHUNKOWE PITNET</span>
  <div class="prgrm_iconbox">
  <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></p>
  <p><span><a href="tel:+48111222333  ">+48 111 222 333 </a></span><span> Email:<a href="mailto:biuro@pit-net"> biuro@pit-net</a></span></p>
</div>

<div class="prgrm_iconbox">
  <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></p>
  <p><span>ul. Parkowa 1/4 </span><span>39-100 Ropczyce</span></p>
</div>


<div class="prgrm_iconbox">
  <p><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span><p>
  <p><span>Sielec 10a </span><span>39-120 Sędziszów Młp. </span></p>
  <div class="clearfix"></div>
</div>

<hr class="mt mb">

<p class="adress">GODZINY OTWARCIA</p>
<p>Poniedziałek - Piątek 8:00 - 16:00</p>
<p>Sobota 8:00 - 13:00</p>

<hr class="mt mb">
</address>

</div>
<div class="col-sm-7">
  <?php echo do_shortcode('[contact-form-7 id="119" html_id="contact-form-1234" title="Formularz 1"]'); ?>
</div>
  </div></div>
</section>
  <!-- END CONTACT SECTION -->


  <div id="map-container">
  <img id="pl-map" class="mobihide" src="<?php echo get_template_directory_uri(); ?>/img/minimap.png" alt="">
  <div id="map" style="height:600px"></div>
  </div>
<hr class="fullhr gold">
  <?php get_footer(); ?>
