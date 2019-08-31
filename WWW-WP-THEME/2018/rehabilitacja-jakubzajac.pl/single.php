

<?php get_header(); ?>
<?php get_template_part('special_modules/prgrm', 'header');?>




<section id="news-body">
  <?php get_template_part( 'special_modules/prgrm', 'main' );?>
</section>

<?php get_template_part( 'special_section_gen/content', 'generator' );?>
<div class="container"><div class="row"><div class="col-sm-12">
  <h2>ZOBACZ TAKŻE:</h2>
</div></div></div>


<section id="seealso" >
<div class="container"><div class="row">

<?php
	$args = array(
    'numberposts' => '3',
    'orderby' => 'post_date',
  	'order' => 'DESC'
  );
    $prgrm_count = 0;
      $id_post = get_the_ID();
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){


if ($prgrm_count < 2) {
  // $prgrm_post = get_post();


      if ($recent["ID"] <> $id_post)
      {
  $prgrm_count++;
  $current_id_post = $recent['ID']?>

        <div class="col-sm-6 col-news item">
        <a href="<?php echo  get_permalink($current_id_post) ?>">
       <div class="item-img" style="background-image: url('<?php   the_field('thumb_add', $current_id_post) ?>')"></div>
        <div class="title_news"><h4 class=""><?php echo $recent["post_title"] ?></h4>
            </a></div></div>
<?php
      }

}

	}
	wp_reset_query();
?>



</div></div>
</section>



<?php get_footer(); ?>
