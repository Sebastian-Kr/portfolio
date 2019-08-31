<?php

if (get_the_post_thumbnail_url($post_ID) ) {$url = get_the_post_thumbnail_url($post_ID);}
else {$url = get_template_directory_uri().'/img/start_thumb2.png';}

 ?>

                            <div class="news_loop_box" >
                              <div class="img_loop_box list_thumb" style="background-image:url('<?php echo $url ?>')"></div>
                           <div class="content_loop_box">

                             <h3><?php echo get_the_title($post_ID);?></h3>
                           <div class="excerpt">
                             <?php if (get_field('excerpt', $post_ID)) {
                               the_field('excerpt', $post_ID);
                             }
                             else {
                               echo substr(get_the_excerpt($post_ID), 0,550).'';
                             }
                        ?>
                           </div>
                              <a href="<?php the_permalink($post_ID); ?>"><div class="i">Read more...</div> </a>
                           </div>
                    
                           <div class="clearfix"></div>
                               </div>
