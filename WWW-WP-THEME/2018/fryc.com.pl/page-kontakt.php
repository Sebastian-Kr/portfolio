<?php /*Template Name: Kontakt*/?>


<?php get_header(); ?>
<div class="contact_content">



<section id="top_header_v1" >
    <div class="bgheader"></div>

<div class="container caption mt50 fadeInLeft">

<div class="row">
  <div class="col-md-6">

  <h1 class=""><?php echo get_the_title();?></h1>
<p><?php the_field('header_text')?></p>
</div>
</div>
</div>
</section>

<div class="container text_box fadeInLeft">
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
      if (get_the_content()){
                the_content();
      } // end is content statment
        } // end while
      } // end if
      ?>


    </div>
    <div class="col-md-3 col-sm-6">
<?php the_field('the_content2')?>

    </div>
  </div>
</div>

<div class="bgcontent" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>')" >
  <img class="hidden-md-up" src="<?php echo get_the_post_thumbnail_url();?>" alt="">
</div>


</div>

<?php get_footer(); ?>
