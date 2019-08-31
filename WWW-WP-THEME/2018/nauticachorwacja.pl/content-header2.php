<section id="header" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>')">


<div class="gradient"></div>

<div id="header-bar">
  <div class="container-fluid maxw">
<h1><?php
$id = get_the_id();
$cat =wp_get_post_categories($id);
echo get_cat_name( $cat[0]);
?>
</h1>
</div>
</div>
</section>
