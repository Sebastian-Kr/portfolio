<div id="app_image">


   <!-- PHP -->

   <div id="build_shema">

     <div class="container title_float_container">
       <div class="row">
         <div class="col-lg-4">
           <h2 class="special_header"><span>05</span>
             <?php the_field('section5_title')?>
           </h2>
         </div>

         <div class="col-lg-8 ">
           <div class="main_paragraph">
           <?php the_field('section5_content')?>
           </div>
         </div>
       </div>
     </div>

     <svg
     id="build_svg"
       version="1.1"
       xmlns="http://www.w3.org/2000/svg"
       xmlns:xlink="http://www.w3.org/1999/xlink"
       x="0px"
       y="0px"
       viewBox="0 0 1920 1083"
       xml:space="preserve">

       <image
       style="overflow:hidden;"
       width="1920" height="1083"
       xlink:href="<?php echo the_field('section5_bg')?>">
       </image>

      <?php
      // Generate shape polygon
      include('generataFloorShape.php');
      ?>
     </svg>

   </div>


      <?php
      // Generate floor panel
      include('generateFloorPanel.php');
      ?>


 </div>
