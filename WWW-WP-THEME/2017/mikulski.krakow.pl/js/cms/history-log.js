
$(function() {    
    
    $("#memberSearch").parent().parent().unbind().submit(function (e) {
        return false;
    });
    
    var pagerOptions = {
        // target the pager markup - see the HTML block below
        container: $(".pager"),
        // output string - default is '{page}/{totalPages}'; possible variables: {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
        output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
        // if true, the table will remain the same height no matter how many records are displayed. The space is made up by an empty
        // table row set to a height to compensate; default is false
        fixedHeight: false,
        // remove rows from the table to speed up the sort of large tables.
        // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
        removeRows: false,
        // go to page selector - select dropdown that sets the current page
        cssGoto: '.gotoPage'
    };

    /*=============================================================================================
     ======================================= LOAD TABLESORTER =====================================
     =============================================================================================*/

    $("#membersTable").tablesorter({
        headers: {
            0: {sorter: true, filter: false},
            1: {sorter: 'text'},
            2: {sorter: 'shortDate'},
            3: {sorter: true, filter: true}
        },
        dateFormat : "yyyy-mm-dd",
        // sort on the first column and third column in ascending order
        sortList: [[2, 1]],
        // hidden filter input/selects will resize the columns, so try to minimize the change
        widthFixed: true,
        // initialize zebra striping and filter widgets
        widgets: ["zebra", "filter"],
        widgetOptions: {
            // If there are child rows in the table (rows with class name from "cssChildRow" option)
            // and this option is true and a match is found anywhere in the child row, then it will make that row
            // visible; default is false
            filter_childRows: false,
            // if true, a filter will be added to the top of each table column;
            // disabled by using -> headers: { 1: { filter: false } } OR add class="filter-false"
            // if you set this to false, make sure you perform a search using the second method below
            filter_columnFilters: false,
            // css class applied to the table row containing the filters & the inputs within that row
            filter_cssFilter: 'tablesorter-filter',
            // add custom filter functions using this option
            // see the filter widget custom demo for more specifics on how to use this option
            filter_functions: null,
            // if true, filters are collapsed initially, but can be revealed by hovering over the grey bar immediately
            // below the header row. Additionally, tabbing through the document will open the filter row when an input gets focus
            filter_hideFilters: true,
            // Set this option to false to make the searches case sensitive
            filter_ignoreCase: true,
            // Delay in milliseconds before the filter widget starts searching; This option prevents searching for
            // every character while typing and should make searching large tables faster.
            filter_searchDelay: 300,
            // Set this option to true to use the filter to find text from the start of the column
            // So typing in "a" will find "albert" but not "frank", both have a's; default is false
            filter_startsWith: false,
            // Filter using parsed content for ALL columns
            // be careful on using this on date columns as the date is parsed and stored as time in seconds
            filter_useParsedData: false

        }

    })

            /*=============================================================================================
             ================================== LOAD PAGER TO TABLESORTER =================================
             =============================================================================================*/

            .tablesorterPager(pagerOptions);

    $('.pagesize').multiselect();


    /*=============================================================================================
     ================================ SEARCH FUNCTION FOR WHOLE TABLE =============================
     =============================================================================================*/

    // Write on keyup event of keyword input element
    $("#memberSearch").keyup(function() {
        // When value of the input is not blank
        if ($(this).val() != "")
        {
            // Show only matching TR, hide rest of them
            $("#membersTable tbody>tr").hide();
            $("#membersTable td:contains-ci('" + $(this).val() + "')").parent("tr").show();
        }
        else
        {
            // When there is no input or clean again, show everything back
            $("#membersTable tbody>tr").show();
            $("#pager .last").click();
            $("#pager .first").click();
        }
    });

    /*=============================================================================================
     ======================== ADD ROLLER GRIP TO TABLESORTER HIDEME ROW ===========================
     =============================================================================================*/

    $('.tablesorter-filter-row td:first').append('<div class="tableFilterRoller"></div>');

    /*=============================================================================================
     ======================= ADD MOREOPTIONS ICON TO HIDDEN ROW WITH FILTERS ======================
     =============================================================================================*/

    $('.tablesorter-filter-row td').not(':first').not(':last').append('<i class="icon-play-circle moreOptions pull-right"></i>');

    /*=============================================================================================
     ================================ TABLE ROW INFO / EDIT / DELETE ICON ACTIONS =================
     =============================================================================================*/

});

function deleteHistoryForm(oAnchor) { 
    var $ = jQuery;
    var sActionButton = $(oAnchor).attr('onclick');

    $(oAnchor).attr('onclick','');
    $.ajax({
        url: "/cms/history-log/ajax/deleteHistoryLog",
        type: "POST",
        data: {
            'name' : 'deleteHistory'
        },
        success: function(data) {
            if(data == 1){  
                var tableBody = $(".history_log_row").parent();
                setTimeout(function(){
                    tableBody.append("<tr><td> </td><td colspan='3'>Brak danych</td></tr>")
                },800);
                $(".history_log_row").fadeOut("slow", function() {
                    $(this).remove();
                });
                $("#deleteHistory").modal('hide');
                showNotification("Pomyślnie wyczyszczono historię logowania", "Historia logowania", "bottom-right");
            } else {
                 alert('Wystąpił błąd.');
                 location.reload(); 
            }
            $(oAnchor).attr('onclick',sActionButton);
        }
    });
    
}