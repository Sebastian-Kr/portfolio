
<?php get_header(); ?>

<?php the_field('sekcja_1'); ?>


<div class="container" data-animate="fadeInDown">
<h2>Podstawowe zalety treningu na bieżni</h2>
 <div class="container"><div class="row">
   
  <div class="col-sm-3 feature h-anime">
    <span class="glyphicon glyphicon-signal" aria-hidden="true"> </span>
    <h5>Kontrola</h5> Dokładny monitoring treningu.
  </div>

  <div class="col-sm-3 feature h-anime">
    <span class="glyphicon glyphicon-fire" aria-hidden="true"> </span>
    <h5>Kalorie</h5> Podczas treningu możesz spalić nawet 500 kalorii / godzinę. 
  </div>

  <div class="col-sm-3 feature h-anime">
    <span class="glyphicon glyphicon-time" aria-hidden="true"> </span>
    <h5>Czas</h5> Ćwiczysz "przy okazji" w każdej wolnej chwili. 
  </div>

  <div class="col-sm-3 feature h-anime">
    <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"> </span>
    <h5>Bezpieczeństwo</h5>System amortyzacji zabezpiecza przed kontuzjami. 
  </div>

 </div></div></div>



<?php the_field('sekcja_3'); ?>



<?php get_template_part( 'page', 'recomend' );?>

<a href="<?php echo home_url();?>/blog"><div class="full-bar h-anime">
  <span >PRZEJDŹ DO BLOGA I DOWIEDZ SIĘ WIĘCEJ >></span></a>
</div>

<?php the_field('sekcja_5'); ?>

<?php get_footer(); ?>
