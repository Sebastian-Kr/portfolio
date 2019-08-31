<?php 



function starter_setup() {


	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );


	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',

	) );


}

add_action( 'after_setup_theme', 'starter_setup' );


function styles() {
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '', 'all' );

    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', array(), '', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '', 'all' );
   
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery3.1.1.js', array(), 'all');
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), 'all');
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array(), 'all');
    wp_enqueue_script( 'viewportchecker', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array(), 'all');

   
    
 if( is_page('contact') ){
        wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3.js', array('jquery'), '', true );
        wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array('gmap3'), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'styles' );







function register_widget_areas () {


	register_sidebar( array(
		'name'          => 'Stopka - pierwsza kolumna',
		'id'            =>'footer-1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) ); 


	register_sidebar( array(
		'name'          => 'Stopka - druga kolumna',
		'id'            =>'footer-2',
		'description'   => 'Tutaj należy dodać widgety.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) ); 
    
    register_sidebar( array(
		'name'          => 'Stopka - trzecia kolumna',
		'id'            =>'footer-3',
		'description'   => 'Tutaj należy dodać widgety.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	
	) ); 


}
add_action( 'widgets_init', 'register_widget_areas'); 



function wptricks24_recaptcha_scripts() {
        wp_deregister_script( 'google-recaptcha' );
 
        $url = 'https://www.google.com/recaptcha/api.js';
        $url = add_query_arg( array(
            'onload' => 'recaptchaCallback',
            'render' => 'explicit',
            'hl' => 'en'), $url ); // es is the language code for Spanish language
 
        wp_register_script( 'google-recaptcha', $url, array(), '2.0', true );
    }
 
    add_action( 'wpcf7_enqueue_scripts', 'wptricks24_recaptcha_scripts', 11 );


?>
