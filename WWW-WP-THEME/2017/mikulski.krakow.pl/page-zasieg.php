<?php
/*
Template Name: Zasięg
*/
?>
<?php get_header() ?>


<div class="page-content">
    <div class="container">
        <div class="title text-center">
            <h2>Zasięg naszych działań<br><span></span></h2>
        </div>
        <div class="page-container">
            <div class="col-sm-12">
                <div class="scope-content scope-content-country">
                    <div class="col-sm-3 first-col">
                        <ul class="country-nav">
                            <li>
                                <a id="prgrm_return" href="/">Powrót do strony głównej</a>
                            </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/krakow" <?php if (is_page(499)) {echo 'class="active"';} ?>>Kraków</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/warszawa" <?php if (is_page(506)) {echo ' class="active"';} ?>>Warszawa</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/austria" <?php if (is_page(515)) {echo ' class="active"';} ?>>Austria</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/wegry" <?php if (is_page(526)) {echo ' class="active"';} ?>>Węgry</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/niemcy" <?php if (is_page(533)) {echo ' class="active"';} ?>>Niemcy</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/hiszpania" <?php if (is_page(539)) {echo ' class="active"';} ?>>Hiszpania</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/wlochy" <?php if (is_page(545)) {echo ' class="active"';} ?>>Włochy</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/skandynawia" <?php if (is_page(550)) {echo ' class="active"';} ?>>Skandynawia</a>
                                </li>
                                                            <li>
                                    <a href="<?php echo home_url() ?>/kraj/balkany" <?php if (is_page(560)) {echo ' class="active"';} ?>>Bałkany</a>
                                </li>
                                                    </ul>
                        <div class="text-box">
                            <div class="text-box-title">MIKULSKI &amp; WSPÓLNICY SPÓŁKA KOMANDYTOWA</div><br>
                            "WILLA ANIELA"<br>
                            ul. Kielecka 19<br>
                            31-523 Kraków
                            <br><br>
                            tel. (+48) 12 410 77 00<br>
                            fax  (+48) 12 410 77 01
                            <br><br>
                            <a href="kancelaria@mikulski.krakow.pl">kancelaria@mikulski.krakow.pl</a><br><br>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="col-sm-9 second-col">
                        <div class="header mt50 ct">
                            <?php echo the_title() ?><br>
                            <span></span>
                            <!-- <div class="buttons">
                                                    <a class="next" href="/kraj/2/warszawa"></a>
                                                                                            </div> -->
                            <div class="clear"></div>
                        </div>
                        <div class="text-info">
                            <div class="entry">

                                <div class="entry-text mt50">


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


                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="clear"></div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
