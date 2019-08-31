
     <div id="main-slider" class="carousel slide" data-ride="carousel" data-interval="6000">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#main-slider" data-slide-to="0" class="active"></li>
         <li data-target="#main-slider" data-slide-to="1"></li>
         <li data-target="#main-slider" data-slide-to="2"></li>

       </ol>
       <div class="carousel-inner" role="listbox">


         <div class="item active" style='background-image: url("<?php the_field('progremo_slide-img1');?>")'>
           <div class="carousel-caption">
             <div><?php the_field('pcf-s-h1'); ?></div>
           </div>

         </div>

         <div class="item" style='background-image: url("<?php the_field('progremo_slide-img1');?>")'>

           <div class="carousel-caption">
                   <div><h2><?php the_field('pcf-s-h2'); ?></h2></div>
           </div>

         </div>
         <div class="item" style='background-image: url("<?php the_field('pcf-s-f3');?>")'>
           <div class="carousel-caption">
                   <div><h2> <?php the_field('pcf-s-h3'); ?></h2></div>
           </div>

         </div>



         			<a class="left carousel-control" href="#main-slider" data-slide="prev">
         	<span class="glyphicon glyphicon-chevron-left"></span>
         	<span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#main-slider" data-slide="next">
         	<span class="glyphicon glyphicon-chevron-right"></span>
         	<span class="sr-only">Next</span>
         </a>

       </div>

     </div>
