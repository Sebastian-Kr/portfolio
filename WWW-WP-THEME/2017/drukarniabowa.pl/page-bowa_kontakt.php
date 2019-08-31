<?php
/*
Template Name: Kontakt
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<!--===========================================header==================  -->
<section id="header-normal" class="header-post-3511" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')">
  <div class="container"><div class="row">
 <div class="col-lg-6">
    <div id="arrow-normal">
   <h1><?php echo the_title() ?></h1>
   <h4><?php echo the_field('prog_subtitle') ?></h4>
  </div>
 </div>
 <div class="col-lg-6"></div>
</div></div></section>
<!--=========================================== end header==================  -->


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

<div id="map_form">
  <div id="form1">
    <div><img src="<?php echo get_template_directory_uri()?>/img/ikona_kontakt.svg" alt=""><h2>Skontaktuj się<br> z nami</h2></div>
    <?php echo do_shortcode('[contact-form-7 id="119" html_id="contact-form-1234" title="Formularz 1"]'); ?>
    <div class="clearfix"></div>
  </div>
  <div id="map_cont">
    <div id="map"></div>
    <div id="kontakt"><?php echo the_field('cont_sec') ?></div>
        <div class="clearfix"></div>
  </div>
</div>

<!-- <div class="container"><div class="row">
  <div class="col-sm-6" style="height: 100px; background-color: blue"></div>
  <div class="col-sm-6" style="height: 100px; background-color: red"></div>
</div></div> -->

<?php get_footer(); ?>
