
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');

        var sTabs = x.split("_");
        var sTabLang = "";
        var iSection = "";

        if (sTabs.length == 2) {
            x = sTabs[0];
            iSection = x.replace('TabBanner', '');
            sTabLang = "TabBannerLangs" + iSection + sTabs[1];
        }

        if ($('ul.banner-nav li').find('.' + x)) {
            $('ul.banner-nav li').find('.' + x).click();
        }

        if (sTabLang != "" && $('ul.banner-nav-lang li').find('.' + sTabLang)) {
            $('ul.banner-nav-lang li').find('.' + sTabLang).click();
        }

    }
}

var transitionEffect = [];

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
    $("#bannerSearch" + lang_code).parent().parent().unbind().submit(function(e) {
        return false;
    });

    $("#bannerSearch" + lang_code).keyup(function() {
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
        name: 'bannersStatus',
        url: '/cms/banners/ajax/setStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność baneru", "Banery", "bottom-right");
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                setTimeout(function() {
                    alert(data.msg);
                    location.reload();
                }, 600);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });

    $('#table-sorting-' + lang_code + ' a.transitionEffect').editable({
        type: 'select',
        source: transitionEffect,
        name: 'bannersEffect',
        url: '/cms/banners/ajax/setEffect',
        title: 'Wybierz efekt',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            console.log(data);
            if (data.type == 1) {
                showNotification("Zmieniono efekt przejścia zdjęć baneru", "Banery", "bottom-right");
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                setTimeout(function() {
                    alert(data.msg);
                    location.reload();
                }, 600);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
}


function initLangTableGrid(lang_code) {
    initTableSort(lang_code);
    tableGridSearch(lang_code);
    tableGridEdit(lang_code);
}

$(function() {

    selectTabByHash();

    $('#addBannerLangSelect').multiselect();
    $('#addBannerSectionSelect').multiselect();
    $('#addBanner form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });

    var editMemberIcon = $('i.edit').parent(),
            deleteMemberIcon = $('i.delete').parent(),
            titleMemberIcon = $('i.info').parent();

    $(titleMemberIcon).tooltip({
        title: 'Edycja baneru'
    });

    $(editMemberIcon).tooltip({
        title: 'Edycja zdjęć'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.info, i.edit, i.delete').parent().hover(function() {
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

function initPhotoSort() {
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
                        url: "/cms/banners/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'banners-photos-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Banery - zdjęcia", "bottom-right");
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
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('banner-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/banners/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'banners-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Banery", "bottom-right");
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

$(window).load(function() {
    initPhotoSort();

});

function deleteBannerForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/banners/ajax/deleteSite",
        type: "POST",
        data: {
            'banners-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#banner-list-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto baner", "Banery", "bottom-right");
                if ($("#table-sorting-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sorting-" + lang_code + "").parent();
                    $("#table-sorting-" + lang_code + "").fadeOut("slow");
                    setTimeout(function() {
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
        url: "/cms/banners/ajax/refresh-phototab",
        type: "POST",
        data: {
            'banners-id': iId
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
        url: "/cms/banners/ajax/delete-site-photo",
        type: "POST",
        data: {
            'banners-photos-id': iId
        },
        success: function(data) {
            $('#gallery-list-item-' + iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "Banery - zdjęcia", "bottom-right");
            if ($('#gallery_photos ul li').length <= 1) {
                refreshPhotoTab($('#site-id').val());
            }
        }
    });
}

function labelFormatter(label, series) {
    return "<div style='font-size:10px; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}

function openStatysticPhotoWindow(id) {
    var iCount = parseInt($('#statystic_count_' + id).val());
    var iAllCount = parseInt($('#statystic_all_count').val());
    iAllCount = iAllCount - iCount;
    $('#showPhotoStatystic .click_count').text(iCount);
    $('#showPhotoStatystic .statystic_chart').hide();
    $('#showPhotoStatystic').modal('show');
    if (iCount > 0 || iAllCount > 0) {
        $('#showPhotoStatystic .statystic_chart').show();
        var dataPie = [];
        dataPie[0] = {
            label: "Zdjęcie",
            data: iCount
        };
        dataPie[1] = {
            label: "Pozostale",
            data: iAllCount
        };
        setTimeout(function(){
        $.plot('#photoChart', dataPie, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            legend: {
                show: false
            }
        });
        },600);
    }

    $('#showPhotoStatystic').modal('show').on('hidden', function() {
        $('#showPhotoStatystic .click_count').text("");
        $('#showPhotoStatystic #photoChart').text("");
        $('#showPhotoStatystic .statystic_chart').hide();
    });
}

function openEditTitlePhotoWindow(id) {
    $('#editTitlePhoto input[name="photo_edit_id"]').val(id);
    var title = $('#edit_title_photo_' + id).val();
    var subtitle = $('#edit_subtitle_photo_' + id).val();
    var desc = $('#edit_description_photo_' + id).val();
    var url = $('#edit_url_photo_' + id).val();
    $('#editTitlePhoto input[name="photo_edit_title"]').val(title);
    $('#editTitlePhoto input[name="photo_edit_subtitle"]').val(subtitle);
    $('#editTitlePhoto input[name="photo_edit_description"]').val(desc);
    $('#editTitlePhoto input[name="photo_edit_url"]').val(url);
    $('#editTitlePhoto').modal('show').on('hidden', function() {
        $('#editTitlePhoto input[name="photo_edit_id"]').val("");
        $('#editTitlePhoto input[name="photo_edit_title"]').val("");
        $('#editTitlePhoto input[name="photo_edit_subtitle"]').val("");
        $('#editTitlePhoto input[name="photo_edit_description"]').val("");
        $('#editTitlePhoto input[name="photo_edit_url"]').val("");
    });
}

function saveEditTitlePhotoWindow(oAnchor) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitlePhoto form").unbind().submit(function(e) {
        return false;
    });
    if ($('#editTitlePhoto form').parsley().isValid()) {
        $(oAnchor).attr('onclick', '');
        var photo_id = $('#editTitlePhoto form input[name="photo_edit_id"]').val();
        var photo_title = $('#editTitlePhoto form input[name="photo_edit_title"]').val();
        var photo_subtitle = $('#editTitlePhoto form input[name="photo_edit_subtitle"]').val();
        var photo_desc = $('#editTitlePhoto form input[name="photo_edit_description"]').val();
        var photo_url = $('#editTitlePhoto form input[name="photo_edit_url"]').val();
        $.ajax({
            url: "/cms/banners/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type': 'changePhotoTitle',
                'photo-id': photo_id,
                'photo-title': photo_title,
                'photo-subtitle': photo_subtitle,
                'photo-desc': photo_desc,
                'photo-url': photo_url
            },
            success: function(data) {
                if (data == 1) {
                    showNotification("Tytuł zdjęcia zapisano", "Banery - zdjęcia", "bottom-right");
                    $("#editTitlePhoto").modal('hide');
                    $('#edit_title_photo_' + photo_id).val(photo_title);
                    $('#edit_subtitle_photo_' + photo_id).val(photo_subtitle);
                    $('#edit_description_photo_' + photo_id).val(photo_desc);
                    $('#edit_url_photo_' + photo_id).val(photo_url);
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