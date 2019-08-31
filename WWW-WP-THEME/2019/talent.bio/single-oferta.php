<?php get_header(); ?>
<?php $employer_id = get_field('employer_id'); ?>

<div class="header_bg" style="background-image: url('<?php the_field('employer_header_img', $employer_id)?>')">

  <div class="container">
    <div class="row">
      <!-- <div class="col-md-1"></div> -->
      <div class="col-lg-8 col-md-10">
        <div class="offer_header">
          <h4><?php echo the_title() ?></h4>

        <a class="mt10 mb10" href="<?php echo the_permalink($employer_id) ?>">
            <?php echo get_the_title($employer_id) ?>
        </a>

        <p>Data publikacji: <?php the_field('publish_date')?></p>
        <p>Data ważności: <?php the_field('expiried_date')?></p>
        <p class="mt10">Miejsce pracy: <?php display_all_properties('place') ?> </p>
        </div>
      </div>
      <div class="col-md-2 d-flex align-items-center justify-content-end">
        <div class="btn-std4 mb20 mt30">Aplikuj</div>
      </div>
      <div class="col-lg-1"></div>
    </div>
  </div>

</div>




<section>
  <div class="container offer_info_container">
    <div class="row">

      <div class="col-md-12 ">
        <div class="offer_desc_box box_shadow">
<div class="left_box">
  <!-- <img src="<?php the_field('employer_logo', $employer_id)?>" alt=""> -->
  <img src="<?php echo get_template_directory_uri() ?>/img/globus_bialy.png" alt="">
</div>
        <div class="right_box">
          <h3>Kim jesteśmy</h3>
          <?php the_field('offer_content_excerpt', $employer_id)?>
        </div>
      </div></div>


      <div class="col-md-12 grey_box">

        <div class="offer_title_box">
          <h1>  <?php echo the_title() ?></h1>
        </div>


        <?php if ( have_rows('offer_content_box') ): ?>
            <?php while ( have_rows('offer_content_box') ) : the_row(); ?>

              <div class="offer_desc_box box_shadow">

<div class="left_box">
    <img src="<?php the_sub_field('offer_content_box_icon')?>" alt="">
</div>

                <div class="right_box">
                  <h3><?php the_sub_field('offer_content_box_title')?></h3>
                  <?php the_sub_field('offer_content_box_desc')?>
                </div>

</div>

            <?php endwhile; ?>
        <?php endif; ?>
      </div>

<div class="col-md-12 text-center">
  <div class="btn-std3 btn-big mt60">Aplikuj już teraz</div>
</div>
    </div>
  </div>
</section>




  <?php get_footer(); ?>
