


<?php if (get_sub_field('foto_text_section_theme')== 'v1_full-foto_text-color'): ?>

<section id="<?php the_sub_field('foto_text_section_id')?>" class="<?php the_sub_field('foto_text_section_class') ?>">

<div class="container-fluid"><div class="row bordo ">
  <div class="col-sm-6 bg" style="background-image: url('<?php the_sub_field('foto_text_section_img')?>')"></div>
  <div class="col-sm-5 bordo2">
    <h2><?php the_sub_field('foto_text_section_title') ?></h2>

<div class="section_content"><?php the_sub_field('foto_text_section_desc') ?></div>

  </div>



</div></div>

</section>


  <?php endif; ?>



  <?php if (get_sub_field('foto_text_section_theme')== 'v2_text_foto'): ?>

 <section id="<?php the_sub_field('foto_text_section_id')?>" class=" v2_text_foto <?php the_sub_field('foto_text_section_class') ?>">

 <div class="container"><div class="row ">

 <div class="col-sm-6 ">
     <h2><?php the_sub_field('foto_text_section_title') ?></h2>

 <div class="section_content"><?php the_sub_field('foto_text_section_desc') ?></div>

   </div>



   <div class="col-sm-6 bg" style="background-image: url('<?php the_sub_field('foto_text_section_img')?>"></div>



 </div></div>

 </section>




   <?php endif; ?>
