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
	wp_enqueue_style ( 'style_starter', get_template_directory_uri() . '/style.min.css');
	wp_enqueue_style ( 'style', get_stylesheet_uri());
	wp_enqueue_style ( 'project_style', get_template_directory_uri() . '/project_style.css');
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );


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
				'name'          => 'Newsletter',
				'id'            =>'newsletter',
				'description'   => 'Tutaj należy dodać widgety',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
			));


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


// NEW POST TYPES
 function create_post_type() {
   register_post_type( 'pracodawca',
     array(
       'labels' => array(
         'name' => __( 'Pracodawcy' ),
         'singular_name' => __( 'Pracodawca' )
       ),
       'public' => true,
       'has_archive' => true,
			  'supports' => array( 'title', 'editor', 'thumbnail' )
     )
   );
 }
 add_action( 'init', 'create_post_type' );

 function create_post_type2() {
   register_post_type( 'oferta',
     array(
       'labels' => array(
         'name' => __( 'Oferty pracy' ),
         'singular_name' => __( 'Oferta pracy' )
       ),
       'public' => true,
       'has_archive' => true,
			 'supports' => array( 'title', 'thumbnail' )
     )
   );
 }
 add_action( 'init', 'create_post_type2' );
 // NEW POST TYPES END

// REGISTERED NEW TAKSONOMY
add_action( 'init', 'create_areas_tax' );
function create_areas_tax() {
	register_taxonomy(
		'areas',
		'oferta',
		array(
			'label' => __( 'Dziedziny' ),
			 'rewrite' => array( 'slug' => 'areas' ),
			'hierarchical' => true,
		)
	);
}

add_action( 'init', 'create_forms_tax' );
function create_forms_tax() {
	register_taxonomy(
		'forms',
		'oferta',
		array(
			'label' => __( 'Formy zatrudnienia' ),
			'rewrite' => array( 'slug' => 'forms' ),
			'hierarchical' => true,
		)
	);
}

add_action( 'init', 'create_position_tax' );
function create_position_tax() {
	register_taxonomy(
		'position',
		'oferta',
		array(
			'label' => __( 'Stanowiska' ),
			'rewrite' => array( 'slug' => 'position' ),
			'hierarchical' => true,
		)
	);
}

// add_action( 'init', 'create_tag_tax' );
// function create_tag_tax() {
// 	register_taxonomy(
// 		'tag',
// 		'oferta',
// 		array(
// 			'label' => __( 'Tagi' ),
// 			'rewrite' => array( 'slug' => 'tag' ),
// 			'hierarchical' => true,
// 		)
// 	);
// }

add_action( 'init', 'create_place_tax' );
function create_place_tax() {
	register_taxonomy(
		'place',
		'oferta',
		array(
			'label' => __( 'Miejsca pracy' ),
			'rewrite' => array( 'slug' => 'place' ),
			'hierarchical' => true,
		)
	);
}
// REGISTERED NEW TAKSONOMY END



 function progremo_cn_include_content($pid) {
 	$thepageinquestion = get_post($pid);
 	$content = $thepageinquestion->post_content;
 	$content = apply_filters('the_content', $content);
 	$content = str_replace(']]>', ']]>', $content);
 	echo $content;
 }

// Display all checked taksonomy
 function display_all_properties($taxonomy) {
   $terms = get_the_terms( get_the_ID(), $taxonomy );
 if ($terms) {
   foreach($terms as $term){

       echo ' '.$term->name;
     }
   }
 }

 function display_all_places($id) {
	 $terms = get_the_terms( $id, 'place' );
 if ($terms) {
	 foreach($terms as $term){

			 echo ' '.$term->name;
		 }
	 }
 }


 // DECLARATE VARIABLE
 // $current_areas_filter = '';
 // $current_forms_filter = '';
 // $current_position_filter = '';
 // $current_place_filter = '';
 //


 // DISPLAY ALL OPTIONS IN SELECT FIELDS IN FILTER BOX
 function create_options($taxonomy, $current_filter) {

 $terms = get_terms( array('taxonomy' => $taxonomy,'hide_empty' => false,  ) );
 foreach($terms as $term){

 $term_name = $term->name;
 if ($term_name == $current_filter) {
  $is_select = 'selected';
 } else $is_select = '';

    echo '<option  value="'. $term_name .'" '.$is_select.'>'. $term_name . '</option><br />';

  }
 }

 // Check and display employer ID
 function display_employer_id(){
	 // $employes = get_field('employer_id');
	 // $employer_id = '';
	 // echo $employes;
	 echo 'function disabled';
	 // echo get_the_ID();
	 // if ($employes) {
	 // $employer_id = $employes[0];
	 // }

// return $employer_id;
 }


function reset_session_filter(){
	$_SESSION['offers_filter']['areas'] = '';
	$_SESSION['offers_filter']['forms'] = '';
	$_SESSION['offers_filter']['position'] = '';
	$_SESSION['offers_filter']['place'] = '';

	// unset ($_SESSION['offers_filter']['areas']);
	// unset ($_SESSION['offers_filter']['forms']);
	// unset ($_SESSION['offers_filter']['position']);
	// unset ($_SESSION['offers_filter']['place']);

}

  ?>
