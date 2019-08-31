<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="author" content="PROGREMO.PL">

        <meta name=“generator” content=“WordPress”>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
        <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/site.webmanifest">




        <meta property="og:title" content="" />
        <?php
        if ( is_singular() && !is_singular('destination')) {
          echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
           }
         else {
          echo '<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">';
         }
            ?>

        <script type="text/javascript">
              <?php



               function footos_loop($acf_field, $acf_subfield, $id) {

                          $rows = get_field($acf_field);
                          if($rows) {
                            $fotos = '';
                            $counter = 1;
                          	foreach($rows as $row)
                          	{
                             $fotos .=  '"';
                             $fotos .=  $row[$acf_subfield];
                             $fotos .=  '", ';

                           }
                              echo 'var fotos_php_array'.$id.' = ['.$fotos.'];';
                          }
                          else {

                            echo 'var fotos_php_array'.$id.' = null;';
                          }



               }

               footos_loop('slider_loop', 'slider_loop_item', 1);

                if (is_front_page()) {
                  footos_loop('home_slider_loop', 'home_slider_loop_item', 2);

                }

               ?>


              </script>
                <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>


<?php get_template_part( 'template-parts/menu2' ) ?>
