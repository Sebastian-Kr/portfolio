
$(function () {
    $('.add_tooltip').tooltip();
});

function showNotification(title,header,position){   
        $.jGrowl(title, { header: header,position:position });   
        if(header == "Error"){
            $("#jGrowl").addClass("error");
        } else {
            $("#jGrowl").removeClass("error");
        }
}

function addWindowConfirm(sTitle, sContent, sFunction) {

    $('body').append($('<div />').attr('id', 'windows-ask-confirm').attr('class', 'modal hide fade')
            .append($('<div />').attr('class', 'modal-header')
            .append('<button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>')
            .append($('<h3 />').html(sTitle)))
            .append($('<div />').attr('class', 'modal-body')
            .append($('<span />').attr('class', 'text-center').html(sContent)))
            .append($('<div />').attr('class', 'modal-footer')
            .append($('<a />').attr({'class': 'btn btn-success','id': 'confirm-button','onclick': sFunction}).html('Tak'))
            .append($('<a />').attr({'class': 'btn btn-danger','href': '#','data-dismiss': 'modal'}).html('Nie')))
            );

    $('#windows-ask-confirm').modal('show').on('hidden', function() {
        setTimeout(function() {
            $('#windows-ask-confirm').remove();
        }, 200);
    });
}

function changesettingsUsersLoginForm(oAnchor) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#setting_users_login_form").unbind().submit( function(e) { return false; } );
    if($('#setting_users_login_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $.ajax({
            url: "/cms/admin/ajax/changeNameUsers",
            type: "POST",
            data: {
                'admin-type' : 'settingsUsersLogin',
                'admin-id' : $('#settingsUsersLogin input[name="adminlogged_id"]').val(),
                'admin-name' : $('#settingsUsersLogin input[name="adminlogged_name"]').val(),
                'admin-surname' : $('#settingsUsersLogin input[name="adminlogged_surname"]').val()
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Dane zapisano", "Dane użytkownika", "bottom-right");
                    $("#settingsUsersLogin").modal('hide');
                    setTimeout(function(){ location.reload(); }, 1500 ); 
                } else {
                     alert('Wystąpił nieoczekiwany błąd');
                     location.reload(); 
                }
                $(oAnchor).attr('onclick',sActionButton);
            }
        });
        return false;
    }
}

function changepassUsersLoginForm(oAnchor) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#pass_users_login_form").unbind().submit( function(e) { return false; } );
    if($('#pass_users_login_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $.ajax({
            url: "/cms/admin/ajax/changePassUsers",
            type: "POST",
            data: {
                'admin-type' : 'passUsersLogin',
                'admin-id' : $('#passUsersLogin input[name="adminlogged_id"]').val(),
                'admin-pass' : $('#passUsersLogin input[name="adminlogged_pass"]').val(),
                'admin-oldpass' : $('#passUsersLogin input[name="adminlogged_oldpass"]').val()
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Hasło zapisano poprawnie", "Dane użytkownika", "bottom-right");
                    $("#passUsersLogin").modal('hide');
                    $('#passUsersLogin input[name="adminlogged_pass2"]').val("");
                    $('#passUsersLogin input[name="adminlogged_pass"]').val("");
                    $('#passUsersLogin input[name="adminlogged_oldpass"]').val("");
                } else if(data == 2) {
                     showNotification("Podaj poprawne aktualne hasło!", "Error", "bottom-right");
                } else {
                     alert('Wystąpił nieoczekiwany błąd');
                     $('#passUsersLogin input[name="adminlogged_pass2"]').val("");
                     $('#passUsersLogin input[name="adminlogged_pass"]').val("");
                     $('#passUsersLogin input[name="adminlogged_oldpass"]').val("");
                     location.reload(); 
                }
                $(oAnchor).attr('onclick',sActionButton);
            }
        });
        return false;
    }
}