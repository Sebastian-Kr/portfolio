function selectTabByHash() {
    var x = window.location.hash;
    if (x) {
        x = x.substring(1);
        x = x.replace('Link', '');
        if ($('ul.nav-contact li').find('.' + x)) {
            var href = $('ul.nav-contact li').find('.' + x).attr('href')
            if (href) {
                href = href.replace('Link', '');
                $previous = $('ul.nav-contact li').find('.' + x).closest('ul.nav-tabs').find('li.active');

                //show one particular menu
                $(href).parent().children().hide();
                $(href).fadeIn();

                $previous.removeClass('active');
                $('ul.nav-contact li').find('.' + x).parent().stop().addClass('active');
                if (href.indexOf("Lang") < 0) {
                    location.href = href + 'Link';
                }
            }
        }
    }
}

$(function () {

    selectTabByHash();

    var $Lang = $('.container-fluid .nav-tabs li.active a img').attr('alt');
    if (!$Lang) {
        $Lang = "PL";
    }
    var $Lat = $("input[name$='latitude_" + $Lang + "']").val();
    var $Lng = $("input[name$='longitude_" + $Lang + "']").val();
    mapsInit($Lang, $Lat, $Lng);

    $('.container-fluid .nav-tabs li a').click(function () {
        var $Lang = $('.container-fluid .nav-tabs li.active a img').attr('alt');
        var $Lat = $("input[name$='latitude_" + $Lang + "']").val();
        var $Lng = $("input[name$='longitude_" + $Lang + "']").val();
        mapsInit($Lang, $Lat, $Lng);
    });


});


function mapsInit($Lang, $Lat, $Lng) {
    var zoom = 2;
    var lat = '';
    var lng = '';
    if ($Lat != '' && $Lng != '') {
        zoom = 12;
        lat = $Lat;
        lng = $Lng;
    } else {
        zoom = 8;
        lat = '49.7839242';
        lng = '22.7644729';
    }
    $('#geolocation_' + $Lang).gmap({'center': +lat + ',' + lng, 'zoom': zoom}).bind('init', function (event, map) {
        $('#geolocation_' + $Lang).gmap('clear', 'markers');
        $(map).click(function (event) {
            $('#geolocation_' + $Lang).gmap('clear', 'markers');
            $('#geolocation_' + $Lang).gmap('addMarker', {
                'position': event.latLng,
                'draggable': true,
                'bounds': false
            }, function (map, marker) {
                $("input[name$='latitude_" + $Lang + "']").val(marker.getPosition().lat());
                $("input[name$='longitude_" + $Lang + "']").val(marker.getPosition().lng());

            }).dragend(function (event) {
                $("input[name$='latitude_" + $Lang + "']").val(event.latLng.lat());
                $("input[name$='longitude_" + $Lang + "']").val(event.latLng.lng());
            }).click(function () {

            })
        });

        if ($Lat != '' && $Lng != '') {
            $('#geolocation_' + $Lang).gmap('addMarker', {'draggable': true, 'position': new google.maps.LatLng($Lat, $Lng)}).dragend(function (event) {
                $("input[name$='latitude_" + $Lang + "']").val(event.latLng.lat());
                $("input[name$='longitude_" + $Lang + "']").val(event.latLng.lng());
            })
        }
    });
}
function deleteMarker($Lang) {
    $('#geolocation_' + $Lang).gmap('clear', 'markers');
    $("input[name$='latitude_" + $Lang + "']").val('');
    $("input[name$='longitude_" + $Lang + "']").val('');
}