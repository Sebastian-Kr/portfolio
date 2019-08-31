var aGalleryType = [];
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.gall-nav li').find('.' + x)) {
            $('ul.gall-nav li').find('.' + x).click();
        }
    }
}

function sortableEnable(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sorting-" + lang_code + " tbody").sortable();
        $("#table-sorting-" + lang_code + " tbody").sortable("option", "disabled", false);
        $("#table-sorting-" + lang_code + " tbody").disableSelection();
        $("#table-sorting-" + lang_code + " tbody tr").css('cursor', 'ns-resize');
    }
    return false;
}

function sortableDisable(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sorting-" + lang_code + " tbody").sortable("disable");
        $("#table-sorting-" + lang_code + " tbody tr").css('cursor', 'default');
    }
    return false;
}

function tableGridSearch(lang_code) {
    $("#gallSearch" + lang_code).parent().parent().unbind().submit(function (e) {
        return false;
    });

    $("#gallSearch" + lang_code).keyup(function () {
        if ($(this).val() != "")
        {
            sortableDisable(lang_code);
            $("#table-sorting-" + lang_code + " tbody>tr").hide();
            $("#table-sorting-" + lang_code + " td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableEnable(lang_code);
            $("#table-sorting-" + lang_code + " tbody>tr").show();
        }
    });
}

function tableGridEdit(lang_code) {
    $('#table-sorting-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'galleryStatus',
        url: '/cms/gallery/ajax/setStatusCategories',
        title: 'Wybierz status',
        send: 'always',
        success: function (data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność kategorii", "Galeria - kategorie", "bottom-right");
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                alert(data.msg);
                location.reload();
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });

    $('#table-sorting-' + lang_code + ' a.categoryComments').editable({
        type: 'select',
        source: [{value: '1', text: 'włączona'}, {value: '0', text: 'wyłączona'}],
        name: 'galleryType',
        url: '/cms/gallery/ajax/setCanComments',
        title: 'Wybierz możliwość komentowania',
        send: 'always',
        success: function (data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'label-info' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono możliwość komentowania", "Galeria - kategorie", "bottom-right");
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                alert(data.msg);
                location.reload();
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });

}


function initLangTableGrid(lang_code) {
    initTableSort(lang_code);
    tableGridSearch(lang_code);
    tableGridEdit(lang_code);
}

$(function () {

    selectTabByHash();

    $('#addBannerLangSelect').multiselect();
    $('#addBanner form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });

    var editMemberIcon = $('i.edit').parent(),
            deleteMemberIcon = $('i.delete').parent(),
            titleMemberIcon = $('i.info').parent();

    $(titleMemberIcon).tooltip({
        title: 'Zmiana nazwy'
    });

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.info, i.edit, i.delete').parent().hover(function () {
        $(this).children().stop().animate({
            opacity: 1
        }, 200);
    }, function () {
        $(this).children().stop().animate({
            opacity: .7
        }, 200);
    });

});

var uiSortFix = function (e, ui) {
    ui.children().each(function () {
        $(this).width($(this).width());
    });
    return ui;
};


function initTableSort(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $('#table-sorting-' + lang_code + ' tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting-" + lang_code + " tbody").sortable({
            helper: uiSortFix,
            start: function (event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function (event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('gall-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/gallery/ajax/setNewOrderCategory",
                        type: "POST",
                        data: {
                            'gallery-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Galeria - kategorie", "bottom-right");
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

function deleteCateogory(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/gallery/ajax/deleteCateogory",
        type: "POST",
        data: {
            'gallery-id': id
        },
        success: function (data) {
            if (data == 1) {
                $("#gall-list-item-" + id).fadeOut("slow", function () {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto kategorię", "Galeria - kategorie", "bottom-right");
                if ($("#table-sorting-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sorting-" + lang_code + "").parent();
                    $("#table-sorting-" + lang_code + "").fadeOut("slow");
                    setTimeout(function () {
                        tableBody.append('<p class="no_margin">BRAK DANYCH</p>');
                    }, 600);
                }
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
            $(oAnchor).attr('onclick', sActionButton);
        }
    });

}


function refreshPhotoTab(iId) {
    $.ajax({
        url: "/cms/gallery/ajax/refresh-phototab",
        type: "POST",
        data: {
            'gallery-id': iId
        },
        success: function (data) {
            $('#TabPhotos').html(data);
            initPhotoSort();
            initPhotoGallery();
        }
    });
}


function deleteSitePhoto(iId) {
    $('#windows-ask-confirm').modal('hide');
    $.ajax({
        url: "/cms/gallery/ajax/delete-site-photo",
        type: "POST",
        data: {
            'gallery-photos-id': iId
        },
        success: function (data) {
            $('#gallery-list-item-' + iId).fadeOut("slow", function () {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Pozycja została usunięta", "Galeria", "bottom-right");
            if ($('#gallery_photos ul li').length <= 1) {
                refreshPhotoTab($('#site-id').val());
            }
        }
    });
}

function openEditTitlePhotoWindow(id) {
    $('#editTitlePhoto input[name="photo_edit_id"]').val(id);
    var title = $('#edit_title_photo_' + id).val();
    $('#editTitlePhoto input[name="photo_edit_title"]').val(title);
    $('#editTitlePhoto').modal('show').on('hidden', function () {
        $('#editTitlePhoto input[name="photo_edit_id"]').val("");
        $('#editTitlePhoto input[name="photo_edit_title"]').val("");
    });
}

function saveEditTitlePhotoWindow(oAnchor) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitlePhoto form").unbind().submit(function (e) {
        return false;
    });
    if ($('#editTitlePhoto form').parsley().isValid()) {
        $(oAnchor).attr('onclick', '');
        var photo_id = $('#editTitlePhoto form input[name="photo_edit_id"]').val();
        var photo_title = $('#editTitlePhoto form input[name="photo_edit_title"]').val();
        $.ajax({
            url: "/cms/gallery/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type': 'changePhotoTitle',
                'photo-id': photo_id,
                'photo-title': photo_title
            },
            success: function (data) {
                if (data == 1) {
                    showNotification("Tytuł zapisano", "Galeria", "bottom-right");
                    $("#editTitlePhoto").modal('hide');
                    $('#edit_title_photo_' + photo_id).val(photo_title);
                } else {
                    alert('Wystąpił nieoczekiwany błąd');
                    location.reload();
                }
                $(oAnchor).attr('onclick', sActionButton);
            }
        });
        return false;
    }
}

function addNewVideo(oAnchor, iId){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#add_new_video_form").unbind().submit( function(e) { return false; } );
    if($('#add_new_video_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $(oAnchor).parent().find(".loading_box").show();
        var video_url = $('#add_new_video_form input[name="video_url"]').val();
        $.ajax({
            url: "/cms/gallery/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'gallery-id' : iId,
                'video-url' : video_url,
                'type':'1'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Galeria", "bottom-right");
                    refreshPhotoTab(iId);
                } else if(data.type == 0) {
                    showNotification(data.msg, "Error", "bottom-right");  
                } else {
                     alert('Wystąpił nieoczekiwany błąd');
                     location.reload(); 
                }
                $(oAnchor).parent().find(".loading_box").hide();
                $(oAnchor).attr('onclick',sActionButton);
            }
        });
        return false;
    }

}
function addNewMp4(oAnchor, iId){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#add_new_mp4_form").unbind().submit( function(e) { return false; } );
    if($('#add_new_mp4_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $(oAnchor).parent().find(".loading_box").show();
        var video_url = $('#add_new_mp4_form input[name="mp4_url"]').val();
        $.ajax({
            url: "/cms/gallery/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'gallery-id' : iId,
                'video-url' : video_url,
                'type':'2'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Galeria", "bottom-right");
                    refreshPhotoTab(iId);
                } else if(data.type == 0) {
                    showNotification(data.msg, "Error", "bottom-right");  
                } else {
                     alert('Wystąpił nieoczekiwany błąd');
                     location.reload(); 
                }
                $(oAnchor).parent().find(".loading_box").hide();
                $(oAnchor).attr('onclick',sActionButton);
            }
        });
        return false;
    }

}