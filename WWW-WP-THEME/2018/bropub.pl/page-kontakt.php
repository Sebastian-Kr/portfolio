
<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<div class="interactiveItem" id="kontakt"></div>
<section class="mb0 pb0" id="kontakt-info">
  <!-- MAIN CONTENT  -->


  <div class="prgrm_visual_editor container">
        <div class="row">
          <div class="col-md-12 mt70"> <h2>KONTAKT</h2></div>
          <div class="col-md-3">
          <?php echo get_post_field('post_content', 18) ?>
          </div>

          <div class="col-md-3"><?php echo the_field('add_wisual_editor', 18) ?></div>
        </div>
  </div>


  <!-- MAIN CONTENT END  -->

</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>

<?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
<section id="kontakt-form">
<div class="container"><div class="row">
<div class="col-lg-6 ">

<?php echo do_shortcode('[contact-form-7 id="307" title="Formularz 1"]') ?>


</div>
<div class="col-lg-6">
   <div id="map"></div>
</div>

</div></div>
</section>
<?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>
