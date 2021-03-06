<?php
/*
Template Name: Baza wiedzy
*/
?>
<?php get_header(); ?>
<?php get_template_part(content, menu);?>
<?php get_template_part(content, header);?>
<?php get_template_part(content, main);?>
<?php get_template_part(content, acfbuilder);?>
<section class="tiles">
  <div class="container">
    <div class="row">
      <?php
      $args = array('cat'=> '2');
      $query = new WP_Query( $args);
      ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) 
          : $query->the_post(); ?>
      <div class="col-sm-6 ">
        
        <div class="t-item square tx plain">
      
            <a href="<?php the_permalink(); ?>">

    <div class="news" style="background-image: url('<?php echo the_field('added_foto'); ?>');">
              <h3><?php echo get_the_title();?></h3>
            </div>
            <div class="excerpt">
              <?php if (get_field('excerpt')): ?>
              <?php the_field('excerpt'); ?>
              <?php endif; ?>
            </div>
            <div class="butn-cont"><div class="button">Czytaj więcej >></div>
            </div>
            
          </a>
        </div>
        <!-- end news div -->
      </div>
      <!-- end col div -->
      
     
      <?php endwhile; else : ?>
      <p><?php _e( 'Niestety nie ma żadnych postów do wyświetlenia' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>