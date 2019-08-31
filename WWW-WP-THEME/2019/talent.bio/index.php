
<?php get_header(); ?>
<section style="background-image: url('<?php echo get_the_post_thumbnail_url(101) ?>')" class="employer_list_search_header">
<div class="container">
<div class="row">
<div class="col-md-12 content_box">
  <h1><?php echo the_title() ?></h1>
</div>

</div></div>
</section>


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <?php get_template_part('content', 'main_content');?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
