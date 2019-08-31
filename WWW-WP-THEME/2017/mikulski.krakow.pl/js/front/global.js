/*globals window, document, $*/

var $ = jQuery;

$(function () {
    'use strict';

    var stickyHeader, showMobileMenu, sendServiceForm, iconScroll, checkUpButton, goTo, closePanel, mainBg, randomBg, mainMap, scrollToMap, showOffer, showLang, addToNewsletter;

    addToNewsletter = function () {
        $('.newsletter-check').click(function(){
            if($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
        });
    };

    showLang = function () {
        $( ".languages-container a" ).hover(function() {
                $('.languages-container a').css('display','inline-block');
            }, function() {
                $('.languages-container a').css('display','none');
                $('.languages-container .active').css('display','inline-block');
            }
        );

        $('.extra-lang').on('click touchend', function(e) {
            var el = $(this);
            var link = el.attr('href');
            window.location = link;
        });
    };

    showOffer = function () {
        $('.job-button').click(function (){
            var iden = $(this).attr('id');
            $('.job-button').removeClass('active');
            $(this).addClass('active');
            if(iden == 'job_1') {
                $('.carrer-2, .carrer-3').css('display','none');
                $('.carrer-1').css('display','block');
            } else if (iden == 'job_2') {
                $('.carrer-1, .carrer-3').css('display','none');
                $('.carrer-2').css('display','block');
            } else {
                $('.carrer-1, .carrer-2').css('display','none');
                $('.carrer-3').css('display','block');
            }
        });
    };

    scrollToMap = function () {
        $(document).on('scroll', function() {
            if($('#country-anchor2').length > 0) {
                if ($(this).scrollTop() >= $('#country-anchor2').position().top) {
                    $('.europe li.eu16, .europe li.eu3, .europe li.eu18, .europe li.eu42, .europe li.eu22').addClass('active-region');
                }
            }
        });
    };

    mainMap = function () {

        if($('#map-europe').length > 0) {
            $("#map-europe").CSSMap({
                "size": 1280,
                'fitHeight': false,
                'responsive': false,
                'tooltips': false,
                // 'activateOnLoad':["eu16", "eu3", "eu18", "eu42", "eu22"],
                disableClicks: false,
                onClick: function (listItem) {
                    $('.europe li.eu16, .europe li.eu3, .europe li.eu18, .europe li.eu42, .europe li.eu22').addClass('active-region');
                }
            });
        }
    };

    randomBg = function () {
        var randElem = Math.floor(Math.random()*$('.background-items-container .image').size());
        $('.background-items-container #bg_'+randElem).css({'z-index':1, 'opacity':1});
    };

    mainBg = function () {
        $(".box-item").hover(
            function() {
                var id = $( this ).attr('id');
                $('.background-items-container .image').css({'z-index':0, 'opacity':0});
                $('.background-items-container').find('#bg_'+id).css({'z-index':1, 'opacity':1});
            }, function() {
                // $( this ).
            }
        );
    };

    closePanel = function () {
        $(document).on('click', 'body *', function () {
            $('.panel-box a').removeClass('active');
        });
        $( window ).scroll(function() {
            $('.panel-box a').removeClass('active');
        });
    };

    goTo = function () {
        $('.go-up').click(function () {
            $('html, body').animate({
                scrollTop: $("html").offset().top
            }, 500);
        });
    };

    checkUpButton = function () {
        if ($(window).scrollTop() > 0) {
            $('.go-up').fadeIn(200);
        } else {
            $('.go-up').fadeOut(200);
        }
    };

    sendServiceForm = function () {


        var $ = jQuery;
        var bErr = false;
        var $form = $('#contact-form');
        var formdata = $form.serialize();

        var sEntryTitle = $('input[name="entry-title"]').val();
        var sName = $('input[name="name"]').val();
        var sSurname = $('input[name="surname"]').val();
        var sEmail = $('input[name="email"]').val();
        var sBrand = $('input[name="brand"]').val();
        var sMessage = $('textarea[name="message"]').val();
        var iNewsletter = 0;

        var bErr = false;

        if (sName === '') {
            bErr = true;
            $("input[name='name']").addClass('has-error');
        } else {
            $("input[name='name']").removeClass('has-error');
        }

        if (sSurname === '') {
            bErr = true;
            $("input[name='surname']").addClass('has-error');
        } else {
            $("input[name='surname']").removeClass('has-error');
        }

        if (sEmail === '') {
            bErr = true;
            $("input[name='email']").addClass('has-error');
        } else {
            if (sEmail !== '' && !validateEmail(sEmail)) {
                bErr = true;
                $("input[name='email']").addClass('has-error');
            } else {
                $("input[name='email']").removeClass('has-error');
            }
        }

        if (sBrand === '') {
            bErr = true;
            $("input[name='brand']").addClass('has-error');
        } else {
            $("input[name='brand']").removeClass('has-error');
        }

        if (sMessage === '') {
            bErr = true;
            $("textarea[name='message']").addClass('has-error');
        } else {
            $("textarea[name='message']").removeClass('has-error');
        }

        if($('.newsletter-check').hasClass('active')) {
            iNewsletter = 1;
        } else {
            iNewsletter = 0;
        }

        if (!bErr) {
            $("body").css("cursor", "progress");
            $.ajax({
                url: '/'+ sLang +'/services/services-mail',
                type: 'POST',
                data: {
                    Name: sName,
                    Surname: sSurname,
                    Email: sEmail,
                    Brand: sBrand,
                    Message: sMessage,
                    EntryTitle: sEntryTitle,
                    Newsletter: iNewsletter
                },
                success: function (data) {
                    if (data) {
                        $("body").css("cursor", "default");
                        $('#windowind_thankyou').popup('show');
                        $("body").css("cursor", "default");
                        $('input[name="name"]').val('');
                        $('input[name="surname"]').val('');
                        $('input[name="email"]').val('');
                        $('input[name="brand"]').val('');
                        $('textarea[name="message"]').val('');
                        $('.newsletter-check').removeClass('active');
                        setTimeout(function () {
                            $(".windowind_thankyou_close").trigger("click");
                        }, 3000);
                    }
                }
            });
        }

    };

    stickyHeader = function () {

        if ($(window).scrollTop() > 60) {
            $('header').addClass('frozen');
            $('header .top-second').css({
                top: '-53px',
                padding: '18px 0 0px 0'
            });
            $('.top-second .logo').css({
                top: '-18px',
                'background-size': '130px',
                'height':'53px'
            });
            $('header .top-second .mobile-menu .button').css({
                top: '-10px'
            });

        } else if ($(window).scrollTop() < 60) {
            $('header').removeClass('frozen');
            $('header .top-second').css({
                top: '0px',
                padding: '33px 0 23px 0'
            });
            $('.top-second .logo').css({
                top: '-90px',
                'background-size': '222px',
                 'height':'140px'
            });
            $('header .top-second .mobile-menu .button').css({
                top: '0'
            });
        }
    };

    showMobileMenu = function () {
        $('header .top-second .mobile-menu .button').click(function () {
            if ($('header .top-second .mobile-menu ul').is(':visible')) {
                $('header .top-second .mobile-menu ul').fadeOut(200);
            } else {
                $('header .top-second .mobile-menu ul').fadeIn(200);
            }
        });
    };


    iconScroll = function () {
        $(".specialize-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#specialize-anchor").offset().top
            }, 500);
        });
        $(".team-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#team-anchor").offset().top
            }, 500);
        });
        $(".country-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#country-anchor").offset().top
            }, 500);
        });
        $(".price-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#price-anchor").offset().top
            }, 500);
        });
        $(".newsletter-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#newsletter-anchor").offset().top
            }, 500);
        });
        $(".publication-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#publication-anchor").offset().top
            }, 500);
        });
        $(".partners-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#partners-anchor").offset().top
            }, 500);
        });
        $(".recomendation-anchor").click(function () {
            $('html, body').animate({
                scrollTop: $("#recomendation-anchor").offset().top
            }, 500);
        });
    };

    $(document).ready(function () {
        showOffer();
        // mainBg();
        // randomBg();

        mainMap();
        scrollToMap();

        $("#send-service").click(function () {
            sendServiceForm();
        });

        $(window).scroll(function () {
            stickyHeader();
            checkUpButton();
        });

        $(window).resize(function () {
        });

        checkUpButton();
        iconScroll();
        showMobileMenu();
        checkUpButton();
        goTo();
        closePanel();
        showLang();
        addToNewsletter();
    });


});
