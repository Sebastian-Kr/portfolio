<?php

function progremo_setup() {


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

add_action( 'after_setup_theme', 'progremo_setup' );

function progremo_styles() {
	wp_enqueue_style ( 'style', get_stylesheet_uri());
	// wp_enqueue_style ( 'style_starter', get_template_directory_uri() . '/style.min.css');
	wp_enqueue_style ( 'project_style', get_template_directory_uri() . '/project_style.css');
// wp_enqueue_style ( 'custom_style', get_template_directory_uri() . '/style_custom-off.css');
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );



}

add_action( 'wp_enqueue_scripts', 'progremo_styles' );



//  REJESTRACJA WSZYSTKICH MENU

function register_progremo_menus(){
  register_nav_menus(
    array(
     'header-menu' => 'Menu główne',
     'footer-menu' => 'Menu stopka',
   )
 );
}
add_action('init', 'register_progremo_menus');

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


// show_admin_bar(false);



function progremo_remove_menus(){

  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack*
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
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


 // add_action( 'admin_menu', 'progremo_register_my_custom_menu_page' );
 // function progremo_register_my_custom_menu_page() {
 //   // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
 //   add_menu_page( 'ARTYKUŁY BLOG', 'ARTYKUŁY BLOG', 'manage_options', 'edit.php?cat=3', '', 'dashicons-welcome-widgets-menus', 21 );
 // }




 function progremo_cn_include_content($pid) {
 	$thepageinquestion = get_post($pid);
 	$content = $thepageinquestion->post_content;
 	$content = apply_filters('the_content', $content);
 	$content = str_replace(']]>', ']]>', $content);
 	echo $content;
 }

 // 
 // function my_custom_post_prelegent() {
 //   $labels = array(
 //     'name'               => _x( 'Prelegenci', 'prelegent' ),
 //     'singular_name'      => _x( 'Prelegenci', 'prelegent' ),
 //     'parent_item_colon'  => '',
 //     'menu_name'          => 'Prelegenci'
 //   );
 //   $args = array(
 //     'labels'        => $labels,
 //     'public'        => true,
 //     'menu_position' => 5,
 //
	// 	     'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
 //
 //     'has_archive'   => true,
	// 	 'hierarchical'        => false,
 // 'public'              => true,
 // 'show_ui'             => true,
 // 'show_in_menu'        => true,
 // 'show_in_nav_menus'   => true,
 // 'show_in_admin_bar'   => true,
 // 'menu_position'       => 5,
 // 'can_export'          => true,
 // 'has_archive'         => true,
 // 'exclude_from_search' => false,
 // 'publicly_queryable'  => true,
 // 'capability_type'     => 'post',
 //   );
 //   register_post_type( 'prelegent', $args );
 // }
 // add_action( 'init', 'my_custom_post_prelegent' );
 //
 //
 // function my_custom_post_modules() {
	//  $labels2 = array(
	// 	 'name'               => _x( 'Moduły specjalne', 'modules' ),
	// 	 'singular_name'      => _x( 'Moduły specjalne', 'modules' ),
	// 	 'parent_item_colon'  => '',
	// 	 'menu_name'          => 'Moduły specjalne'
	//  );
	//  $args2 = array(
	// 	 'labels'        => $labels2,
	// 	 'public'        => true,
	// 	 'menu_position' => 6,
	// 	 'supports'      => array( 'title', 'editor', 'thumbnail' ),
	// 	 'has_archive'   => true,
	//  );
	//  register_post_type( 'modules', $args2 );
 // }
 // add_action( 'init', 'my_custom_post_modules' );


 add_action( 'admin_menu', 'progremo_register_my_custom_menu_page' );
 function progremo_register_my_custom_menu_page() {
   add_menu_page( 'Prelegenci 2', 'Prelegenci 2', 'manage_options', 'edit.php?cat=3', '', 'dashicons-welcome-widgets-menus', 21 );
	 add_menu_page( 'Moduły specjalne 2', 'Moduły specjalne 2', 'manage_options', 'edit.php?cat=2', '', 'dashicons-welcome-widgets-menus', 22 );
 }
  ?>
