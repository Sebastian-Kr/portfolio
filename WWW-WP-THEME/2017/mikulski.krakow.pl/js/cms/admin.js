
            $(function () {
                
                $('i.icon-off_logout').parent().hover(function () {
                    $(this).children().stop().animate({
                        opacity: 1
                    }, 200);
                }, function() {
                    $(this).children().stop().animate({
                        opacity: .7
                    }, 200);
                });
                
                
            });