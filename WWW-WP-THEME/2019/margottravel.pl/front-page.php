<?php get_header(); ?>

<div class="menuSection" id="s1">
<section id="start" class="home_header dark-box">

  <div id="slider_id2" class="slider_id2 imgbox_slider">
      <div class="arrow arrow-left"></div>
      <div class="arrow arrow-right"></div>
     <div  class="slides_box"></div>
 </div>


  <div class="container content_box">
    <div class="row">
      <div class="col-md-12">
        <h1>Travel to <br> get inspired</h1>
        <div data-target="film_column" class="scroll-button btn mt30">Zobacz więcej</div>
      </div>
    </div>
  </div>

</section>

<section id="home_page_film_container" class="description-box full_film_column_box">
  <div id="film_column"></div>

  <div class="film_column">
<div class="film_cover starter_film " style="background-image: url('<?php the_field('film_section_foot')?>')"></div>

  <!-- <div class="film_box"> -->
    <video id="content_video"   >
    <source src="<?php the_field('film_section_video')?>" type="video/mp4">
    Your browser does not support the video tag.
    </video>
  <!-- </div> -->
</div>

<div class="content_column">
    <div class="">
      <?php get_template_part('template-parts/content', 'main');?>
    </div>
</div>

</section>


<section class="special_slider pt0 pb0 dark-box">
  <div id="stamp"></div>
  <?php get_template_part('template-parts/content', 'special_slider');?>
</section>

<section class="map_section text-center">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2><?php the_field('map_section_title')?></h2>
      </div>
    </div>
  </div>

<img class="d-none d-lg-block" src="<?php the_field('map_section_foto')?>" alt="">
<img class="d-block d-lg-none" src="<?php the_field('map_section_foto_mobile')?>" alt="">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div data-target="inspiracje" class="scroll-button btn">Zainspiruj się</div>
      </div>
    </div>
  </div>


</section>
</div>
<!-- end s1 menu section -->

<section id="inspiracje" class="pt0 pb0 inspirations menuSection">

<?php get_template_part( 'template-parts/content', 'post_loop' ) ?>

</section>

<div class="menuSection" id="s4">
<section  class=" form_section text-center" style="background-image: url('<?php the_field('contact_section_foto')?>')">
  <div id="kontakt"></div>



<div  class="container">
  <?php echo do_shortcode( '[contact-form-7 id="12" title=":plFormularz 1:"]' ) ?>
</div>

</section>
</div>

<section  class="contact">
  <div class="container ">
    <div class="row">
      <div class="col-md-6">

<div class="map_box">
      <iframe src="https://www.google.com/maps/d/embed?mid=1wt1DK_1Mg-DnLneBNier3gHg1Uep00IN"></iframe>
</div>

      </div>

      <div class="col-md-6 visual-editor">
        <?php the_field('contact-content')?>
      </div>
    </div>
  </div>
</section>

</div>
<?php get_footer(); ?>
