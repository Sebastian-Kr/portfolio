// START PRGRM_LIGHTBOX

$(document).ready(function(){

var LightboxNr = 1;
var GalleryID  = 1;
var maxId = 1;
// console.log(maxId);
// CLICK OPEN EVENT

  $('.lightbox_item').click(function () {
    var LightboxNr = $(this).attr('LightboxNr');
    GalleryID = $(this).attr('galleryid');
    maxId = $("#"+GalleryID+" #prgrm_lightbox").attr('maxId');
    console.log('maxid= ' + maxId);
    prgrm_openlightbox(LightboxNr);
  });


// OPEN LIGHTBOX FUNCTION
function prgrm_openlightbox(LightboxNr) {
  console.log('galleryid = ' + GalleryID);
    var Lightbox_item = $("#"+ GalleryID +" div[LightboxNr='" + LightboxNr + "']");
    var LightboxType = $(Lightbox_item).attr('LightboxType');
    var LigthboxSrc = $( Lightbox_item).attr('LigthboxSrc');

if (LightboxType == 'movie')
// { var LigthboxContent = '  <iframe  src="'+LigthboxSrc+'" frameborder="1" allow="autoplay; autoplay=1 encrypted-media" allowfullscreen></iframe>';}
{ var LigthboxContent = ' <iframe  src="'+LigthboxSrc+'?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>';}
else {var LigthboxContent = '<img src="'+ LigthboxSrc +'">';}

    $('.LigthboxContent').html(LigthboxContent);
    $('.backdrop').animate({'opacity':'0.50'}, 300, 'linear');
    $('.prgrm_lightbox').animate({'opacity':'1.00'}, 900, 'linear');
    $('.backdrop, .prgrm_lightbox').css('display', 'block');
    console.log(LightboxNr);
  }


// PREV CLICK EVENT
  $('.lightbox_prev').click(function() {
LightboxNr = LightboxNr - 1;
    if (LightboxNr == 0)  LightboxNr = maxId;
      prgrm_swithlightbox()
        setTimeout(function () {prgrm_openlightbox(LightboxNr)}, 500);
     });


// NEXT CLICK EVENT
 $('.lightbox_next').click(function() {
   LightboxNr = LightboxNr + 1;
   if (LightboxNr > maxId) LightboxNr = 1;
  prgrm_swithlightbox()
     setTimeout(function () {prgrm_openlightbox(LightboxNr)}, 500);
  });



// CLOSE CLICK EVENT
  $('.close').click(function(){prgrm_closelightbox();});
  $('.backdrop').click(function(){prgrm_closelightbox();});


// CLOSE LIGHTBOX FUNCTION
  function prgrm_closelightbox() {
    $('.backdrop, .prgrm_lightbox').animate({'opacity':'0'}, 300, 'linear',function (){
      $('.backdrop, .prgrm_lightbox').css('display', 'none');
$('.LigthboxContent').html('');
    });
  }

  // SWITCH LIGHTBOX FUNCTION
    function prgrm_swithlightbox() {
      $('.prgrm_lightbox').animate({'opacity':'0'}, 300, 'linear',function (){
        $('.prgrm_lightbox').css('display', 'none');
  $('.LigthboxContent').html('');
      });
    }


});
// END PRGRM_LIGHTBOX
// GALLERY MODULE END ////////////////////////////////
