
<?php
/*
Template Name: Realizacje
*/
?>
<?php get_header(); ?>

<?php get_template_part(content, menu);?>
<?php get_template_part(content, header);?>
<?php get_template_part(content, main);?>

<div class="container-fluid portfolio"><div class="row">


  <?php if ( have_rows('portfolio_loop') ): ?>
      <?php while ( have_rows('portfolio_loop') ) : the_row(); ?>


        <div class="col-md-4 col-sm-6 ">

          <div class="portfolio_item" style="background-image: url('<?php the_sub_field('portfolio_item_img')?>')">

            <div class=" portfolio_item_content">
              <!-- <h2>Osiedle <br>"Domy otulone puszczą""</h2> -->
              <h2><?php the_sub_field('portfolio_item_content')?></h2>

            </div>

            <div class=" portfolio_item_content_hover">
              <?php the_sub_field('portfolio_item_content_hover')?>
              <a target="blank" class="mt50" href="http://<?php the_sub_field('portfolio_item_link')?>">
              <h5>www.<?php the_sub_field('portfolio_item_link')?></h5>
            </a>
              <!-- <h4>Wdrożenie według projektu:</h4> -->
              <!-- <h3><a href="https://wizualni.pl">Wizualni.pl</a></h3> -->

              <a target="blank" href="http://<?php the_sub_field('portfolio_item_link')?>">
                <div class="mt20 button">Przejdź do strony</div>
              </a>



            </div>

          </div>

        </div>


      <?php endwhile; ?>
  <?php endif; ?>



</div></div>


<?php get_footer(); ?>
