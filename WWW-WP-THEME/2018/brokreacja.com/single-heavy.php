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

<div class="page-container single-page-podstawowa">

    <div class="r-line"></div>

    <?php



        $l_products = 0;
        $products = array();
        $current = "";
        $post_id = $post->ID;


        $args = array(
            'post_type' => 'heavy',
            'post_status' => 'publish',
            'posts_per_page' => -1
        );

        $my_query = null;
        $my_query = new WP_Query($args);

        if($my_query->have_posts())
        {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>


                <?php

                    $products[$l_products]['ID'] = get_the_ID();
                    $products[$l_products]['Link'] = get_the_permalink();

                    if(get_the_ID() == $post_id) { $current = $l_products; }

                    $l_products++;

                ?>

            <?php endwhile;
        }

        wp_reset_query();


        if($l_products > 0) { $prev = $current + 1; $prev = $products[$prev]['Link']; }
        else { $prev = ''; }

        if($current < $l_products) { $next = $current - 1; $next = $products[$next]['Link']; }
        else { $next = ''; }


        if($current == 0)
        {
            $next = $products[$l_products-1]['Link'];
        }

        else if($current == $l_products-1)
        {
            $prev = $products[0]['Link'];
        }

    ?>

    <div class="content-full">
      <div class="col-sm-1 col-xs-1  hidden-xs"><a class="prev" href="<?php echo $next; ?>"></a></div>

      <div class="col-lg-5  hidden-md hidden-sm hidden-xs image" style="background-image: url(<?php the_field('img')?>);"></div>

          <div class="col-lg-4 col-sm-10 col-xs-12">


            <div class="content-box">

                <a class="return" href="<?php echo get_site_url(); ?>/#nasze-piwo">Back</a>

                <div class="text">

                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" alt="">

<div class="bear_spec">

                      <h1><?php echo apply_filters('the_title', get_post_field('post_title', $post->ID)); ?></h1>

                      <h2><?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?></h2>

                      <p class="spec"><?php the_field('spec')?></p>

</div>

                    <p class="des"><?php the_field('desc')?></p>

                    <p class="des"><span>Ingredients: </span><?php the_field('sklad')?></p>

                </div>

            </div>

        </div>
        <div class="col-lg-2 col-md-1 hidden-sm hidden-xs"></div>

        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"><a class="next" href="<?php echo $prev; ?>"></a></div>


    </div>

</div>

<script>

    $(document).ready(function()
    {
        $('.page-container .r-line').css('height', $('.page-container').height());

        $(window).resize(function()
        {
           $('.page-container .r-line').css('height', $('.page-container').height());
        });
    });

</script>

<?php get_footer(); ?>
