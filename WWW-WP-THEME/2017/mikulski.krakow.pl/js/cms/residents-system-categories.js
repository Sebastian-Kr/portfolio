
function selectTabByHash(){
    var x = window.location.hash;    
    if(x){
        x = x.substring(1);
        x = x.replace('Link','');
        if($('ul.residents_system_categories-nav li').find('.'+x)){
            $('ul.residents_system_categories-nav li').find('.'+x).click();
        }
    }
}

function initEditStatus(){    
    
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
    
    $('#table-sorting a.categoryStatus, #table-subcat-sorting a.categoryStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączona'}, {value: '0', text: 'wyłączona'}],
        name: 'residents_system_categoriesStatus',
        url: '/cms/residents-system/ajax/setStatus',
        title: 'Wybierz status',
        send:'always',
        success: function(data) {
            if(data == 1){
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal)>0?'active':'';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność kategorii", "Kategorie", "bottom-right");
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
}

function sortableSubCatEnable() {
    $("#table-subcat-sorting tbody").sortable();
    $("#table-subcat-sorting tbody").sortable( "option", "disabled", false );
    $("#table-subcat-sorting tbody").disableSelection();
    $('#table-subcat-sorting tbody tr').css('cursor', 'ns-resize');
    return false;
}
    
function sortableSubCatDisable() {
    $( "#table-subcat-sorting tbody" ).sortable("disable");
    $('#table-subcat-sorting tbody tr').css('cursor', 'default');
    return false;
}

function initSubCatSearch(){    
    $("#subresidents_system_categoriesSearch").keyup(function() {
        if ($(this).val() != "")
        {
            sortableSubCatDisable();
            $("#table-subcat-sorting tbody>tr").hide();
            $("#table-subcat-sorting td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableSubCatEnable();
            $("#table-subcat-sorting tbody>tr").show();
        }
    });
}

$(function() {   
    
    selectTabByHash();
    
    $("#residents_system_categoriesSearch").parent().parent().unbind().submit(function (e) {
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
    
    $("#residents_system_categoriesSearch").keyup(function() {
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

    initEditStatus();
    initSubCatSearch();
});

var uiSortFix = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};

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
                var iId = ui.item.attr('id').replace('category-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/residents-system/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'residents_system_categories-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Kategorie", "bottom-right");
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

function initTableSubCatSort(){    
    if (parseInt($("#table-subcat-sorting tbody tr").length) > 1) {
        $('#table-subcat-sorting tbody tr').css('cursor', 'ns-resize');
        $("#table-subcat-sorting tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('subcategory-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/residents-system/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'residents_system_categories-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Kategorie - podkategorie", "bottom-right");
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

$(window).load(function() {
    initTableSort();   
    initTableSubCatSort()
});

function deleteCatForm(oAnchor, id) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/residents-system/ajax/deleteCat",
        type: "POST",
        data: {
            'residents_system_categories-id' : id
        },
        success: function(data) {
            if(data == 1){                
                $("#category-list-item-"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide'); 
                showNotification("Usunięto Kategorię", "Kategorie", "bottom-right");
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


function saveNewSubCategoryWindow(oAnchor){
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#addSubCat form").unbind().submit( function(e) { return false; } );
    if($('#addSubCat form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        var parent_id = $('#addSubCat form input[name="parent_cat_id"]').val();
        var subcategory_title = $('#addSubCat form input[name="subcategory_title"]').val();
        $.ajax({
            url: "/cms/residents-system/ajax/addNewSubcategory",
            type: "POST",
            data: {
                'cat-type' : 'addNewSubcategory',
                'parent-id' : parent_id,
                'subcategory-title' : subcategory_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Dodano podkategorię", "Kategorie - podkategorie", "bottom-right");
                    $("#addSubCat").modal('hide');
                    refreshSubcategoryTab(parent_id);
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

function refreshSubcategoryTab(iId) {
    $.ajax({
        url: "/cms/residents-system/ajax/refresh-subcat",
        type: "POST",
        data: {
            'residents_system_categories-id': iId
        },
        success: function(data) {
            $('#TabSubresidents_system_categories').html(data);
            initTableSubCatSort();
            initEditStatus();
            initSubCatSearch();
        }
    });
}


function deleteSubCat(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/residents-system/ajax/deleteCat",
        type: "POST",
        data: {
            'residents_system_categories-id' : iId
        },
        success: function(data) {
                $("#subcategory-list-item-"+iId).fadeOut("slow", function() {
                    $(this).remove();
                });
                showNotification("Usunięto kategorię", "Kategorie - podkategorie", "bottom-right");
                if($("#table-subcat-sorting tbody tr").length < 2){
                    refreshSubcategoryTab($('#site-id').val());
                }
        }
    });
}
