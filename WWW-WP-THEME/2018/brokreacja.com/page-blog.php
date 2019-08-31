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

<div class="page-container page-blog">
    
    <div class="r-line"></div>
        
        <?php
        
            if(isset($_GET['t']) && $_GET['t'] == 'festiwale') { $type = 'festiwale'; }
            else { $type = 'post'; }
        
        ?>
    
    <div class="content-full" <?php if($type == 'post'): ?>style="max-width: none;"<?php endif; ?>>
        
        <?php if($type != 'post'): ?><div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div><?php endif; ?>
        
        <div class="<?php if($type == 'post'): ?>col-lg-12 col-md-12 <?php endif; ?> <?php if($type != 'post'): ?>col-lg-8 col-md-8 <?php endif; ?> col-sm-12 col-xs-12">
            
            <div class="events" <?php if($type == 'post'): ?>style="padding-top: 0px;"<?php endif; ?>>
                
                <?php
        
                    $args = array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                    );

                    $my_query = null;
                    $my_query = new WP_Query($args);

                    if($my_query->have_posts()) 
                    {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                
                            <?php if($type == 'festiwale' && get_the_ID() == 40) { continue; } ?>
                
                            <?php if($type == 'post'): ?>
                
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 blog-post-box">

                                <div class="event blog-post" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>);">
                                    
                                    <div class="blog-post-content">

                                        <h3><?php echo get_the_title(); ?></h3>

                                        <p class="date"><?php echo get_the_date(); ?> <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="Share on Facebook"></a></p>

                                        <!--<img class="blog-image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="">-->

                                        <div class="des"><?php echo strip_tags(substr(get_the_content(), 0, 406)); ?></div>

                                        <a class="button" href="<?php echo get_the_permalink(); ?>">Czytaj więcej</a>
                                    
                                    </div>

                                </div> 
                                
                            </div>
                
                            <?php endif; ?>
                
                
                            <?php if($type == 'festiwale'): ?>

                            <div class="event" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>);">
                                
                                <h3><?php echo get_the_title(); ?></h3>

                                <p class="date"><?php echo get_the_date(); ?></p>

                                <div class="des"><?php echo substr(get_the_content(), 0, 406); ?>...</div>

                                <a class="button" href="<?php echo get_the_permalink(); ?>">Czytaj więcej</a>

                            </div> 
                
                            <?php endif; ?>

                        <?php endwhile;
                    }

                    wp_reset_query(); 

                ?>           
                
            </div>
            
            <div class="pagination">
                
                
                
            </div>
            
        </div>
        
        <?php if($type != 'post'): ?><div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div><?php endif; ?>
        
    </div>
    
</div>  

<script>
    
    $(document).ready(function()
    {
        $('#nav-blog').addClass('active');
        
        <?php if($type == 'festiwale'): ?>
                
        $('#nav-blog').removeClass('active'); 
        $('#nav-fiv').addClass('active');
                
        <?php endif; ?>
        
        $('.page-container .r-line').css('height', $('.page-container').height());
        
        $('.blog-image').click(function()
        {
            location.href = $(this).next().next().attr('href');
        });
        
        $('[data-toggle="tooltip"]').tooltip();
        
        
        $('.blog-post').click(function()
        {
            var url = $(this).children().children('.button').attr('href');
            location.href = url;
        });
        
        $(window).resize(function()
        {
           $('.page-container .r-line').css('height', $('.page-container').height()); 
        });
    });
    
</script>
    
<?php get_footer(); ?>
