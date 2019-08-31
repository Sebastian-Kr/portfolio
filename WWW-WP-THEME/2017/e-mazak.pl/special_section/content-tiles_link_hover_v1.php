<?php if (get_sub_field('theme')=='zoombox_hover'): ?>

<section id="rot-tiles">

<div  class="container">
<div class="row">


  <?php if ( have_rows('tiles_link_hover_v1_single_tiles') ): ?>

      <?php while ( have_rows('tiles_link_hover_v1_single_tiles') ) : the_row(); ?>

      <?php $id=get_sub_field('link-pcf-zu-l') ?>





  <div class="col-sm-4">
    <div class="zoombox vpc vpc">
      <a href="<?php the_permalink($id) ?>" class="zoom">
    <div class="item vcc gtiles" style='background-image: url("<?php the_field('thumb_add', $id); ?>")'>
        <div class="item-filtr"></div>
      <h2 class="vc"><?php echo get_the_title($id); ?></h2>
      <div class="content vc2"><?php the_field('desc_add', $id); ?> </div>
    </div>
  </a>
    </div>
  </div>

      <?php  endwhile; ?>
  <?php endif; ?>

</div>
</div>
</section>
<?php endif; ?>



<?php if (get_sub_field('theme')=='triangle_hover'): ?>


                <section id="rot-tiles">

                <div  class="container">
                <div class="row">


                  <?php if ( have_rows('tiles_link_hover_v1_single_tiles') ): ?>

                      <?php while ( have_rows('tiles_link_hover_v1_single_tiles') ) : the_row(); ?>

                      <?php $id=get_sub_field('link-pcf-zu-l') ?>






                                  



  <div class="col-md-4 col-sm-6">
  <figure class="snip1543">
                                        <img src="<?php the_field('thumb_add', $id); ?>" alt="sample108" />
                                        <figcaption>
                                          <h3><?php echo get_the_title($id); ?></h3>
                                          <p><?php the_field('desc_add', $id); ?></p>

                                          <h6 id="hover_link">Czytaj więcej</h6>
                                        </figcaption>
                                        <a href="<?php the_permalink($id) ?>"></a>
                                      </figure>

  </div>



                      <?php  endwhile; ?>

                  <?php endif; ?>

                </div>


                </div>
                </section>
                <?php endif; ?>
