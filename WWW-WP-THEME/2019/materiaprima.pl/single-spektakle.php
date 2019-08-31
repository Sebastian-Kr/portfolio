

<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<?php
$prevID = get_previous_post();
$nextID = get_next_post();
 ?>

<?php if (!($prevID == null)): ?>
  <a href="<?php echo get_permalink($prevID) ?>">
    <div class="change_post_box prev_post">
      <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/aktualnosci/arrow-left.svg" alt=""></div>
      <div class="foto" style="background-image: url('<?php echo get_the_post_thumbnail_url($prevID) ?>')"></div>
     <div class="title">
       <p><?php echo get_the_title( $prevID ) ?>
          <?php the_field('subtitle', $prevID)?>
       </p>

     </div>
    </div>
  </a>
<?php endif; ?>


<?php if (!($nextID == null)): ?>
<a href="<?php echo get_permalink($nextID) ?>">
  <div class="change_post_box next_post">
   <div class="title">
     <p><?php echo get_the_title( $nextID ) ?>
        <?php the_field('subtitle', $nextID)?>
     </p>

   </div>
   <div class="foto" style="background-image: url('<?php echo get_the_post_thumbnail_url($nextID) ?>')"></div>
   <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/img/aktualnosci/arrow-right.svg" alt=""></div>
  </div>
</a>
<?php endif; ?>




<div class="single_spectacle">

<div class="header " style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
<div class="glass_full"></div>
<h2><?php the_title() ?></h2>
<h4><?php the_field('subtitle')?></h4>
</div>



<div class="main_spectacle_content">

  <div class="left_column">

    <div class="info_box1">
  <div class="time_box mb30"><?php the_field('time')?></div>
  <div class="address_box mb30"><?php the_field('address')?></div>
  <div class="price_box mb30"><?php the_field('price')?></div>
  <a target="blank" href="<?php the_field('buy_link')?>">
    <button class="mb40 btn_orange_big text_hover"><span><?php echo __('[:pl]KUP BILET[:en]BUY A TICKET'); ?></span></button>
  </a>
  </div>

    <div class="info_box2"><?php include('includes/content.php') ?></div>

  </div>
  <!-- left_column end -->

  <div class="right_column">

  <div class="intro_box pad_std"><h5><?php the_field('intro_text')?></h5></div>

  <div class="content_video_box">
    <div class="starter_film" style="background-image: url('<?php the_field('film_thumb')?>')">
      <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="">
    </div>

    <!-- <div class="starter_film">
      <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="">
    </div> -->

    <video id="content_video"  controls >
     <source src="<?php the_field('film_link')?>" type="video/mp4">
     Your browser does not support the video tag.
   </video>
   <div class="stoper_film"></div>


  </div>

  <div class="desc_box pad_std"><?php the_field('desc_basic')?>
  <?php if (get_field('more_desc')): ?>
    <div id="hide_box" class="more_desc_box"><?php the_field('more_desc')?></div>
    <button id="more_button" class="btn_pink_arrow2"><?php echo __('[:pl]Rozwiń opis[:en]Read more'); ?></button>
  <?php endif; ?>
  </div>

  <div class="slider_box">
    <?php include('includes/doubleslider.php') ?>
  </div>

<div class="review_box pad_std">
  <?php if ( have_rows('review_loop') ): ?>
      <?php while ( have_rows('review_loop') ) : the_row(); ?>
<h4 class="mb10"><?php the_sub_field('content')?></h4>
<p class="mb30"><?php the_sub_field('author')?></p>
      <?php endwhile; ?>
  <?php endif; ?>


  <a class="d-md-none pt50" href="<?php echo home_url() ?>/festiwal#anhor_tiles">
      <button class="btn_pink_arrow"><?php echo __('[:pl]Wszystkie spektakle[:en]All performance'); ?></button>
  </a>

</div>

  </div>
  <!-- right_column end -->

</div>
<!-- main_spectacle_content end -->
</div>
<!-- single_spectacle end -->
<?php get_footer(); ?>
