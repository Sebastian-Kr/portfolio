<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="author" content="PROGREMO.PL">
        <meta charset="UTF-8" />
        <meta name=“generator” content=“WordPress”>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




        <title><?php wp_title(); ?></title>

        <?php wp_head(); ?>

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
                    };

         }

         footos_loop('header_slider', 'header_slider_item', 1);
         footos_loop('slider_opis_inwestycji', 'slider_opis_inwestycji_foto', 2);
         footos_loop('architektura_slider', 'architektura_slider_item', 3);
         footos_loop('wnetrza_slider', 'wnetrza_slider_item', 4);

         ?>

      
        </script>

</head>
<body>


<?php get_template_part( 'prgrm', 'menu2' ) ?>
