$(document).ready(function(){

  $('.seeMore-Head').each(function(){
    console.log('test');
    $(this).on('click', function(){
    var panelid = $(this).attr('data-panelid');
    $('#'+panelid).slideToggle(200);
    // $(this).slideToggle(200);
    // $(this).toggleClass('offer-head-open');
    $('.seeMore-Head[data-panelid='+panelid).toggleClass('offer-head-open');
    });
  });

});
