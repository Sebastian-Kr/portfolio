<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="author" content="PROGREMO.PL">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name=“generator” content=“WordPress”>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NS6ZHB');</script>
        <!-- End Google Tag Manager -->


<style type="text/css">
  <?php
  $custom_args = array(
      'post_type' => 'post',
      'cat'=> 4,
      'order' => 'desc',
    );
  $custom_query = new WP_Query( $custom_args );
  // $custom_query = new WP_Query( array( 'category__and' => array( 4, 5 ) ) );
  if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post();
  $post = get_post();
  $post_id = $post->ID;
  ?>

<?php if (is_page(23)): ?>
#color.color<?php echo $post_id ?> a.ui-state-default {
   background-color: <?php echo the_field('progremo_color', $post_id) ?>!important;
   color: #fff;
}
<?php endif ?>

<?php if (is_page(217)): ?>
.color<?php echo $post_id ?> a  {
background-color: <?php echo the_field('progremo_color', $post_id) ?>!important;
}
<?php endif; ?>

<?php
endwhile;
      wp_reset_postdata();
endif; ?>


</style>

<?php wp_head(); ?>

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NS6ZHB"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->






<?php get_template_part(content, men2);?>
