<?php /*Template Name: Kontakt*/?>

<?php get_header(); ?>




<section class="header_text" id="kontakt-content2">
  <div class="container"><div class="row">
    <div class=" col-lg-8 col-xl-5">

      <h1 class="mb30"><?php the_title() ?></h1>
      <h5><?php the_field('subtitle')?></h5>

    </div>
  </div></div>


<div class="container "><div class="row ">

<div class="col-lg-4 ">

<?php include('includes/content.php') ?>
</div>

<div class="col-lg-8">
   <div id="map"></div>
</div>

</div></div>


<div class="container add_content"><div class="row">
<div class="col-lg-4 ">
<?php the_field('add_content1')?>
</div>

<div class="col-lg-4">
  <?php the_field('add_content2')?>

</div>

<div class="col-lg-4">
  <?php the_field('add_content3')?>

</div>

</div></div>
</section>

<?php get_footer(); ?>
