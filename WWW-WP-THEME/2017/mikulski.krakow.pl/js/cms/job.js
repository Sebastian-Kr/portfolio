function deleteMainPhoto() {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/job/ajax/delete-main-photo",
        type: "POST",
        success: function(data) {
            $('#gallery-list-item-main').fadeOut("slow", function() {
                $(this).remove();
                $(".imagesContainerMain").parent().append('<h4>Brak zdjęcia głównego produktu</h4>');
                $(".imagesContainerMain").remove();
            });
            showNotification("Zdjęcie zostało usunięte", "Firma - zdjęcie główne", "bottom-right");            
        }
    });
}