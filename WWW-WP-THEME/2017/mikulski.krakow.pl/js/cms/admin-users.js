$(function() {
    
    var editMemberIcon = $('i.edit').parent(),
        passMemberIcon = $('i.pass').parent(),
        deleteMemberIcon = $('i.delete').parent();

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });
    
    $(passMemberIcon).tooltip({
        title: 'Zmiana hasła'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.edit, i.pass, i.delete').parent().hover(function() {
        $(this).children().stop().animate({
            opacity: 1
        }, 200);
    }, function() {
        $(this).children().stop().animate({
            opacity: .7
        }, 200);
    });

    $('#table-sorting a.adminStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'Aktywny'}, {value: '0', text: 'Zablokowany'}],
        name: 'adminStatus',
        url: '/cms/admin-users/ajax/setStatus',
        title: 'Wybierz status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono status administratora", "Administratorzy", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
    var setLabelWidth = function() {
                var parentWidth = $('.inlineSelect.inline .control-group').width();
                var childrenLength = $('.inlineSelect.inline label').length;

                $('.inlineSelect.inline label').css('width', ((parentWidth / childrenLength) - 12) + 'px');
            }

    setLabelWidth();

    $(window).resize(function() {
        setLabelWidth();
    });
    $('.inlineSelect :radio, .inlineSelect :checkbox').change(function() {
        $(this).parent().toggleClass("checked", this.checked);
    });
    
});


function changePassUsersWindow(id){
    $('#pass_form').parsley().reset();
    $('#pass_form input').val("");
    var sTitle = $("#admins-list-item-"+id).children("td.admins_title").text();    
    $('#changePassUser input#admins_id2').val(id);
    $('#changePassUser span#admins_title2').text(' '+sTitle);
    $("#pass_form").unbind().submit( function(e) { return false; });
}

function changePassUsersForm(oAnchor) { 
    var $ = jQuery;
    var id = $('#changePassUser input#admins_id2').val();
    var sActionButton = $(oAnchor).attr('onclick');
    $("#pass_form").unbind().submit( function(e) { return false; });
    if($('#pass_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $.ajax({
            url: "/cms/admin-users/ajax/changePassUsers",
            type: "POST",
            data: {
                'admin-id' : id,
                'admin-name' : 'changePassUsers',
                'admin-pass' : $('#changePassUser input#admin_pass').val()
            },
            success: function(data) {
                if(data == 1){                
                    $('#changePassUser input#admins_id2').val('');
                    $('#changePassUser span#admins_title2').text('');
                    $("#changePassUser").modal('hide');
                    showNotification("Pomyślnie zmieniono hasło", "Administratorzy", "bottom-right");
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

function deleteUsersWindow(id){
    var sTitle = $("#admins-list-item-"+id).children("td.admins_title").text();    
    $('#deleteUsers input#admins_id').val(id);
    $('#deleteUsers span#admins_title').text(' '+sTitle);
}

function deleteUsersForm(oAnchor) { 
    var $ = jQuery;
    var id = $('#deleteUsers input#admins_id').val();
    var sActionButton = $(oAnchor).attr('onclick');

    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/admin-users/ajax/deleteUsers",
        type: "POST",
        data: {
            'admin-id' : id,
            'admin-name' : 'deleteUsers'
        },
        success: function(data) {
            if(data == 1){                
                $('#deleteUsers input#admins_id').val('');
                $('#deleteUsers span#admins_title').text('');
                $("#admins-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $("#deleteUsers").modal('hide');
                showNotification("Usunięto administartora", "Administratorzy", "bottom-right");
            } else {
                 alert('Wystąpił nieoczekiwany błąd');
                 location.reload(); 
            }
            $(oAnchor).attr('onclick',sActionButton);
        }
    });
    
}