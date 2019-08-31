<div class="search_form_container">
  <?php get_search_form();?>
  <div class="icon search_triger"></div>
</div>


<div class="icon years_archive_container">
  <ul class="years_archive">
  <?php $args = array(
  	'type'            => 'yearly',
  	'limit'           => '',
  	'format'          => 'html',
  	'before'          => '',
  	'after'           => '',
  	'show_post_count' => false,
  	'echo'            => 1,
  	'order'           => 'ASC',
    'post_type'     => 'post'
  );

  wp_get_archives( $args );?>
  </ul>
</div>
