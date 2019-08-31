
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.residents-system-nav li').find('.' + x)) {
            var href = $('ul.residents-system-nav li').find('.' + x).attr('href'),
                    href = href.replace('Link', '');
            $previous = $('ul.residents-system-nav li').find('.' + x).closest('ul.nav-tabs').find('li.active');

            //show one particular menu
            $(href).parent().children().hide();
            $(href).fadeIn();

            $previous.removeClass('active');
            $('ul.residents-system-nav li').find('.' + x).parent().stop().addClass('active');
            if (href.indexOf("Lang") < 0) {
                location.href = href + 'Link';
            }
        }
    }
}

$(function () {

    selectTabByHash();

    $("#residentsSystemSearch").parent().parent().unbind().submit(function (e) {
        return false;
    });


    $("#residentsSystemSearch").keyup(function () {
        if ($(this).val() != "")
        {
            $("#table-sorting tbody>tr").hide();
            $("#table-sorting td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#table-sorting tbody>tr").show();
            $("#pager .last").click();
            $("#pager .first").click();
        }
    });


    var editMemberIcon = $('i.edit').parent(),
            deleteMemberIcon = $('i.delete').parent(),
            transferMemberIcon = $('i.transfer').parent();
    editres1 = $('i.delete2').parent();
    editres2 = $('i.add').parent();

    $(editres1).tooltip({
        title: 'Usuń'
    });
    $(editres2).tooltip({
        title: 'Dodaj plik'
    });
    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });
    $(transferMemberIcon).tooltip({
        title: 'Przekaż'
    });

    $('i.edit, i.delete, i.transfer, i.delete2, i.add').parent().hover(function () {
        $(this).children().stop().animate({
            opacity: 1
        }, 200);
    }, function () {
        $(this).children().stop().animate({
            opacity: .7
        }, 200);
    });

    $('#table-sorting a.newsStatus').editable({
        type: 'select',
        source: [{value: '0', text: 'nowe'}, {value: '1', text: 'przekazane/w toku'}, {value: '2', text: 'zakończone'}],
        name: 'residentsSystemStatus',
        url: '/cms/residents-system/ajax/setStatusSystem',
        title: 'Wybierz status',
        send: 'always',
        success: function (data) {
            if (data == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal);
                var color = '';
                switch (selectVal) {
                    case 1:
                        color = 'active';
                        break;
                    case 2:
                        color = 'cyan';
                        break;
                    default:
                        color = '';
                        break;
                }
                $(label).removeClass().addClass('label' + ' ' + color);
                showNotification("Zmieniono status zgłoszenia", "System komunikacji", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });


});

var uiSortFix = function (e, ui) {
    ui.children().each(function () {
        $(this).width($(this).width());
    });
    return ui;
};

function initTableSort() {

    var pagerOptions = {
        container: $(".pager"),
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        fixedHeight: false,
        removeRows: false,
        cssGoto: '.gotoPage'
    };

    $("#table-sorting").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'shortDate'},
            2: {sorter: 'text'},
            3: {sorter: 'text'},
            4: {sorter: 'shortDate'},
            5: {sorter: 'text'},
            6: {sorter: 'text'},
            7: {sorter: false, filter: false}
        },
        dateFormat: 'uk',
        sortList: [[4, 1]],
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



$(window).load(function () {
    initTableSort();
});

function transferSystem(oAnchor, id) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/residents-system/ajax/transferSystem",
        type: "POST",
        data: {
            'residents-system-id': id
        },
        success: function (data) {
            if (data == 1) {

                $("#news-list-item-" + id + ' .transfer').fadeOut("slow", function () {
                    $(this).remove();
                });
                var label = $("#news-list-item-" + id + ' .newsStatus');
                $(label).attr('data-value', 1);
                var color = 'active';
                $(label).parent().removeClass().addClass('label' + ' ' + color);
                $(label).editable('setValue', '1');
                $('#windows-ask-confirm').modal('hide');
                showNotification("Przekazano zgłoszenie do jednostki", "System komunikacji", "bottom-right");

            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
            $(oAnchor).attr('onclick', sActionButton);
        }
    });

}
function deleteNewsForm(oAnchor, id) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/residents-system/ajax/deleteResidentsSystem",
        type: "POST",
        data: {
            'residents-system-id': id
        },
        success: function (data) {
            if (data == 1) {
                $('#deleteNews input#news_id').val('');
                $('#deleteNews span#news_title').text('');
                $("#news-list-item-" + id).fadeOut("slow", function () {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto zgłoszenie", "System komunikacji", "bottom-right");
                if ($("#table-sorting tbody tr").length < 2) {
                    var tableBody = $("#table-sorting").parent();
                    $("#pager").fadeOut("slow");
                    $("#table-sorting").fadeOut("slow");
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

function deleteHisoty(oAnchor, id) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/residents-system/ajax/deleteHistory",
        type: "POST",
        data: {
            'residents-system-history-id': id
        },
        success: function (data) {
            if (data == 1) {
                location.reload();

            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
            $(oAnchor).attr('onclick', sActionButton);
        }
    });

}

function mapsInit($Lang, $Lat, $Lng) {
    var zoom = 2;
    var lat = '';
    var lng = '';
    if ($Lat != '' && $Lng != '') {
        zoom = 12;
        lat = $Lat;
        lng = $Lng;
    } else {
        zoom = 8;
        lat = '49.7839242';
        lng = '22.7644729';
    }
    $('#geolocation_' + $Lang).gmap({'center': +lat + ',' + lng, 'zoom': zoom}).bind('init', function (event, map) {
        $('#geolocation_' + $Lang).gmap('clear', 'markers');
        if ($Lat != '' && $Lng != '') {
            $('#geolocation_' + $Lang).gmap('addMarker', {'position': new google.maps.LatLng($Lat, $Lng)});
        }
    });
}

function addFiles(iId) {
    
    $('#fileupload').unbind('fileuploadstop');
    $('#fileupload').unbind('fileuploadsubmit');
    $('#fileupload').unbind('fileuploadadd');
    
    
    var fileName_files = "";
    $('#fileupload').bind('fileuploadadd', function (e, data) {
        $.each(data.files, function (index, file) {
            fileName_files = file.name;
        });
    });

    $('#fileupload').bind('fileuploadstop', function (e, data) {
        $('#progress').hide();
        $('#progress .bar').css('width', '0%');
        location.reload();
    });
    $('#fileupload').bind('fileuploadsubmit', function (e, data) {
        data.formData = {"id": iId,"file": fileName_files};
    });
    $("#fileupload").trigger('click');
}

function deleteFile(oAnchor, iId) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $('#windows-ask-confirm').modal('hide');
    console.log(iId);

    $.ajax({
        url: "/cms/residents-system/ajax/delete-file",
        type: "POST",
        data: {
            'files-id': iId
        },
        success: function (data) {

            $('#row-file-' + iId).fadeOut("slow", function () {
                $(this).remove();
            });
            showNotification("Plik został usunięty", "System komunikacji", "bottom-right");
        }
    });
}