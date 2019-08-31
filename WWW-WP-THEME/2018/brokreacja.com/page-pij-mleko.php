<?php defined('ABSPATH') or die();
/**
 * Template Name: Full Width Page
 * Description: Page template with a full width content container.
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>


<div class="page-container page-pij-mleko">

    <div class="content">

        <div class="mleko"></div>

        <h1><?php the_title('') ?></h1>

        <a id="ok" href="<?php echo get_site_url(); ?>">

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

        </a>

    </div>

</div>



<?php get_footer(); ?>
