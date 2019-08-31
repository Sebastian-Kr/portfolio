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

if (is_page(18)) {
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), '', true );
	wp_enqueue_script( 'google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAM5tRX5DeWa2vUi7txHfvEPD5wykq4n5o', array(), '', true );
}

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
		'name'          => 'Stopka - kolumna 2',
		'id'            =>'stopka_kolumna_2',
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


			register_sidebar(array(
				'name'          => 'Stopka - kolumna 4',
				'id'            =>'stopka_kolumna_4',
				'description'   => 'Tutaj należy dodać widgety',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			));


			// register_sidebar(array(
			// 	'name'          => 'Menu - strona lewa',
			// 	'id'            =>'menu_lewa',
			// 	'description'   => 'Tutaj należy dodać widgety',
			// 	'before_widget' => '<div id="men_left_wid">',
			// 	'after_widget'  => '</div>',
			// ));
			//
			//
			// register_sidebar(array(
			// 	'name'          => 'Menu - strona prawa',
			// 	'id'            =>'menu_prawa',
			// 	'description'   => 'Tutaj należy dodać widgety',
			// 	'before_widget' => '<div id="men_right_wid">',
			// 	'after_widget'  => '</div>',
			// ));
			//



}


add_action( 'widgets_init', 'progremo_register_widget_areas');


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



// breadcrumb
function progremo_get_breadcrumb() {
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

add_filter('rest_authentication_errors', 'wpzen_disable_rest_api', 99);
function wpzen_disable_rest_api() {
	return new WP_Error('wpzen_rest_api_disabled', 'REST API disables', array('status' => 403));
}



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

 function progremo_get_html_sitemap( $atts ){

 				$return = '';
 				$args = array('public'=>1);

 // If you would like to ignore some post types just add them to the array below
 				$ignoreposttypes = array('attachment');

 				$post_types = get_post_types( $args, 'objects' );

 				foreach ( $post_types as $post_type ) {
 						if( !in_array($post_type->name,$ignoreposttypes)){
 								$return .= '<h2>' . $post_type->labels->name.'</h2>';
 								$args = array(
 										'posts_per_page'   => -1,
 										'post_type'        => $post_type->name,
 										'post_status'      => 'publish',
 										// 'category' => array(8,3,5),
 										// 'category__not_in' = 4,
 										'post__not_in' => array(559, 252, 247, 630, 132, 52),

 								);
 								$posts_array = get_posts( $args );
 								$return .=  '<ul>';
 								foreach($posts_array as $pst){
 										$return .=  '<li><a href="'.get_permalink($pst->ID).'">'.$pst->post_title.'</a></li>';
 								}
 								$return .=  '</ul>';
 						}
 				}

 		return $return;
 }
 add_shortcode( 'htmlSitemap', 'progremo_get_html_sitemap' );



 add_action( 'admin_menu', 'progremo_register_my_custom_menu_page' );
 function progremo_register_my_custom_menu_page() {
   // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
   add_menu_page( 'ARTYKUŁY BLOG', 'ARTYKUŁY BLOG', 'manage_options', 'edit.php?cat=3', '', 'dashicons-welcome-widgets-menus', 21 );
 }




 function progremo_cn_include_content($pid) {
 	$thepageinquestion = get_post($pid);
 	$content = $thepageinquestion->post_content;
 	$content = apply_filters('the_content', $content);
 	$content = str_replace(']]>', ']]>', $content);
 	echo $content;
 }

  ?>
