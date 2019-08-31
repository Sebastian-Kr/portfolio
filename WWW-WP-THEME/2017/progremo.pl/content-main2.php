
<!-- MAIN CONTENT  -->
<?php 
if ( have_posts() ) {
  while ( have_posts() ) {
    the_post(); 
if (get_the_content()){
echo '<div class="main-content container">';
          the_content();?>

<div id="cooler-nav" class="navigation">
<?php $prevPost = get_previous_post(true);
if($prevPost) {?>
<div class="nav-box previous">
<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) );?>
<?php previous_post_link('%link',"$prevthumbnail  <p>%title</p>", TRUE); ?>
</div>

<?php } $nextPost = get_next_post(true);
if($nextPost) { ?>
<div class="nav-box next" style="float:right;">
<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(100,100) ); } ?>
<?php next_post_link('%link',"$nextthumbnail  <p>%title</p>", TRUE); ?>
</div>
<?php } ?>
</div><!--#cooler-nav div -->

<?php
echo '</div>';
} // end is content statment
  } // end while

?>
<!-- END MAIN CONTENT -->
<div class="semisepar"></div>