function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.probe_question-nav li').size() && $('ul.probe_question-nav li').find('.' + x)) {
            $('ul.probe_question-nav li').find('.' + x).click();
        }        
        else if ($('ul.probe_question-cat-nav li').size() && $('ul.probe_question-cat-nav li').find('.' + x)) {
            $('ul.probe_question-cat-nav li').find('.' + x).click();
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

function tableGridSearch(lang_code) {
    $("#probe_questionSearch" + lang_code).keyup(function() {
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
    $("#probe_questionCatSearch" + lang_code).keyup(function() {
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

function tableGridEdit(lang_code) {
    $('#table-sorting-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączony'}, {value: '0', text: 'wyłączony'}],
        name: 'probe_questionStatus',
        url: '/cms/probe/ajax/setStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność odpowiedzi", "Sondy", "bottom-right");                
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
        name: 'probe_questionStatus',
        url: '/cms/probe/ajax/setQuestionStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność sondy", "Sondy", "bottom-right");
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

    $('#table-sortingQuestion-' + lang_code + ' a.newsIsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'tak'}, {value: '0', text: 'nie'}],
        name: 'probe_questionIsStatus',
        url: '/cms/probe/ajax/setIsQuestionStatus',
        title: 'Wybierz status',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'red' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność głosowania", "Sondy", "bottom-right");
                if (selectVal == 'red') {
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


function initLangTableGrid(lang_code) {
    initTableSort(lang_code);
    tableGridSearch(lang_code);
    tableGridEdit(lang_code);
}

function initLangTableCatGrid(lang_code) {
    initTableCatSort(lang_code);
    tableGridCatSearch(lang_code);
    tableGridCatEdit(lang_code);
}

$(function() {

    selectTabByHash();
    $('#addAnswerLangSelect').multiselect();
    $('#addAnswer form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });

    $('#addProbeLangSelect').multiselect();
    $('#addSectionType').multiselect();
    $('#addProbeQuestion form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });

    var editMemberIcon = $('i.edit').parent(),
            chartMemberIcon = $('i.chart').parent(),
            deleteMemberIcon = $('i.delete').parent();

    $(editMemberIcon).tooltip({
        title: 'Edycja'
    });

    $(chartMemberIcon).tooltip({
        title: 'Statystyki'
    });

    $(deleteMemberIcon).tooltip({
        title: 'Usuń'
    });

    $('i.edit, i.chart, i.delete').parent().hover(function() {
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
                var iId = ui.item.attr('id').replace('probe_question-list-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/probe/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'probe_question-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Sondy", "bottom-right");
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
                var iId = ui.item.attr('id').replace('probe_question-cat-item-', '');
                if (iStartPosition != iNewPosition) {
                    $.ajax({
                        url: "/cms/probe/ajax/setNewOrder",
                        type: "POST",
                        data: {
                            'probe_question-id': iId,
                            'old-position': iStartPosition,
                            'new-position': iNewPosition,
                            'is_category': 1
                        },
                        success: function(data) {
                            if (data == 1) {
                                showNotification("Zapisano zmianę kolejności", "Sondy", "bottom-right");
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
        url: "/cms/probe/ajax/deleteSite",
        type: "POST",
        data: {
            'probe_question-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#probe_question-list-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto odpowiedź", "Sondy", "bottom-right");
                if ($("#table-sorting-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sorting-" + lang_code + "").parent();
                    $("#table-sorting-" + lang_code + "").fadeOut("slow");
                    setTimeout(function() {
                        tableBody.append('<p class="no_margin">BRAK DANYCH</p>');
                    }, 600);
                }
                setTimeout(function() {
                    location.reload();
                }, 600);
            } else {
                alert('Wystąpił nieoczekiwany błąd');
                location.reload();
            }
            $(oAnchor).attr('onclick', sActionButton);
        }
    });

}

function deleteProbeForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/probe/ajax/deleteProbe",
        type: "POST",
        data: {
            'probe_question-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#probe_question-cat-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto sondę", "Sondy", "bottom-right");
                if ($("#table-sortingQuestion-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sortingQuestion-" + lang_code).parent();
                    $("#table-sortingQuestion-" + lang_code).fadeOut("slow");
                    setTimeout(function() {
                        tableBody.append('<p class="no_margin">BRAK SOND</p>');
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
            url: "/cms/probe/ajax/changeAnswer",
            type: "POST",
            data: {
                'type': 'changeAnswer',
                'id': photo_id,
                'title': photo_title
            },
            success: function(data) {
                if (data == 1) {
                    showNotification("Zmiany zapisano", "Sondy - odpowiedzi", "bottom-right");
                    $("#editTitleAnswer").modal('hide');
                    $('#edit_title_price_' + photo_id).val(photo_title);
                    $('#probe_question-list-item-' + photo_id + ' .probe_question_title').text(photo_title);
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

function showChart(id){
        
        $.ajax({
            url: "/cms/probe/ajax/getProbeStat",
            type: "POST",
            data: {
                'type': 'getProbeStat',
                'id': id
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if (data.type == 1) {
                    //otwieramy okienko i rysujemy wukres...
                    var dataPie = [];
                    $.each( data.answer, function( index, value ){
                        dataPie[index] = {
                            label: value.name,
                            data: value.count_rating
                        };
                    });
                        
                        
                    if(dataPie.length > 1){
                        openStatysticWindow(dataPie);
                    } else {
                        showNotification("Brak danych dla tej sondy", "Sondy - statystyki", "bottom-right");
                    }
                } else {
                    showNotification("Brak danych dla tej sondy", "Sondy - statystyki", "bottom-right");
                }
            }
        });
    
}


function labelFormatter(label, series) {
    return "<div style='font-size:10px; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}

function openStatysticWindow(dataPie) {
    $('#showProbeStatystic').modal('show');
        setTimeout(function(){
        $.plot('#probeChart', dataPie, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 1,
                        formatter: labelFormatter,
                        background: {
                            opacity: 0.8
                        }
                    }
                }
            },
            legend: {
                show: true
            }
        });
        },600);

    $('#showProbeStatystic').modal('show').on('hidden', function() {
        $('#showProbeStatystic #probeChart').text("");
    });
}