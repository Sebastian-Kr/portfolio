<!-- MAIN CONTENT  -->


<div class="container-fluid maxw">
  <div class="row">

   <div class="col-sm-12 main-content">
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
</div></div>
