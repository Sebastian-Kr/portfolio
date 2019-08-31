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
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '', 'all' );
wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom-style.css', array(), '', 'all' );



wp_enqueue_script( 'jquery-js', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array('jquery'), '', true );
wp_enqueue_script( 'mobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array(), '', true );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );


 if( is_page('20') ){
wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3.js', array('jquery'), '', true );
wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array('gmap3'), '', true );



$user_pins = array (

'gps11' => get_field('gps11'),'gps12' => get_field('gps12'),'pin_icon1' => get_field('pin_icon1'), 'desc1' => get_field('desc1'),
'gps21' => get_field('gps21'),'gps22' => get_field('gps22'),'pin_icon2' => get_field('pin_icon2'),  'desc2' => get_field('desc2'),
'gps31' => get_field('gps31'),'gps32' => get_field('gps32'), 'pin_icon3' => get_field('pin_icon3'), 'desc3' => get_field('desc3'),
'gps41' => get_field('gps41'), 'gps42' => get_field('gps42'), 'pin_icon4' => get_field('pin_icon4'), 'desc4' => get_field('desc4'),
'gps51' => get_field('gps51'), 'gps52' => get_field('gps52'), 'pin_icon5' => get_field('pin_icon5'), 'desc5' => get_field('desc5'),
'gps61' => get_field('gps61'), 'gps62' => get_field('gps62'), 'pin_icon6' => get_field('pin_icon6'), 'desc6' => get_field('desc6'),
'gps71' => get_field('gps71'), 'gps72' => get_field('gps72'), 'pin_icon7' => get_field('pin_icon7'), 'desc7' => get_field('desc7'),
'gps81' => get_field('gps81'), 'gps82' => get_field('gps82'), 'pin_icon8' => get_field('pin_icon8'), 'desc8' => get_field('desc8'),
'gps91' => get_field('gps91'), 'gps92' => get_field('gps92'), 'pin_icon9' => get_field('pin_icon9'), 'desc9' => get_field('desc9'),
'gps101' => get_field('gps101'), 'gps102' => get_field('gps102'), 'pin_icon10' => get_field('pin_icon10'), 'desc10' => get_field('desc10'),
'gps111' => get_field('gps111'), 'gps112' => get_field('gps112'), 'pin_icon11' => get_field('pin_icon11'), 'desc11' => get_field('desc11'),
'gps121' => get_field('gps121'), 'gps122' => get_field('gps122'), 'pin_icon12' => get_field('pin_icon12'), 'desc12' => get_field('desc12'),
'gps131' => get_field('gps131'), 'gps132' => get_field('gps132'), 'pin_icon13' => get_field('pin_icon13'), 'desc13' => get_field('desc13'),


);

wp_localize_script( 'contact', 'mapka', $user_pins);
wp_enqueue_script( 'contact' );


}
}
add_action( 'wp_enqueue_scripts', 'styles' );







require_once('wp_bootstrap_navwalker.php');



 function register_my_menus(){
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );
}
add_action('init', 'register_my_menus');


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


add_action( 'init', 'cptui_register_my_cpts_najnowsze_wpisy' );
function cptui_register_my_cpts_najnowsze_wpisy() {
	$labels = array(
		"name" => __( 'Najnowsze', 'newdivide' ),
		"singular_name" => __( 'Nowości', 'newdivide' ),
		);

	$args = array(
		"label" => __( 'Najnowsze', 'newdivide' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "najnowsze_wpisy", "with_front" => true ),
		"query_var" => true,
		
		"supports" => array( "title", "editor", "thumbnail" ),					);
	register_post_type( "najnowsze_wpisy", $args );


}





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