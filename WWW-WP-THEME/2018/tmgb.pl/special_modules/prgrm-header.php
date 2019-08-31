<section id="top_header_<?php echo get_the_id() ?>" class=" mobile_lg_bg top_header" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full')?>')">


<div class="container caption">
<div class="row"><div class="col-lg-10">
<div class="header_box fadeInLeft ">
  <div class="icon"></div>
  <div class="title_box">
    <h1 class=""><?php echo get_the_title();?></h1>
  <p><?php the_field('header_text')?></p>
  </div>
</div>
</div></div>
</div>


</section>
