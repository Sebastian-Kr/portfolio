function validateEmail(sEmail) {
    var sMatch = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return sEmail.match(sMatch) ? true : false;
}

function sendContactForm() {

    var $ = jQuery;
    var bErr = false;
    var $form = $('#contact-form');
    var formdata = $form.serialize();

    var sName = $('input[name="name"]').val();
    var sEmail = $('input[name="email"]').val();
    var sPhone = $('input[name="phone"]').val();
    var sMessage = $('textarea[name="message"]').val();
    var iNewsletter = 0;

    var bErr = false;

    if (sName === '') {
        bErr = true;
        $("input[name='name']").addClass('has-error');
    } else {
        $("input[name='name']").removeClass('has-error');
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

    if (sPhone === '') {
        bErr = true;
        $("input[name='phone']").addClass('has-error');
    } else {
        $("input[name='phone']").removeClass('has-error');
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
            url: '/' + sLang + '/contact/mail',
            type: 'POST',
            data: {
                Name: sName,
                Email: sEmail,
                Phone: sPhone,
                Message: sMessage,
                Newsletter: iNewsletter
            },
            success: function (data) {
                if (data) {
                    $("body").css("cursor", "default");
                    $('#windowind_contact').popup('show');
                    $("body").css("cursor", "default");
                    $('input[name="name"]').val('');
                    $('input[name="email"]').val('');
                    $('input[name="phone"]').val('');
                    $('textarea[name="message"]').val('');
                    $('.newsletter-check').removeClass('active');
                    setTimeout(function () {
                        $(".windowind_contact_close").trigger("click");
                    }, 6000);
                }
            }
        });
    }
}