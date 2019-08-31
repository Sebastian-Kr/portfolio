
 <div class="col-sm-5">

            <!-- SLIDER -->
<div id="<?php echo $post->ID;?>" class="carousel slide" data-ride="carousel">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active" style="background-image: url('<?php the_field('foto1'); ?>');">
      
      <div class="carousel-caption">
        
      </div>
    </div>

    <?php if (get_field('foto2')): ?>
    <div class="item" style="background-image: url('<?php the_field('foto2'); ?>');">
     
      <div class="carousel-caption">
        
      </div>
    </div>
  <?php endif; ?>

    <?php if (get_field('foto3')): ?>
    <div class="item" style="background-image: url('<?php the_field('foto3'); ?>');">
      
      <div class="carousel-caption">
        
      </div>
    </div>
  <?php endif; ?>

    <?php if (get_field('foto4')): ?>
    <div class="item" style="background-image: url('<?php the_field('foto4'); ?>');">
      
      <div class="carousel-caption">
        
      </div>
    </div>
  <?php endif; ?>

    <?php if (get_field('fot5')): ?>
    <div class="item" style="background-image: url('<?php the_field('foto5'); ?>');">
      
      <div class="carousel-caption">
        
      </div>
    </div>
  <?php endif; ?>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#<?php echo $post->ID;?>" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#<?php echo $post->ID;?>" role="button" data-slide="next">
    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- END SLIDER  -->

            </div>


            <div class="col-sm-6 col-lg-5 content-news">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <div><small><?php the_time( 'd.m.Y' ); ?></small></div>
            <?php the_content(''); ?>
			<span><a href="<?php the_permalink(); ?>" class="more-link" title="<?php the_title(); ?>">Czytaj więcej...</a></span>

           
            </div>
            <div class="col-sm-1"></div>
