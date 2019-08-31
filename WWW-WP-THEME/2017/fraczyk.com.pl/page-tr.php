<?php
/*
Template Name: Szkolenia
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>

<section id="header">

<div class="container">
  <h1 class="square"><?php echo get_the_title();?></h1>
</div>


</section>

<div class="container">
  <div class="row">


    <h2 class="heading header1"><?php the_field('pcf1') ?></h2>

    <!-- HR special section -->
    <div class="hr_special2 mb">
    <img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
    </div>
    <!-- HR special section -->

    <!-- MAIN CONTENT  -->
    <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
    if (get_the_content()){
      echo '<div class="main-content">';
              the_content();
    echo '</div>';
    } // end is content statment
      } // end while
    } // end if
    ?>
    <!-- END MAIN CONTENT -->
    <div class="semisepar"></div>


  </div>
</div>

<section class="ul-square">
  <div class="container"><div class="row">
<div class="col-sm-6 col-md-3">
  <ul>
    <?php if (get_field('pcf12')) : ?><li><p><?php echo the_field('pcf12') ?></p></li><?php endif ;?>
  <?php if (get_field('pcf13')) : ?><li><p><?php echo the_field('pcf13') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf14')) : ?><li><p><?php echo the_field('pcf14') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf15')) : ?><li><p><?php echo the_field('pcf15') ?></p></li><?php endif ;?>

    <?php if (get_field('add-pcf12')) : ?><li><p><?php echo the_field('add-pcf12') ?></p></li><?php endif ;?>
  <?php if (get_field('add-pcf13')) : ?><li><p><?php echo the_field('add-pcf13') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf14')) : ?><li><p><?php echo the_field('add-pcf14') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf15')) : ?><li><p><?php echo the_field('add-pcf15') ?></p></li><?php endif ;?>

    <?php if (get_field('add2-pcf12')) : ?><li><p><?php echo the_field('add2-pcf12') ?></p></li><?php endif ;?>
  <?php if (get_field('add2-pcf13')) : ?><li><p><?php echo the_field('add2-pcf13') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf14')) : ?><li><p><?php echo the_field('add2-pcf14') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf15')) : ?><li><p><?php echo the_field('add2-pcf15') ?></p></li><?php endif ;?>

  </ul>
</div>

<div class="col-sm-6 col-md-3">
  <ul>
    <?php if (get_field('pcf16')) : ?><li><p><?php echo the_field('pcf16') ?></p></li><?php endif ;?>
  <?php if (get_field('pcf17')) : ?><li><p><?php echo the_field('pcf17') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf18')) : ?><li><p><?php echo the_field('pcf18') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf19')) : ?><li><p><?php echo the_field('pcf19') ?></p></li><?php endif ;?>

    <?php if (get_field('add-pcf16')) : ?><li><p><?php echo the_field('add-pcf16') ?></p></li><?php endif ;?>
  <?php if (get_field('add-pcf17')) : ?><li><p><?php echo the_field('add-pcf17') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf18')) : ?><li><p><?php echo the_field('add-pcf18') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf19')) : ?><li><p><?php echo the_field('add-pcf19') ?></p></li><?php endif ;?>

    <?php if (get_field('add2-pcf16')) : ?><li><p><?php echo the_field('add2-pcf16') ?></p></li><?php endif ;?>
  <?php if (get_field('add2-pcf17')) : ?><li><p><?php echo the_field('add2-pcf17') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf18')) : ?><li><p><?php echo the_field('add2-pcf18') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf19')) : ?><li><p><?php echo the_field('add2-pcf19') ?></p></li><?php endif ;?>

  </ul>
</div>


<div class="col-sm-6 col-md-3">
  <ul>
    <?php if (get_field('pcf20')) : ?><li><p><?php echo the_field('pcf20') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf21')) : ?><li><p><?php echo the_field('pcf21') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf22')) : ?><li><p><?php echo the_field('pcf22') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf22b')) : ?><li><p><?php echo the_field('pcf22b') ?></p></li><?php endif ;?>

    <?php if (get_field('add-pcf20')) : ?><li><p><?php echo the_field('add-pcf20') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf21')) : ?><li><p><?php echo the_field('add-pcf21') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf22')) : ?><li><p><?php echo the_field('add-pcf22') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf22b')) : ?><li><p><?php echo the_field('add-pcf22b') ?></p></li><?php endif ;?>

    <?php if (get_field('add2-pcf20')) : ?><li><p><?php echo the_field('add2-pcf20') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf21')) : ?><li><p><?php echo the_field('add2-pcf21') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf22')) : ?><li><p><?php echo the_field('add2-pcf22') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf22b')) : ?><li><p><?php echo the_field('add2-pcf22b') ?></p></li><?php endif ;?>


  </ul>
</div>

<div class="col-sm-6 col-md-3">
  <ul>
    <?php if (get_field('pcf1')) : ?><li><p><?php echo the_field('pcf23') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf1')) : ?><li><p><?php echo the_field('pcf24') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf1')) : ?><li><p><?php echo the_field('pcf25') ?></p></li><?php endif ;?>
    <?php if (get_field('pcf25b')) : ?><li><p><?php echo the_field('pcf25b') ?></p></li><?php endif ;?>

    <?php if (get_field('add-pcf23')) : ?><li><p><?php echo the_field('add-pcf23') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf24')) : ?><li><p><?php echo the_field('add-pcf24') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf25')) : ?><li><p><?php echo the_field('add-pcf25') ?></p></li><?php endif ;?>
    <?php if (get_field('add-pcf25b')) : ?><li><p><?php echo the_field('add-pcf25b') ?></p></li><?php endif ;?>

    <?php if (get_field('add2-pcf23')) : ?><li><p><?php echo the_field('add2-pcf23') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf24')) : ?><li><p><?php echo the_field('add2-pcf24') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf25')) : ?><li><p><?php echo the_field('add2-pcf25') ?></p></li><?php endif ;?>
    <?php if (get_field('add2-pcf25b')) : ?><li><p><?php echo the_field('add2-pcf25b') ?></p></li><?php endif ;?>

  </ul>
</div>

  </div></div>
</section>

<a href="<?php echo the_field('pcf-nm-2') ?>"><div class="button-light button-short mt3 mb3"><p><?php echo the_field('pcf-nm-1') ?></p></div></a>

<!-- parallax section -->
<section>
<div class="parallax par vcc scale-xs pb2" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/calltoaction-bg.jpg')">
<div class="container"><h3 class="header1 mt2"><?php the_field('pcf-nm-3'); ?></h3>
<!-- HR special section -->
<div class="hr_special2">

<img src="<?php echo  get_template_directory_uri() ?>/img/section-line-decoration.png" alt="Kancelaria Kraków">
</div>
<!-- HR special section -->
<div class="intro text">
  <p class="middle-text mt2 white"><?php the_field('pcf-nm-4'); ?></p>
</div>

<div class="row mt">
  <div class="col-sm-6 col-md-4 col-md-offset-2">
    <a href="<?php echo the_field('pcf-nm-l1'); echo '#'; echo the_field('pcf-nm-s11') ;?>">
      <div class="button-light "><p><?php echo the_field('pcf-nm-n1') ?></p></div></a></div>
  <div class="col-sm-6 col-md-4">
    <a href="<?php echo the_field('pcf-nm-s2'); echo '#'; echo the_field('pcf-nm-s1'); ?>">
      <div class="button-light "><p><?php echo the_field('pcf-nm-n2') ?></p></div></a></div>
</div>

</div>
</div>
</section>

<!-- parallax section -->

<?php get_template_part( 'content', 'nextprev' );?>

<?php get_footer(); ?>
