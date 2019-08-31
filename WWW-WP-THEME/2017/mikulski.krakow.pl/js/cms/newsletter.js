
function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');

        var sTabs = x.split("_");
        var sTabLang = "";
        var iSection = "";
        
        if (sTabs.length == 2) {
            x = sTabs[0]+'_'+sTabs[1];
        }else if (sTabs.length == 3) {
            x = sTabs[0]+'_'+sTabs[1];
            iSection = sTabs[2];
            sTabLang = "TabNewsletter_" + sTabs[1]+'_'+iSection;
        }
        
        if ($('ul.newsletter_campaign-nav li').find('.' + x)) {
            $('ul.newsletter_campaign-nav li').find('.' + x).click();
        }

        if (sTabLang != "" && $('ul.newsletter_campaign-nav-lang li').find('.' + sTabLang)) {
            $('ul.newsletter_campaign-nav-lang li').find('.' + sTabLang).click();
        }

    }
}

function tableGridSearch(lang_code) {
    $("#newsletter_campaignSearch" + lang_code).parent().parent().unbind().submit(function(e) {
        return false;
    });

    $("#newsletter_campaignSearch" + lang_code).keyup(function() {
        if ($(this).val() != "")
        {
            $("#table-sorting-" + lang_code + " tbody>tr").hide();
            $("#table-sorting-" + lang_code + " td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            $("#table-sorting-" + lang_code + " tbody>tr").show();
        }
    });
}

function tableGridEdit(lang_code) {
    $('#table-sorting-' + lang_code + ' a.newsStatus').editable({
        type: 'select',
        source: [{value: '1', text: 'włączona'}, {value: '0', text: 'wyłączona'}],
        name: 'newsletter_campaignsStatus',
        url: '/cms/newsletter/ajax/setStatus',
        title: 'Wybierz status kampanii',
        send: 'always',
        success: function(data) {
            var data = $.parseJSON(data);
            if (data.type == 1) {
                var label = $(this).parent() // define variable for link parent
                selectVal = $(this).next().find('select').val(); // define variable for selected value
                selectVal = parseInt(selectVal) > 0 ? 'active' : '';
                $(label).removeClass().addClass('label' + ' ' + selectVal); // remove actual class from label and add new class defined by selected value (this change color of label)
                showNotification("Zmieniono aktywność kampanii", "Newsletter", "bottom-right");
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

$(function() {

    selectTabByHash();

    $('#addNewsletterLangSelect').multiselect();
    $('#addNewsletter form').parsley({
        excluded: 'ul.dropdown-menu li input[type=radio]'
    });

});

var uiSortFix = function(e, ui) {
    ui.children().each(function() {
        $(this).width($(this).width());
    });
    return ui;
};

function initTableSort(lang_code) {

    var pagerOptions = {
        container: $(".pager"+lang_code),
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        fixedHeight: false,
        removeRows: false,
        cssGoto: '.gotoPage'
    };

    $("#table-sorting-"+lang_code).tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: 'shortDate'},
            4: {sorter: 'shortDate'},
            5: {sorter: 'text'},
            6: {sorter: false, filter: false}
        },
        dateFormat: 'uk',
        sortList: [[0, 1]],
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
    $('.pagesize'+lang_code).multiselect();

}

$(window).load(function() {
    initTableFilesSort();
});

function deleteNewsletterForm(oAnchor, id, lang_code) {
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $(oAnchor).attr('onclick', '');
    $.ajax({
        url: "/cms/newsletter/ajax/deleteSite",
        type: "POST",
        data: {
            'newsletter_campaigns-id': id
        },
        success: function(data) {
            if (data == 1) {
                $("#newsletter_campaign-list-item-" + id).fadeOut("slow", function() {
                    $(this).remove();
                });
                $('#windows-ask-confirm').modal('hide');
                showNotification("Usunięto kampanię", "Newsletter", "bottom-right");
                if ($("#table-sorting-" + lang_code + " tbody tr").length < 2) {
                    var tableBody = $("#table-sorting-" + lang_code + "").parent();
                    $("#table-sorting-" + lang_code + "").fadeOut("slow");
                    $("#pager" + lang_code + "").fadeOut("slow");
                    setTimeout(function() {
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

//files

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
                        url: "/cms/newsletter/ajax/setNewOrderFiles",
                        type: "POST",
                        data: {
                            'newsletter-files-id' : iId,
                            'old-position' : iStartPosition,
                            'new-position' : iNewPosition
                        },
                        success: function(data) {
                            if(data == 1){
                                showNotification("Zapisano zmianę kolejności", "Newsletter - załączniki", "bottom-right");
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

function refreshFilesTab(iId) {
    $.ajax({
        url: "/cms/newsletter/ajax/refresh-filestab",
        type: "POST",
        data: {
            'newsletter-id': iId
        },
        success: function(data) {
            $('#TabAttachments').html(data);
            initTableFilesSort();
        }
    });
}


function deleteSiteFile(iId) {    
    $('#windows-ask-confirm').modal('hide');    
    $.ajax({
        url: "/cms/newsletter/ajax/delete-site-file",
        type: "POST",
        data: {
            'newsletter-files-id' : iId
        },
        success: function(data) {
            $('#file-list-item-'+iId).fadeOut("slow", function() {
                $(this).remove();
            });
            showNotification("Plik został usunięty", "Newsletter - załączniki", "bottom-right");
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
            url: "/cms/newsletter/ajax/changeFileTitle",
            type: "POST",
            data: {
                'file-type' : 'changeFileTitle',
                'file-id' : file_id,
                'file-title' : file_title
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Tytuł pliku zapisano", "Newsletter - załączniki", "bottom-right");
                    $("#editTitleFile").modal('hide');
                    $("#file-list-item-"+file_id).find(".file_title").html(file_title);                    
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


//wykres

function showChart(id){
        
        $.ajax({
            url: "/cms/newsletter/ajax/getNewsletterStat",
            type: "POST",
            data: {
                'type': 'getNewsletterStat',
                'id': id
            },
            success: function(data) {
                var data = $.parseJSON(data);
                if (data.type == 1) {
                    //otwieramy okienko i rysujemy wykres...
                    var dataPie = [];
                    var dataPie2 = [];
                    $.each( data.answer, function( index, value ){
                        dataPie[index] = {
                            label: value.title,
                            data: value.count
                        };
                        dataPie2[index] = [index,value.count];
                        
                    });
                        
                    if(dataPie.length > 1){
                        openStatysticWindow(dataPie,dataPie2);
                    } else {
                        showNotification("Brak danych dla tej kampanii", "Newsletter - statystyki", "bottom-right");
                    }
                } else {
                    showNotification("Brak danych dla tej kampanii", "Newsletter - statystyki", "bottom-right");
                }
            }
        });
    
}


function labelFormatter(label, series) {
    return "<div style='font-size:10px; text-align:center; padding:2px; color:white;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
}

function showTooltipBar(x, y, contents) {
    $('<div id="tooltipBar">' + contents + '</div>').css({
        top: y - 16,
        left: x + 20
    }).appendTo('body').fadeIn();
};

function openStatysticWindow(dataPie,dataPie2) {
    $('#showNewsletterStatystic').modal('show');
        setTimeout(function(){
            
            var randomData = [{
                data: dataPie2,
                color: '#2B81A0'
            }];
            var months = ["Wszystkie wiadomości", "Wiadomości wysłane", "Wiadomości niewysłane", "Wiadomości do wysyłki"];
        $.plot($('#probeChart'), randomData, {
                series: {
                    bars: {
                        show: true,
                        barWidth: .7,
                        align: 'center'
                    },
                    shadowSize: 1
                },
                legend: {
                    show: true
                },
                grid: {
                    color: 'rgba(0,0,0, .8)',
                    borderColor: 'rgba(0,0,0, .8)',
                    borderWidth: 1,
                    hoverable: true
                },
                xaxis: {
                    ticks: [[0,"Wszystkie"], [1, "Wysłane"], [2, "Niewysłane"], [3, "Pozostałe"]],
                    tickColor: 'transparent',
                    tickDecimals: 2
                },
            });

            var previousPoint = null;

            $('#probeChart').bind('plothover', function (event, pos, item) {
                console.log(item);
                if (item) {
                    if (previousPoint != item.dataIndex) {
                        previousPoint = item.dataIndex;
                       $('#tooltipBar').remove();
                        var x = item.datapoint[0],
                            y = item.datapoint[1];
                            showTooltipBar(item.pageX, item.pageY, months[x] + '<br/>' + '<strong class="cyanText">' + y + '</strong>' + ' ' + 'wiadomości');
                    }
                } else {
                    $('#tooltipBar').remove();
                    previousPoint = null;
                }
            });
            
        },600);

    $('#showNewsletterStatystic').modal('show').on('hidden', function() {
        $('#showNewsletterStatystic #probeChart').text("");
    });
}


function sendTestEmailForm(oAnchor) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');
    $("#send_test_email_form").unbind().submit( function(e) { return false; } );
    if($('#send_test_email_form').parsley().isValid()){
        $(oAnchor).attr('onclick','');
        $.ajax({
            url: "/cms/newsletter/ajax/sendTestEmail",
            type: "POST",
            data: {
                'newsletter-type' : 'sendTestEmail',
                'newsletter-email' : $('#sendTestEmail input[name="newsletter_campaign_email"]').val(),
                'newsletter-title' : $('#TabData input[name="newsletter_campaign_name"]').val(),
                'newsletter-description' : $('#TabData textarea[name="site_content"]').val(),
                'newsletter-id' : $('#TabData input[name="id"]').val()
            },
            success: function(data) {
                if(data == 1){
                    showNotification("Wysłano testowego maila na: "+$('#sendTestEmail input[name="newsletter_campaign_email"]').val(), "Newsletter", "bottom-right");
                    $("#sendTestEmail").modal('hide');
                    $('#sendTestEmail input[name="newsletter_campaign_email"]').val("")
                } else if(data == 2) {
                     showNotification("Wystąpił błąd wysyłki maila", "Error", "bottom-right");
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

function validateNewsletterForm(){    
    
    var now = new Date(); 
    var dateStart = $('input[name="newsletter_campaign_start"]').val();      
    var aTmp = dateStart.split(" ");
    var specificDate = new Date(aTmp[0]+"T"+aTmp[1]+"Z");

    if (now.getTime() > specificDate.getTime()){
        showNotification("Podaj późniejszą datę startu", "Error", "bottom-right");
        return false;
    } else {
         return true;
    }   
    
}