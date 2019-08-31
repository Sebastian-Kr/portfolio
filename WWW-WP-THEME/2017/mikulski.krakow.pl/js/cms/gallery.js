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
        url: '/cms/gallery/ajax/setStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function (data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność galerii", "Galeria", "bottom-right");
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

    $('#table-sorting-' + lang_code + ' a.banerType').editable({
        type: 'select',
        source: aGalleryType,
        name: 'galleryType',
        url: '/cms/gallery/ajax/setType',
        title: 'Wybierz typ',
        send: 'always',
        success: function (data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                showNotification("Zmieniono typ galerii", "Galeria", "bottom-right");
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

    $('#addBannerSectionSelect').multiselect();
    $('#addBannerLangSelect').multiselect();
    $('#categoryGallery').multiselect();
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

function initPhotoSort() {
    if (parseInt($("#gallery_photos li").length) > 1) {
        $('#gallery_photos li').css('cursor', 'move');
        $("#gallery_photos").sortable({
            helper: uiSortFix,
            start: function (event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function (event, ui) {
                $('.imgMask').stop().animate({'opacity': '.0'}, 0)
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('gallery-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/gallery/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'gallery-photos-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Galeria", "bottom-right");
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
                        url: "/cms/gallery/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'gallery-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Galeria", "bottom-right");
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

function initPhotoGallery() {
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

$(window).load(function () {
    initPhotoSort();

});

function deleteBannerForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/gallery/ajax/deleteSite",
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
                showNotification("Usunięto galerię", "Galeria", "bottom-right");
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

function initTableComments(){

    $("#table-with-sorting-comments").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: true, filter: true},
            4: {sorter: true, filter: true},
            6: {sorter: false, filter: false}
        },
        dateFormat: 'uk',
        sortList: [[2, 1]],
        widthFixed: true,
        widgets: ["zebra", "filter"],
        widgetOptions: {
            filter_childRows: false,
            filter_columnFilters: false,
            filter_cssFilter: 'tablesorter-filter',
            filter_functions: null,
            filter_hideFilters: true,
            filter_ignoreCase: true,
            filter_searchDelay: 300,
            filter_startsWith: false,
            filter_useParsedData: false
        }

    })
    
    $("#galleryCommentsSearch").keyup(function() {
        if ($(this).val() != "")
        {
            $("#table-with-sorting-comments tbody>tr").hide();
            $("#table-with-sorting-comments td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#table-with-sorting-comments tbody>tr").show();
        }
    });
    
    $('#table-with-sorting-comments a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'aktywny'}, {value: '0', text: 'do moderacji'}],
        name: 'galleryStatusComments',
        url: '/cms/gallery/ajax/setStatusComments',
        title: 'Zmień status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność komentarza", "Galerie - komentarze", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
}

function deleteCommentsForm(oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/gallery/ajax/deleteSiteComments",
        type: "POST",
        data: {
            'gallery-comments-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#comments-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto komentarz", "Galerie - komentarze", "bottom-right");
                if($("#table-with-sorting-comments tbody tr").length < 2){
                    var tableBody = $("#table-with-sorting-comments").parent();
                    $("#table-with-sorting-comments").fadeOut("slow");
                   
                    setTimeout(function(){
                        tableBody.append('<p class="no_margin">BRAK KOMENTARZY</p>');
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

function initTableRating(){

    $("#table-with-sorting-rating").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: true, filter: true},
            6: {sorter: false, filter: false}
        },
        dateFormat: 'uk',
        sortList: [[2, 1]],
        widthFixed: true,
        widgets: ["zebra", "filter"],
        widgetOptions: {
            filter_childRows: false,
            filter_columnFilters: false,
            filter_cssFilter: 'tablesorter-filter',
            filter_functions: null,
            filter_hideFilters: true,
            filter_ignoreCase: true,
            filter_searchDelay: 300,
            filter_startsWith: false,
            filter_useParsedData: false
        }

    })
    
    $("#galleryRatingSearch").keyup(function() {
        if ($(this).val() != "")
        {
            $("#table-with-sorting-rating tbody>tr").hide();
            $("#table-with-sorting-rating td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#table-with-sorting-rating tbody>tr").show();
        }
    });
    
    $('#table-with-sorting-rating a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'aktywna'}, {value: '0', text: 'nieaktywna'}],
        name: 'galleryStatusRating',
        url: '/cms/gallery/ajax/setStatusRating',
        title: 'Zmień status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność oceny", "Galerie - oceny", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
}

function deleteRatingForm (oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/gallery/ajax/deleteSiteRating",
        type: "POST",
        data: {
            'gallery-rating-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#rating-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto ocenę", "Galerie - oceny", "bottom-right");
                if($("#table-with-sorting-rating tbody tr").length < 2){
                    var tableBody = $("#table-with-sorting-rating").parent();
                    $("#table-with-sorting-rating").fadeOut("slow");
                   
                    setTimeout(function(){
                        tableBody.append('<p class="no_margin">BRAK OCEN</p>');
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