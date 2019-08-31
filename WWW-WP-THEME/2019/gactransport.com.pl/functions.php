<?php


function progremo_setup() {


	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );



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

add_action( 'after_setup_theme', 'progremo_setup' );

function progremo_styles() {
	wp_enqueue_style ( 'style', get_stylesheet_uri());
	wp_enqueue_style ( 'project-style', get_template_directory_uri().'/project-style.css');
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.min.js', array(), '', true );
	// wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.min.js', array(), '', true );
	// wp_enqueue_script( 'google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAM5tRX5DeWa2vUi7txHfvEPD5wykq4n5o', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'progremo_styles' );

function progremo_register_widget_areas () {


	register_sidebar(array(
		'name'          => 'Stopka - kolumna 1',
		'id'            =>'stopka_kolumna_1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name'          => 'Stopka - kolumna 3',
		'id'            =>'stopka_kolumna_3',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));



}


add_action( 'widgets_init', 'progremo_register_widget_areas');




// USUWANIE DODATKOWYCH KLAS I ID Z ELEMENTÓW LISTY ROZWIJANEJ W MENU

function prgremo_remove_css_id_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}
add_filter( 'page_css_class', 'prgremo_remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'prgremo_remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_css_class', 'prgremo_remove_css_id_filter', 100, 1);




// Remove WordPress Meta Generator
remove_action('wp_head', 'wp_generator');

// Hide WordPress Version Info
function progremo_hide_wordpress_version() {
	return '';
}
add_filter('the_generator', 'progremo_hide_wordpress_version');

// Remove WordPress Version Number In URL Parameters From JS/CSS
function progremo_hide_wordpress_version_in_script($src, $handle) {
    $src = remove_query_arg('ver', $src);
	return $src;
}
add_filter( 'style_loader_src', 'progremo_hide_wordpress_version_in_script', 10, 2 );
add_filter( 'script_loader_src', 'progremo_hide_wordpress_version_in_script', 10, 2 );


show_admin_bar(false);





function progremo_remove_menus(){

  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack*
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'progremo_remove_menus' );




function ssacf($acf_field_id) {
if ( class_exists( 'iworks_orphan' ) ){
	   $orphan = new iworks_orphan();
	   echo $orphan->replace( get_field($acf_field_id));
	  }
	  else {
	   echo the_field($acf_field_id);
	  }
};



// Remove Gutenberg Blocks
add_filter('use_block_editor_for_post', '__return_false');


 // NEW POST TYPES
  function create_post_type_modules() {
    register_post_type( 'modules',
      array(
        'labels' => array(
					'name' => 'REALIZACJE',
    'singular_name' => 'Realizacje',
    'parent_item_colon' => '',
        ),
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true,
     'show_in_menu' => true,
     'query_var' => true,
     // 'rewrite' => true,
     'capability_type' => 'post',
     'has_archive' => true,
		  'show_in_rest' => true,
     'hierarchical' => false,
     'menu_position' => null,
         'supports' => array( 'title')

      )
    );
  }
  add_action( 'init', 'create_post_type_modules' );




  ?>
