<?php
/*
Template Name: Specjalizacje
*/
?>
<?php get_header() ?>
<div class="page-content">

  <div class="page-content-bg-top"></div>
  <div class="container">
      <div class="title text-center">
          <h1>Specjalizacje</h1>
      </div></div>

<div class="page-content"><div class="wysiwyg-text-align-justify">
                <!-- MAIN CONTENT  -->
                <div class="container"><div class="row">
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
                </div></div></div></div>

<div id="spec" class="main-content"><div class="main-boxes">
                <div class="container box-items">

                            <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img1') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo the_field('pcf-link1') ?>">
                                    <p>

                                      <?php echo iworks_orphan(get_field('pcf-ng1')) ?>


                                    </p>
                                    <span class="box-description"><?php echo the_field('pcf-desc1') ?></span>
                                </a>
                            </div>

                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img2') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo the_field('pcf-link2') ?>">
                                    <p><?php echo iworks_orphan(get_field('pcf-ng2')) ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc2') ?></span>
                                </a>
                            </div>

                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img3') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo iworks_orphan(get_field('pcf-link3')) ?>">
                                    <p><?php echo the_field('pcf-ng3') ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc3') ?></span>
                                </a>
                            </div>

                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img4') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo the_field('pcf-link4') ?>">
                                    <p><?php echo the_field('pcf-ng4') ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc4') ?></span>
                                </a>
                            </div>

                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img5') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo the_field('pcf-link5') ?>">
                                    <p><?php echo the_field('pcf-ng5') ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc5') ?></span>
                                </a>
                            </div>


                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img6') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo iworks_orphan(get_field('pcf-link6')) ?>">
                                    <p><?php echo iworks_orphan(get_field('pcf-ng6')) ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc6') ?></span>
                                </a>
                            </div>

                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img7') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo the_field('pcf-link7') ?>">
                                    <p><?php echo the_field('pcf-ng7') ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc7') ?></span>
                                </a>
                            </div>

                          <div class="box-item"><div class="bg" style="background-image: url('<?php echo the_field('pcf-img8') ?>')"><div class="box-item-glass"></div></div>
                                <a class="box-content" href="<?php echo the_field('pcf-link8') ?>">
                                    <p><?php echo the_field('pcf-ng8') ?></p>
                                    <span class="box-description"><?php echo the_field('pcf-desc8') ?></span>
                                </a>
                            </div>

                <div class="clear"></div>  </div>


          </div></div>

<?php get_footer() ?>
