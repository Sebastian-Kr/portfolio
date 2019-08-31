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
wp_enqueue_style ( 'font', "https://fonts.googleapis.com/css?family=Lato|Roboto:300,400,700");
wp_enqueue_script ( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true);

 if( is_page('10') or is_page('198') or is_page('388')){
wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), '', true);
wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/js/gmap3.js', array(), '', true);

}
}
add_action( 'wp_enqueue_scripts', 'prgrm_styles' );



function prgrm_register_widget_areas () {

	register_sidebar(array(
		'name'          => 'Stopka - kolumna 1',
		'id'            =>'footer1',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="footer-col footer-col1">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	));

	register_sidebar(array(
		'name'          => 'Stopka - kolumna 3',
		'id'            =>'footer3',
		'description'   => 'Tutaj należy dodać widgety',
		'before_widget' => ' <div class="footer-col footer-col3">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
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

pll_register_string('custom_str', 'czytaj');

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

// // END PAGINATION



?>
