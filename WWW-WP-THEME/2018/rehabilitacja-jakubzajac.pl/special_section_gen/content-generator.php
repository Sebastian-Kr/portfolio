


<?php

// check if the flexible content field has rows of data
if( have_rows('special_section') ):
    $GLOBALS['section_counter'] = 1;
    
     // loop through the rows of data
    while ( have_rows('special_section') ) : the_row();



        if( get_row_layout() == 'tiles_link_hover_v0') {
            get_template_part('special_section_gen/content', 'TilesLinkV0');
        }

        elseif( get_row_layout() == 'dropdown_v1' ) {
            get_template_part('special_section_gen/content', 'DropdownV1');
        }

        elseif( get_row_layout() == 'download_files_section' ) {
            get_template_part('special_section_gen/content', 'DownloadFiles');
        }

         elseif( get_row_layout() == 'tiles_link_hover_v1' ) {
            get_template_part('special_section_gen/content', 'TilesLinkV1');
         }

         elseif( get_row_layout() == 'tiles_hover_v1' ) {
           get_template_part('special_section_gen/content', 'TilesV1');
         }

            elseif( get_row_layout() == 'tiles_link_hover_v2' ) {
                get_template_part('special_section_gen/content', 'TilesLinkV2');
            }


          elseif( get_row_layout() == 'tiles_hover_v2' ) {
            get_template_part('special_section_gen/content', 'TilesV2');
          }

          elseif( get_row_layout() == 'foto_text_section' ) {
              get_template_part('special_section_gen/content', 'foto_text_section');
          }



                    elseif( get_row_layout() == 'foto_text_loop' ) {
                        get_template_part('special_section_gen/content', 'foto_text_loop');
                    }


        elseif( get_row_layout() == 'parallax' ) {
            get_template_part('special_section_gen/content', 'Parallax');
        }


elseif( get_row_layout() == 'gallery_v1' ) {
    get_template_part('special_section_gen/content', 'GalleryV1');
}


elseif( get_row_layout() == 'special_header_v1' ) {
    get_template_part('special_section_gen/content', 'HeaderV1');
}





            elseif( get_row_layout() == 'visual-editor'){
                get_template_part('special_section_gen/content', 'VisualEditor');
            }


            elseif( get_row_layout() == 'text2x50' ){
                get_template_part('special_section_gen/content', 'text2x50');
            }


else {
    echo 'Error - template code not found';
}


$GLOBALS['section_counter']++;

    endwhile;



endif;

?>
