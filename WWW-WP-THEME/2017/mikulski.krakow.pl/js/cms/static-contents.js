
function selectTabByHash(){
    var x = window.location.hash;    
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        if($('ul.static-contents-nav li').find('.'+x)){
            $('ul.static-contents-nav li').find('.'+x).click();
        }
    }
}

var sectionData = [];

$(function() {   
    
    selectTabByHash();
    
    $("#staticContentsSearch").parent().parent().unbind().submit(function (e) {
        return false;
    });
    
    function sortableEnable() {
        $("#table-sorting tbody").sortable();
        $("#table-sorting tbody").sortable( "option", "disabled", false );
        $("#table-sorting tbody").disableSelection();
        $('#table-sorting tbody tr').css('cursor', 'ns-resize');
        return false;
    }
    
    function sortableDisable() {
        $( "#table-sorting tbody" ).sortable("disable");
        $('#table-sorting tbody tr').css('cursor', 'default');
        return false;
    }
    
    $("#staticContentsSearch").keyup(function() {
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
        name: 'staticContentsStatus',
        url: '/cms/static-contents/ajax/setStatus',
        title: 'Wybierz status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność strony", "O nas", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    $('#table-sorting a.newsHeader').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'staticContentsHeader',
        url: '/cms/static-contents/ajax/setHeader',
        title: 'Header',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'cyan':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono header", "O nas", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
    
if(sectionData.length > 1){
    $('#table-sorting a.newsSection').editable({
        type: 'select',
        source: sectionData,
        name: 'staticContentsSection',
        url: '/cms/static-contents/ajax/setSection',
        title: 'Wybierz sekcję',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                showNotification("Zmieniono sekcję strony", "O nas", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
} 
   
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
                        url: "/cms/static-contents/ajax/setNewOrderPhotos",
                        type: "POST",
                        data: {
                            'static-contents-photos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "O nas - zdjęcia", "bottom-right");
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
                        url: "/cms/static-contents/ajax/setNewOrderVideos",
                        type: "POST",
                        data: {
                            'static-contents-videos-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "O nas - filmy", "bottom-right");
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

function initTableSort(){    
    if (parseInt($("#table-sorting tbody tr").length) > 1) {
        $('#table-sorting tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('news-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/static-contents/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'static-contents-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "O nas", "bottom-right");
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
                        url: "/cms/static-contents/ajax/setNewOrderFiles",
                        type: "POST",
                        data: {
                            'static-contents-files-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "O nas - pliki", "bottom-right");
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
    initTableFilesSort()
});

function deleteNewsForm(oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/static-contents/ajax/deleteSite",
        type: "POST",
        data: {
            'static-contents-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $('#deleteNews input#news_id').val('');
                $('#deleteNews span#news_title').text('');
                $("#news-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto stronę opisową", "O nas", "bottom-right");
                if($("#table-sorting tbody tr").length < 2){
                    var tableBody = $("#table-sorting").parent();
                    $("#table-sorting").fadeOut("slow");
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
        url: "/cms/static-contents/ajax/refresh-phototab",
        type: "POST",
        data: {
            'static-contents-id': iId
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
        url: "/cms/static-contents/ajax/delete-site-photo",
        type: "POST",
        data: {
            'static-contents-photos-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "O nas - zdjęcia", "bottom-right");
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
            url: "/cms/static-contents/ajax/changePhotoTitle",
            type: "POST",
            data: {
                'photo-type' : 'changePhotoTitle',
                'photo-id' : photo_id,
                'photo-title' : photo_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł zdjęcia zapisano", "O nas - zdjęcia", "bottom-right");
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
        url: "/cms/static-contents/ajax/refresh-videotab",
        type: "POST",
        data: {
            'static-contents-id': iId
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
            url: "/cms/static-contents/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'static-contents-id' : iId,
                'video-url' : video_url,
                'type':'1'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "O nas - filmy", "bottom-right");
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
            url: "/cms/static-contents/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'static-contents-id' : iId,
                'video-url' : video_url,
                'type':'2'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "O nas - filmy", "bottom-right");
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
        url: "/cms/static-contents/ajax/delete-site-video",
        type: "POST",
        data: {
            'static-contents-videos-id' : iId
        },
        success: function(data) {
            $('#video-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initVideoGallery();
            showNotification("Film został usunięty", "O nas - filmy", "bottom-right");
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
            url: "/cms/static-contents/ajax/changeVideoTitle",
            type: "POST",
            data: {
                'video-type' : 'changeVideoTitle',
                'video-id' : video_id,
                'video-title' : video_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł filmu zapisano", "O nas - filmy", "bottom-right");
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
        url: "/cms/static-contents/ajax/refresh-filestab",
        type: "POST",
        data: {
            'static-contents-id': iId
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
        url: "/cms/static-contents/ajax/delete-site-file",
        type: "POST",
        data: {
            'static-contents-files-id' : iId
        },
        success: function(data) {
            $('#file-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            showNotification("Plik został usunięty", "O nas - pliki", "bottom-right");
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
            url: "/cms/static-contents/ajax/changeFileTitle",
            type: "POST",
            data: {
                'file-type' : 'changeFileTitle',
                'file-id' : file_id,
                'file-title' : file_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł pliku zapisano", "O nas - pliki", "bottom-right");
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
function deleteSiteIcons(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/static-contents/ajax/delete-icons",
        type: "POST",
        data: {
            'site-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
                $(".imagesContainer").parent().append('<h4>Brak ikony</h4>');
                $(".imagesContainer").remove();
            });
            showNotification("Ikona została usunięta", "O nas - ikona", "bottom-right");            
        }
    });
}