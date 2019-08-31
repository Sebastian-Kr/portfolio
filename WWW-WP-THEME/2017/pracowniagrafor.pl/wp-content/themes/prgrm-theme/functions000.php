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

function prgrm_styles() {
wp_enqueue_style ( 'style', get_template_directory_uri() . '/style.min.css');
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.min.js', array(), '', true );

if (is_page(23) | (is_page(217))) {
	wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '', true );
}

if (is_page(23)) {
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '', true );
}


if (is_page(26)) {
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.min.js', array(), '', true );
	wp_enqueue_script( 'google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCo20Q6d9FkzT5wJWEFaZr2wkELLpsD3Zw&callback=initMap', array(), '', true );
}

}
add_action( 'wp_enqueue_scripts', 'prgrm_styles' );




function prgrm_register_widget_areas () {


	register_sidebar(array(
		'name'          => 'Stopka - kolumna 1',
		'id'            =>'footer1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));

	register_sidebar(array(
		'name'          => 'Stopka - kolumna 4',
		'id'            =>'footer4',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	));


		register_sidebar(array(
			'name'          => 'Stopka - kolumna 5',
			'id'            =>'footer5',
			'description'   => 'Tutaj należy dodać widgety',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		));


			register_sidebar(array(
				'name'          => 'Stopka - kolumna 6',
				'id'            =>'footer6',
				'description'   => 'Tutaj należy dodać widgety',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '',
				'after_title'   => '',
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




function remove_menus(){

  // remove_menu_page( 'index.php' );                  //Dashboard
  // remove_menu_page( 'jetpack' );                    //Jetpack*
  // remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  // remove_menu_page( 'edit.php?post_type=page' );    //Pages
  // remove_menu_page( 'edit-comments.php' );          //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  // remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  // remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );


?>




<?php // Register custom navigation walker
    require_once('wp-bootstrap-navwalker.php');
?>
<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

?>



<?php
function ssacf($acf_field_id) {
if ( class_exists( 'iworks_orphan' ) ){
	   $orphan = new iworks_orphan();
	   echo $orphan->replace( get_field($acf_field_id));
	  }
	  else {
	   echo the_field($acf_field_id);
	  }
}



 ?>


<?php

// // PAGINATION
function kriesi_pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

// // END PAGINATION ?>
<?php

function get_html_sitemap( $atts ){

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
add_shortcode( 'htmlSitemap', 'get_html_sitemap' );



add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'WSZYSTKIE KURSY', 'WSZYSTKIE KURSY', 'manage_options', 'edit.php?cat=8', '', 'dashicons-welcome-widgets-menus', 21 );
  add_menu_page( 'ARTYKUŁY BLOG', 'ARTYKUŁY BLOG', 'manage_options', 'edit.php?cat=9', '', 'dashicons-welcome-widgets-menus', 21 );
}

 ?>
