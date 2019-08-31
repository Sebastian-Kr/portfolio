<div class="container-fluid realize">
<div class="row"><?php
$my_query = new WP_Query( 'cat=2' );
if ( $my_query->have_posts() ): while ( $my_query->have_posts() ): $my_query->the_post();?>


<div class="col-sm-6 col-lg-3">
<div class="item">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">

<span class="item-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></span>
<div class="vc-cont">  <h4 class="vc2"><?php the_title(); ?></h4></div>

</a>
</div>
</div>


<?php endwhile;?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>


</div>
</div>
