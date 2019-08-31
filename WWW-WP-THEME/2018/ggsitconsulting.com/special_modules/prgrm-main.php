

          <?php
          if ( have_posts() ) {
            while ( have_posts() ) {
              the_post();
          if (get_the_content()){ ?>
                    <?php the_content(); ?>
<?php
          } // end is content statment
            } // end while
          } // end if
          ?>
