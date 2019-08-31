
         <div class="header3" style=" background-image: url('<?php the_field('header3'); ?>');">
    

<h1><?php the_title(); ?></h1>
   
            </div>



<!-- MAIN CONTENT  -->
<? if($content = $post->post_content ) {
      echo '<div class="container "><div class="main-content"><p>';
      the_content();
      echo get_post_field('post_content');
      echo "</p></div></div>";

   }?>


<!-- END MAIN CONTENT -->