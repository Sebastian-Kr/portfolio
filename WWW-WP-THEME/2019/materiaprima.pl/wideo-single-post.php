

<?php
/*
 * Template Name: Szablon Wideo
 * Template Post Type: post
 */


get_header(); ?>
<?php get_template_part( 'content', 'men' );?>


<div class="mt80 content_video_box header_box header_title_box">

  <div class="starter_film glass_up" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">
    <div class="title container">
      <div class="row"><div class="col-md-12">
        <h4><?php the_title() ?></h4>
          <p class="mt10"><?php echo __('[:pl]Dodano:[:en]Published:'); ?> <?php echo get_the_date( 'd.m.Y' ); ?></p>
      </div></div>
    </div>

    <img class="player_icon" src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="">
  </div>

  <video id="content_video"  controls >
   <source src="<?php the_field('film_link')?>" type="video/mp4">
   Your browser does not support the video tag.
 </video>

 <div class="stoper_film"></div>

</div>



<section id="news-body" class="normalnews_body film_news">

<div class="container">
  <div class="row">
    <div class="col-lg-2 mb15 foto_list_box">
      <a onclick="history.back(-1)">
      <div class="return ">
          <button class="arrow_left"></button>
            <h6><?php echo __('[:pl]POWRÓT[:en]BACK'); ?></h6>
      </div>
    </a>
    </div>


    <div class="col-lg-9">

      <!-- <h5 class="mb50"><?php the_field('desc_add')?></h5> -->
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
</div>

</section>

<?php get_footer(); ?>
