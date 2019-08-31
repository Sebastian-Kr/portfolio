<?php get_header(); ?>


<section class="menuSection main-header pt30 pb30" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/background.jpg')">
  <div class="content_header ">
<div class="main-content animate2   ">
  <?php get_template_part('template_parts/prgrm', 'main') ?>
  <div data-target="kontakt" class="scroll-button mt30 btn">Kontakt</div>
</div>
        <div data-target="oferta" class="animate3 scroll-button arrow" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/scroll-down.svg')"></div>
  </div>


</section>
<section id="oferta-sec" class="menuSection offer">
  <div class="scroll-point" id="oferta"></div>
<div class="container">
  <div class="row">
    <div class=" animate col-12 box_center">

  <?php the_field('section1_content')?>
    </div>
  </div>

  <div class="row animate mt20">
<?php if ( have_rows('section1_loop') ): ?>
    <?php while ( have_rows('section1_loop') ) : the_row(); ?>
      <div class="col-lg-3 col-6 box_center">
        <img src="<?php the_sub_field('section1_loop_icon')?>">
        <h3><?php the_sub_field('section1_loop_header')?></h3>
        <p><?php the_sub_field('section1_loop_content')?></p>
      </div>
    <?php endwhile; ?>
<?php endif; ?>


  </div>
</div>

</section>

<section id="inwestycje-sec" class="menuSection invest">
  <div class="scroll-point" id="inwestycje"></div>
  <div class="container">
    <div class="row"><div class="col-md-12 box_center">
      <h2 class="line line-center animate">Zrealizowane inwestycje</h2>
    </div></div>

<div class="invest_main_loop">
        <?php
        $args = array('post_type'=> 'modules');
        $query = new WP_Query( $args);
        ?>
        <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
            : $query->the_post(); ?>

            <?php get_template_part( 'content', 'invest' ) ?>

        <?php endwhile; else : ?>
        <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
        <?php endif; ?>
          <?php wp_reset_query()  ?>
</div>

  </div>
</section>


<section id="o-nas-sec" class="gray-gradient menuSection aboutus">
  <div class="scroll-point" id="o-nas"></div>
  <div class="container"><div class="row animate">
    <div class="col-md-4">
<?php the_field('section3_content')?>
    </div>

<div class="col-md-8 ">
  <div class="container hide-show-panel">
    <div class="row hide-box">
  <?php if ( have_rows('section3_loop') ): ?>
      <?php while ( have_rows('section3_loop') ) : the_row(); ?>

        <div class="col-md-6">
          <div class="aboutus_item">
            <div class="aboutus_title">
              <img src="<?php the_sub_field('section3_loop_icon')?>">
              <h3><?php the_sub_field('section3_loop_header')?></h3>
            </div>
            <p><?php the_sub_field('section3_loop_content')?></p>
          </div>
        </div>


      <?php endwhile; ?>
  <?php endif; ?>

</div>

<div class="row flex-center d-md-none">
  <div class="mt50 btn btn-c1 show-more">Pokaż więcej</div>
</div>

</div>
</div>


  </div></div>
</section>



<section class="review">
  <h2 class="text-center line line-center">Opinie klientów</h2>


  <div class="slider animate">
<?php if ( have_rows('section4_loop') ): ?>
    <?php while ( have_rows('section4_loop') ) : the_row(); ?>
      <div class="slide_item">
        <div class="review_text">
          <?php the_sub_field('section4_loop_content')?></div>
        <div class="icon icon_people review_author"><?php the_sub_field('section4_loop_author')?></div>
      </div>
    <?php endwhile; ?>
<?php endif; ?>



</div>
</section>


<section id="kontakt-sec" class="menuSection contact">
  <div class="scroll-point" id="kontakt"></div>
<?php the_field('section5_content')?>
<div class="container ">
  <div class="row ">
    <div class="col-md-12 left-text-mobile">
      <h3 class="line">Nova Corps Development sp. z o.o.</h3>
    </div>
  </div>
  <div class="row animate nowrap left-text-mobile">
    <div class="col-lg-3 col-sm-6 col-xs-12 mmb20 mmt10">
      <img class="logotype" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" alt="">
    </div>
    <div class=" col-lg-3 col-sm-6 col-xs-12">

      <?php the_field('section5_content_col2')?>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <?php the_field('section5_content_col3')?>
      </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
      <?php the_field('section5_content_col4')?>

    </div>
  </div>
</div>

<div class="container  ">
  <div class="row map-form-section">
    <div class="col-md-12  d-none d-lg-block"><div class="border mt30 pt40"></div></div>
    <div class="borderTop contactForm col-lg-6">
      <h3 class="line mmt20">Formularz kontaktowy</h3>
      <?php echo do_shortcode( '[contact-form-7 id="307" title="Formularz 1"]' ) ?>
    </div>

    <div class="borderTop col-lg-6 mapContainer">
      <h3 class="line d-none d-lg-block">Nasza lokalizacja</h3>
      <div id="map-container">
        <div id="map">

<iframe src="https://www.google.com/maps/d/embed?mid=1Sn-syXpGmauvo868XkWR-PaQMJmy98Ll" width="640" height="480"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

</section>



<?php get_footer(); ?>
