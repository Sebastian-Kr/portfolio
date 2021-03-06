<?php

function prgrm_setup() {


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

add_action( 'after_setup_theme', 'prgrm_setup' );


function starter_scripts() {
    wp_deregister_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );

if (!(is_page(22))) {
	function starter2_scripts() {
	    wp_deregister_script( 'contact-form-7' );
	    wp_deregister_style('contact-form-7-css');
	}
	add_action( 'wp_enqueue_scripts', 'starter2_scripts' );
}


function prgrm_styles() {

wp_enqueue_style( 'basic-style', get_template_directory_uri() . '/css/front/basic_css.css' );
wp_enqueue_style ( 'style', get_stylesheet_uri());
wp_enqueue_script( 'global', get_template_directory_uri() . '/js/global/global.js', array(), '', true );

if (is_page(16)) {
	wp_enqueue_script( 'global16', get_template_directory_uri() . '/js/global/global16.js', array(), '', true );
}

if (is_page(19)) {
	wp_enqueue_script( 'global19', get_template_directory_uri() . '/js/global/global19.js', array(), '', true );
}
if (is_front_page()) {
	wp_enqueue_script( 'global21', get_template_directory_uri() . '/js/global/global21.js', array(), '', true );
}
wp_enqueue_script( 'global20', get_template_directory_uri() . '/js/global/global20.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'prgrm_styles' );



function prgrm_register_widget_areas () {


	register_sidebar(array(
		'name'          => 'Stopka - kolumna 1',
		'id'            =>'footer1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="footer-col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));


		register_sidebar(array(
			'name'          => 'Stopka - kolumna 2',
			'id'            =>'footer2',
			'description'   => 'Tutaj należy dodać widgety',
			'before_widget' => ' <div class="footer-col">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		));
}




add_action( 'widgets_init', 'prgrm_register_widget_areas');


//  REJESTRACJA WSZYSTKICH MENU

function register_prgrm_menus(){
  register_nav_menus(
    array(
     'header-menu' => 'Menu główne',
     'footer-menu' => 'Menu stopka',
   )
 );
}
add_action('init', 'register_prgrm_menus');

// USUWANIE DODATKOWYCH KLAS I ID Z ELEMENTÓW LISTY ROZWIJANEJ W MENU

function remove_css_id_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter( 'page_css_class', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_css_class', 'remove_css_id_filter', 100, 1);



// breadcrumb
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="follow">Kancelaria</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
								echo "<span>";
								the_title();
								echo "</span>";
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}


//end breadcrumb


// Remove WordPress Meta Generator
remove_action('wp_head', 'wp_generator');

// Hide WordPress Version Info
function hide_wordpress_version() {
	return '';
}
add_filter('the_generator', 'hide_wordpress_version');

// Remove WordPress Version Number In URL Parameters From JS/CSS
function hide_wordpress_version_in_script($src, $handle) {
    $src = remove_query_arg('ver', $src);
	return $src;
}
add_filter( 'style_loader_src', 'hide_wordpress_version_in_script', 10, 2 );
add_filter( 'script_loader_src', 'hide_wordpress_version_in_script', 10, 2 );


show_admin_bar(false);

// Global config for excerpt length --- remove (instead local settings)
// function my_excerpt_length($length) {
// return 106;
// }
// add_filter('excerpt_length', 'my_excerpt_length');

// Remove JSON API links in header html
remove_action( 'wp_head', 'rsd_link' );


function iworks_orphan( $content )
{
    if ( !class_exists( 'iWorks_Orphan' ) ) {
        return $content;
    }
    $orphan = new iWorks_Orphan();
    return $orphan->replace( $content );
}
