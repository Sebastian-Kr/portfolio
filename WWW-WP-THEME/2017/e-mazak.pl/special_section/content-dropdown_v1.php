
<?php $id = get_sub_field('dropdown_v1_id') ?>
<?php if ( have_rows('dropdown_v1_list') ): ?>

  <section id="offer-hide">

    <div  class="container">
  <div  class="row main-content">
    <div class="col-md-12">
      <div id="<?php echo $id ?>">
<?php $i = 1 ?>
    <?php while ( have_rows('dropdown_v1_list') ) : the_row(); ?>

<?php
$id = 'panel'.$i;
$i++;

?>
      <div class="offer-part">
        <div class="offer-head" data-panelid="<?php echo $id?>"><?php the_sub_field('dropdown_v1_title'); ?></div>
        <div id="<?php echo $id?>" class="offer-dest"><?php the_sub_field('dropdown_v1_desc'); ?></div>
      </div>

    <?php endwhile; ?>
</div>
</div>

</div>
  </div>
</section>
<!-- oferta end -->
<?php endif; ?>
