
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.blog-nav li').find('.' + x)) {
            $('ul.blog-nav li').find('.' + x).click();
        }
    }
}

function initNewsSortColumn() {

    var pagerOptions = {
        container: $(".pager"),
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        fixedHeight: false,
        removeRows: false,
        cssGoto: '.gotoPage'
    };

    $("#table-with-sorting").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: true, filter: true},
            4: {sorter: false, filter: false}
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

    }).tablesorterPager(pagerOptions);
    $('.pagesize').multiselect();

}

$(function () {

    selectTabByHash();

    initNewsSortColumn();

    $("#blogSearch").keyup(function () {
        if ($(this).val() != "")
        {
            $("#table-with-sorting tbody>tr").hide();
            $("#table-with-sorting td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#table-with-sorting tbody>tr").show();
            $("#pager .last").click();
            $("#pager .first").click();
        }
    });


    var editMemberIcon = $('i.edit').parent();

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });


    $('i.edit').parent().hover(function () {
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
                        url: "/cms/news-slider/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'blog-photos-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Aktualności - slider", "bottom-right");
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
    $('#gallery_photos a').colorbox({
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

function refreshPhotoTab(iId) {
    $.ajax({
        url: "/cms/news-slider/ajax/refresh-phototab",
        type: "POST",
        data: {
            'blog-id': iId
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
        url: "/cms/news-slider/ajax/delete-site-photo",
        type: "POST",
        data: {
            'blog-photos-id': iId
        },
        success: function (data) {
            $('#gallery-list-item-' + iId).fadeOut("slow", function () {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "Aktualności - slider", "bottom-right");
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
            url: "/cms/news-slider/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type': 'changePhotoTitle',
                'photo-id': photo_id,
                'photo-title': photo_title
            },
            success: function (data) {
                if (data == 1) {
                    showNotification("Tytuł slidera zapisano", "Aktualności - slider", "bottom-right");
                    $("#editTitlePhoto").modal('hide');
                    $('#edit_title_photo_' + photo_id).val(photo_title);
                    //zmiana akcji na edycje
                    //$("#image_id_"+photo_id).find(".icon-pencil").attr("onclick","openEditTitlePhotoWindow("+photo_id+",'"+photo_title+"');");

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

