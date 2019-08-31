
<?php

// check if the flexible content field has rows of data
if( have_rows('special_section') ):

     // loop through the rows of data
    while ( have_rows('special_section') ) : the_row();

        if( get_row_layout() == 'tiles_hover_v1' ):
          get_template_part('special_section/content', 'tiles_hover_v1');

          elseif( get_row_layout() == 'tiles_hover_v2' ):
            get_template_part('special_section/content', 'tiles_hover_v2');


          elseif( get_row_layout() == 'tiles_link_hover_v1' ):
            get_template_part('special_section/content', 'tiles_link_hover_v1');




        elseif( get_row_layout() == 'parallax_text_link_v1' ):
get_template_part('special_section/content', 'parallax_text_link_v1');


elseif( get_row_layout() == 'gallery_v1' ):
get_template_part('special_section/content', 'gallery_v1');


elseif( get_row_layout() == 'special_header_v1' ):
    get_template_part('special_section/content', 'special_header_v1');

    elseif( get_row_layout() == 'foto_text_section' ):
        get_template_part('special_section/content', 'foto_text_section');

        elseif( get_row_layout() == 'dropdown_v1' ):
            get_template_part('special_section/content', 'dropdown_v1');

            elseif( get_row_layout() == 'text100' ):
                get_template_part('special_section/content', 'text100');


            elseif( get_row_layout() == 'text2x50' ):
                get_template_part('special_section/content', 'text2x50');


else:
    echo 'Error template code';


        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
