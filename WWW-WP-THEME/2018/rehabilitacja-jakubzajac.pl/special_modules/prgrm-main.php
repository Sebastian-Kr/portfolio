

          <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
          if (get_the_content()){ ?>
            <div class="prgrm_visual_editor container main-content">
                  <div class="row">
                    <div class="col-md-12 mt50">

                    <?php the_content(); ?>
                  </div>
                </div>
              </div>

<?php
          } // end is content statment
            } // end while
          } // end if
          ?>
