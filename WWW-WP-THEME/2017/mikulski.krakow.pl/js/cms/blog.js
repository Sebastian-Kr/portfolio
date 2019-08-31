
function selectTabByHash(){
    var x = window.location.hash;    
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        if($('ul.blog-nav li').find('.'+x)){
            $('ul.blog-nav li').find('.'+x).click();
        }
    }
}

function initTableComments(){
    var pagerOptions = {
        container: $("#pager-comments"),
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        fixedHeight: false,
        removeRows: false,
        cssGoto: '.gotoPage'
    };
    $("#table-with-sorting-comments").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: true, filter: true},
            4: {sorter: true, filter: true},
            5: {sorter: true, filter: true},
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

    }).tablesorterPager(pagerOptions);
    $('.pagesize').multiselect();
    
    $("#blogCommentsSearch").keyup(function() {
        if ($(this).val() != "")
        {
            $("#table-with-sorting-comments tbody>tr").hide();
            $("#table-with-sorting-comments td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#table-with-sorting-comments tbody>tr").show();
            $("#pager-comments .last").click();
            $("#pager-comments .first").click();
        }
    });
    
    $('#table-with-sorting-comments a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'aktywny'}, {value: '0', text: 'do moderacji'}],
        name: 'blogStatusComments',
        url: '/cms/blog/ajax/setStatusComments',
        title: 'Zmień status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność komentarzu", "Aktualności - komentarze", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
}

function initNewsSortColumn(){
    
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

$(function() {   
    
    selectTabByHash();
    
    initNewsSortColumn();
    
    $("#blogSearch").keyup(function() {
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

    $('#table-with-sorting a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'blogStatus',
        url: '/cms/blog/ajax/setStatus',
        title: 'Wybierz aktywność',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność aktualności", "Aktualności", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
    $('#table-with-sorting a.newsServices').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'blogServices',
        url: '/cms/blog/ajax/setServices',
        title: 'Wybierz widok',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono widok aktualności", "Aktualności", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
    
    $('#table-with-sorting a.newsStart').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'blogStart',
        url: '/cms/blog/ajax/setStart',
        title: 'Wybierz widok',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono widok aktualności", "Aktualności", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
    $('#table-with-sorting a.newsCanComents').editable({
        type: 'select',
        source: [{value: '0', text: 'Bieżące informacje prawne'}, {value: '1', text: 'Komentarze'}, {value: '2', text: 'Aktualności'}, {value: '4', text: 'Ważnejsze sprawy'}],
        name: 'newsCanComents',
        url: '/cms/blog/ajax/setCanComents',
        title: 'Wybierz możliwość komentowania',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                console.log(selectVal)
                if (selectVal == 0) {
                    selectVal = '';
                } else if (selectVal == 1) {
                    selectVal = 'active';
                } else if (selectVal == 2) {
                    selectVal = 'pending';
                } else if (selectVal == 3) {
                    selectVal = 'turquoise';
                } else if (selectVal == 4){
                    selectVal = 'cyan';
                }
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono możliwość komentowania", "Aktualności", "bottom-right");
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
                        url: "/cms/blog/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'blog-photos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Aktualności - zdjęcia", "bottom-right");
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
                        url: "/cms/blog/ajax/setNewOrderVideos",
                        type: "POST",
                        data: {
                            'blog-videos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Aktualności - filmy", "bottom-right");
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

function initTableFilesSort(){    
    if (parseInt($("#table-files-sorting tbody tr").length) > 1) {
        $('#table-files-sorting tbody tr').css('cursor', 'ns-resize');
        $("#table-files-sorting tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('file-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/blog/ajax/setNewOrderFiles",
                        type: "POST",
                        data: {
                            'blog-files-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Aktualności - pliki", "bottom-right");
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
    initPhotoSort();
    initVideoSort();
    initTableFilesSort();
});

function deleteNewsForm(oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/blog/ajax/deleteSite",
        type: "POST",
        data: {
            'blog-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#news-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto aktualność", "Aktualności", "bottom-right");
                if($("#table-with-sorting tbody tr").length < 2){
                    var tableBody = $("#table-with-sorting").parent();
                    $("#table-with-sorting").fadeOut("slow");
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

function deleteCommentsForm(oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/blog/ajax/deleteSiteComments",
        type: "POST",
        data: {
            'blog-comments-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#comments-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto komentarz", "Aktualności - komentarze", "bottom-right");
                if($("#table-with-sorting-comments tbody tr").length < 2){
                    var tableBody = $("#table-with-sorting-comments").parent();
                    $("#table-with-sorting-comments").fadeOut("slow");
                    $("#pager-comments").fadeOut("slow");
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


function refreshPhotoTab(iId) {
    $.ajax({
        url: "/cms/blog/ajax/refresh-phototab",
        type: "POST",
        data: {
            'blog-id': iId
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
        url: "/cms/blog/ajax/delete-site-photo",
        type: "POST",
        data: {
            'blog-photos-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "Aktualności - zdjęcia", "bottom-right");
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
            url: "/cms/blog/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type' : 'changePhotoTitle',
                'photo-id' : photo_id,
                'photo-title' : photo_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł zdjęcia zapisano", "Aktualności - zdjęcia", "bottom-right");
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
        url: "/cms/blog/ajax/refresh-videotab",
        type: "POST",
        data: {
            'blog-id': iId
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
            url: "/cms/blog/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'blog-id' : iId,
                'video-url' : video_url,
                'type':'1'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Aktualności - filmy", "bottom-right");
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
            url: "/cms/blog/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'blog-id' : iId,
                'video-url' : video_url,
                'type':'2'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Aktualności - filmy", "bottom-right");
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
        url: "/cms/blog/ajax/delete-site-video",
        type: "POST",
        data: {
            'blog-videos-id' : iId
        },
        success: function(data) {
            $('#video-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initVideoGallery();
            showNotification("Film został usunięty", "Aktualności - filmy", "bottom-right");
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
            url: "/cms/blog/ajax/changeVideoTitle",
            type: "POST",
            data: {
                'video-type' : 'changeVideoTitle',
                'video-id' : video_id,
                'video-title' : video_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł filmu zapisano", "Aktualności - filmy", "bottom-right");
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
//

//files

function refreshFilesTab(iId) {
    $.ajax({
        url: "/cms/blog/ajax/refresh-filestab",
        type: "POST",
        data: {
            'blog-id': iId
        },
        success: function(data) {
            $('#TabFiles').html(data);
            initTableFilesSort();
        }
    });
}


function deleteSiteFile(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/blog/ajax/delete-site-file",
        type: "POST",
        data: {
            'blog-files-id' : iId
        },
        success: function(data) {
            $('#file-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            showNotification("Plik został usunięty", "Aktualności - pliki", "bottom-right");
            if ($('#table-files-sorting tbody tr').length <= 1) {
                refreshFilesTab($('#site-id').val());
            }
        }
    });
}

function openEditTitleFileWindow(id){
    $('#editTitleFile input[name="file_edit_id"]').val(id);
    var title = $('#file-list-item-'+id+' td.file_title').text();
    if(title === "Brak"){
        title = "";
    }
    $('#editTitleFile input[name="file_edit_title"]').val(title);
    $('#editTitleFile').modal('show').on('hidden', function() {
        $('#editTitleFile input[name="file_edit_id"]').val("");
        $('#editTitleFile input[name="file_edit_title"]').val("");
    });
}

function saveEditTitleFileWindow(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitleFile form").unbind().submit( function(e) { return false; } );
    if($('#editTitleFile form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        var file_id = $('#editTitleFile form input[name="file_edit_id"]').val();
        var file_title = $('#editTitleFile form input[name="file_edit_title"]').val();
        $.ajax({
            url: "/cms/blog/ajax/changeFileTitle",
            type: "POST",
            data: {
                'file-type' : 'changeFileTitle',
                'file-id' : file_id,
                'file-title' : file_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł pliku zapisano", "Aktualności - pliki", "bottom-right");
                    $("#editTitleFile").modal('hide');
                    //zmiana akcji na edycje
                    $("#file-list-item-"+file_id).find(".file_title").html(file_title);
                    //$("#file-list-item-"+file_id).find(".edit_title_button").attr("onclick","openEditTitleFileWindow("+file_id+",'"+file_title+"');");
                    
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
