


<section id="section8" class=" sec_std lazy_loader" <?php prgrm_srcSet('contact_bg', 'contact_bg_mobile' ) ?>>

  <div  class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="special_header"><span>08</span>
          <?php the_field('section8_title')?>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <?php the_field('contact1_content')?>

      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <?php the_field('contact2_content')?>

      </div>

    </div>
  </div>

  <div class="container mt30">
    <div class="row">
      <div class="col-lg-6">
        <div id="kontakt-form2">
          <?php echo do_shortcode('[contact-form-7 id="81" title="Formularz 1"]') ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div id="map"></div>
      </div>
    </div>
  </div>
</section>
