<section id="header"
<?php if (is_page(78)) { echo 'class="firmy-projektowe" ';} ?>
<?php if (is_page(75)) { echo 'class="klienci-indywidualni" ';} ?>
style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>')">


<div class="container caption">
<div class="row"><div class="col-lg-12">
  <h1 class="dum2"><?php echo get_the_title();?></h1>
  <h5 class="dum2"><?php echo the_field('progremo_subtitle') ?></h5>
</div></div>
</div>
</section>
