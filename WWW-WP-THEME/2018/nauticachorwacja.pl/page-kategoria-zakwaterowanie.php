<?php
/*
Template Name: Kategoria zakwaterowanie
*/
?>
<?php session_start();?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header' );?>
<?php get_template_part( 'content', 'main' );?>

<!-- LOOP NEWS -->


<section class="news-section">
       <?php
       $catid = get_field('id_cat_1');
       $args = array('cat'=> $catid, 'order' => 'ASC');
       $query = new WP_Query( $args);
       $nr = 1;

       ?>
       <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
           : $query->the_post();

           $_SESSION["nr"] = $nr;
           $nr++;
           get_template_part( 'content', 'news4' );
           ?>

     <?php endwhile; ?>
       <?php endif; ?>
<?php wp_reset_postdata(); ?>
</section>

<?php if (get_field('id_cat_2')): ?>

  <div class="container-fluid maxw">
  <div class="std-section">  <hr class="hr2"></div>
  <div class="row">
<div class="col-md-12">
   <?php echo the_field('cat_2_content') ?>
</div></div></div>

  <section class="news-section">
         <?php
         $catid = get_field('id_cat_2');
         $args = array('cat'=> $catid, 'order' => 'ASC');
         $query = new WP_Query( $args);



         ?>
         <?php if ( $query->have_posts() ) : while ( $query->have_posts() )
             : $query->the_post();

             $_SESSION["nr"] = $nr;
             $nr++;


             get_template_part( 'content', 'news3' );
             ?>

       <?php endwhile; ?>
         <?php endif; ?>
  <?php wp_reset_postdata(); ?>
  </section>

<?php endif; ?>

<div class="container-fluid maxw"><div class="row">
<div class="col-md-6"><?php echo the_field('add-custom-html') ?></div>
<div class="col-md-6"></div>
</div>
</div>


<?php get_footer(); ?>
