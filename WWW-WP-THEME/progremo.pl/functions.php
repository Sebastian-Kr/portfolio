<?php
function opc_setup() {


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

add_action( 'after_setup_theme', 'opc_setup' );

function styles() {

wp_enqueue_style( 'style', get_stylesheet_uri());
wp_enqueue_style( 'font', "https://fonts.googleapis.com/css?family=Raleway:100,200,400,700");	
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true);

 if( is_page('15') ){
wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), '', true);
wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3.js', array(), '', true);

$user_pins = array (

'gps11' => get_field('gps11'),'gps12' => get_field('gps12'), 'desc1' => get_field('desc1'),
'gps21' => get_field('gps21'),'gps22' => get_field('gps22'), 'desc2' => get_field('desc2'),
);

wp_localize_script( 'contact', 'mapka', $user_pins);
wp_enqueue_script( 'contact' );

}
}
add_action( 'wp_enqueue_scripts', 'styles' );



function register_widget_areas () {


	register_sidebar(array(
		'name'          => 'Stopka sekcja druga - kolumna 1',
		'id'            =>'footer1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="comp-data">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));

	register_sidebar(array(
		'name'          => 'Stopka sekcja druga - kolumna 2',
		'id'            =>'footer2',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="comp-data">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	)); 

	register_sidebar(array(
		'name'          => 'Stopka sekcja druga - kolumna 3',
		'id'            =>'footer3',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="comp-data">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	)); 

	register_sidebar(array(
		'name'          => 'Stopka sekcja druga - kolumna 4',
		'id'            =>'footer4',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="comp-data">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	));  

	register_sidebar(array(
		'name'          => 'Stopka sekcja pierwsza',
		'id'            =>'footer5',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	)); 

}
add_action( 'widgets_init', 'register_widget_areas'); 


	

?>




<?php
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
?>