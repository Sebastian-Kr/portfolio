

  function showInfo(){
      $(".more").click(function() {
          var iId = $(this).attr('id');
          $('#windowind_'+iId).popup('show');
      });
  }

  function setCategoryView() {
     $('.box-content').click(function (){
          var catId = $(this).find('input').attr('data-category');
          localStorage.setItem('catId', catId);
     });
  };


  $(document).ready(function(){
    $("#close_button").click(function(){
      $("#search-box").css('display', 'none')
    });
    $("#search_start").click(function(){
      $("#search-box").css('display', 'block')
    });
  });
