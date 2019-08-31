<?php /*Template Name: News*/ ?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>


<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>

<section id='news_front_page'>
  <div class="container"><div class="row">

   <div class="col-xl-10 col-lg-11  pt40 ">
     <h1>News</h1>

     <?php
     $args = array(
       'cat'=> '5',
       'posts_per_page' => '10',
        'paged' => get_query_var('paged'),
       'order'=> 'DESC');
     $wp_query = new WP_Query( $args);
     ?>
     <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() )
         : $wp_query->the_post(); ?>



           <div class="news_loop_box" >
             <a href="<?php the_permalink(); ?>"><div class="img_loop_box"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></div></a>
          <div class="content_loop_box">
            <h3><?php echo get_the_title();?></h3>

          <div class="excerpt">
            <?php if (get_field('excerpt')): ?>
            <?php the_field('excerpt'); ?>
            <?php endif; ?>
          </div>
             <a href="<?php the_permalink(); ?>"><div class="i">Read more.</div> </a>
          </div>
               <div class="clearfix"></div>
              </div>

       <!-- end news div -->

     <?php  endwhile;?>
   <?php endif;?>
    <div id="paginate">

  <?php
  $total_pages = $wp_query->max_num_pages;

      if ($total_pages > 1){

          $current_page = max(1, get_query_var('paged'));

          echo paginate_links(array(
              'base' => get_pagenum_link(1) . '%_%',
              'format' => 'page/%#%',
              'current' => $current_page,
              'total' => $total_pages,
              'prev_text'    => __('Poprzedni'),
              'next_text'    => __('Następny'),
          ));
      }


  wp_reset_postdata();

  ?>

    </div>

   </div>


</div></div>
</section>



<?php get_footer(); ?>
