<?php /*Template Name: Catalogues*/ ?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<?php get_template_part('content', 'subheader'); ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>

<section id='catalogues' >
  <div class="container"><div class="row">




     <?php
      $count = 1;
       if( have_rows('progremo_catalogues_list') ):
         while ( have_rows('progremo_catalogues_list') ) : the_row();?>

             <div class="col-md-12  col-lg-6 news_loop_box mb0">
<?php

if ($count > 2) {
  echo '<div class="std-border mt0 mb40"> </div>';
}
$count++;
 ?>
                  <div class="std-border d-block d-lg-none mt0 mb40"> </div>
                 <div class="img_loop_box"><img src="<?php the_sub_field('catalog_img') ?>" alt=""></div>
              <div class="content_loop_box">
                <h4><?php the_sub_field('catalog_name') ?></h4>
              <div class="excerpt"><?php the_sub_field('catalog_desc') ?></div>
             <div class="download_file">
              <a class="btn-std" target="_blank" href="<?php echo wp_get_attachment_url(get_sub_field('catalog_file')); ?>">Download</a>


                            <p> Size of file:<p><span>
<?php $filesize = filesize( get_attached_file(get_sub_field('catalog_file')) );
 $filesize_mb = $filesize/1000000;
 echo round($filesize_mb, 2); ?>mb</span></p>
              </div>
                  </div>
                  <div class="clearfix"></div>

           </div>
           <!-- end news div -->

         <?php
       endwhile;
     endif;
     ?>


</div></div>
</section>



<?php get_footer(); ?>
