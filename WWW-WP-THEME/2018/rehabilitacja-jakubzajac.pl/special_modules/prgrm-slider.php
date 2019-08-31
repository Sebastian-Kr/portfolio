
<div class="interactiveItem" id="home"></div>
     <div id="main-slider" class=" mb50 carousel slide interactiveItem" data-ride="carousel" data-pause="false">


<div id="carousel-main-progremo" >


  <div class="comon_content">

             <?php  the_field('pcf-s-h1') ?>
          <img class="img1" src="<?php echo get_template_directory_uri()?>/img/logo300.png" alt="">
                 <ol class="carousel-indicators mt20 mb20">
                   <?php $counter = 1 ?>
                   <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                   <?php if (get_field('slider_active2')): ?> <li data-target="#main-slider" data-slide-to="<?php echo $counter ?>"></li><?php $counter++; endif; ?>
                   <?php if (get_field('slider_active3')): ?> <li data-target="#main-slider" data-slide-to="<?php echo $counter ?>"></li><?php $counter++; endif; ?>
                   <?php if (get_field('slider_active4')): ?> <li data-target="#main-slider" data-slide-to="<?php echo $counter ?>"></li><?php $counter++; endif; ?>
                 </ol>

   <h1>treść inline</h1>
  </div>

  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active" style='background-image: url("<?php the_field('pcf-s-f1');?>")'>
       <div class="item-content">
       </div>
    </div>

    <?php if (get_field('slider_active2')): ?>
    <div class="carousel-item" style='background-image: url("<?php the_field('pcf-s-f2');?>")'>
       <!-- <div class="item-content"><?php  the_field('pcf-s-h2') ?></div> -->
    </div>  <?php endif; ?>

    <?php if (get_field('slider_active3')): ?>
    <div class="carousel-item" style='background-image: url("<?php the_field('pcf-s-f3');?>")'>
       <!-- <div class="item-content"><?php  the_field('pcf-s-h3') ?></div> -->
    </div>  <?php endif; ?>


    <?php if (get_field('slider_active4')): ?>
    <div class="carousel-item" style='background-image: url("<?php the_field('pcf-s-f4');?>")'>
       <!-- <div class="item-content"><?php  the_field('pcf-s-h4') ?></div> -->
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
