
    $(document).ready(function(){
console.log(mapka.all_pins);
var all_pins = '{latLng:[49.738915, 19.91362], data: "OPC Ambulatorium NiŚOZ<br>Radziszów, ul. Szkolna 15", options:{icon: "http://opc.sebek88.linuxpl.info/wp-content/themes/opc3/img/siedziba-icon.png"}}';

        var styles = [
            {
                stylers: [
                    { hue: "gray" },
                    { saturation: -100 }
                ]
            },
            {
                featureType: "road",
                elementType: "geometry",
                stylers: [
                    { lightness: 50 },
                    { visibility: "simplified" }
                ]
            },
            {
                featureType: "road",
                elementType: "labels",
                stylers: [
                    { visibility: "on" },
                    { lightness: 50 },
                    { hue: "#1d94d5" }
                ]
            }
  ];


     $("#map").gmap3({
  map:{
    options:{
   key: 'AIzaSyAd5umLoBpJ2LvMVPpMeyQntJ78zPDZfPQ',
           center:[50.133664, 19.628180],
           zoom: 9,
           styles: styles,
           scrollwheel: false,
    navigationControl: false,
    mapTypeControl: false,
    scaleControl: false,
    draggable: true
    }
  },
  marker:{
    values:[

      mapka.all_pins,
      // {latLng:[49.738915, 19.91362], data: "OPC Ambulatorium NiŚOZ<br>Radziszów, ul. Szkolna 15", options:{icon: "http://opc.sebek88.linuxpl.info/wp-content/themes/opc3/img/siedziba-icon.png"}},
      // {latLng:[49.938915, 19.81362], data: "OPC Ambulatorium NiŚOZ<br>Radziszów, ul. Szkolna 15", options:{icon: "http://opc.sebek88.linuxpl.info/wp-content/themes/opc3/img/karetka-icon.png"}},


      // {latLng:[mapka.gps11, mapka.gps12], data: mapka.desc1, options:{icon: mapka.pin_icon1}},
    //   {latLng:[mapka.gps21, mapka.gps22], data: mapka.desc2, options:{icon: mapka.pin_icon2}},
    //   {latLng:[mapka.gps31, mapka.gps32], data: mapka.desc3, options:{icon: mapka.pin_icon3}},
    //   {latLng:[mapka.gps41, mapka.gps42], data: mapka.desc4, options:{icon: mapka.pin_icon4}},
    //   {latLng:[mapka.gps51, mapka.gps52], data: mapka.desc5, options:{icon: mapka.pin_icon5}},
    //   {latLng:[mapka.gps61, mapka.gps62], data: mapka.desc6, options:{icon: mapka.pin_icon6}},
    //   {latLng:[mapka.gps71, mapka.gps72], data: mapka.desc7, options:{icon: mapka.pin_icon7}},
    //   {latLng:[mapka.gps81, mapka.gps82], data: mapka.desc8, options:{icon: mapka.pin_icon8}},
    //   {latLng:[mapka.gps91, mapka.gps92], data: mapka.desc9, options:{icon: mapka.pin_icon9}},
    //   {latLng:[mapka.gps101, mapka.gps102], data: mapka.desc10, options:{icon: mapka.pin_icon10}},
    //   {latLng:[mapka.gps111, mapka.gps112], data: mapka.desc11, options:{icon: mapka.pin_icon11}},
    //   {latLng:[mapka.gps121, mapka.gps122], data: mapka.desc12, options:{icon: mapka.pin_icon12}},
    //   {latLng:[mapka.gps131, mapka.gps132], data: mapka.desc13, options:{icon: mapka.pin_icon13}},
    //

    ],
    options:{
      draggable: false
    },
    events:{
      mouseover: function(marker, event, context){
        var map = $(this).gmap3("get"),
          infowindow = $(this).gmap3({get:{name:"infowindow"}});
        if (infowindow){
          infowindow.open(map, marker);
          infowindow.setContent(context.data);
        } else {
          $(this).gmap3({
            infowindow:{
              anchor:marker,
              options:{content: context.data}
            }
          });
        }
      },

    }
  }
});

    });
