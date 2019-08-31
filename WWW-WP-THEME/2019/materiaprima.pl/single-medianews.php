
<?php
/*
 * Template Post Type: medianews
 */
?>


<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>





<section id="news-body" class="medianewes_body">
<div class="header_box container">
  <div class="row">
    <div class="col-md-12">
<div class="title">
  <h4><?php the_title() ?></h4>
    <p class="mt10"><?php echo __('[:pl]Dodano:[:en]Published:'); ?> <?php echo get_the_date( 'd.m.Y' ); ?></p>
</div>
        <a href="<?php echo home_url() ?>/media-o-nas/">
      <div class="return">
          <button class="arrow_left"></button>
          <h6><?php echo __('[:pl]POWRÓT[:en]BACK'); ?></h6>
      </div>
    </a>
    </div>
  </div>
</div>





<div class="container mt50">
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-8">

      <h5 class="mb50"><?php the_field('desc_add')?></h5>
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
      <a href="<?php echo home_url() ?>/media-o-nas/">
      <div class="return mt50">
          <button class="arrow_left"></button>
          <h6><?php echo __('[:pl]POWRÓT[:en]BACK'); ?></h6>
      </div>
    </a>
    </div>
  </div>
</div>



</section>

<?php get_footer(); ?>
