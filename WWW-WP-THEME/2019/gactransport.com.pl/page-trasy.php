<?php /*Template Name: Trasy*/?>

<?php get_header(); ?>
<?php get_template_part('template_parts/prgrm', 'header');?>

<div class="container mt70 mb70 small_container">
  <div class="row">
    <div class="col-md-12 text-center">
      <?php get_template_part('template_parts/prgrm', 'main');?>

    </div>
  </div>
</div>

<section class="traceroud">
  <div class="container-fluid">
    <div class="row">

      <div class=" map_box col-md-6">
      <iframe onScroll="style.pointerEvents='none'" src="https://www.google.com/maps/d/embed?mid=16eoI6AaDby_LTNAmRaahXpA4njBvXstA"></iframe>
      </div>
      <div class="text col-md-6">
<?php the_field('section1')?>
      </div>
    </div>

    <div class="row">

      <div class="text col-md-6">
        <?php the_field('section2')?>

      </div>
      <div class=" map_box col-md-6">
      <iframe src="https://www.google.com/maps/d/embed?mid=1VTod7Ri_U5HlhiPaZVS2Z_AAKr2B0Bsj"></iframe>
      </div>
    </div>


    <div class="row">

      <div class=" map_box col-md-6">
    <iframe src="https://www.google.com/maps/d/embed?mid=12gHOi4sWW4nKfz-7JHmQb77NLEZNyNfY"></iframe>
      </div>
      <div class="text col-md-6">
        <?php the_field('section3')?>

      </div>
    </div>


    <div class="row">

      <div class="text col-md-6">
        <?php the_field('section4')?>

      </div>
      <div class=" map_box col-md-6">
    <iframe src="https://www.google.com/maps/d/embed?mid=1QdQlAolMqfFdVMuBLUdl5EIdExhEgrc4"></iframe>
      </div>
    </div>

  </div>
</section>


<?php get_template_part( 'content', 'cta2' ) ?>


<?php get_footer(); ?>
