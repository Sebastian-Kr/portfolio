
function selectTabByHash(){
    var x = window.location.hash;    
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        if($('ul.communicates-nav li').find('.'+x)){
            $('ul.communicates-nav li').find('.'+x).click();
        }
    }
}

function sortableEnable(lang_code) {
        if (parseInt($("#table-sorting-"+lang_code+" tbody tr").length) > 1) {
            $("#table-sorting-"+lang_code+" tbody").sortable();
            $("#table-sorting-"+lang_code+" tbody").sortable( "option", "disabled", false );
            $("#table-sorting-"+lang_code+" tbody").disableSelection();
            $("#table-sorting-"+lang_code+" tbody tr").css('cursor', 'ns-resize');
        }
        return false;
    }
    
function sortableDisable(lang_code) {
    if (parseInt($("#table-sorting-"+lang_code+" tbody tr").length) > 1) {
        $("#table-sorting-"+lang_code+" tbody").sortable("disable");
        $("#table-sorting-"+lang_code+" tbody tr").css('cursor', 'default');
    }
    return false;
}

function tableGridSearch(lang_code){
      $("#communicatesSearch"+lang_code).keyup(function() {
        if ($(this).val() != "")
        {
            sortableDisable(lang_code);
            $("#table-sorting-"+lang_code+" tbody>tr").hide();
            $("#table-sorting-"+lang_code+" td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableEnable(lang_code);
            $("#table-sorting-"+lang_code+" tbody>tr").show();
        }
    });
}

function tableGridEdit(lang_code){    
    $('#table-sorting-'+lang_code+' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'communicatesStatus',
        url: '/cms/communicates/ajax/setStatus',
        title: 'Wybierz status',
        send:'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if(data.type == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność", "Zespół", "bottom-right");
            } else if(data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");  
                alert(data.msg);
                setTimeout(function(){location.reload();},500);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
}


function initLangTableGrid(lang_code){
    initTableSort(lang_code);    
    tableGridSearch(lang_code);
    tableGridEdit(lang_code);
}

$(function() {   
    
    selectTabByHash();
    $('#addCommunicatesLangSelect').multiselect();
    $('#addCommunicates form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });
    
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

});

var uiSortFix = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};

function initTableSort(lang_code){    
    if (parseInt($("#table-sorting-"+lang_code+" tbody tr").length) > 1) {
        $('#table-sorting-'+lang_code+' tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting-"+lang_code+" tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('communicates-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/communicates/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'communicates-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Zespół", "bottom-right");
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
}

function deleteCommunicatesForm(oAnchor, id, lang_code) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/communicates/ajax/deleteSite",
        type: "POST",
        data: {
            'communicates-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#communicates-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto osobę", "Zespół", "bottom-right");
                if($("#table-sorting-"+lang_code+" tbody tr").length < 2){
                    var tableBody = $("#table-sorting-"+lang_code+"").parent();
                    $("#table-sorting-"+lang_code+"").fadeOut("slow");
                    setTimeout(function(){
                        tableBody.append('<p class="no_margin">BRAK DANYCH</p>');
                    },600);
                }
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload(); 
            }
            $(oAnchor).attr('onclick',sActionButton);
        }
    });
    
}


function deleteSitePhoto(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/communicates/ajax/delete-avatar",
        type: "POST",
        data: {
            'communicates-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
                $(".imagesContainer").parent().append('<h4>Brak zdjęcia</h4>');
                $(".imagesContainer").remove();
            });
            showNotification("Zdjęcie zostało usunięte", "Zespół", "bottom-right");            
        }
    });
}