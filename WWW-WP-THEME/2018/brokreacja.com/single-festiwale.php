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

<div class="page-container single-page-festiwale">
    
    <div class="r-line"></div>
    
    <div class="content-full">
        
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            
            <div class="events">
                
                <div class="event" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>);">
                                
                    <?php
                    
                        $data = get_post_meta($post->ID, 'festiwale-extend', true);
                        $data = $data[0]['data'];
                    
                    ?>

                    <a class="button" href="<?php echo get_site_url(); ?>/blog/?t=festiwale">Powrót</a>

                    <div class="box">
                        
                        <h3><?php echo apply_filters('the_title', get_post_field('post_title', $post->ID)); ?></h3>

                        <p class="date"><?php echo $data; ?></p>

                        <div class="des"><?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?></div>
                    
                    </div>

                </div>          
                
            </div>
            
        </div>
        
        <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>
        
    </div>
    
</div>  

<script>
    
    $(document).ready(function()
    {
        $('#nav-fiv').addClass('active');
        
        $('.page-container .r-line').css('height', $('.page-container').height());
        
        $(window).resize(function()
        {
           $('.page-container .r-line').css('height', $('.page-container').height()); 
        });
    });
    
</script>
    
<?php get_footer(); ?>
