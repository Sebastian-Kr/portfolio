$(document).ready(function () {
closeOverlay();
});

function validateEmail(sEmail) {
    var sMatch = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return sEmail.match(sMatch) ? true : false;
}

function sendNewsletterForm(oAnchor) {
    var $ = jQuery;
    var bErr = false;
    var $form = $('#newsletter_form');
    var formdata = $form.serialize();
    var sName = $('#newsletter_form input[name="newsletter_name"]');
    var sEmail = $('#newsletter_form input[name="newsletter_email"]');
    var sActionButton = $(oAnchor).attr('onclick');


    if (sName.val() === '') {
        sName.addClass('error');
        $('.error-data-name').css('display', 'block');
        $('.error-data-email').css('display', 'none');
        bErr = true;
    } else {
        sName.removeClass('error');
        $('.error-data-name').css('display', 'none');
    }

    if (sName.val() !== '') {
    
        if (sEmail.val() === '') {
            sEmail.addClass('error');
            $('.error-data-email').css('display', 'block');
            $('.error-data-name').css('display', 'none');
            bErr = true;
        } else if (!validateEmail(sEmail.val())) {
            sEmail.addClass('error');
            $('.error-data-email').css('display', 'block');
            $('.error-data-name').css('display', 'none');
            bErr = true;
        } else {
            sEmail.removeClass('error');
            $('.error-data-email').css('display', 'none');
        }
    }
    

    if (!bErr) {
        $("body").css("cursor", "progress");
        $(oAnchor).attr('onclick', '');
        $.post("/" + sLang + '/newsletter/newsletter', formdata, function (data) {
            data = $.parseJSON(data);
            if (data){
                if (data.monit == 1) {
                    $('#windowind_newsletter').popup('show');
                    
                } else if (data.monit == 2) {
                    $('.newsletter-box .msg .ok2').fadeIn();
                }
                sEmail.val('');
                setTimeout(function () {
                    $('.newsletter-box .msg .ok').fadeOut();
                    $('.newsletter-box .msg .ok2').fadeOut();
                    $( ".windowind_newsletter_close" ).trigger( "click" );
                }, 10000);
            } else {
                $('.newsletter-box .msg .err').fadeIn();
//                błąd zapisu sproboj ponownie pozniej
                setTimeout(function () {
                    $('.newsletter-box .msg .err').fadeOut();
                }, 10000);
            }
            $(oAnchor).attr('onclick', sActionButton);
            $("body").css("cursor", "default");
            clearForm();
        });
    }
}

function clearForm(){
     $('#newsletter_form input[name="newsletter_name"]').val('');
     $('#newsletter_form input[name="newsletter_email"]').val('');
}

function closeOverlay (){
$( "#start .button-main, #start .choose-container .entry" ).click(function() {
    $('#start').fadeOut();
    localStorage.setItem('overlay', '1');
});
}
