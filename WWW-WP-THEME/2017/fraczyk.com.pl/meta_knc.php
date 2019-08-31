<?php
 // dodaanie własnych pól
 function dwwp_add_custom_metabox() {
   add_meta_box(
     'dwwp_add',
     'Job Listing',
     'dwwp_meta_callback',
     'page',
 		'normal',
 		'high'
   );
 }

 add_action('add_meta_boxes', 'dwwp_add_custom_metabox');

 function dwwp_meta_callback($post){

	//  zapisywanie do bazy danych (w funkcji musi być parametr $post)

wp_nonce_field(basename(__FILE__), 'dwwp_jobs_nonce');
$dwwp_stored_meta = get_post_meta($post->ID);

?>


 <div>
   <div class="meta-row">

     <div class="metath">
 <label for="post-id">JOB ID</label>
 <input type="text" name="job-id" value="<?php if(!empty ($dwwp_stored_meta['job-id'])) echo esc_attr($dwwp_stored_meta['job-id'][0]);?>"/>
<br>
 <label for="data">Data</label>
 <input type="text" name="data" value=""/>
<br>
 <label for="apka">APKA</label>
 <input type="text" name="apka" value=""/>
<br>

		 </div>
   </div>
 </div>

 <?php

 }

function dww_meta_save() {




}

 ?>
