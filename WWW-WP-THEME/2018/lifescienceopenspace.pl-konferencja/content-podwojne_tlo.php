<div class="anchor" id="tematysesji"></div>
<section id="P2_S9ss" class="double_bg">
  <?php
  $url1 =  __('[:pl]http://lifescienceopenspace.pl/konferencja/wp-content/uploads/2018/06/napisy_pl2.png[:en]http://lifescienceopenspace.pl/konferencja/wp-content/uploads/2018/07/en_l.png');
  $url2 =  __('[:pl]http://lifescienceopenspace.pl/konferencja/wp-content/uploads/2018/06/napisy_pl1.png[:en]http://lifescienceopenspace.pl/konferencja/wp-content/uploads/2018/07/en_r.png');
  ?>

<div class="bg1" style="background-image: url('<?php echo $url1 ;?>')"></div>
<div class="content">

  <div class="title_section bg_color mb50">
<h4>  <?php the_field('double_bg_title', 576) ;?></h4>
  </div>


<div class="col1">

    <?php if ( have_rows('double_bg_col1', 576) ): ?>
        <?php while ( have_rows('double_bg_col1', 576) ) : the_row(); ?>
          <p><?php the_sub_field('double_bg_col1_poz', 576) ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="col2">
  <?php if ( have_rows('double_bg_col2', 576) ): ?>
      <?php while ( have_rows('double_bg_col2', 576) ) : the_row(); ?>
        <p><?php the_sub_field('double_bg_col2_poz', 576) ?></p>
      <?php endwhile; ?>
  <?php endif; ?>
</div>

</div>
<div class="bg2" style="background-image: url('<?php echo $url2; ?>')"></div>
</section>
