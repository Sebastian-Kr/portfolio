<?php defined('ABSPATH') or die();
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
get_header();
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="page-container single-page-festiwale single-page-blog">
    
    <div class="r-line"></div>
    
    <div class="content-full">
        
        <div class="col-lg-2 col-md-2"></div>
        
        <div class="col-lg-8 col-md-8">
            
            <div class="events">
                
                <div class="event">
                                
                    <!--<a class="button" href="<?php echo get_site_url(); ?>/blog/">Powrót</a>-->

                    <div class="box">
                        
                        <h3 class="title"><?php echo apply_filters('the_title', get_post_field('post_title', $post->ID)); ?></h3>

                        <p class="date"><?php echo get_the_date(); ?> <a class="fb-share" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="Share on Facebook"></a></p>
                                
                        <img class="blog-image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt="">

                        <div class="des"><?php echo apply_filters('the_content', get_post_field('post_content', $post->ID)); ?></div>
                    
                    </div>
                    
                    
            
                <div class="comments">
                    
                    <div class="fb-comments" data-href="<?php echo get_permalink($post->ID); ?>" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>

                </div>

                </div>    
                
                <div style="margin: 0px; padding: 0px;" class="col-lg-4 col-md-4 col-sm-4 col-xs-6"><a class="button button2" href="<?php echo get_permalink( get_adjacent_post(false,'',true)->ID ); ?>">Poprzedni</a></div> 
                
                <div style="margin: 0px; padding: 0px;" class="col-lg-4 col-md-4 col-sm-4 hidden-xs"><a class="button" href="<?php echo get_site_url(); ?>/blog/">Powrót</a></div>
                
                <div style="margin: 0px; padding: 0px;" class="col-lg-4 col-md-4 col-sm-4 col-xs-6"><a class="button button2" href="<?php echo get_permalink( get_adjacent_post(false,'',false)->ID ); ?>">Następny</a></div>
                
                <div style="margin: 0px; padding: 0px;" class="col-xs-12 hidden-lg hidden-md hidden-sm"><a class="button" href="<?php echo get_site_url(); ?>/blog/">Powrót</a></div>
                
            </div>
            
        </div>
        
        <div class="col-lg-2 col-md-2"></div>
        
    </div>
    
</div>  

<script>
    
    $(document).ready(function()
    {
        $('#nav-blog').addClass('active');
        
        $('.page-container .r-line').css('height', $('.page-container').height());
        
        $('[data-toggle="tooltip"]').tooltip();
        
        $(window).resize(function()
        {
           $('.page-container .r-line').css('height', $('.page-container').height()); 
        });
    });
    
</script>

<?php get_footer(); ?>