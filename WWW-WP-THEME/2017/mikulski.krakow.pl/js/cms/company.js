
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.company-nav li').find('.' + x)) {
            var href = $('ul.company-nav li').find('.' + x).attr('href'),
                    href = href.replace('Link', '');
            $previous = $('ul.company-nav li').find('.' + x).closest('ul.nav-tabs').find('li.active');

            //show one particular menu
            $(href).parent().children().hide();
            $(href).fadeIn();

            $previous.removeClass('active');
            $('ul.company-nav li').find('.' + x).parent().stop().addClass('active');
            if (href.indexOf("Lang") < 0) {
                location.href = href + 'Link';
            }

            if (x === "TabLocalization") {
                var $Lat = $("input[name$='latitude']").val();
                var $Lng = $("input[name$='longitude']").val();
                mapsInit($Lat, $Lng);
            }
        }
    }
}
var MapIsInit = 0;
$(function () {

    selectTabByHash();
    $('.container-fluid ul.company-nav li a').click(function () {
        if ($(this).attr('class') == "TabLocalization") {
            var $Lat = $("input[name$='latitude']").val();
            var $Lng = $("input[name$='longitude']").val();
            mapsInit($Lat, $Lng);
        }
    });
    $("#companySearch").parent().parent().unbind().submit(function (e) {
        return false;
    });

    function sortableEnable() {
//        $("#table-sorting tbody").sortable();
//        $("#table-sorting tbody").sortable("option", "disabled", false);
//        $("#table-sorting tbody").disableSelection();
//        $('#table-sorting tbody tr').css('cursor', 'ns-resize');
        return false;
    }

    function sortableDisable() {
//        $("#table-sorting tbody").sortable("disable");
//        $('#table-sorting tbody tr').css('cursor', 'default');
//        return false;
    }

    $("#companySearch").keyup(function () {
        if ($(this).val() != "")
        {
            sortableDisable();
            $("#table-sorting tbody>tr").hide();
            $("#table-sorting td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableEnable();
            $("#table-sorting tbody>tr").show();
        }
    });


    var editMemberIcon = $('i.edit').parent(),
            deleteMemberIcon = $('i.delete').parent();

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.edit, i.delete').parent().hover(function () {
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
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'firmStatus',
        url: '/cms/company/ajax/setStatusFirm',
        title: 'Wybierz status',
        send: 'always',
        success: function (data) {
            if (data == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność wpisu", "Katalog usług", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });

    $('#table-sorting a.newsAwarded').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'newsAwarded',
        url: '/cms/company/ajax/setAwardedFirm',
        title: 'Wyróżnij',
        send: 'always',
        success: function (data) {
            if (data == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono wyróżnienie wpisu", "Katalog usług", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });
    
    
    $('#table-sorting a.newsStart').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'newsStart',
        url: '/cms/company/ajax/setStart',
        title: 'Strona startowa',
        send: 'always',
        success: function (data) {
            if (data == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono widok wpisu", "Katalog usług", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });

    $('#table-sorting a.newsService').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'newsService',
        url: '/cms/company/ajax/setService',
        title: 'Strona startowa',
        send: 'always',
        success: function (data) {
            if (data == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono funkcje wpisu", "Katalog usług", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });
    
    
    $('#table-sorting a.newsCategory').editable({
        type: 'select',
        source: [{value: '3', text: 'Specjalizacje'},{value: '2', text: 'Publikacje'}, {value: '1', text: 'Media'}, {value: '0', text: 'Prowadzone sprawy'}],
        name: 'categoryStatus',
        url: '/cms/company/ajax/setEntryCategory',
        title: 'Wybierz kategorię',
        send: 'always',
        success: function (data) {
            if (data == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                console.log(selectVal)
                
                selectVal = parseInt(selectVal);
                var select;
                
                if(selectVal === 0) {
                    select = '';
                } else if(selectVal === 1){
                    select = 'pending';
                } else if(selectVal === 2){
                    select = 'active';
                } else if(selectVal === 3) {
                    select = 'banned'
                }

                $(label).removeClass().addClass('label' + ' ' + select); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono kategorię wpisu", "Specjalizacje", "bottom-right");
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
    if (parseInt($("#table-sorting tbody tr").length) > 1) {
        $('#table-sorting tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting tbody").sortable({
            helper: uiSortFix,
            start: function (event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function (event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('news-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/company/ajax/setNewOrderFirm",
                        type: "POST",
                        data: {
                            'company-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Katalog wpisów", "bottom-right");
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


function initNewsSortColumn(){
    
    var pagerOptions = {
        container: $(".pager"),
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        fixedHeight: false,
        removeRows: false,
        cssGoto: '.gotoPage'
    };

    $('#table-sorting').tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: false, filter: false},
            4: {sorter: true, filter: true},
            5: {sorter: false, filter: false}
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

$(window).load(function () {
    initNewsSortColumn();
    initPhotoSort();
//    initTableSort();
});

function deleteNewsForm(oAnchor, id) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/company/ajax/deleteSiteFirm",
        type: "POST",
        data: {
            'company-id': id
        },
        success: function (data) {
            if (data == 1) {
                $('#deleteNews input#news_id').val('');
                $('#deleteNews span#news_title').text('');
                $("#news-list-item-" + id).fadeOut("slow", function () {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto wpis", "Katalog wpisów", "bottom-right");
                if ($("#table-sorting tbody tr").length < 2) {
                    var tableBody = $("#table-sorting").parent();
                    $("#table-sorting").fadeOut("slow");
                    $("#pager").fadeOut("slow");
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

//mapa

function saveLocaization(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#mapLocalization").unbind().submit( function(e) { return false; } );
    
    $(oAnchor).attr('onclick','');
        var id = $('#mapLocalization input[name="idcompany"]').val();
        var lat = $('#mapLocalization input[name="latitude"]').val();
        var lon = $('#mapLocalization input[name="longitude"]').val();
        $.ajax({
            url: "/cms/company/ajax/saveLocalization",
            type: "POST",
            data: {
                'company-type' : 'saveLocalization',
                'id' :id,
                'lat' :lat,
                'lon' : lon
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie zapisano lokalizację", "Katalog wpisów - lokalizacja", "bottom-right");
                } else if(data.type == 0) {
                    showNotification(data.msg, "Error", "bottom-right");  
                } else {
                     alert('Wystąpił nieoczekiwany błąd');
                     location.reload(); 
                }
                $(oAnchor).attr('onclick',sActionButton);
            }
        });
        return false;
}

function mapsInit($Lat, $Lng) {
    if(MapIsInit == 1){
        return;
    }
    MapIsInit = 1;
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
    $('#geolocation').gmap({'center': +lat + ',' + lng, 'zoom': zoom}).bind('init', function (event, map) {
        $('#geolocation').gmap('clear', 'markers');
        $(map).click(function (event) {
            $('#geolocation').gmap('clear', 'markers');
            $('#geolocation').gmap('addMarker', {
                'position': event.latLng,
                'draggable': true,
                'bounds': false
            }, function (map, marker) {
                $("input[name$='latitude']").val(marker.getPosition().lat());
                $("input[name$='longitude']").val(marker.getPosition().lng());

            }).dragend(function (event) {
                $("input[name$='latitude']").val(event.latLng.lat());
                $("input[name$='longitude']").val(event.latLng.lng());
            }).click(function () {

            })
        });

        if ($Lat != '' && $Lng != '') {
            $('#geolocation').gmap('addMarker', { 'draggable': true,'position': new google.maps.LatLng($Lat, $Lng)}).dragend(function (event) {
                $("input[name$='latitude']").val(event.latLng.lat());
                $("input[name$='longitude']").val(event.latLng.lng());
            })
        }
    });
}

//zdjęcie

function deleteSitePhoto(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/company/ajax/delete-photo",
        type: "POST",
        data: {
            'homebox-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
                $(".imagesContainer").parent().append('<h4>Brak logo</h4>');
                $(".imagesContainer").remove();
            });
            showNotification("Zdjęcie zostało usunięte", "Katalog wpisów - logo", "bottom-right");            
        }
    });
}



//zdjecia dodatkowe


function initPhotoGallery(){
    $('#gallery_photos_other a.single_image').colorbox({
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
    if (parseInt($("#gallery_photos_other li").length) > 1) {
        $('#gallery_photos_other li').css('cursor', 'move');
        $("#gallery_photos_other").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                $('.imgMask').stop().animate({'opacity': '.0'}, 0)
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('gallery-list-item-other-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/company/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'company-photos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Katalog wpisów - zdjęcia", "bottom-right");
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

function refreshPhotoTab(iId) {
    $.ajax({
        url: "/cms/company/ajax/refresh-phototab",
        type: "POST",
        data: {
            'company-id': iId
        },
        success: function(data) {
            $('#TabPhotosOther').html(data);
            initPhotoSort();
            initPhotoGallery();
        }
    });
}


function deleteSitePhoto(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/company/ajax/delete-site-photo",
        type: "POST",
        data: {
            'company-photos-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-other-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "Katalog wpisów - zdjęcia", "bottom-right");
            if ($('#gallery_photos_other ul li').length <= 1) {
                refreshPhotoTab($('#site-id').val());
            }
        }
    });
}

function openEditTitlePhotoWindow(id){
    $('#editTitlePhoto input[name="photo_edit_id"]').val(id);
    var title = $('#edit_title_photo_'+id).val();
    $('#editTitlePhoto input[name="photo_edit_title"]').val(title);
    $('#editTitlePhoto').modal('show').on('hidden', function() {
        $('#editTitlePhoto input[name="photo_edit_id"]').val("");
        $('#editTitlePhoto input[name="photo_edit_title"]').val("");
    });
}

function saveEditTitlePhotoWindow(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitlePhoto form").unbind().submit( function(e) { return false; } );
    if($('#editTitlePhoto form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        var photo_id = $('#editTitlePhoto form input[name="photo_edit_id"]').val();
        var photo_title = $('#editTitlePhoto form input[name="photo_edit_title"]').val();
        $.ajax({
            url: "/cms/company/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type' : 'changePhotoTitle',
                'photo-id' : photo_id,
                'photo-title' : photo_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł zdjęcia zapisano", "Katalog wpisów - zdjęcia", "bottom-right");
                    $("#editTitlePhoto").modal('hide');
                    $('#edit_title_photo_'+photo_id).val(photo_title);
                    
                    
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