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

function checkCookie() {

    var dowodzik = true;

    var user=getCookie("dowodzik");
    if (user == "true") {
        dowodzik = true;
    } else {
        setCookie("dowodzik", "true", 30);
       dowodzik = false;
    }

    if(!dowodzik)
        {
            location.href = '<?php echo get_site_url() . '/dowodzik/' ?>';
        }
}

checkCookie();

</script>

<div class="page-container page-home">

    <section class="start">

        <!--<div class="r-line"></div>-->

        <?php

            $avatars = array();
            $l_avatars = 0;

                            $args = array(
                            'post_type' => 'start',
                            'post_status' => 'publish',
                            'posts_per_page' => -1
                            );

                            $my_query = null;
                            $my_query = new WP_Query($args);

                            if($my_query->have_posts())
                            {
                                while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                    <?php if(get_the_ID() == "23" || get_the_ID() == "24") continue; ?>

                                    <?php

                                        $avatars[$l_avatars] = get_the_ID();
                                        $l_avatars++;

                                    ?>

                                <?php endwhile;
                            }

                            wp_reset_query();


            $avatar = $avatars[rand(0, $l_avatars-1)];
        ?>

        <div id="start-person" class="content-full" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($avatar)); ?>);">

            <div class="box hidden visible-sm visible-xs">

                <h1>BRO<span>KREACJA</span></h1>

                <h2><?php echo apply_filters('the_title', get_post_field('post_title', 23)); ?></h2>

                <!--<a class="button" href="<?php echo get_site_url(); ?>/sklep/">Przejdź do sklepu</a>-->

                <p><?php echo remove_p(get_post_field('post_content', 24)); ?></p>

                <div class="img-box">

                    <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(413)); ?>">
                    <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(415)); ?>">

                </div>

            </div>

            <a class="arrow hidden visible-sm visible-xs" href="#browar"></a>

        </div>

        <!--<div class="scrollspy hidden visible-sm visible-xs" id="browarr"></div>-->

    </section>

    <div class="fly">



        <section class="start" style="background: none!important; position: relative;">

        <div class="r-line"></div>

        <div class="content-full">

            <div class="box">

                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(413)); ?>">
                <img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(415)); ?>">

                <h1>BRO<span>KREACJA</span></h1>

                <h2><?php echo apply_filters('the_title', get_post_field('post_title', 23)); ?></h2>

                <!--<a class="button" href="<?php echo get_site_url(); ?>/sklep/">Przejdź do sklepu</a>-->

                <p><?php echo remove_p(get_post_field('post_content', 24)); ?></p>

            </div>

            <a class="arrow" href="#browar"></a>

        </div>

        <!--<div class="scrollspy" id="browar"></div>-->

    </section>





    <!--<a class="arrow" href="#browar"></a>-->

    <section class="browar">

    <div class="scrollspy" id="browar"></div>

        <div class="content-full">

            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                <h2><?php echo apply_filters('the_title', get_post_field('post_title', 28)); ?></h2>

                <div class="line"></div>

                <p><?php echo remove_p(get_post_field('post_content', 28)); ?></p>

                <div class="team">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 avatar"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(29)); ?>" alt=""></div>

                        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 text">

                            <div class="line"></div>

                            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 29)); ?></h3>

                            <p><?php echo remove_p(get_post_field('post_content', 29)); ?></p>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 avatar"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(31)); ?>" alt=""></div>

                        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 text">

                            <div class="line"></div>

                            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 31)); ?></h3>

                            <p><?php echo remove_p(get_post_field('post_content', 31)); ?></p>

                        </div>

                    </div>


                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 avatar"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(399)); ?>" alt=""></div>

                        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 text">

                            <div class="line"></div>

                            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 399)); ?></h3>

                            <p><?php echo remove_p(get_post_field('post_content', 399)); ?></p>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 avatar"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(401)); ?>" alt=""></div>

                        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 text">

                            <div class="line"></div>

                            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 401)); ?></h3>

                            <p><?php echo remove_p(get_post_field('post_content', 401)); ?></p>

                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 person">

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 avatar"><img class="img-responsive" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(660)); ?>" alt=""></div>

                        <div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 text">

                            <div class="line"></div>

                            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 660)); ?></h3>

                            <p><?php echo remove_p(get_post_field('post_content', 660)); ?></p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="scrollspy" id="nasze-piwo"></div>

    </section>


    <section class="nasze-piwo nasze-piwo-v2">

        <div class="r-line"></div>

        <div class="content-full">

            <h2>Nasze piwo</h2>

            <div class="line"></div>

            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 33)); ?></h3>

            <div class="slider">

                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><a class="prev" href="#" id="pods-prev"></a></div>

                <div class="swiper-container col-lg-10 col-md-10 col-sm-10 col-xs-10 products swiper-podst">

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

                                        <a href="<?php echo get_the_permalink(); ?>">Czytaj więcej</a>

                                    </div>

                                    <?php $l_pods++; ?>

                                <?php endwhile;
                            }

                            wp_reset_query();

                        ?>

                    </div>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><a class="next" href="<?php echo $l_pods; ?>" id="pods-next"></a></div>

            </div>



            <h3><?php echo apply_filters('the_title', get_post_field('post_title', 405)); ?></h3>

            <div class="slider">

                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><a class="prev" href="#" id="heavy-prev"></a></div>

                <div class="swiper-container col-lg-10 col-md-10 col-sm-10 col-xs-10 products swiper-heavy">

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

                                        <a href="<?php echo get_the_permalink(); ?>">Czytaj więcej</a>

                                    </div>

                                    <?php $l_heavy++; ?>

                                <?php endwhile;
                            }

                            wp_reset_query();

                        ?>

                    </div>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><a class="next" href="<?php echo $l_heavy; ?>" id="heavy-next"></a></div>

            </div>


        </div>

    </section>





    <section class="festiwale-i-eventy">

        <div class="gravedigger"></div>
        <div class="gravedigger-poj"></div>
        <div class="r-line"></div>

        <?php

            $events = array();
            $l_events = 0;

            $args = array(
                    'post_type' => 'festiwale',
                    'post_status' => 'publish',
                    'posts_per_page' => -1
                    );

                    $my_query = null;
                    $my_query = new WP_Query($args);

                    if($my_query->have_posts())
                    {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>

                            <?php if(get_the_ID() == "40") continue; ?>

                            <?php

                                    $data = get_post_meta(get_the_ID(), 'festiwale-extend', true);
                                    $data = $data[0]['data'];

                                    $events[$l_events]['background'] = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                                    $events[$l_events]['title'] = get_the_title();
                                    $events[$l_events]['date'] = $data;
                                    //$events[$l_events]['des'] = substr(get_the_content(), 0, 406);
                                    $events[$l_events]['des'] = get_the_content();
                                    $events[$l_events]['link'] = get_the_permalink();

                                    $l_events++;

                            ?>

                        <?php endwhile;
                    }

                    wp_reset_query();

        ?>

        <div class="content-full">

            <div class="scrollspy" id="festiwale-i-eventy"></div>

            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                <h2><?php echo apply_filters('the_title', get_post_field('post_title', 40)); ?></h2>

                <div class="line"></div>

            </div>

            <div class="slider">

                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><a class="prev" href="#" id="prev-event"></a></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 event" id="0" style="background-image: url(<?php echo $events[0]['background']; ?>);">

                    <h3><?php echo $events[0]['title']; ?></h3>

                    <p class="date"><?php echo $events[0]['date']; ?></p>

                    <div><p class="des"><?php echo $events[0]['des']; ?></p></div>

                    <a class="button" href="<?php echo $events[0]['link']; ?>">Czytaj więcej</a>

                </div>

                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><a class="next" href="#" id="next-event"></a></div>

            </div>

        </div>

    </section>



    <section class="kontakt">

        <div class="scrollspy" id="kontakt"></div>

        <div class="nurse"></div>
        <div class="nurse-poj"></div>

        <div class="r-line"></div>

        <div class="content-full">

            <div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">

                <h2>CONTACT</h2>

                <div class="line"></div>

    <h2>FORMULARZ </h2>

                <p><?php echo remove_p(get_post_field('post_content', 45)); ?></p>

            </div>

        </div>
        <!--<div class="gravedigger"></div>-->
        <!--<div><div class="nurse"></div></div>-->
    </section>


    <footer class="main-footer">

        <p>Copyright 2016 Brokreacja <span>/</span> Design by <a href="http://wizualni.pl" target="_blank">Wizualni.pl</a> <span>/</span> Powered&nbsp;by&nbsp;<a href="http://creativewds.com" target="_blank">CreativeWDS</a></p>

    </footer>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/touchSwipe.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
<script>

    $(document).ready(function()
    {
        var swiper_podst = new Swiper('.swiper-podst', {
        paginationClickable: true,
        slidesPerView: 6,
        spaceBetween: 50,
        loop: true,
        breakpoints: {
            1500: {
                slidesPerView: 5,
                spaceBetween: 40
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            900: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            501: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
        });

        $('#pods-prev').click(function()
        {
            swiper_podst.slidePrev();

            return false;
        });

        $('#pods-next').click(function()
        {
            swiper_podst.slideNext();

            return false;
        });


        var swiper_heavy = new Swiper('.swiper-heavy', {
        paginationClickable: true,
        slidesPerView: 6,
        spaceBetween: 50,
        loop: true,
        breakpoints: {
            1500: {
                slidesPerView: 5,
                spaceBetween: 40
            },
            1200: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            900: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            501: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
        });

        $('#heavy-prev').click(function()
        {
            swiper_heavy.slidePrev();

            return false;
        });

        $('#heavy-next').click(function()
        {
            swiper_heavy.slideNext();

            return false;
        });


        if($(window).width() > 1030)
        {
            // $('.gravedigger').css('position', 'fixed');
            $('.nurse').css('position', 'fixed');
            // $('.blog').css('position', 'relative');
            $('.kontakt').css('position', 'relative');
            $('.nurse-poj').css('bottom', '-5px');
            $('.main-footer').css('position', 'relative');
            $('#start-person').css('position', 'fixed').css('top', '0px');

            var w_width = $(window).width();

            //var elementOffset = 2150;
            //var elementOffset = $(window).height() + Number(1075); //przed heavy
            var elementOffset = $(window).height() + Number(1375); // przed new eksperyment
            // var elementOffset = $(window).height() + Number(1625);
            //var elementOffset_2 = 2900;
            //var elementOffset_2 = $(window).height() + Number(1850);
            //var elementOffset_2 = $(window).height() + Number(1990); //przed heavy
             var elementOffset_2 = $(window).height() + Number(2290); // przed new eksperyment
            // var elementOffset_2 = $(window).height() + Number(2440);

            if(w_width <= 1500)
            {
                //var elementOffset = $(window).height() + Number(836);
                //var elementOffset = $(window).height() + Number(1130); //przed heavy
                // var elementOffset = $(window).height() + Number(1420); // przed new eksperyment
                var elementOffset = $(window).height() + Number(1670);
                //var elementOffset_2 = $(window).height() + Number(1868); //przed heavy
                // var elementOffset_2 = $(window).height() + Number(2100); // przed new eksperyment
                var elementOffset_2 = $(window).height() + Number(2350);
            }

            if(w_width <= 1300)
            {
                // elementOffset_2 = $(window).height() + Number(1890); // przed new eksperyment
                elementOffset_2 = $(window).height() + Number(2290);
            }

            if(w_width <= 1230)
            {
                // elementOffset = $(window).height() + Number(1180); // przed new eksperyment
                elementOffset = $(window).height() + Number(1500);
            }

            $('.gravedigger').css('bottom', 'none').css('top', elementOffset + 'px');
            $('.nurse').css('bottom', 'none').css('top', elementOffset_2 + 'px');

            $(window).scroll(function ()
            {

                $('.gravedigger').css({
                   'top' : -($(this).scrollTop()/2.25)+Number(elementOffset)+"px"
                });

                if(w_width > 1500)
                {
                    $('.nurse').css({
                       'top' : -($(this).scrollTop()/2.1)+Number(elementOffset_2)+"px"
                    });
                }
                else
                {
                    $('.nurse').css({
                       'top' : -($(this).scrollTop()/2.25)+Number(elementOffset_2)+"px"
                    });
                }

                if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
                {
                    $('#start-person').css({
                       'top' : -($(this).scrollTop()/2.25)+Number(0)+"px"
                    });
                }
            });
        }


        $('#mobile-menu a').click(function()
        {
            $('#show-menu').click();
        });



        $('section').each(function()
        {
            $('.r-line', this).css('height', $(this).height());
        });


        $(window).resize(function()
        {
            $('section').each(function()
            {
                $('.r-line', this).css('height', $(this).height());
            });
        });


        var e_background = [];
        var e_title = [];
        var e_date = [];
        var e_des = [];
        var e_link = [];
        var events = <?php echo $l_events; ?>;

        <?php

            for($i = 0; $i<$l_events; $i++)
            {
                echo
                "
                    e_background[". $i ."] = '". $events[$i]['background'] ."';
                    e_title[". $i ."] = '". $events[$i]['title'] ."';
                    e_date[". $i ."] = '". $events[$i]['date'] ."';
                    e_des[". $i ."] = '". preg_replace( "/\r|\n/", "", $events[$i]['des']) ."';
                    e_link[". $i ."] = '". $events[$i]['link'] ."';
                ";
            }

        ?>

        $('#prev-event').click(function()
        {
            var id = $('.event').attr('id');

            if(id > 0)
            {
                id--;
            }

            else
            {
                id = events-1;
            }

                $('.event').animate({opacity: "0"}, 200, function()
                {
                    $('.event').css('background-image', 'url(' + e_background[id] + ')');
                    $('.event h3').html(e_title[id]);
                    $('.event .date').html(e_date[id]);
                    $('.event .des').html(e_des[id]);
                    $('.event .button').attr('href', e_link[id]);


                    $('.event').attr('id', id);
                });

                $('.event').animate({opacity: "1"}, 200);

            return false;
        });

        $('#next-event').click(function()
        {
            var id = $('.event').attr('id');

            if(id < events-1)
            {
                id++;
            }

            else
            {
                id = 0;
            }

                $('.event').animate({opacity: "0"}, 200, function()
                {
                    $('.event').css('background-image', 'url(' + e_background[id] + ')');
                    $('.event h3').html(e_title[id]);
                    $('.event .date').html(e_date[id]);
                    $('.event .des').html(e_des[id]);
                    $('.event .button').attr('href', e_link[id]);


                    $('.event').attr('id', id);
                });

                $('.event').animate({opacity: "1"}, 200);

            return false;
        });


        $(function() {
  $('.event').swipe( {
    swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
       $('#next-event').click();
    }
  });
});
    $(function() {
  $('.event').swipe( {
    swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
       $('#prev-event').click();
    }
  });
});



        /*var l_products = 6;

        if($(window).width() < 1500) { l_products = 5; }
        if($(window).width() < 1200) { l_products = 4; }
        if($(window).width() < 900) { l_products = 3; }
        if($(window).width() < 768) { l_products = 2; }
        if($(window).width() < 501) { l_products = 1; }





        var margin = ($('.products').width() - (l_products * $('#pods-list .product').width())) / l_products;

        if($(window).width() < 1500)
        {
            $('#pods-list .product').css('margin-left', margin/2);
            $('#pods-list .product').css('margin-right', margin/2);
        }*/


        $('.product-list .product .image, .product-list .product a').click(function()
        {
            var url = $(this).parent().find('a').attr('href');
            location.href = url;
        });



        $('input[type="submit"]').click(function()
        {
            if($('#code').val() == $('#g_code').val()) { return true; }
            else { alert('Nieprawidłowy kod!'); $('#code').focus(); return false; }
        });




        /*$('#pods-prev').click(function()
        {
            //var c_width = 211.6;
            var c_width = $('#pods-list .product').width() + Number($('#pods-list .product').css('margin-left').replace('px', '')) + Number($('#pods-list .product').css('margin-right').replace('px', ''));
            var margin = $('#pods-list').css('margin-left');

            if(margin != '0px' && Math.floor(margin.replace('px', '')) < -10)
            {
                //margin = Number(margin.replace('px', '')) + Number(211.6);
                margin = Number(margin.replace('px', '')) + Number(c_width);

               // $('#pods-list').css('margin-left', margin + 'px');
                $('#pods-list').animate({marginLeft: margin + 'px'}, 100);
            }

            return false;
        });


        $('#pods-next').click(function()
        {
            var objects = $(this).attr('href');
            //var current = 6;
           // var c_width = 211.6;
           var c_width = $('#pods-list .product').width() + Number($('#pods-list .product').css('margin-left').replace('px', '')) + Number($('#pods-list .product').css('margin-right').replace('px', ''));
           // var s_margin = (objects - current) * 211.6;

           var s_margin = (objects - l_products) * c_width;
            s_margin = 0 - s_margin;


            var margin = $('#pods-list').css('margin-left');

            //if(objects > current && margin.replace('px', '') != s_margin)
            if(objects > l_products && Math.floor(margin.replace('px', '')) != Math.floor(s_margin))
            {
                margin = Number(margin.replace('px', '')) - Number(c_width);

                //$('#pods-list').css('margin-left', margin + 'px');
                $('#pods-list').animate({marginLeft: margin + 'px'}, 100);
            }

            else
            {
                $('#pods-list').animate({marginLeft: '0px'}, 100);
            }


            return false;
        });*/


       /* var l_products2 = 2;

        if($(window).width() < 501) { l_products2 = 1; }


        $('#eks-prev').click(function()
        {
            //var c_width = 211.6;
            var c_width = $('#eks-list .product').width() + Number($('#eks-list .product').css('margin-left').replace('px', '')) + Number($('#eks-list .product').css('margin-right').replace('px', ''));
            var margin = $('#eks-list').css('margin-left');

            if(margin != '0px' && Math.floor(margin.replace('px', '')) < -10)
            {
                //margin = Number(margin.replace('px', '')) + Number(211.6);
                margin = Number(margin.replace('px', '')) + Number(c_width);

               // $('#pods-list').css('margin-left', margin + 'px');
                $('#eks-list').animate({marginLeft: margin + 'px'}, 100);
            }

            return false;
        });


        $('#eks-next').click(function()
        {
            var objects = $(this).attr('href');
            //var current = 6;
           // var c_width = 211.6;
           var c_width = $('#eks-list .product').width() + Number($('#eks-list .product').css('margin-left').replace('px', '')) + Number($('#eks-list .product').css('margin-right').replace('px', ''));
           // var s_margin = (objects - current) * 211.6;

           var s_margin = (objects - l_products2) * c_width;
            s_margin = 0 - s_margin;


            var margin = $('#eks-list').css('margin-left');

            //if(objects > current && margin.replace('px', '') != s_margin)
            if(objects > l_products2 && Math.floor(margin.replace('px', '')) != Math.floor(s_margin))
            {
                margin = Number(margin.replace('px', '')) - Number(c_width);

                //$('#pods-list').css('margin-left', margin + 'px');
                $('#eks-list').animate({marginLeft: margin + 'px'}, 100);
            }

            else
            {
                $('#eks-list').animate({marginLeft: '0px'}, 100);
            }


            return false;
        });*/


        /*$(function() {
  $('#pods-list').swipe( {
    swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
       $('#pods-next').click();
    }
  });
});
    $(function() {
  $('#pods-list').swipe( {
    swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
       $('#pods-prev').click();
    }
  });
});  */

/*
$(function() {
  $('#eks-list').swipe( {
    swipeLeft:function(event, direction, distance, duration, fingerCount, fingerData) {
       $('#eks-next').click();
    }
  });
});
    $(function() {
  $('#eks-list').swipe( {
    swipeRight:function(event, direction, distance, duration, fingerCount, fingerData) {
       $('#eks-prev').click();
    }
  });
});  */





        //$('nav ul li a, .dystrybucja .button').on('click', function (event)
        $('.dystrybucja .button').on('click', function (event)
        {
            event.preventDefault();
            $('html,body').animate({scrollTop: ($(this.hash).offset().top + Number(90))}, 500);
        });

        $('.start .arrow').on('click', function (event)
        {
            event.preventDefault();
            $('html,body').animate({scrollTop: ($(this.hash).offset().top)}, 500);
        });


        if($(window).width() < 768)
        {
            $('nav ul li a').on('click', function (event)
            {
                event.preventDefault();
                $('html,body').animate({scrollTop: ($(this.hash).offset().top + Number(90))}, 500);
            });
        }


        // Cache selectors
        var lastId,
            topMenu = $("#nav"),
            topMenuHeight = topMenu.outerHeight()+15,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
              var item = $($(this).attr("href"));
              if (item.length) { return item; }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e){
          var href = $(this).attr("href"),
              offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;

          $('html, body').stop().animate({
              scrollTop: offsetTop
          }, 200);

          e.preventDefault();
        });

        // Bind to scroll
        $(window).scroll(function(){
           // Get container scroll position
           var fromTop = $(this).scrollTop()+topMenuHeight;

           // Get id of current scroll item
           var cur = scrollItems.map(function(){
             if ($(this).offset().top < fromTop)
               return this;
           });
           // Get the id of the current element
           cur = cur[cur.length-1];
           var id = cur && cur.length ? cur[0].id : "";

           if (lastId !== id) {
               lastId = id;
               // Set/remove active class
               menuItems
                 .parent().removeClass("active")
                 .end().filter("[href='#"+id+"']").parent().addClass("active");
           }
        });








/*
$(window).on('scroll', function () {
    var scrollTop     = $(window).scrollTop(),
        elementOffset = $('.nurse').offset().top,
        distance      = (elementOffset - scrollTop);

    if(distance  < $(window).height()/2 && $('a[href="#festiwale-i-eventy"]').parent().hasClass('active'))
    {
        $('.nurse').css('position', 'fixed');
        $('.nurse').css('bottom', '-' + $('.nurse').height()/2 + 'px');
    }

    if($('a[href="#blog"]').parent().hasClass('active'))
    {
        $('.nurse').attr('style', '');
        $('.nurse').css('bottom', '100px');
    }
});
*/

//

 /*
$(window).on('scroll', function ()
{
    var scrollTop     = $(window).scrollTop(),
        elementOffset = $('.dystrybucja').offset().top,
        distance      = (elementOffset - scrollTop);

    if(distance < 226)
    {
        $('.gravedigger').css('position', 'fixed');
        $('.gravedigger').css('top', '100px');
    }

    else
    {
        $('.gravedigger').removeAttr('style');
    }


    var scrollTop_2     = $(window).scrollTop(),
        elementOffset_2 = $('.blog').offset().top,
        distance_2      = (elementOffset_2 - scrollTop_2);

    var space_2 = 0;

    if($(window).width() <= 1500)
    {
        space_2 = 100;
    }

    if(distance_2 < ($(window).height() + space_2))
    {
        $('.gravedigger').removeAttr('style').css('bottom', '1600px');
    }

    if(distance_2 < 100)
    {
        $('.nurse').css('position', 'fixed');
        $('.nurse').css('top', '100px');
        $('.main-footer').css('bottom', '0px').css('position', 'absolute');
    }

    else
    {
        $('.nurse').removeAttr('style');
        $('.main-footer').removeAttr('style');
    }
});*/


    if($(window).width() > 991)
    {
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('.main-header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('.main-header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('.main-header').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }


        $(window).mousemove(function(event)
        {
            if(event.clientY <= 90)
            {
                if($('.main-header').hasClass('nav-up'))
                {
                    $('.main-header').removeClass('nav-up').addClass('nav-down');
                }
            }
        });

        $('#nav ul li a').click(function()
        {
            $('.main-header').css('top', '0', 'important');

            setTimeout(function(){ $('.main-header').removeAttr('style').removeClass('nav-up').addClass('nav-down'); }, 500);

            //setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 400);
            /*setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 200);
            setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 250);
            setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 300);
            setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 350);
            setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 400);
            setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 450);
            setTimeout(function(){ $('.main-header').removeClass('nav-up').addClass('nav-down'); }, 500);*/

        });
    }

    $('.start .arrow').click(function()
    {
        if($(window).width() > 767) { $('#std-nav li a[href="#browar"]').click(); }
        else { $('#mob-nav li a[href="#browar"]').click(); }

        return false;
    });

    $('.dystrybucja .button').click(function()
    {
        $('#std-nav li a[href="#kontakt"]').click();
        return false;
    });



            <?php

                if(isset($_GET['message']) && ($_GET['message'] == '1' || $_GET['message'] == '0'))
                {
                    if ($_GET['message'] == '1')
                    {
                        $message = "Wiadomość została wysłana.";
                    }

                    else
                    {
                        $message = "Wystąpił bład. Prosimy spróbować ponownie.";
                    }

                    echo 'alert("' . $message . '");';
                }
            ?>
    });

</script>

<?php get_footer(); ?>
