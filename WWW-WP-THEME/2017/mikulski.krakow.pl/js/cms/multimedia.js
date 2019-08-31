
function selectTabByHash(){
    var x = window.location.hash;    
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        if($('ul.multimedia-nav li').find('.'+x)){
            $('ul.multimedia-nav li').find('.'+x).click();
        }
    }
}

$(function() {   
    
    selectTabByHash();
    
    var editMemberIcon = $('i.edit').parent(),
            deleteMemberIcon = $('i.delete').parent();


    $(editMemberIcon).tooltip({
        title: 'Link'
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

function initPhotoGallery(){
    $('#gallery_photos a.single_image').colorbox({
        photo: true,
        opacity: .9,
        rel: 'multimedia',
        scalePhotos: true,
        scrolling: false,
        maxWidth: '100%',
        maxHeight: '100%'
    });
    $('.imageContainer').hover(function() {
        var $this = $(this);
        $this.find('.imgMask').stop().animate({'opacity': '.45'}, 300);
        $this.find('.imgSettings').stop().animate({'bottom': '0'},100);
    }, function() {
        var $this = $(this);
        $this.find('.imgMask').stop().animate({'opacity': '.0'}, 300);
        $this.find('.imgSettings').stop().animate({'bottom': '-24'},100);
    });
}

function refreshPhotoTab() {
    $.ajax({
        url: "/cms/multimedia/ajax/refresh-phototab",
        type: "POST",
        success: function(data) {
            $('#TabMultimediaPhotos').html(data);
            initPhotoGallery();
        }
    });
}

function deleteSitePhoto(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/multimedia/ajax/delete-photo",
        type: "POST",
        data: {
            'multimedia-photos-id' : iId
        },
        success: function(data) {
            $('#gallery-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initPhotoGallery();
            showNotification("Zdjęcie zostało usunięte", "Multimedia", "bottom-right");
            if ($('#gallery_photos ul li').length <= 1) {
                refreshPhotoTab();
            }
        }
    });
}

function openEditTitlePhotoWindow(id){
    var title = $('#edit_title_photo_'+id).val();
    var ext = $('#edit_extension_photo_'+id).val();
    var file_size = $('#edit_file_size_photo_'+id).val();
    var add_date = $('#edit_add_date_photo_'+id).val();
    var url = $('#edit_url_photo_'+id).val();
    $('#editTitlePhoto .photo_edit_title').text(title);
    $('#editTitlePhoto .photo_edit_ext').text(ext);
    $('#editTitlePhoto .photo_edit_file_size').text(file_size);
    $('#editTitlePhoto .photo_edit_add_date').text(add_date);
    $('#editTitlePhoto .photo_edit_url').text(url);
    $('#editTitlePhoto').modal('show').on('hidden', function() {
        $('#editTitlePhoto .photo_edit_ext').text("");
        $('#editTitlePhoto .photo_edit_title').text("");
        $('#editTitlePhoto .photo_edit_file_size').text("");
        $('#editTitlePhoto .photo_edit_add_date').text("");
        $('#editTitlePhoto .photo_edit_url').text("");
    });
}


//files
function refreshFilesTab(iId) {
    $.ajax({
        url: "/cms/multimedia/ajax/refresh-filestab",
        type: "POST",
        success: function(data) {
            $('#TabMultimediaFiles').html(data);
        }
    });
}

function deleteSiteFile(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/multimedia/ajax/delete-file",
        type: "POST",
        data: {
            'multimedia-files-id' : iId
        },
        success: function(data) {
            $('#file-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            showNotification("Plik został usunięty", "Multimedia", "bottom-right");
            if ($('#table-files-sorting tbody tr').length <= 1) {
                refreshFilesTab();
            }
        }
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
    $('.imageContainer').hover(function() {
        var $this = $(this);
        $this.find('.imgMask').stop().animate({'opacity': '.45'}, 300);
        $this.find('.imgSettings').stop().animate({'bottom': '0'},100);
    }, function() {
        var $this = $(this);
        $this.find('.imgMask').stop().animate({'opacity': '.0'}, 300);
        $this.find('.imgSettings').stop().animate({'bottom': '-24'},100);
    });
}


function refreshVideoTab() {
    $.ajax({
        url: "/cms/multimedia/ajax/refresh-videotab",
        type: "POST",

        success: function(data) {
            $('#TabMultimediaVideos').html(data);
            initVideoGallery();
        }
    });
}

function addNewVideo(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#add_new_video_form").unbind().submit( function(e) { return false; } );
    if($('#add_new_video_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $(oAnchor).parent().find(".loading_box").show();
        var video_url = $('#add_new_video_form input[name="video_url"]').val();
        $.ajax({
            url: "/cms/multimedia/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'video-url' : video_url,
                'type':'2'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Multimedia", "bottom-right");
                    refreshVideoTab();
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
function addNewMp4(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#add_new_mp4_form").unbind().submit( function(e) { return false; } );
    if($('#add_new_mp4_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $(oAnchor).parent().find(".loading_box").show();
        var video_url = $('#add_new_mp4_form input[name="mp4_url"]').val();
        $.ajax({
            url: "/cms/multimedia/ajax/addNewVideo",
            type: "POST",
            data: {
                'video-type' : 'addNewVideo',
                'video-url' : video_url,
                'type':'3'
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if(data.type == 1){
                    showNotification("Poprawnie dodano film", "Multimedia", "bottom-right");
                    refreshVideoTab();
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
        url: "/cms/multimedia/ajax/delete-site-video",
        type: "POST",
        data: {
            'multimedia-videos-id' : iId
        },
        success: function(data) {
            $('#video-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            initVideoGallery();
            showNotification("Film został usunięty", "Multimedia", "bottom-right");
            if ($('ul#gallery_videos li').length <= 1) {
                refreshVideoTab($('#site-id').val());
            }
        }
    });
}

function openTitleVideoWindow(id){
    var title = $('#edit_title_video_'+id).val();
    var add_date = $('#edit_add_date_video_'+id).val();
    var url = $('#edit_url_video_'+id).val();
    $('#detailsVideo .video_edit_title').text(title);
    $('#detailsVideo .video_edit_add_date').text(add_date);
    $('#detailsVideo .video_edit_url').text(url);
    $('#detailsVideo').modal('show').on('hidden', function() {
        $('#detailsVideo .video_edit_title').text("");
        $('#detailsVideo .video_edit_add_date').text("");
        $('#detailsVideo .video_edit_url').text("");
    });
}
