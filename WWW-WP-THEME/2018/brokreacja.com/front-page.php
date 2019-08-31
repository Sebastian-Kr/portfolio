<?php defined('ABSPATH') or die();
/**
 * Template Name: Full Width Page
 * Description: Page template with a full width content container.
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>

<script>

    /*var testKey = 'test', storage = window.sessionStorage;
    var test_result = true;
    try
    {
        storage.setItem(testKey, '1');
        storage.removeItem(testKey);
    }
    catch (error)
    {
        test_result = false;
    }

    if(typeof(Storage) !== "undefined" && test_result)
    {
        var dowodzik = localStorage.getItem("dowodzik");

        if(dowodzik == 'true') { dowodzik = true; }
        else { dowodzik = false; }

        if(!dowodzik)
        {
            location.href = '<?php echo get_site_url() . '/dowodzik/' ?>';
        }
    }*/

    function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

    function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}



</script>

<div class="page-container page-home">
  <div class="scrollspy" id="home"></div>



<?php
$avatars = array();
$l_avatars = 0;

if ( have_rows('avatary') ): ?>
    <?php while ( have_rows('avatary') ) : the_row(); ?>

<?php

$avatars[$l_avatars] = get_sub_field('avatar');
$l_avatars++;

 ?>

    <?php endwhile; ?>
<?php endif;

  $avatar = $avatars[rand(0, $l_avatars-1)];
?>

<div id="dowodzik2" class="page-container page-dowodzik">

    <div class="content">

        <h1><?php the_field('dodatkowe_pole1', 8)?></h1>

        <a id="ok" href="<?php echo get_site_url(); ?>"><?php the_field('dodatkowe_pole2', 8)?></a>

        <a id="fail" href="<?php echo get_site_url(); ?>/pij-mleko/"><?php the_field('dodatkowe_pole3', 8)?></a>

        <?php the_field('dodatkowe_pole4', 8)?>
    </div>

</div>


    <section class="start">

        <!--<div class="r-line"></div>-->

        <div id="start-person" class="content-full" style="background-image: url(<?php echo $avatar;?>)">

            <!-- <a class="arrow hidden visible-sm visible-xs" href="#browar"></a> -->
        </div>

        <!--<div class="scrollspy hidden visible-sm visible-xs" id="browarr"></div>-->

    </section>

    <div class="fly">



        <section class="start" style="background: none!important; position: relative;">

        <div class="r-line"></div>

        <div class="content-full">

            <div class="box">

              <?php
              if ( have_posts() ) {
                while ( have_posts() ) {
                  the_post();
              if (get_the_content()){ ?>
                        <?php the_content(); ?>
    <?php
              } // end is content statment
                } // end while
              } // end if
              ?>

            </div>
<div class="clearfix"></div>
            <a class="arrow" href="#browar"></a>

        </div>

        <!--<div class="scrollspy" id="browar"></div>-->

    </section>





    <!--<a class="arrow" href="#browar"></a>-->

    <section class="browar">

    <div class="scrollspy" id="browar"></div>

        <div class="content-full ">
<div class="container">
<div class="row">
            <div class="col-sm-12 col-xs-12">

                <h2 class="mt_special1"><?php echo the_field('header2') ?></h2>

                <div class="line"></div>

                            </div>
                <div class="content">
                  <div class="clearfix"></div>
                  <div class="col-lg-5 col-md-6"><?php the_field('pole_tekstowe_2')?></div>
                  <div class=" col-lg-offset-1 col-lg-5 col-md-6"><?php the_field('pole_tekstowe_3')?></div>
                </div>

                <div class="team">

                  <?php if ( have_rows('team') ): ?>
                    <?php while ( have_rows('team') ) : the_row(); ?>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 avatar">
                          <img class="img-responsive" src="<?php the_sub_field('team_foto')?>" alt="">
                        </div>

                        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 text">

                            <div class="line"></div>

                            <h3><?php the_sub_field('team_name')?></h3>
                            <p><?php the_sub_field('team_desc')?></p>

                        </div>

                    </div>

    <?php endwhile; ?>
<?php endif; ?>

                </div>

            </div>
</div>
        </div>

        <div class="scrollspy" id="nasze-piwo"></div>

    </section>


    <section class="nasze-piwo nasze-piwo-v2">

        <div class="r-line"></div>

        <div class="content-full">

            <h2><?php the_field('header3')?></h2>

            <div class="line"></div>

            <h3><?php the_field('header4')?></h3>

            <div class="slider ">
              <div class="container">
<div class="row">

  <div class="slider_prev_cont"><a class="prev" href="#" id="pods-prev"></a></div>
  <div class="swiper-container col-xs-12 products swiper-podst">

      <div class="swiper-wrapper product-list" id="pods-list">

          <?php

              $l_pods = 0;

              $args = array(
              'post_type' => 'podstawowa',
              'post_status' => 'publish',
              'posts_per_page' => -1
              );

              $my_query = null;
              $my_query = new WP_Query($args);
              if($my_query->have_posts())
              {

                  while ($my_query->have_posts()) : $my_query->the_post(); ?>

                      <!-- <?php if(get_the_title() == "Seria podstawowa") continue; ?> -->

                      <div class="swiper-slide product">

                          <div class="image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt=""></div>

                          <h4><?php echo get_the_title(); ?></h4>

                          <p><?php echo get_the_content(); ?></p>

                          <a href="<?php echo get_the_permalink(); ?>">READ MORE</a>

                      </div>

                      <?php $l_pods++; ?>

                  <?php endwhile;
              }

              wp_reset_query();

          ?>

      </div>

  </div>
  <div class="slider_next_cont"><a class="next" href="<?php echo $l_pods; ?>" id="pods-next"></a></div>
</div>
</div>
</div>


            <h3><?php the_field('header5')?></h3>

            <div class="slider">
              <div class="container">
<div class="row">


                <div class="slider_prev_cont"><a class="prev" href="#" id="heavy-prev"></a></div>

                <div class="swiper-container col-xs-12 products swiper-heavy">

                    <div class="swiper-wrapper product-list" id="heavy-list">

                        <?php

                            $l_heavy =0;

                            $args = array(
                            'post_type' => 'heavy',
                            'post_status' => 'publish',
                            'posts_per_page' => -1
                            );

                            $my_query = null;
                            $my_query = new WP_Query($args);

                            if($my_query->have_posts())
                            {
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    <?php if(get_the_title() == "Seria heavy") continue; ?>

                                    <div class="swiper-slide product">

                                        <div class="image"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" alt=""></div>

                                        <h4><?php echo get_the_title(); ?></h4>

                                        <p><?php echo get_the_content(); ?></p>

                                        <a href="<?php echo get_the_permalink(); ?>">READ MORE</a>

                                    </div>

                                    <?php $l_heavy++; ?>

                                <?php endwhile;
                            }

                            wp_reset_query();

                        ?>

                    </div>

                </div>

                <div class="slider_next_cont"><a class="next" href="<?php echo $l_heavy; ?>" id="heavy-next"></a></div>

            </div>
</div>
</div>

        </div>

    </section>







    <section class="kontakt">

        <div class="scrollspy" id="kontakt"></div>

        <!-- <div class="nurse"></div>
        <div class="nurse-poj"></div> -->

        <div class="r-line"></div>

        <div class="content-full contact-content">

            <!-- <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div> -->

            <div class="container">
              <div class="row">
              <div class="col-xs-12 position-relative">

                  <h2>CONTACT</h2>

                  <div class="line"></div>

                  <?php echo do_shortcode('[contact-form-7 id="20" title="Formularz 1"]') ?>

  <?php the_field('pole_tekstowe_4')?>

              </div>
              </div>
            </div>
        </div>
        <!--<div class="gravedigger"></div>-->
        <!--<div><div class="nurse"></div></div>-->
        <div class="clearfix"></div>
        <img src="<?php echo get_template_directory_uri() ?>/img/nurse.png" alt="" class="nurse2">
    </section>
    <footer class="main-footer">

        <p>Copyright <?php echo date('Y'); ?> Brokreacja <span>/</span> Design by <a href="http://wizualni.pl" target="_blank">Wizualni.pl</a> </p>

    </footer>



    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/touchSwipe.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper_set.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">

<script type="text/javascript">
function checkCookie() {

    var dowodzik = true;
    var user=getCookie("dowodzik");
    if (user == "true") {
        dowodzik = true;
        console.log('ciastka true');
    } else {
        setCookie("dowodzik", "true", 30);
       dowodzik = false;
       console.log('ciastka false');
    }

    if(!dowodzik)
        {
            // location.href = '<?php echo get_site_url() . '/dowodzik/' ?>';

            var dowodzikDiv =  document.getElementById("dowodzik2");
            console.log(dowodzikDiv);
            dowodzikDiv.style.display = "block";
            console.log('dowodzik koniec');
        }
}

checkCookie();
</script>

<?php get_footer(); ?>
