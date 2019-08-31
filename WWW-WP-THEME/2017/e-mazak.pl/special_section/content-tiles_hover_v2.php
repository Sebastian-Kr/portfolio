

<section id="tiles_hover_dropdown">

<div  class="container">
<div class="row">




  <?php if ( have_rows('tiles_hover_v2_single_tiles') ): ?>

      <?php while ( have_rows('tiles_hover_v2_single_tiles') ) : the_row(); ?>

        <div class="col-sm-4">


          <div class="single_till" style='background-image: url("<?php the_sub_field('pcf-zu-f'); ?>")'>
          <div class="single_till_content">
              <div class="item-filtr"></div>
            <h3 class=""><?php the_sub_field('pcf-zu-t'); ?></h3>
            <?php the_sub_field('pcf-zu-d'); ?>
          </div>
</div>

<div class="single_till_bottom">
<?php the_sub_field('pcf-zu-d2'); ?>
</div>
        </div>


      <?php endwhile; ?>

  <?php endif; ?>

</div>


</div>
</section>
