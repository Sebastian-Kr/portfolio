


<?php

// check if the flexible content field has rows of data
if( have_rows('special_section') ):
    $GLOBALS['section_counter'] = 1;

     // loop through the rows of data
    while ( have_rows('special_section') ) : the_row();



    if( get_row_layout() == 'visual-editor'){
        get_template_part('section_generator2/content', 'VisualEditor');
    }

    elseif( get_row_layout() == 'special_modules'){
$module_name = get_sub_field('module_name');
        get_template_part('special_modules2/content', $module_name);
    }
    elseif( get_row_layout() == 'module_html'){


        get_template_part('section_generator2/content', 'moduleHTML');
    }

    elseif( get_row_layout() == 'carousel1_section'){


        get_template_part('section_generator2/content', 'carousel');
    }

                    //
                    // elseif( get_row_layout() == 'foto_text_loop' ) {
                    //     get_template_part('section_generator2/content', 'foto_text_loop');
                    // }


else {
    echo 'Error - template code not found';
}


$GLOBALS['section_counter']++;

    endwhile;



endif;

?>
