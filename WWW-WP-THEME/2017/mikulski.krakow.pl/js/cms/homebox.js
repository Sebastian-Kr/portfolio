
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.homebox-nav li').find('.' + x)) {
            $('ul.homebox-nav li').find('.' + x).click();
        }
    }
}

function sortableEnable(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sorting-" + lang_code + " tbody").sortable();
        $("#table-sorting-" + lang_code + " tbody").sortable("option", "disabled", false);
        $("#table-sorting-" + lang_code + " tbody").disableSelection();
        $("#table-sorting-" + lang_code + " tbody tr").css('cursor', 'ns-resize');
    }
    return false;
}

function sortableDisable(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sorting-" + lang_code + " tbody").sortable("disable");
        $("#table-sorting-" + lang_code + " tbody tr").css('cursor', 'default');
    }
    return false;
}

function tableGridSearch(lang_code) {
    $("#homeboxSearch" + lang_code).keyup(function () {
        if ($(this).val() != "")
        {
            sortableDisable(lang_code);
            $("#table-sorting-" + lang_code + " tbody>tr").hide();
            $("#table-sorting-" + lang_code + " td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableEnable(lang_code);
            $("#table-sorting-" + lang_code + " tbody>tr").show();
        }
    });
    $("#homeboxSearch" + lang_code).parent().parent().unbind().submit(function (e) {
        return false;
    });
}

function tableGridEdit(lang_code) {
    $('#table-sorting-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'homeboxStatus',
        url: '/cms/home-box/ajax/setStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function (data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność", "Boxy", "bottom-right");
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                alert(data.msg);
                location.reload();
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });
}
function tableGridSection(lang_code) {
    $('#table-sorting-' + lang_code + ' a.newsSection').editable({
        type: 'select',
        source: sectionData,
        name: 'homeboxSection',
        url: '/cms/home-box/ajax/setSection',
        title: 'Wybierz sekcje',
        send: 'always',
        success: function (data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                // selectVal = parseInt(selectVal)>0?'active':'';
                //    $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono sekcje", "Boxy", "bottom-right");
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                alert(data.msg);
                location.reload();
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function () {
        $(this).next().find('select').multiselect();
    });
}


function initLangTableGrid(lang_code) {
    initTableSort(lang_code);
    tableGridSearch(lang_code);
    tableGridEdit(lang_code);
    if (sectionData.length > 1) {
        tableGridSection(lang_code);
    }
}

$(function () {

    selectTabByHash();
    $('#addHomeBoxLangSelect').multiselect();
    $('#addHomeBoxSectionSelect').multiselect();
    $('#addHomeBox form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
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

});

var uiSortFix = function (e, ui) {
    ui.children().each(function () {
        $(this).width($(this).width());
    });
    return ui;
};

function initTableSort(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $('#table-sorting-' + lang_code + ' tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting-" + lang_code + " tbody").sortable({
            helper: uiSortFix,
            start: function (event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function (event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('homebox-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/home-box/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'homebox-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function (data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Boxy", "bottom-right");
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

function deleteHomeBoxForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/home-box/ajax/deleteSite",
        type: "POST",
        data: {
            'homebox-id': id
        },
        success: function (data) {
            if (data == 1) {
                $("#homebox-list-item-" + id).fadeOut("slow", function () {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto box", "Boxy", "bottom-right");
                if ($("#table-sorting-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sorting-" + lang_code + "").parent();
                    $("#table-sorting-" + lang_code + "").fadeOut("slow");
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


function deleteSitePhoto(iId) {
    $('#windows-ask-confirm').modal('hide');
    $.ajax({
        url: "/cms/home-box/ajax/delete-photo",
        type: "POST",
        data: {
            'homebox-id': iId
        },
        success: function (data) {
            $('#gallery-list-item-' + iId).fadeOut("slow", function () {
                $(this).remove();
                $(".imagesContainer").parent().append('<h4>Brak zdjęcia</h4>');
                $(".imagesContainer").remove();
            });
            showNotification("Zdjęcie zostało usunięte", "Boxy", "bottom-right");
        }
    });
}