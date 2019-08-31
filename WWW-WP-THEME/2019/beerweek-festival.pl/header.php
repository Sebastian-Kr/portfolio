<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="author" content="PROGREMO.PL">

        <meta name=“generator” content=“WordPress”>
        <!-- <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta property="og:title" content="" />



<?php
// $color = '#58A6B1';
// $color_op = 'rgba(88, 166, 177, 0.7)';

$color = get_field('color');
$color_op = get_field('color-op');

?>

<style media="screen">

  a.btn-special:hover{background-color: <?php echo $color; ?>!important}
  .c-text {color: <?php echo $color ;?>!important}
  .c-border {border-color: <?php echo $color ;?>!important}
  .c-border-form input {border-color: <?php echo $color ;?>!important}
  .c-border-form textarea {border-color: <?php echo $color ;?>!important}
  .c-border-big {border: 4px solid <?php echo $color ;?>!important}
  .c-bg {background-color: <?php echo $color ;?>!important}
  .c-bg-op {background-color: <?php echo $color_op ;?>!important}
  .c-line:after {background-color: <?php echo $color ;?>!important}
  .c-border-top:before, .c-border-bottom:after {background-color: <?php echo $color ;?>!important}
  .c-border-top-op:before, .c-border-bottom-op:after {background-color: <?php echo $color_op ;?>!important}
  .harm_content span {color: <?php echo $color; ?>}
  .harm_content:before, .harm_content:after {background-color: <?php echo $color; ?>}
  #kontakt label input {border-color: <?php echo $color; ?>!important}
  #kontakt label textarea {border-color: <?php echo $color; ?>!important}

  ::selection {
    color: #fff;
    background: <?php echo $color; ?>;
  }
</style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<?php get_template_part( 'template-parts/menu2' ) ?>
