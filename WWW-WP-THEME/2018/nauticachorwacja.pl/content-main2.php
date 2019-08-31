<!-- MAIN CONTENT  -->


<div class="container-fluid maxw">
  <div class="row">
<?php if (get_field('prgrm-t2-on')): ?>
   <div class="col-md-6 main-content">

     <?php
          echo '<div class="visual-editor">';
     if ( have_posts() ) {
       while ( have_posts() ) {
         the_post();
     if (get_the_content()){
               the_content();
     } // end is content statment
       } // end while
     } // end if
      echo '</div>';
     ?>

   </div>

   <div class="col-md-6 main-content">

     <?php
          echo '<div class="visual-editor">';
     echo the_field('prgrm-t2');
   echo '</div>';
      ?>
   </div>
<?php else: ?>

      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
      if (get_the_content()){
        echo '<div class="col-md-12 main-content">';

        if (is_singular()) {


          echo the_field('post-special-info2').'</span>';
        }
           echo '<div class="visual-editor">';
            the_content();
          echo '</div></div>';
      } // end is content statment
        } // end while
      } // end if
      ?>

<?php endif; ?>
      </div>
</div>
