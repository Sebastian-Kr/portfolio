
   <h5 class="mobihide mb mt2"><?php the_field('pcf-sp-n') ;?></h5>


     <div   id="main-slider2" class="carousel slide mobihide" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#main-slider2" data-slide-to="0" class="active"></li>

       <?php if (get_field('pcf-sp-f7')) :?>
          <li data-target="#main-slider2" data-slide-to="1"></li>
        <?php endif;?>

        <?php if (get_field('pcf-sp-f13')) :?>
         <li data-target="#main-slider2" data-slide-to="2"></li>
       <?php endif;?>


       </ol>
       <div class="carousel-inner" role="listbox">

         <div class="item active">
             <div id="partners">
           <div class="img-table">
                  <?php if (get_field('pcf-sp-f1')) :?><div><a href="<?php the_field('pcf-sp-l1'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f1'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f2')) :?><div><a href="<?php the_field('pcf-sp-l2'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f2'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f3')) :?><div><a href="<?php the_field('pcf-sp-l3'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f3'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f4')) :?><div><a href="<?php the_field('pcf-sp-l4'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f4'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f5')) :?><div><a href="<?php the_field('pcf-sp-l5'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f5'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f6')) :?><div><a href="<?php the_field('pcf-sp-l6'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f6'); ?>"></a></div>     <?php endif;?>
           </div>
           </div>
         </div>

       <?php if (get_field('pcf-sp-f7')) :?>
         <div class="item">
             <div id="partners">
           <div class="img-table">
                  <?php if (get_field('pcf-sp-f7')) :?><div><a href="<?php the_field('pcf-sp-l7'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f7'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f8')) :?><div><a href="<?php the_field('pcf-sp-l8'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f8'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f9')) :?><div><a href="<?php the_field('pcf-sp-l9'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f9'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f10')) :?><div><a href="<?php the_field('pcf-sp-l10'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f10'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f11')) :?><div><a href="<?php the_field('pcf-sp-l11'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f11'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f12')) :?><div><a href="<?php the_field('pcf-sp-l12'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f12'); ?>"></a></div>     <?php endif;?>
           </div>
           </div>
         </div>
       <?php endif;?>

       <?php if (get_field('pcf-sp-f13')) :?>
         <div class="item">
             <div id="partners">
           <div class="img-table">
                  <?php if (get_field('pcf-sp-f13')) :?><div><a href="<?php the_field('pcf-sp-l13'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f12'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f14')) :?><div><a href="<?php the_field('pcf-sp-l14'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f14'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f15')) :?><div><a href="<?php the_field('pcf-sp-l15'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f15'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f16')) :?><div><a href="<?php the_field('pcf-sp-l16'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f16'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f17')) :?><div><a href="<?php the_field('pcf-sp-l17'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f17'); ?>"></a></div>     <?php endif;?>
                  <?php if (get_field('pcf-sp-f18')) :?><div><a href="<?php the_field('pcf-sp-l18'); ?>" rel="noindex, nofollow" target="_blank"><img src="<?php the_field('pcf-sp-f18'); ?>"></a></div>     <?php endif;?>
           </div>
           </div>
         </div>
       <?php endif;?>



       </div>
<!-- end slider container -->
     </div>
