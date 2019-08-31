     <div id="main-slider" class="carousel slide" data-ride="carousel" data-interval="2000">

       <div class="carousel-inner" role="listbox">

<!--
         <div class="item active" style='background-image: url("http://mikulski.krakow.pl/wp-content/themes/progremo_theme/files/static-contents/photos/1/hd_6760cd3e70b60a318f543b41102056e2.jpg")'>
        </div>
         <div class="item" style='background-image: url("http://mikulski.krakow.pl/wp-content/themes/progremo_theme/files/static-contents/photos/1/hd_9025406d2eb895a5a9d30374ace8165b.png")'>
         </div>
         <div class="item" style='background-image: url("http://mikulski.krakow.pl/wp-content/themes/progremo_theme/files/static-contents/photos/1/hd_8793e9c981ee090a9ece5e7920ea95bb.jpg")'>
         </div> -->

 <!--
 <div class="item" style='background-image: url("<?php echo the_field('onas_foto2')?>")'></div>
 <div class="item" style='background-image: url("<?php echo the_field('onas_foto3')?>")'></div> -->


<div class="item active" style='background-image: url("<?php echo the_field('onas_foto1')?>")'></div>

         <?php
           $count = 2;
           $field_id = 'onas-foto'.$count;
         while (get_field($field_id)) {
           ?>
           <div class="item" style='background-image: url("<?php echo the_field($field_id)?>")'></div>

         <?php
            $count++;
            $field_id = 'onas-foto'.$count;
         } ?>

         			<a class="left carousel-control" href="#main-slider" data-slide="prev">
         	<!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
         	<span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#main-slider" data-slide="next">
         	<!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
         	<span class="sr-only">Next</span>
         </a>

       </div>

     </div>
