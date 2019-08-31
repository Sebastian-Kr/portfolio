<section id="header" <?php if (!((get_the_id())==135)) echo 'class="head-scale"' ?> style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full') ?>')">
  <?php if((get_the_id()==144) or (get_the_id()==12)) echo '<div id="canvas"></div>' ?>
<?php if (get_the_id()==144) get_template_part('content', 'sprzethead')?>
<?php if (get_the_id()==12) get_template_part('content', 'cennikhead')?>

   <?php if ((get_the_id())=='135'): ?>

<video id="intro-film" width="1000px" height="700px" loop="" autoplay>
  <source src="<?php echo get_template_directory_uri() ?>/img/intro-film.webm" type="video/webm">
    <source src="<?php echo get_template_directory_uri() ?>/img/intro-film.mp4" type="video/mp4; codecs='avc1.42E01E, mp4a.40.2'">
    </video>

   <?php endif; ?>
</section>
<?php if (!((get_the_id())==135)): ?>

  <div class="full-bar-header">
<?php endif; ?>
  <h1 class="square"><?php echo the_field('subheader')?></h1>
</div>
