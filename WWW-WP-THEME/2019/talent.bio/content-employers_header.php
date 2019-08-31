<section style="background-image: url('<?php echo get_the_post_thumbnail_url(7) ?>')" class="employer_list_search_header">
<div class="container">
<div class="row">
<div class="col-md-12 content_box">

  <?php $the_query = new WP_Query( 'page_id=7' ); ?>

  <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                         <?php the_content(); ?>

                              <?php endwhile;?>


  <?php echo do_shortcode('[ivory-search id="90" title="Employer - search"]') ?>
</div>
</div></div>
</section>
