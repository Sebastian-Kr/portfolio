


<?php

// check if the flexible content field has rows of data
if( have_rows('special_section') ) {

    $GLOBALS['section_counter'] = 1;

     // loop through the rows of data
    while ( have_rows('special_section') ) : the_row();

$layoutID = get_row_layout();



if ($layoutID == 'special_module') {

  $GLOBALS['moduleID'] = get_sub_field('special_module_id');


  $moduleType = get_field('module_type', $GLOBALS['moduleID']);

  get_template_part('special_modules/content', $moduleType);

}
else {

  $css_theme = get_sub_field('theme');
  get_template_part('section_generator/content', $layoutID);

}

$GLOBALS['section_counter']++;
    endwhile;
  } // endif;

?>
