
<section id="rot-tiles">

<div  class="container">
<div class="row">




  <?php if ( have_rows('tiles_hover_v1_single_tiles') ): ?>

      <?php while ( have_rows('tiles_hover_v1_single_tiles') ) : the_row(); ?>

        <div class="col-sm-4">
          <div class="zoombox vpc vpc">
            <a href="<?php the_sub_field('pcf-zu-l'); ?>" class="zoom">
          <div class="item vcc gtiles" style='background-image: url("<?php the_sub_field('pcf-zu-f'); ?>")'>
              <div class="item-filtr"></div>
            <h2 class="vc"><?php the_sub_field('pcf-zu-t'); ?></h2>
            <div class="content vc2"><?php the_sub_field('pcf-zu-d'); ?> </div>
          </div>
        </a>
          </div>
        </div>



      <?php endwhile; ?>

  <?php endif; ?>

</div>


</div>
</section>
