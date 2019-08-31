$(function() {
    
    var editMemberIcon = $('i.edit').parent(),
        deleteMemberIcon = $('i.delete').parent();

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });
    
    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.edit, i.delete').parent().hover(function() {
        $(this).children().stop().animate({
            opacity: 1
        }, 200);
    }, function() {
        $(this).children().stop().animate({
            opacity: .7
        }, 200);
    });

    $('#table-sorting a.languageStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'Aktywny'}, {value: '0', text: 'Wyłączony'}],
        name: 'languageStatus',
        url: '/cms/languages/ajax/setStatus',
        title: 'Wybierz status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono status języka", "Języki", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
});


function deleteLangWindow(id){
    var sTitle = $("#languages-list-item-"+id).children("td.languages_title").text();    
    $('#deleteLanguages input#languages_id').val(id);
    $('#deleteLanguages span#languages_title').text(' '+sTitle);
}

function deleteLanguagesForm(oAnchor) { 
    var $ = jQuery;
    var id = $('#deleteLanguages input#languages_id').val();
    var sActionButton = $(oAnchor).attr('onclick');

    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/languages/ajax/deleteLanguages",
        type: "POST",
        data: {
            'languages-id' : id,
            'languages-name' : 'deleteLanguages'
        },
        success: function(data) {
            if(data == 1){                
                $('#deleteLanguages input#languages_id').val('');
                $('#deleteLanguages span#languages_title').text('');
                $("#languages-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $("#deleteLanguages").modal('hide');
                showNotification("Usunięto język", "Języki", "bottom-right");
            } else {
                 alert('Wystąpił nieoczekiwany błąd');
                 location.reload(); 
            }
            $(oAnchor).attr('onclick',sActionButton);
        }
    });
    
}

$(window).load(function() {

    var uiSortFix = function(e, ui) {
        ui.children().each(function() {
            $(this).width($(this).width());
        });
        return ui;
    };

    if (parseInt($("#table-sorting tbody tr").length) > 1) {
        $('#table-sorting tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('languages-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/languages/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'languages-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Języki", "bottom-right");
                            } else {
                                 alert('Wystąpił nieoczekiwany błąd');
                                 location.reload(); 
                            }
                        }
                    });
                }
            }
        }).disableSelection();    
    }
    
    
});