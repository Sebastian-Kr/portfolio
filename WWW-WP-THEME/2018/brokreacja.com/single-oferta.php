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


<div class="page-container single-oferta">

    <div class="banner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(108)); ?>);">

        <div class="content">

            <div class="title-box-c">

                <h1><?php echo apply_filters('the_title', get_post_field('post_title', 105)); ?></h1>

            </div>

        </div>

    </div>

    <div class="main-content" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(109)); ?>);">

        <div class="content">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 photo hidden visible-sm visible-xs">

                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text">

                <div class="frame">

                    <h2><?php echo apply_filters('the_title', get_post_field('post_title', $post->ID)); ?></h2>

                    <div class="line"></div>

                    <div class="txt"><?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?></div>

                    <a class="return" href="<?php echo get_home_url(); ?>/oferta-specjalna/">Back</a>

                </div>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 photo hidden-sm hidden-xs">

                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">

            </div>

        </div>

    </div>

</div>


<?php get_footer(); ?>
