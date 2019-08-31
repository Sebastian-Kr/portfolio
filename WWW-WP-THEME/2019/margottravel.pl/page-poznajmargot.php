<?php /*Template Name: Poznaj Margot*/?>

<?php get_header(); ?>

<section class="header_page dark-box" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'">
  <div class="container"><div class="row">
    <div class="col">
      <h1 class="text-center"><?php the_title() ?></h1>
      <?php if (get_field('subtitle')): ?>
        <h3 class="text-center"><?php the_field('subtitle')?></h3>
      <?php endif; ?>
   </div>
  </div>
</div>
</section>


<section class="description-box full_foto_column_box">
  <div class="foto_column" style="background-image: url('<?php the_field('desc_section_foto')?>')">
    <img src="<?php the_field('desc_section_foto')?>" alt="">
  </div>

  <div class="container">
    <div class="row">
      <div class="offset-md-6 col-md-6 ">
        <?php get_template_part('template-parts/content', 'main');?>
      </div>
    </div>
  </div>

</section>


<section class="info-panel dark-box" style="background-image: url('<?php the_field('info-panel-bg')?>')">

  <div class="container">
    <div class="row">
      <div class="col-md-12">

      <h2 class="mb50"><?php the_field('info-panel-title')?></h2>
     <?php get_template_part('template-parts/content', 'info_panel') ?>

    </div>
  </div>
</div>

</section>

<section class="usp_section">

  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 class="mb50">Nasze wartości</h2>
      </div>

    <?php if ( have_rows('usp_section') ): ?>
      <?php $counter = 0; ?>
        <?php while ( have_rows('usp_section') ) : the_row(); ?>
          <?php $counter++; ?>

          <div class="col-md-6 col-lg-3 mb30 usp_section_item text-center">
            <img src="<?php echo get_template_directory_uri() ?>/img/icon-<?php echo $counter; ?>.svg" alt="">
            <h4 class="mt40 mb15"><?php the_sub_field('usp_section_title')?></h4>
            <p><?php the_sub_field('usp_section_desc') ?></p>
          </div>

        <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>

</section>

<section class="review_section text-center" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/destynacja-bg-cechy.jpg')">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb15">Referencje</h2>
      </div>
    </div>
  </div>

  <?php echo get_template_part('template-parts/content', 'review_slider') ?>
</section>

<section class=" customers_section text-center">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mb40">Nasi klienci</h2>
      </div>

      <div id="carousel1" class="col-md-12">
        <?php if ( have_rows('customers_section') ): ?>
            <?php while ( have_rows('customers_section') ) : the_row(); ?>
      <div class="slide_item" >
            <img class="" src="<?php the_sub_field('customers_section_foto')?>" alt="">
      </div>
            <?php endwhile; ?>
        <?php endif; ?>
      </div>


    </div>
  </div>

</section>



<section class="cta_section text-center dark-box pb40" style="background-image: url('<?php the_field('cta_section_bg')?>')">

  <div class="container">
    <div class="row">
      <div class="col-lg-8   offset-lg-2 visual-editor">
        <?php the_field('cta_section')?>
        <a class="btn" href="<?php echo home_url(); ?>/#kontakt">Skontaktuj się</a>
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>
