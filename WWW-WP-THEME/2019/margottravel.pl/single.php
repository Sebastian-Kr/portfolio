
<?php get_header(); ?>

<section class="header_page header_travel dark-box" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>'">
  <div class="container"><div class="row">
    <div class="col">
      <h1><?php the_title() ?></h1>
      <?php if (get_field('subtitle')): ?>
        <h3><?php the_field('subtitle')?></h3>
      <?php endif; ?>
   </div>
  </div></div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header_logo_box">
          <img src="<?php the_field('logotype')?>" alt="">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="pb30 ">
  <div class="container "><div class="row">
    <div class="col-md-12">
      <div id="clock_box">



        <?php
        date_default_timezone_set('Europe/Warsaw');
           $travel_time = strtotime(get_field('travel_time'));
           $remaining = $travel_time - time();
           $days_remaining = floor($remaining / 86400);
           $hours_remaining = floor(($remaining % 86400) / 3600);
           $minutes_remaining = floor((($remaining % 86400) % 3600) / 60);
            if ($remaining > 0) {
              echo "<p>Do wyjazdu pozostało:</p>";
              echo "<div><span> $days_remaining dni</span>";
              echo "<span> $hours_remaining h</span>";
              echo "<span> $minutes_remaining min</span></div>";
            }

            else {
              echo '<span class="info">Termin wyjazdu już minął</span>';
            }
        ?>

      </div></div></div>

<div class="row mobile-inverse">
  <div class="col-md-7  visual-editor">
    <?php get_template_part('template-parts/content', 'main');?>
    <div class="mt30" style="display:none" id="moreDesc">
      <?php the_field('more-description')?>
    </div>
    <div class="seeMore-Head btn btn-blue mt30" data-panelid="moreDesc">Rozwiń opis</div>

  </div>

  <div class="offset-lg-1 col-md-5 col-lg-4">
    <h3 class="mb30">Na skróty</h3>
    <div data-target="info-target" class="scroll-button mt20 btn btn-100">Informacje praktyczne</div>
    <div data-target="gallery-target" class="scroll-button mt20 btn btn-100">Galeria</div>
    <?php if (!get_field('hide_plan')): ?>
      <div data-target="plan-target" class="scroll-button mt20 btn btn-100">Plan wyjazdu</div>
    <?php endif; ?>

    <div data-target="insurance-target" class="scroll-button mt20 mb30 btn btn-100">Dodatkowe</div>
  </div>
</div>
</div>
</section>


<section id="info-target" class="info-panel dark-bg" style="background-image: url('<?php the_field('info-panel-bg')?>')">

  <div class="container"><div class="row"><div class="col-md-12">

      <h2  class="mb50 text-color-white">Informacje praktyczne</h2>

 <?php get_template_part('template-parts/content', 'info_panel') ?>



    </div>
  </div>
</div>

</section>




<section id="gallery-target" class="gallery pb50">

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2  class="mb35">Galeria</h2>
    </div>
  </div>
</div>

  <?php get_template_part('template-parts/content', 'gallery' ) ?>
</section>



<?php if (!get_field('hide_plan')): ?>
  <!-- Hide section statment begin -->
<section  class="trip-plan pt0">
  <div id="plan-target"></div>
  <div class="container"><div class="row"><div class="col-md-12">
        <h2  class="mb50">Plan wyjazdu</h2>

        <?php if ( have_rows('trip-plan') ): ?>
          <?php $counter = 0; ?>
            <?php while ( have_rows('trip-plan') ) : the_row(); ?>
           <?php

            $counter++;
            if (get_sub_field('trip-plan-foto')) {
              $img_url = get_sub_field('trip-plan-foto');
            }
            else {
              $temp = get_template_directory_uri();
              $img_url = $temp.'/img/zaslepka.jpg';
            }

            ?>
        <div class="progremo_seeMoreBox_module seeMoreBox_module_trip">
          <div class="seeMore-Head" data-panelid="trip-plan<?php echo $counter ?>">
            <div class="day_label"><span>Dzień </span> <?php echo $counter; ?></div>
            <h6><?php the_sub_field('trip-plan-title')?></h6>
            <div class="moreButton">
              <span>Opis</span>
              <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
            </div>
          </div>
          <div id="trip-plan<?php echo $counter ?>" class="seeMore-desc">
            <div class="content ">
              <?php the_sub_field('trip-plan-desc')?>
            </div>
            <img src="<?php echo $img_url; ?>" alt="">
          </div>
        </div>

            <?php endwhile; ?>
        <?php endif; ?>



      </div>
    </div>
  </div>
</section>
<!-- Hide section statment end -->
<?php endif; ?>




<section  class="pt0 add-desc pb30">
<div id="insurance-target" ></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 visual-editor">
        <?php the_field('add-description')?>
      </div>
    </div>
  </div>

</section>



<?php get_footer(); ?>
