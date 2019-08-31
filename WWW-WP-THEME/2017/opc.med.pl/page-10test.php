<?php 
/*
Template Name: 10 testowy
*/
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'header' );?>


<button id="sliderek" class="btn btn-warming">PRZEWIŃ PREV</button>
<button id="sliderek2" class="btn btn-warming">PRZEWIŃ NEXT</button>

///////////////////////<br><br>
       <!-- SLIDER -->
<div id="<?php echo $post->ID;?>" class="carousel slide slidemob" data-ride="carousel">
  

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

<!-- <!-- END SLIDER  -->



/////////////////


<?php get_footer(); ?>

