<div class="anchor" id="program"></div>

<div class="title_section mt40">
<?php echo get_post_field('post_content', 582); ?>
</div>


<div class="program_ramowy container ">
<?php the_field('program_html1', 582)?>

<div class="header_program program_row row d-none d-sm-flex">
  <div class="hour "></div>
  <div class="s1 "><?php the_field('sala_1', 582)?></div>
  <div class="s2 "><?php the_field('sala_2', 582)?></div>
  <div class="s3 "><?php the_field('sala_3', 582)?></div>
</div>
<!-- LOOP -->
<?php if ( have_rows('wydarzenie', 582) ): ?>
    <?php while ( have_rows('wydarzenie', 582) ) : the_row(); ?>
      <div class=" full_row program_row row d-none d-sm-block">
        <div class="hour "><?php the_sub_field('hour', 582)?></div>
<?php if (get_sub_field('common_event')): ?>
        <div class="s1 "><a href="<?php the_sub_field('sala1_link') ?>"><?php the_sub_field('sala_1_opis') ?></a></div>
        <div class="s2 "><a href="<?php the_sub_field('sala2_link') ?>"><?php the_sub_field('sala_2_opis') ?></a></div>
        <div class="s3 "><a href="<?php the_sub_field('sala3_link') ?>"><?php the_sub_field('sala_3_opis') ?></a></div>
<?php else: ?>
  <div class="full"><?php the_sub_field('common_event_content') ?></div>
<?php endif; ?>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- LOOP END -->

<!-- MOBILE VERSION BEGIN-->

<!-- S1 -->
<div class="header_program program_row row d-flex d-sm-none">
  <div class="hour "></div>
  <div class="s1 "><?php the_field('sala_1', 582)?></div>
</div>
<!-- LOOP -->
<?php if ( have_rows('wydarzenie', 582) ): ?>
    <?php while ( have_rows('wydarzenie', 582) ) : the_row(); ?>
      <div class=" full_row program_row row d-block d-sm-none">
        <?php if ((get_sub_field('sala_1_opis')) || !(get_sub_field('common_event'))) :?>
        <div class="hour "><?php the_sub_field('hour', 582)?></div>
      <?php endif; ?>
<?php if (get_sub_field('common_event')): ?>
        <div class="s1 "><a href="<?php the_sub_field('sala1_link') ?>"><?php the_sub_field('sala_1_opis') ?></a></div>
<?php else: ?>
  <div class="full"><?php the_sub_field('common_event_content') ?></div>
<?php endif; ?>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- LOOP END -->
<!-- S1 -->

<!-- S2 -->
<div class="header_program program_row row d-flex d-sm-none">
  <div class="hour "></div>
  <div class="s2 "><?php the_field('sala_2', 582)?></div>
</div>
<!-- LOOP -->
<?php if ( have_rows('wydarzenie', 582) ): ?>
    <?php while ( have_rows('wydarzenie', 582) ) : the_row(); ?>
      <div class=" full_row program_row row d-block d-sm-none">
    <?php if ((get_sub_field('sala_2_opis')) || !(get_sub_field('common_event'))) :?>
        <div class="hour "><?php the_sub_field('hour', 582)?></div>
      <?php endif; ?>
<?php if (get_sub_field('common_event')): ?>
        <div class="s2 "><a href="<?php the_sub_field('sala1_link') ?>"><?php the_sub_field('sala_2_opis') ?></a></div>
<?php else: ?>
  <div class="full"><?php the_sub_field('common_event_content') ?></div>
<?php endif; ?>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- LOOP END -->
<!-- S2 -->

<!-- S3 -->
<div class="header_program program_row row d-flex d-sm-none">
  <div class="hour "></div>
  <div class="s3 "><?php the_field('sala_3', 582)?></div>
</div>
<!-- LOOP -->
<?php if ( have_rows('wydarzenie', 582) ): ?>
    <?php while ( have_rows('wydarzenie', 582) ) : the_row(); ?>
      <div class=" full_row program_row row d-block d-sm-none">
    <?php if ((get_sub_field('sala_3_opis')) || !(get_sub_field('common_event'))) :?>
        <div class="hour "><?php the_sub_field('hour', 582)?></div>
      <?php endif; ?>
<?php if (get_sub_field('common_event')): ?>
        <div class="s3 "><a href="<?php the_sub_field('sala3_link') ?>"><?php the_sub_field('sala_3_opis') ?></a></div>
<?php else: ?>
  <div class="full"><?php the_sub_field('common_event_content') ?></div>
<?php endif; ?>
      </div>
    <?php endwhile; ?>
<?php endif; ?>
<!-- LOOP END -->
<!-- S3 -->

<!-- MOBILE VERSION END -->



<?php the_field('program_html2', 582)?>
</div>
