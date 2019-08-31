<?php /* Template Name: Metamorfozy2 */?>
<?php get_header(); ?>
<?php get_template_part('content', 'men');?>

<section id="header" class="head-scale" style="background-image: url('<?php echo home_url() ?>/wp-content/uploads/2017/06/4.jpg')">
   </section>
<div class="full-bar-header">
<h1 class="square"><?php echo the_field('subheader') ?></h1>
</div>



<div class="wersja10 ">
<div class="container-fluid przed_po">

<?php if ( have_rows('galeria_metamorfozy') ): ?>
    <?php while ( have_rows('galeria_metamorfozy') ) : the_row(); ?>

      <div class="col-md-6 ">
    <!--   <div class="item_box">
        <div class="left_bg" style="background-image: url('<?php the_sub_field('metamorfozy_przed') ?>')"></div>
        <div class="right_bg" style="background-image: url('<?php the_sub_field('metamorfozy_po') ?>')"></div>
        <div class="content">
          <h5>
           <span style="display:none"><?php the_sub_field('numer')?></span>
           <?php the_sub_field('metamorfoza_opis')?>
          </h5></div>
      </div> -->

      <div class="item_box2">
      <div class="fotos">
          <div class="left_side">
          <img src="<?php the_sub_field('metamorfozy_przed') ?>" alt="">
        </div>
         <div class="right_side">
          <img src="<?php the_sub_field('metamorfozy_po') ?>" alt="">
        </div>
      </div>
          <div class="content">
          <h5>
           <span style="display:none"><?php the_sub_field('numer')?></span>
           <?php the_sub_field('metamorfoza_opis')?>
          </h5></div>
      </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
</div>
</div>


  <?php get_footer(); ?>
