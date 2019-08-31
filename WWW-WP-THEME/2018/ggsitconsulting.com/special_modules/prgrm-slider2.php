
<div class="interactiveItem" id="home"></div>
     <div id="main-slider" class="main-slider2 carousel slide interactiveItem" data-ride="carousel" data-pause="false">


<div id="carousel-main-progremo" >


  <div class="comon_content">

                   <ol class="carousel-indicators mt20 mb20">
                   <?php $counter = 1 ?>
                   <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                   <?php if (get_field('slider_active2')): ?> <li data-target="#main-slider" data-slide-to="<?php echo $counter ?>"></li><?php $counter++; endif; ?>
                   <?php if (get_field('slider_active3')): ?> <li data-target="#main-slider" data-slide-to="<?php echo $counter ?>"></li><?php $counter++; endif; ?>
                   <?php if (get_field('slider_active4')): ?> <li data-target="#main-slider" data-slide-to="<?php echo $counter ?>"></li><?php $counter++; endif; ?>
                 </ol>

  </div>

  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active" style='background-image: url("<?php the_field('pcf-s-f1');?>")'>
<?php if (get_field('gradient')): ?><div class="carousel-item-gradient gradient fadeIn"></div><?php endif; ?>
       <div class="container fadeInFast item-content"><?php the_field('pcf-s-h1') ?></div>
    </div>

    <?php if (get_field('slider_active2')): ?>
    <div class="carousel-item" style='background-image: url("<?php the_field('pcf-s-f2');?>")'>
<?php if (get_field('gradient2')): ?><div class="carousel-item-gradient gradient fadeIn"></div><?php endif; ?>
       <div class="container fadeInFast item-content"><?php  the_field('pcf-s-h2') ?></div>
    </div>  <?php endif; ?>

    <?php if (get_field('slider_active3')): ?>
    <div class="carousel-item" style='background-image: url("<?php the_field('pcf-s-f3');?>")'>
<?php if (get_field('gradient3')): ?><div class="carousel-item-gradient gradient fadeIn"></div><?php endif; ?>
       <div class="container fadeInFast item-content"><?php  the_field('pcf-s-h3') ?></div>
    </div>  <?php endif; ?>


    <?php if (get_field('slider_active4')): ?>
    <div class="carousel-item" style='background-image: url("<?php the_field('pcf-s-f4');?>")'>
<?php if (get_field('gradient4')): ?><div class="carousel-item-gradient gradient fadeIn"></div><?php endif; ?>
       <div class="container fadeInFast item-content"><?php  the_field('pcf-s-h4') ?></div>
    </div>  <?php endif; ?>





  </div>



  <!-- <a class="carousel-control-prev" href="#carousel-main-progremo" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-main-progremo" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->


</div>

</div>
