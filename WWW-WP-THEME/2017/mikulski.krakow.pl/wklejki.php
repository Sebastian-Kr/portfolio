<?php echo get_template_directory_uri() ?>

<?php the_permalink() ?>
<?php echo get_the_date('d-m-Y') ?>
<?php the_title(); ?>
<?php the_content(); ?>




<?php get_header(); ?>
<?php get_template_part( 'content', 'men' );?>
<?php get_template_part( 'content', 'header2' );?>
<?php get_template_part( 'content', 'main' );?>
<?php get_template_part( 'content', 'gallery'); ?>
<?php get_footer(); ?>



<!-- pobierz pole -->
<?php echo the_field('') ?>
<!-- link do strony o ID -->
<a href="<?php echo get_page_link(3507)?>">
  <!-- obrazek z katalogu templatki -->
<img src="<?php echo get_template_directory_uri()?>/img/" alt="">
<!-- obrazek jako tło diva-->
<div style="background-image: url('<?php echo get_template_directory_uri()?>/img/')"></div>
<!-- obrazek wyróżniający z posta jako tło diva -->
<section id="header" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')"></section>
<!-- dodawanie sidebara -->
<?php dynamic_sidebar('footer1') ?>

<!-- kontener x2 -->
<section id=""><div class="container"><div class="row">
   <div class="col-sm-6"></div>
   <div class="col-sm-6"></div>
</div></div></section>

<!-- kontener x3 -->
<section id=""><div class="container"><div class="row">
   <div class="col-sm-4"></div>
   <div class="col-sm-4"></div>
   <div class="col-sm-4"></div>
</div></div></section>

<!-- kontener x4 -->
<section id=""><div class="container"><div class="row">
   <div class="col-sm-3"></div>
   <div class="col-sm-3"></div>
   <div class="col-sm-3"></div>
   <div class="col-sm-3"></div>
</div></div></section>

@media (max-width: 575px)

@media (min-width: 576px) and (max-width: 767px)


@media (min-width: 768px) and (max-width: 991px)


@media (min-width: 992px) and (max-width: 1199px)


@media (min-width:1201px) and (max-width: 1600px)


@media (min-width: 1600px) and (max-width: 1900px)

@media (min-width: 1900px)


<!-- LOREM IPSUM 40 -->
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, facilis! Neque quibusdam accusamus at expedita dolorum quaerat libero quae error vel aut! Necessitatibus, amet eveniet eum quisquam, aperiam aut sequi reiciendis odio totam dolorum nostrum dignissimos. Porro aliquid provident placeat.



<a href="javascript:history.back()"><div class="return">
  <h5>POWRÓT</h5>
  <img src="<?php echo get_template_directory_uri()?>/img/" alt="">
</div></a>


//////////////////////////////////////////////////////////////////////////////////////////
