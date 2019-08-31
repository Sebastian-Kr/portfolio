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
wp_enqueue_style ( 'style', get_stylesheet_uri());
wp_enqueue_style ( 'style2', get_template_directory_uri() . '/style_custom.css');
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );

if (is_page(18)) {
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), '', true );
	wp_enqueue_script( 'google', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAM5tRX5DeWa2vUi7txHfvEPD5wykq4n5o', array(), '', true );
}

}
add_action( 'wp_enqueue_scripts', 'prgrm_styles' );




function prgrm_register_widget_areas () {
	register_sidebar(array(
		'name'          => 'Stopka - kolumna 1',
		'id'            =>'stopka_kolumna_1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	));

	register_sidebar(array(
		'name'          => 'Stopka - kolumna 2',
		'id'            =>'stopka_kolumna_2',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	));


		register_sidebar(array(
			'name'          => 'Stopka - kolumna 3',
			'id'            =>'stopka_kolumna_3',
			'description'   => 'Tutaj należy dodać widgety',
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		));


			register_sidebar(array(
				'name'          => 'Stopka - kolumna 4',
				'id'            =>'stopka_kolumna_4',
				'description'   => 'Tutaj należy dodać widgety',
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h6>',
				'after_title'   => '</h6>',
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



function remove_menus(){

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



 // add_action( 'admin_menu', 'register_my_custom_menu_page' );
 // function register_my_custom_menu_page() {
 //   // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
 //   add_menu_page( 'KSIĄŻKI', 'KSIĄŻKI', 'manage_options', 'edit.php?cat=6', '', 'dashicons-welcome-widgets-menus', 21 );
 //   add_menu_page( 'AUTORZY', 'AUTORZY', 'manage_options', 'edit.php?cat=3', '', 'dashicons-welcome-widgets-menus', 21 );
 //   add_menu_page( 'NEWS', 'NEWS', 'manage_options', 'edit.php?cat=5', '', 'dashicons-welcome-widgets-menus', 21 );
 // }



 // NEW POST TYPES
  function create_post_type() {
    register_post_type( 'books',
      array(
        'labels' => array(
					'name' => 'Książki',
    'singular_name' => 'Książka',
    'add_new' => 'Dodaj nową książkę',
    'add_new_item' => __('Dodaj nową książkę'),
    'edit_item' => __('Edytuj książki'),
    'new_item' => __('Nowa książka'),
    'all_items' => __('Wszystkie książki'),
    'view_item' => __('Zobacz książkę'),
    'search_items' => __('Wyszukaj książkę'),
    'not_found' =>  __('Żadna książka nie została znaleziona'),
    'not_found_in_trash' => __('Żadna książka nie została znaleziona w koszu'),
    'parent_item_colon' => '',
    'menu_name' => __('Książki')
        ),
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true,
     'show_in_menu' => true,
     'query_var' => true,
     // 'rewrite' => true,
     'capability_type' => 'post',
     'has_archive' => true,
     'hierarchical' => false,
     'menu_position' => null,
     'supports' => array( 'title', 'editor', 'thumbnail')

      )
    );
  }
  add_action( 'init', 'create_post_type' );




	function create_post_autor() {
    register_post_type( 'autor',
				array(
	        'labels' => array(
						'name' => 'Autorzy',
	    'singular_name' => 'Autor',
	    'add_new' => 'Dodaj nowego autora',
	    'add_new_item' => __('Dodaj nowego autora'),
	    'edit_item' => __('Edytuj autora'),
	    'new_item' => __('Nowy autor'),
	    'all_items' => __('Wszyscy autorzy'),
	    'view_item' => __('Zobacz autora'),
	    'search_items' => __('Wyszukaj autora'),
	    'not_found' =>  __('Żaden autor nie został znaleziony'),
	    'not_found_in_trash' => __('Żaden autor nie został znaleziony w koszu'),
	    'parent_item_colon' => '',
	    'menu_name' => __('Autorzy')
	        ),
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true,
     'show_in_menu' => true,
     'query_var' => true,
     // 'rewrite' => true,
     'capability_type' => 'post',
     'has_archive' => true,
     'hierarchical' => false,
     'menu_position' => null,
     'supports' => array( 'title', 'editor', 'thumbnail')

      )
    );
  }
  add_action( 'init', 'create_post_autor' );

  // NEW POST TYPES END

 // REGISTERED NEW TAKSONOMY
 add_action( 'init', 'create_authors_category' );
 function create_authors_category() {
 	register_taxonomy(
 		'authors_cat',
 		'autor',
 		array(
 			'label' => __( 'Kategorie autorów' ),
 			 'rewrite' => array( 'slug' => 'authors_cat' ),
 			'hierarchical' => true,
 		)
 	);
 }

 add_action( 'init', 'create_books_category' );
 function create_books_category() {
	 register_taxonomy(
		 'books_cat',
		 'books',
		 array(
			 'label' => __( 'Kategorie książek' ),
				'rewrite' => array( 'slug' => 'books_cat' ),
			 'hierarchical' => true,
		 )
	 );
 }



 // REGISTERED NEW TAKSONOMY END




function progremo_add_attributes_to_post() {
    add_post_type_support('post', 'page-attributes');
}
add_action('init', 'progremo_add_attributes_to_post');



function html5_search_form( $form ) {
     $form = '<form class="search-form" role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
     <input class="search-field" type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search" />
     <input class="search-submit" type="submit" id="searchsubmit" value="'. esc_attr__('Go', 'http://localhost/wordpress/znak/') .'" />
     </form>';
     return $form;
}

 add_filter( 'get_search_form', 'html5_search_form' );


 function display_all_categories($type_of_category, $id) {
	 $terms = get_the_terms( $id, $type_of_category );
 if ($terms) {
	$categories_string = '';
	 foreach($terms as $term){

			 $categories_string .= ' '.$term->name.',';
		 }
	 $categories_string = substr($categories_string, 0, -1);
	 echo $categories_string;
	 }
 }


 function create_options($taxonomy, $current_filter) {

 $terms = get_terms( array('taxonomy' => $taxonomy,'hide_empty' => false,  ) );
 foreach($terms as $term){

 $term_name = $term->name;
 if ($term_name == $current_filter) {
	$is_select = 'selected="true"';
 } else $is_select = '';

		echo '<option  value="'. $term_name .'" '.$is_select.'>'. $term_name . '</option><br />';

	}
 }


 function get_excerpt_by_id($post_id){
     $the_post = get_post($post_id); //Gets post ID
     $the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
     $excerpt_length = 35; //Sets excerpt length by word count
     $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
     $words = explode(' ', $the_excerpt, $excerpt_length + 1);

     if(count($words) > $excerpt_length) :
         array_pop($words);
         array_push($words, '[…]');
         $the_excerpt = implode(' ', $words);
     endif;

     return $the_excerpt;
 }

 ?>
