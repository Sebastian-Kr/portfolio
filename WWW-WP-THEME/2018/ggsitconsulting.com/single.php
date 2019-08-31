<?php /*Template Name: Vendors*/?>

<?php get_header(); ?>

<div class="main-bg-container superline mt90 mb90 single-post">
<div class="container"><div class="row"><div class="col-lg-6 mt50 md-center ">

  <h2 class="mb40"><?php the_title()?></h2>
  <?php get_template_part('special_modules/prgrm', 'main');?>


  <div class="buttons">
    <a  href="<?php echo get_permalink(17)?>"><button class="btn1 gradient">Contact Us</button></a>
    <a  href="javascript:history.back()"><button class="btn3"><span>Back</span></button></a>
  </div>

</div>


</div></div>


</div>
<!-- end main main-bg-container -->








<?php get_footer(); ?>
