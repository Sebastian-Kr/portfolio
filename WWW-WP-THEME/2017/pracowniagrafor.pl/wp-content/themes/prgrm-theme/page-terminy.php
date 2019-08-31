<?php /* Template Name: TERMINY0 */?>


  <?php get_header(); ?>
    <?php get_template_part(content, header);?>



        <?php // ========================================================================
//  SECTION -
// =========================================================================  ?>
          <section id="reservation" class="terminy_page">
            <div id="terminy" class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="">Zobacz kiedy odbywają się kursy w pracowni GRAFOR</h2>
                </div>
              </div>
              <div class="row">

                <div id="legenda" class="col-lg-4 colortiles_calender_version">
                  <?php get_template_part('content', 'colortiles') ?>
                    <p class="error"></p>
                </div>


                <div  class="col-lg-4">

                  <!-- <div id="colord" class=""> -->
                  <!-- </div> -->
                      <div id="term_calender_column">

                  <div id="color"><div id="kalendarz" class="date"></div></div>
                  <div id="legenda-kalendarz">
                    <h6>Legenda:</h6>
                    <div id="przerwa">- Przerwa w pracowni</div>
                    <div id="kilkakursow">- Kilka kursów w jednym dniu</div>
                  </div>
                </div>

                </div>



                <div id="cat_column" class="col-lg-4">
                  <?php echo get_template_part('content', 'main') ?>
              <a href="<?php echo get_permalink(23)?>"><div id="terminy_button" class="btn btn-info">PRZEJDŹ DO REZERWACJI</div></a>
                </div>



              </div>
            </div>
          </section>
          <?php // ========================================================================
//  END SECTION -
// =========================================================================  ?>


            <?php get_footer(); ?>
              <?php get_template_part('content', 'terminscript8') ?>
