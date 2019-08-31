

<div class="prgrm_visual_editor container main-content">
      <div class="row">
        <div class="col-md-12">
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
      </div>
</div>

