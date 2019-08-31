
$(function() {    
    
    $('#tablesorterDemo').tablesorter({
        sortList: [[1, 0]],
        widgets: ['zebra', 'stickyHeaders'],
        headers: {
            0: {
                sorter: 'checkbox'
            }
        }
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
            4: {sorter: true, filter: true},
            5: {sorter: false, filter: false}
        },
        dateFormat: 'uk',
        sortList: [[2, 1]],
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


    
    var deleteMemberIcon = $('i.delete').parent();

    $(deleteMemberIcon).tooltip({
        title: 'Usuń użytkownika'
    });

    $('i.delete').parent().hover(function() {
        $(this).children().stop().animate({
            opacity: 1
        }, 200);
    }, function() {
        $(this).children().stop().animate({
            opacity: .7
        }, 200);
    });


});

function deleteUsersNewsletter(id) { 
    var $ = jQuery;
    $("#windows-ask-confirm").modal('hide');
    $.ajax({
        url: "/cms/newsletter-users/ajax/deleteNewsletterUser",
        type: "POST",
        data: {
            'name' : 'deleteUser',
            'id-user' : id
        },
        success: function(data) {
            if(data == 1){  
                $(".newsletter_users_row_"+id).fadeOut("slow", function() {
                    $(this).remove();
                });
                if($('.newsletter_users_row').size()<=1){
                    var tableBody = $(".newsletter_users_row").parent();
                    setTimeout(function(){
                        tableBody.append("<tr><td> </td><td colspan='5'>Brak użytkowników</td></tr>")
                    },600);
                }
                showNotification("Usunięto użytkownika newslettera", "Użytkownicy newslettera", "bottom-right");
            } else {
                 alert('Wystąpił błąd.');
                 location.reload(); 
            }
        }
    });
    
}