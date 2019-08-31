$(document).ready(function () {

    var firstLength = $('.first-slider .box').length;

    if($(window).width() > 1200 && firstLength > 4) {
        $('.prev, .next').css('display','block');
    } else if ($(window).width() < 1200 && firstLength > 2){
        $('.prev, .next').css('display','block');
    } else if ($(window).width() < 820 && firstLength > 1){
        $('.prev, .next').css('display','block');
    } else {
        $('.prev, .next').css('display','none');
    }

    $(window).resize(function() {
        if($(window).width() > 1200 && firstLength > 4) {
            $('.prev, .next').css('display','block');
        } else if ($(window).width() < 1200 && firstLength > 2){
            $('.prev, .next').css('display','block');
        } else if ($(window).width() < 820 && firstLength > 1){
            $('.prev, .next').css('display','block');
        } else {
            $('.prev, .next').css('display','none');
        }
    });

    var secondLength = $('.second-slider .box').length;
    if($(window).width() > 1200 && secondLength > 4) {
        $('.second-prev, .second-next').css('display','block');
    } else if ($(window).width() < 1200 && secondLength > 2){
        $('.second-prev, .second-next').css('display','block');
    } else if ($(window).width() < 820 && secondLength > 1){
        $('.second-prev, .second-next').css('display','block');
    } else {
        $('.second-prev, .second-next').css('display','none');
    }

    $(window).resize(function() {
        if($(window).width() > 1200 && secondLength > 4) {
            $('.second-prev, .second-next').css('display','block');
        } else if ($(window).width() < 1200 && secondLength > 2){
            $('.second-prev, .second-next').css('display','block');
        } else if ($(window).width() < 820 && secondLength > 1){
            $('.second-prev, .second-next').css('display','block');
        } else {
            $('.second-prev, .second-next').css('display','none');
        }
    });


    var thirdLength = $('.third-slider .box').length;
    if($(window).width() > 1200 && thirdLength > 4) {
        $('.third-prev, .third-next').css('display','block');
    } else if ($(window).width() < 1200 && thirdLength > 2){
        $('.third-prev, .third-next').css('display','block');
    } else if ($(window).width() < 820 && thirdLength > 1){
        $('.third-prev, .third-next').css('display','block');
    } else {
        $('.third-prev, .third-next').css('display','none');
    }

    $(window).resize(function() {
        if($(window).width() > 1200 && thirdLength > 4) {
            $('.third-prev, .third-next').css('display','block');
        } else if ($(window).width() < 1200 && thirdLength > 2){
            $('.third-prev, .third-next').css('display','block');
        } else if ($(window).width() < 820 && thirdLength > 1){
            $('.third-prev, .third-next').css('display','block');
        } else {
            $('.third-prev, .third-next').css('display','none');
        }
    });

    var fourthLength = $('.fourth-slider .box').length;
    if($(window).width() > 1200 && fourthLength > 4) {
        $('.fourth-prev, .fourth-next').css('display','block');
    } else if ($(window).width() < 1200 && fourthLength > 2){
        $('.fourth-prev, .fourth-next').css('display','block');
    } else if ($(window).width() < 820 && fourthLength > 1){
        $('.fourth-prev, .fourth-next').css('display','block');
    } else {
        $('.fourth-prev, .fourth-next').css('display','none');
    }

    $(window).resize(function() {
        if($(window).width() > 1200 && fourthLength > 4) {
            $('.fourth-prev, .fourth-next').css('display','block');
        } else if ($(window).width() < 1200 && fourthLength > 2){
            $('.fourth-prev, .fourth-next').css('display','block');
        } else if ($(window).width() < 820 && fourthLength > 1){
            $('.fourth-prev, .fourth-next').css('display','block');
        } else {
            $('.fourth-prev, .fourth-next').css('display','none');
        }
    });


});
