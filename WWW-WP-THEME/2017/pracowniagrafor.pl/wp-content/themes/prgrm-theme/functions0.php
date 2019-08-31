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
wp_enqueue_style ( 'bootstrap', get_template_directory_uri().'/bootstrap-4.0.0/css/bootstrap.css');
wp_enqueue_style ( 'style', get_stylesheet_uri());
// wp_enqueue_script( 'jquery-add', get_template_directory_uri() . '/js/jquery-add.js', array(), '', true );
wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '', true );
wp_enqueue_script( 'jquery-ui.min', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '', true );
wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.js', array(), '', true );
wp_enqueue_script( 'multidatapicker', get_template_directory_uri() . '/js/jquery-ui.multidatespicker.js', array(), '', true );
wp_enqueue_script( 'sheep', get_template_directory_uri() . '/js/jquery.sheepItPlugin.js', array(), '', true );


if (is_page(26)) {
	wp_enqueue_script( 'contact', get_template_directory_uri() . '/js/contact.js', array(), '', true );
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
//  add_action( 'phpmailer_init', 'wpse8170_phpmailer_init' );
// function wpse8170_phpmailer_init( PHPMailer $phpmailer ) {
//     $phpmailer->Host = 'your.smtp.server.here';
//     $phpmailer->Port = 25; // could be different
//     $phpmailer->Username = 'your_username@example.com'; // if required
//     $phpmailer->Password = 'yourpassword'; // if required
//     $phpmailer->SMTPAuth = true; // if required
//     // $phpmailer->SMTPSecure = 'ssl'; // enable if required, 'tls' is another possible value
//
//     $phpmailer->IsSMTP();
// } ?>



<!-- CUSTOM META BOX / CUSTOM META FIELD - STOCK FIELD  -->




<?php

 function custom_meta_box_markup($object)
 {
     wp_nonce_field(basename(__FILE__), "meta-box-nonce");

     ?>
         <div>
             <label for="meta-box-text">Wpisz ilość wolnych miejsc</label>
             <input name="meta-box-text" type="number" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
         </div>
     <?php
 }


 function add_custom_meta_box()
 {
 		global $post;
     $category = '3'; // can be an array of ID's as well

 if ( in_category( $category, $post ) ) {
 	add_meta_box("demo-meta-box", "Wolne miejsca", "custom_meta_box_markup", "post", "side", "high", null);
 		}
 }

 add_action("add_meta_boxes", "add_custom_meta_box");




 function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

}

add_action("save_post", "save_custom_meta_box", 10, 3);

  ?>



<!-- CUSTOM META BOX / CUSTOM META FIELD - STOCK FIELD END  -->

<?php

function prgrm_admin_script() {
	wp_enqueue_script( 'jq-sheep', get_template_directory_uri() . '/js/jquery-sheep.js', array(), '', true );

	wp_enqueue_script( 'sheep', get_template_directory_uri() . '/js/jquery.sheepItPlugin.js', array(), '', true );


}
add_action( 'admin_enqueue_scripts', 'prgrm_admin_script' );


 function dates_meta_box_markup($object)
 {
     wp_nonce_field(basename(__FILE__), "meta-box-dates");

     ?>
		 <!-- sheepIt Form -->
	 	<div id="sheepItForm">

	 	  <!-- Form template-->
	 	  <div id="sheepItForm_template">
	 	    <label for="sheepItForm_#index#_phone">Data<span id="sheepItForm_label"></span></label>
	 	    <input id="sheepItForm_#index#_phone" class="cal_input" name="date_id_#index#" type="date"
				 size="15" maxlength="10" value="<?php echo get_post_meta($object->ID, "date_id_0", true); ?>"/>
	 	    <a id="sheepItForm_remove_current">
	 	      <img class="delete" src="images/cross.png" width="16" height="16" border="0">
	 	    </a>
	 	  </div>
	 	  <!-- /Form template-->

	 	  <!-- No forms template -->
	 	  <div id="sheepItForm_noforms_template">Nie wybrano żadnej daty</div>
	 	  <!-- /No forms template-->

	 	  <!-- Controls -->
	 	  <div id="sheepItForm_controls">
	 	    <div id="sheepItForm_add"><a><span>Dodaj kolejną datę</span></a></div>
	 	    <div id="sheepItForm_remove_last"><a><span>Usuń ostatnią datę</span></a></div>

	 	  </div>
	 	  <!-- /Controls -->

	 	</div>
	 	<!-- /sheepIt Form -->
     <?php
 }


 function add_dates_meta_box()
 {
 		global $post;
     $category = '3'; // can be an array of ID's as well

 if ( in_category( $category, $post ) ) {
 	add_meta_box("dates-meta-box", "Daty kursów", "dates_meta_box_markup", "post", "side", "high", null);
 		}
 }

 add_action("add_meta_boxes", "add_dates_meta_box");




 function save_dates_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-dates"]) || !wp_verify_nonce($_POST["meta-box-dates"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["date_id_0"]))
    {
        $meta_box_date_value = $_POST["date_id_0"];
    }
    update_post_meta($post_id, "date_id_0", $meta_box_text_value);

}

add_action("save_post", "save_dates_meta_box", 10, 3);




 ?>
