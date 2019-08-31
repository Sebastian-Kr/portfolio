function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.nav-translate li').find('.' + x)) {
            var href = $('ul.nav-translate li').find('.' + x).attr('href'),
                    href = href.replace('Link', '');
            $previous = $('ul.nav-translate li').find('.' + x).closest('ul.nav-tabs').find('li.active');

            //show one particular menu
            $(href).parent().children().hide();
            $(href).fadeIn();

            $previous.removeClass('active');
            $('ul.nav-translate li').find('.' + x).parent().stop().addClass('active');
            if (href.indexOf("Lang") < 0) {
                location.href = href + 'Link';
            }
        }
    }
}

$(function () {
    selectTabByHash();
});