
<div class="row">





  <div class="news col-sm-6 col-md-4 mobihide" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');"><a href="<?php the_permalink(); ?>"></a></div>



<div class="col-sm-6 col-md-8 newspart">
<h3><?php the_date('d F Y', '<br><span>', ' </span><br>') ?><?php echo get_the_title();?></h3>

<div class="excerpt visual-editor">
<?php echo the_excerpt() ?>
</div>

  <a href="<?php the_permalink(); ?>"><div class="butn-cont"><div class="button">Czytaj więcej >></div></a>
</div>


</div>



</div>
