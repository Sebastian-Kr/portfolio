
<div class="py-5"><div class="separ"></div>
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <img class="column img-fluid d-block center w-25" src="<?php echo get_template_directory_uri()?>/img/strona-glowna-20.jpg"> </div>
     </div>
     <div class="row">
       <div class="col-md-12">
         <h1 class="text-center display-3 text-primary "><?php echo the_title() ?></h1>
         <div class="semisepar"></div>
         <p class="center">
           <!-- MAIN CONTENT  -->
           <div class="container main-content">
                 <?php
                 if ( have_posts() ) {
                   while ( have_posts() ) {
                     the_post();
                 if (get_the_content()){
                           the_content();
                 } // end is content statment
                   } // end while
                 } // end if
                 ?>
           </div>


           <!-- MAIN CONTENT END  -->
         </p>
       </div>
     </div>
   </div>
 </div>
