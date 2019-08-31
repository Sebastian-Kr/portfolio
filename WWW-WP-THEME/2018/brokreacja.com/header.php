<?php
defined('ABSPATH') or die();
/**
 * Default Page Header
 *
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<!DOCTYPE html>
<!-- HTML5 -->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <title><?php wp_title("-", true, "right"); ?> </title>
<?php
        // Favicon
        $options = get_option('bicbswp_theme_options');
        if ($options['favicon'] != '') {
            echo '<link type="image/x-icon" href="' . $options['favicon'] . '" rel="Shortcut Icon">';
        }
        ?>

        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!--
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed"
              href="<?php echo get_template_directory_uri(); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
        -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lay.css">
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/whcookies.js"></script>


        <meta name="google-site-verification" content="jKx9toit4Np76LSx9MQqfAHMRLqLfx2VhPioGkIxCcw" />

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-84038515-1', 'auto');
            ga('send', 'pageview');

        </script>

<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

    <?php $postID = get_the_ID(); ?>
        <header class="main-header">

            <a class="logo" href="<?php echo get_site_url(); ?>"></a>

            <nav id="nav">

                <ul id="std-nav">

                    <?php if($postID == 6): ?>


                    <li><a href="#home"><span></span>Home</a></li>
                    <li><a href="#browar"><span></span>Brewery</a></li>
                    <li><a href="#nasze-piwo"><span></span>Our beers</a></li>
                    <li><a href="#kontakt"><span></span>Contact</a></li>

                    <?php endif; ?>

                    <?php if($postID != 6): ?>

                    <li><a href="<?php echo get_site_url(); ?>/#home"><span></span>Home</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/#browar"><span></span>Brewery</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/#nasze-piwo"><span></span>Our beers</a></li>
                    <li><a href="<?php echo get_site_url(); ?>/#kontakt"><span></span>Contact</a></li>

                    <?php endif; ?>

                </ul>

            </nav>

            <div class="right">

                <a id="show-menu" href="#"></a>




                <div class="lang_container"><div class="current">ENG</div><ul class="lang">
                  <li><a href="https://brokreacja.pl/">PL</a></li>
                </ul></div>
                <div class="sep"></div>

                <a class="facebook" href="https://www.facebook.com/brokreacja/" target="_blank"></a>
                <a class="instagram" href="https://www.instagram.com/brokreacja/" target="_blank"></a>


            </div>


            <div id="mobile-menu">

                <nav id="nav">

                    <ul>

                        <?php if($postID == 6): ?>


                                              <li><a href="#home"><span></span>Home</a></li>
                                              <li><a href="#browar"><span></span>Brewery</a></li>
                                              <li><a href="#nasze-piwo"><span></span>Our beers</a></li>
                                              <li><a href="#kontakt"><span></span>Contact</a></li>


                        <?php endif; ?>

                        <?php if($postID != 6): ?>

                          <li><a href="<?php echo get_site_url(); ?>/#home"><span></span>Home</a></li>
                          <li><a href="<?php echo get_site_url(); ?>/#browar"><span></span>Brewery</a></li>
                          <li><a href="<?php echo get_site_url(); ?>/#nasze-piwo"><span></span>Our beers</a></li>
                          <li><a href="<?php echo get_site_url(); ?>/#kontakt"><span></span>Contact</a></li>

                        <?php endif; ?>

                    </ul>

                </nav>

            </div>

        </header>
