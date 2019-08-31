function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.questionnaires_question-nav li').size() && $('ul.questionnaires_question-nav li').find('.' + x)) {
            $('ul.questionnaires_question-nav li').find('.' + x).click();
        }        
        else if ($('ul.questionnaires_question-cat-nav li').size() && $('ul.questionnaires_question-cat-nav li').find('.' + x)) {
            $('ul.questionnaires_question-cat-nav li').find('.' + x).click();
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

function sortableEnableCat(lang_code) {
    if (parseInt($("#table-sortingQuestion-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sortingQuestion-" + lang_code + " tbody").sortable();
        $("#table-sortingQuestion-" + lang_code + " tbody").sortable("option", "disabled", false);
        $("#table-sortingQuestion-" + lang_code + " tbody").disableSelection();
        $("#table-sortingQuestion-" + lang_code + " tbody tr").css('cursor', 'ns-resize');
    }
    return false;
}

function sortableDisableCat(lang_code) {
    if (parseInt($("#table-sortingQuestion-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sortingQuestion-" + lang_code + " tbody").sortable("disable");
        $("#table-sortingQuestion-" + lang_code + " tbody tr").css('cursor', 'default');
    }
    return false;
}

function sortableEnableQuestionnaires(lang_code) {
    if (parseInt($("#table-sortingQuestionnaires-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sortingQuestionnaires-" + lang_code + " tbody").sortable();
        $("#table-sortingQuestionnaires-" + lang_code + " tbody").sortable("option", "disabled", false);
        $("#table-sortingQuestionnaires-" + lang_code + " tbody").disableSelection();
        $("#table-sortingQuestionnaires-" + lang_code + " tbody tr").css('cursor', 'ns-resize');
    }
    return false;
}

function sortableDisableQuestionnaires(lang_code) {
    if (parseInt($("#table-sortingQuestionnaires-" + lang_code + " tbody tr").length) > 1) {
        $("#table-sortingQuestionnaires-" + lang_code + " tbody").sortable("disable");
        $("#table-sortingQuestionnaires-" + lang_code + " tbody tr").css('cursor', 'default');
    }
    return false;
}

function tableGridSearch(lang_code) {
    $("#questionnaires_questionSearch" + lang_code).keyup(function() {
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
}

function tableGridCatSearch(lang_code) {
    $("#questionnaires_questionCatSearch" + lang_code).keyup(function() {
        if ($(this).val() != "")
        {
            sortableDisableCat(lang_code);
            $("#table-sortingQuestion-" + lang_code + " tbody>tr").hide();
            $("#table-sortingQuestion-" + lang_code + " td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableEnableCat(lang_code);
            $("#table-sortingQuestion-" + lang_code + " tbody>tr").show();
        }
    });
}

function tableGridQuestionnairesSearch(lang_code) {
    $("#questionnaires_questionQuestionnairesSearch" + lang_code).keyup(function() {
        if ($(this).val() != "")
        {
            sortableDisableQuestionnaires(lang_code);
            $("#table-sortingQuestionnaires-" + lang_code + " tbody>tr").hide();
            $("#table-sortingQuestionnaires-" + lang_code + " td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            sortableEnableQuestionnaires(lang_code);
            $("#table-sortingQuestionnaires-" + lang_code + " tbody>tr").show();
        }
    });
}

function tableGridEdit(lang_code) {
    $('#table-sorting-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'questionnaires_questionStatus',
        url: '/cms/questionnaires/ajax/setStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność odpowiedzi", "Ankiety - odpowiedzi", "bottom-right");                
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                setTimeout(function() {
                    alert(data.msg);
                    location.reload();
                }, 600);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });

}

function tableGridCatEdit(lang_code) {
    $('#table-sortingQuestion-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'aktywna'}, {value: '0', text: 'wyłączona'}],
        name: 'questionnaires_questionStatus',
        url: '/cms/questionnaires/ajax/setQuestionStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność pytania", "Ankiety - pytania", "bottom-right");
                if(parseInt(data.msg) == 1){
                    setTimeout(function() {
                    location.reload();
                }, 600);
                }
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                setTimeout(function() {
                    alert(data.msg);
                    location.reload();
                }, 600);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });

}

function tableGridQuestionnairesEdit(lang_code) {
    $('#table-sortingQuestionnaires-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'aktywna'}, {value: '0', text: 'wyłączona'}],
        name: 'questionnaires_questionStatus',
        url: '/cms/questionnaires/ajax/setQuestionnairesStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność ankiety", "Ankiety", "bottom-right");
                if(parseInt(data.msg) == 1){
                    setTimeout(function() {
                    location.reload();
                }, 600);
                }
            } else if (data.type == 2) {
                showNotification(data.msg, "Error", "bottom-right");
                setTimeout(function() {
                    alert(data.msg);
                    location.reload();
                }, 600);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
        }
    }).click(function() {
        $(this).next().find('select').multiselect();
    });
}

//answer
function initLangTableGrid(lang_code) {
    initTableSort(lang_code);
    tableGridSearch(lang_code);
    tableGridEdit(lang_code);
}
//question
function initLangTableQuestionGrid(lang_code) {
    initTableCatSort(lang_code);
    tableGridCatSearch(lang_code);
    tableGridCatEdit(lang_code);
}
//questionnaires
function initLangTableQuestionnairesGrid(lang_code) {
    initTableQuestionnairesSort(lang_code);
    tableGridQuestionnairesSearch(lang_code);
    tableGridQuestionnairesEdit(lang_code);
}

$(function() {

    selectTabByHash();

    $('#addQuestionTypeSelect').multiselect();
    $('#addQuestionnairesQuestion form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });
    
    $('#addQuestionnairesLangSelect').multiselect();
    $('#addQuestion form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });

    var editMemberIcon = $('i.edit').parent(),
            answerMemberIcon = $('i.answer').parent(),
            deleteMemberIcon = $('i.delete').parent();

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });
    
    $(answerMemberIcon).tooltip({
        title: 'Lista odpowiedzi'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.edit, i.answer, i.delete').parent().hover(function() {
        $(this).children().stop().animate({
            opacity: 1
        }, 200);
    }, function() {
        $(this).children().stop().animate({
            opacity: .7
        }, 200);
    });

});

var uiSortFix = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};

function initTableSort(lang_code) {
    if (parseInt($("#table-sorting-" + lang_code + " tbody tr").length) > 1) {
        $('#table-sorting-' + lang_code + ' tbody tr').css('cursor', 'ns-resize');
        $("#table-sorting-" + lang_code + " tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('questionnaires_question-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/questionnaires/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'questionnaires_question-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Ankiety - odpowiedzi", "bottom-right");
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

function initTableCatSort(lang_code) {
    if (parseInt($("#table-sortingQuestion-" + lang_code + " tbody tr").length) > 1) {
        $('#table-sortingQuestion-' + lang_code + ' tbody tr').css('cursor', 'ns-resize');
        $("#table-sortingQuestion-" + lang_code + " tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('questionnaires_question-cat-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/questionnaires/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'questionnaires_question-id': parseInt(iId),
                            'old-position': iStartPosition,
                            'new-position': iNewPosition,
                            'is_category': 1
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Ankiety - pytania", "bottom-right");
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

function initTableQuestionnairesSort(lang_code) {
    if (parseInt($("#table-sortingQuestionnaires-" + lang_code + " tbody tr").length) > 1) {
        $('#table-sortingQuestionnaires-' + lang_code + ' tbody tr').css('cursor', 'ns-resize');
        $("#table-sortingQuestionnaires-" + lang_code + " tbody").sortable({
            helper: uiSortFix,
            start: function(event, ui) {
                ui.item.startPos = ui.item.index();
            },
            stop: function(event, ui) {
                var iStartPosition = ui.item.startPos;
                var iNewPosition = ui.item.index();
                var iId = ui.item.attr('id').replace('questionnaires_question-cat-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/questionnaires/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'questionnaires_question-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition,
                            'is_questionnaires': 1
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Ankiety", "bottom-right");
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

function deleteAnswerForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/questionnaires/ajax/deleteSite",
        type: "POST",
        data: {
            'questionnaires_question-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#questionnaires_question-list-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto odpowiedź", "Ankiety", "bottom-right");
                if ($("#table-sorting-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sorting-" + lang_code + "").parent();
                    $("#table-sorting-" + lang_code + "").fadeOut("slow");
                    setTimeout(function() {
                        tableBody.append('<p class="no_margin">BRAK ODPOWIEDZI</p>');
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

function deleteQuestionForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/questionnaires/ajax/deleteQuestion",
        type: "POST",
        data: {
            'questionnaires_question-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#questionnaires_question-cat-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto pytanie", "Ankiety - pytania", "bottom-right");
                if ($("#table-sortingQuestion-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sortingQuestion-" + lang_code + "").parent();
                    $("#table-sortingQuestion-" + lang_code + "").fadeOut("slow");
                    setTimeout(function() {
                        tableBody.append('<p class="no_margin">BRAK PYTAŃ</p>');
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

function deleteQuestionnairesForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/questionnaires/ajax/deleteQuestionnaires",
        type: "POST",
        data: {
            'questionnaires_question-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#questionnaires_question-cat-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto ankietę", "Ankiety", "bottom-right");
                if ($("#table-sortingQuestionnaires-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sortingQuestionnaires-" + lang_code).parent();
                    $("#table-sortingQuestionnaires-" + lang_code).fadeOut("slow");
                    setTimeout(function() {
                        tableBody.append('<p class="no_margin">BRAK ANKIET</p>');
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

//odpowiedz
function openEditTitleAnswerWindow(id) {
    $('#editTitleAnswer input[name="price_edit_id"]').val(id);
    var title = $('#edit_title_price_' + id).val();
    $('#editTitleAnswer input[name="price_edit_title"]').val(title);

    $('#editTitleAnswer').modal('show').on('hidden', function() {
        $('#editTitleAnswer input[name="price_edit_id"]').val("");
        $('#editTitleAnswer input[name="price_edit_title"]').val("");
    });
}

function saveEditTitleAnswerWindow(oAnchor) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitleAnswer form").unbind().submit(function(e) {
        return false;
    });
    if ($('#editTitleAnswer form').parsley().isValid()) {
        $(oAnchor).attr('onclick', '');
        var photo_id = $('#editTitleAnswer form input[name="price_edit_id"]').val();
        var photo_title = $('#editTitleAnswer form input[name="price_edit_title"]').val();
        
        $.ajax({
            url: "/cms/questionnaires/ajax/changeAnswer",
            type: "POST",
            data: {
                'type': 'changeAnswer',
                'id': photo_id,
                'title': photo_title
            },
            success: function(data) {
                if (data == 1) {
                    showNotification("Zmiany zapisano", "Ankiety - odpowiedzi", "bottom-right");
                    $("#editTitleAnswer").modal('hide');
                    $('#edit_title_price_' + photo_id).val(photo_title);
                    $('#questionnaires_question-list-item-' + photo_id + ' .questionnaires_question_title').text(photo_title);
                } else {
                    alert('Wystąpił nieoczekiwany błąd');
                    location.reload();
                }
                $(oAnchor).attr('onclick', sActionButton);
            }
        });
        return false;
    }
}

//pytanie
function openEditTitleQuestionWindow(id) {
    $('#editTitleQuestion input[name="price_edit_id"]').val(id);
    var title = $('#edit_title_price_' + id).val();
    $('#editTitleQuestion input[name="price_edit_title"]').val(title);

    $('#editTitleQuestion').modal('show').on('hidden', function() {
        $('#editTitleQuestion input[name="price_edit_id"]').val("");
        $('#editTitleQuestion input[name="price_edit_title"]').val("");
    });
}

function saveEditTitleQuestionWindow(oAnchor) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#editTitleQuestion form").unbind().submit(function(e) {
        return false;
    });
    if ($('#editTitleQuestion form').parsley().isValid()) {
        $(oAnchor).attr('onclick', '');
        var photo_id = $('#editTitleQuestion form input[name="price_edit_id"]').val();
        var photo_title = $('#editTitleQuestion form input[name="price_edit_title"]').val();
        
        $.ajax({
            url: "/cms/questionnaires/ajax/changeQuestion",
            type: "POST",
            data: {
                'type': 'changeQuestion',
                'id': photo_id,
                'title': photo_title
            },
            success: function(data) {
                if (data == 1) {
                    showNotification("Zmiany zapisano", "Ankiety - pytanie", "bottom-right");
                    $("#editTitleQuestion").modal('hide');
                    $('#edit_title_price_' + photo_id).val(photo_title);
                    $('#questionnaires_question-cat-item-' + photo_id + ' .questionnaires_question_title').text(photo_title);
                } else {
                    alert('Wystąpił nieoczekiwany błąd');
                    location.reload();
                }
                $(oAnchor).attr('onclick', sActionButton);
            }
        });
        return false;
    }
}

$(function() {    
    
    $("#memberSearch").parent().parent().unbind().submit(function (e) {
        return false;
    });
    
    var pagerOptions = {
        container: $(".pager"),
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        fixedHeight: false,
        removeRows: false,
        cssGoto: '.gotoPage'
    };

    $("#membersTable").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: true, filter: true},
            4: {sorter: false, filter: false}
        },
        dateFormat : "yyyy-mm-dd",
        sortList: [[3, 1]],
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


    $("#memberSearch").keyup(function() {
        if ($(this).val() != "")
        {
            $("#membersTable tbody>tr").hide();
            $("#membersTable td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#membersTable tbody>tr").show();
            $("#pager .last").click();
            $("#pager .first").click();
        }
    });

    $('.tablesorter-filter-row td:first').append('<div class="tableFilterRoller"></div>');
    $('.tablesorter-filter-row td').not(':first').not(':last').append('<i class="icon-play-circle moreOptions pull-right"></i>');

});