
<?php get_header(); ?>

<div id="window_1195" class="container news-info popup_content mt200 mb50" data-popup-initialized="true" aria-hidden="false" role="dialog" tabindex="-1">

      <div class="row">
          <div class="col-lg-12">
              <div class="title"><?php echo the_title() ?></div>
              <div class="sub-title"><?php echo the_field('subtitle1') ?></div>
              <div class="sep"></div>
              <div class="data">data utworzenia: <?php echo get_the_date('d-m-Y') ?> r.</div>
              <div class="content content-single">
                 <div class="wysiwyg-text-align-center mb50">
                   <!-- MAIN CONTENT  -->
                   <?php
                   if ( have_posts() ) {
                     while ( have_posts() ) {
                       the_post();
                   if (get_the_content()){
                             the_content();

                   } // end is content statment
                     } // end while
                   } // end if
                   ?>
                   <!-- END MAIN CONTENT -->
              </div>




          </div>
      </div>


    <script type="text/javascript">
  if (history.length >= 1) {
    document.write('<a href="<?php echo home_url() ?>" onclick="history.go(-1); return false;"><button class="window_1195_close button-bottom">WSTECZ</button></a>');
  }
</script>




  </div></div>
  <?php get_footer(); ?>
