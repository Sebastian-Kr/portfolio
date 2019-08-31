
function selectTabByHash(){
    var x = window.location.hash;    
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        if($('ul.ebooks-nav li').find('.'+x)){
            $('ul.ebooks-nav li').find('.'+x).click();
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
      $("#ebooksSearch"+lang_code).keyup(function() {
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
        name: 'ebooksStatus',
        url: '/cms/ebooks/ajax/setStatus',
        title: 'Wybierz status',
        send:'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if(data.type == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność", "E-booki", "bottom-right");
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
    
        $('#table-sorting-'+lang_code+' a.newsTown').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'ebooksTown',
        url: '/cms/ebooks/ajax/setTown',
        title: 'Wybierz położenie',
        send:'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if(data.type == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono położenie", "E-booki", "bottom-right");
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
    initPhotoSort();
    initPhotoGallery();
    
    selectTabByHash();
    $('#addEbooksLangSelect').multiselect();
    $('#addEbooks form').parsley({
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
                var iId = ui.item.attr('id').replace('ebooks-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/ebooks/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'ebooks-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "E-booki", "bottom-right");
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

function deleteEbooksForm(oAnchor, id, lang_code) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/ebooks/ajax/deleteSite",
        type: "POST",
        data: {
            'ebooks-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#ebooks-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto e-book", "E-booki", "bottom-right");
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


function deleteSiteFile(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/ebooks/ajax/delete-file",
        type: "POST",
        data: {
            'ebooks-id' : iId
        },
        success: function(data) {
            $('#table-file-'+iId).fadeOut("slow", function() {
                 $(this).parent().append('<div class="container-fluid"><h4>Brak pliku</h4></div>');
                 $(this).remove(); 
                 refreshFileTab(iId);
            });
            showNotification("Plik e-book został usunięty", "E-booki", "bottom-right");            
        }
    });
}

function refreshFileTab(iId) {
    $.ajax({
        url: "/cms/ebooks/ajax/refresh-filetab",
        type: "POST",
        data: {
            'ebooks-id': iId
        },
        success: function(data) {
            if(data){
                $('#TabFile').html(data);
            } else {
                location.reload();
            }
        }
    });
}

//zdjecia
function refreshPhotoTab(iId) {
    $.ajax({
        url: "/cms/ebooks/ajax/refresh-phototab",
        type: "POST",
        data: {
            'ebooks-id': iId
        },
        success: function(data) {
            $('#TabPhotos').html(data);
            initPhotoSort();
            initPhotoGallery();
        }
    });
}

function deleteSitePhoto(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/ebooks/ajax/delete-site-photo",
        type: "POST",
        data: {
            'ebooks-photos-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "E-booki - zdjęcia", "bottom-right");
            if ($('#gallery_photos ul li').length <= 1) {
                refreshPhotoTab($('#site-id').val());
            }
        }
    });
}

function initPhotoGallery(){
    $('#gallery_photos a.single_image').colorbox({
        photo: true,
        opacity: .9,
        rel: 'group1',
        scalePhotos: true,
        scrolling: false,
        maxWidth: '100%',
        maxHeight: '100%'
    });
}

function initPhotoSort(){    
    if (parseInt($("#gallery_photos li").length) > 1) {
        $('#gallery_photos li').css('cursor', 'move');
        $("#gallery_photos").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                $('.imgMask').stop().animate({'opacity': '.0'}, 0)
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('gallery-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/ebooks/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'ebooks-photos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "E-booki - zdjęcia", "bottom-right");
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


function deleteSitePhotoMain(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/ebooks/ajax/delete-main-photo",
        type: "POST",
        data: {
            'ebooks-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-main-'+iId).fadeOut("slow", function() {
                $(this).remove();
                $(".imagesContainer.mainphoto").parent().append('<h4>Brak grafiki</h4>');
                $(".imagesContainer.mainphoto").remove();
            });
            showNotification("Grafika została usunięta", "E-booki - okładka", "bottom-right");            
        }
    });
}