<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
            <!-- <title>INPHOTO by Paweł Sarota <?php the_title() ?></title> -->
        <meta name="author" content="PROGREMO.PL">
        <meta charset="UTF-8" />
        <meta name=“generator” content=“WordPress”>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta property="og:image"    content="http://inphoto.pl/wp-content/themes/prgrm-theme/img/logo-fb.jpg" />
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>

        <!--[if IE]>
<style>
    #Filtergallery .fotos .item {
      min-width:33%;
    }
</style>
<![endif]-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MD7M9ZF');</script>

</head>
<body>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MD7M9ZF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<?php get_template_part( 'prgrm', 'menu2' ) ?>
