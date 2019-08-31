
function selectTabByHash(){
    var x = window.location.hash;    
  
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        
        if($('ul.events-nav li').find('.'+x)){
            var href = $('ul.events-nav li').find('.'+x).attr('href'),
            href = href.replace('Link','');
            $previous = $('ul.events-nav li').find('.'+x).closest('ul.nav-tabs').find('li.active');

            //show one particular menu
            $(href).parent().children().hide();
            $(href).fadeIn();

            $previous.removeClass('active');
            $('ul.events-nav li').find('.'+x).parent().stop().addClass('active');
            if(href.indexOf("Lang")<0){
                location.href = href+'Link';
            }
            
            if(x === "TabLocalization"){
                var $Lat = $("input[name$='latitude']").val();
                var $Lng = $("input[name$='longitude']").val();
                mapsInit( $Lat, $Lng);
            }
        }
    }
}

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
                        url: "/cms/events/ajax/setNewOrderCountry",
                        type: "POST",
                        data: {
                            'company-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Zasięg", "bottom-right");
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

    $("#table-sorting").tablesorter({
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
var MapIsInit = 0;
$(function() {   
   
    selectTabByHash();

    $('.container-fluid ul.events-nav li a').click(function () {
        if($(this).attr('class') == "TabLocalization"){
            var $Lat = $("input[name$='latitude']").val();
            var $Lng = $("input[name$='longitude']").val();
            mapsInit($Lat, $Lng);
        }
    });

    initNewsSortColumn();
    
    $("#eventsSearch").keyup(function() {
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

    $('#table-sorting a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'eventsStatus',
        url: '/cms/events/ajax/setStatus',
        title: 'Wybierz aktywność',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność zasięgu", "Zasięg", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });

});

var uiSortFix = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};

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
                        url: "/cms/events/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'events-photos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Zasięg - zdjęcia", "bottom-right");
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

function initVideoSort(){    
    if (parseInt($("#gallery_video li").length) > 1) {
        $('#gallery_video li').css('cursor', 'move');
        $("#gallery_video").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                $('.imgMask').stop().animate({'opacity': '.0'}, 0)
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('video-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/events/ajax/setNewOrderVideos",
                        type: "POST",
                        data: {
                            'events-videos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Zasięg - filmy", "bottom-right");
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

function initPhotoGallery(){
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
function initVideoGallery(){
    $('#gallery_video .youtube').colorbox({
        iframe: true,
        opacity: .9,
        current: "film {current} z {total}",
        rel: 'video1',
        scrolling: false,
        width: 640,
        height: 390,
        maxWidth: '100%',
        maxHeight: '100%',
        href:function(){
        var videoId = new RegExp('[\\?&]v=([^&#]*)').exec(this.href);
        if (videoId && videoId[1]) {
            return 'http://youtube.com/embed/'+videoId[1]+'?rel=0&wmode=transparent';
        }
    }});
}

$(window).load(function() {
    initTableSort();
    initPhotoSort();
    initVideoSort();
});

function deleteNewsForm(oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/events/ajax/deleteSite",
        type: "POST",
        data: {
            'events-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#news-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto wydarzenie", "Zasięg", "bottom-right");
                if($("#table-sorting tbody tr").length < 2){
                    var tableBody = $("#table-sorting").parent();
                    $("#table-sorting").fadeOut("slow");
                    $("#pager").fadeOut("slow");
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

function refreshPhotoTab(iId) {
    $.ajax({
        url: "/cms/events/ajax/refresh-phototab",
        type: "POST",
        data: {
            'events-id': iId
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
        url: "/cms/events/ajax/delete-site-photo",
        type: "POST",
        data: {
            'events-photos-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "Zasięg - zdjęcia", "bottom-right");
            if ($('#gallery_photos ul li').length <= 1) {
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
            url: "/cms/events/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type' : 'changePhotoTitle',
                'photo-id' : photo_id,
                'photo-title' : photo_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł zdjęcia zapisano", "Zasięg - zdjęcia", "bottom-right");
                    $("#editTitlePhoto").modal('hide');
                    $('#edit_title_photo_'+photo_id).val(photo_title);
                    //zmiana akcji na edycje
                    //$("#image_id_"+photo_id).find(".icon-pencil").attr("onclick","openEditTitlePhotoWindow("+photo_id+",'"+photo_title+"');");
                    
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


//Video

function refreshVideoTab(iId) {
    $.ajax({
        url: "/cms/events/ajax/refresh-videotab",
        type: "POST",
        data: {
            'events-id': iId
        },
        success: function(data) {
            $('#TabVideos').html(data);
            initVideoSort();
            initVideoGallery();
        }
    });
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
            url: "/cms/events/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'events-id' : iId,
                'video-url' : video_url,
                'type':'1'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Zasięg - filmy", "bottom-right");
                    refreshVideoTab(iId);
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
            url: "/cms/events/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'events-id' : iId,
                'video-url' : video_url,
                'type':'2'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Zasięg - filmy", "bottom-right");
                    refreshVideoTab(iId);
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

function deleteSiteVideo(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/events/ajax/delete-site-video",
        type: "POST",
        data: {
            'events-videos-id' : iId
        },
        success: function(data) {
            $('#video-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initVideoGallery();
            showNotification("Film został usunięty", "Zasięg - filmy", "bottom-right");
            if ($('ul#gallery_videos li').length <= 1) {
                refreshVideoTab($('#site-id').val());
            }
        }
    });
}


function openEditTitleVideoWindow(id){
    $('#editTitleVideo input[name="video_edit_id"]').val(id);
    var title = $('#edit_title_video_'+id).val();
    $('#editTitleVideo input[name="video_edit_title"]').val(title);
    $('#editTitleVideo').modal('show').on('hidden', function() {
        $('#editTitleVideo input[name="video_edit_id"]').val("");
        $('#editTitleVideo input[name="video_edit_title"]').val("");
    });
}

function saveEditTitleVideoWindow(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitleVideo form").unbind().submit( function(e) { return false; } );
    if($('#editTitleVideo form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        var video_id = $('#editTitleVideo form input[name="video_edit_id"]').val();
        var video_title = $('#editTitleVideo form input[name="video_edit_title"]').val();
        $.ajax({
            url: "/cms/events/ajax/changeVideoTitle",
            type: "POST",
            data: {
                'video-type' : 'changeVideoTitle',
                'video-id' : video_id,
                'video-title' : video_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł filmu zapisano", "Zasięg - filmy", "bottom-right");
                    $("#editTitleVideo").modal('hide');
                    $('#edit_title_video_'+video_id).val(video_title);
                    //zmiana akcji na edycje
                    //video_title = escape(video_title);
                    //$("#video_id_"+video_id).find(".icon-pencil").attr("onclick","openEditTitleVideoWindow("+video_id+",'"+video_title+"');");
                    
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
//mapa

function saveLocaization(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#mapLocalization").unbind().submit( function(e) { return false; } );
    
    $(oAnchor).attr('onclick','');
        var id = $('#mapLocalization input[name="idevents"]').val();
        var lat = $('#mapLocalization input[name="latitude"]').val();
        var lon = $('#mapLocalization input[name="longitude"]').val();
        $.ajax({
            url: "/cms/events/ajax/saveLocalization",
            type: "POST",
            data: {
                'events-type' : 'saveLocalization',
                'id' :id,
                'lat' :lat,
                'lon' : lon
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie zapisano lokalizację", "Zasięg - lokalizacja", "bottom-right");
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