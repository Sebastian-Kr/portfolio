

///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
// build_app
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////

// Setup variable

var close_button = document.getElementById("close");
var floors = document.querySelectorAll(".floor_shape");
var floor_panel = document.getElementById("floor_panel");
var floor_shema = document.getElementById("floor_shema");
var floor_shema_box = document.getElementById('floor_shema_box');
var tooltipBox = document.getElementById('tooltip-box');
var floor_img = document.getElementById("floor_img");
var floor_title = document.getElementById("floor_title");
var floor_size = document.getElementById("floor_size");
var floor_desc = document.getElementById("floor_desc");
var floor_pdf = document.getElementById("floor_pdf");



// Check language version
if (window.location.toString().includes("en")) {
  var langENG = true;
  var lang = 'en/';
  // console.log('angielska wersja');

} else {
  var langENG = false;
  var lang = '';
  // console.log('polska wersja');
}

// Add event listeners to build_shema

for (var i = 0; i < floors.length; i++) {
  floors[i].addEventListener("click",
    function(event) {
      var floorID = this.getAttribute("data-floorid");
      activateFloor_shema(floorID);
    },
    false
  );
}


//Close floor shema



close_button.addEventListener("click", function(){
  closeFloorPanel();
});

function closeFloorPanel(){

  floor_panel.classList.remove("active");
  var allPolygons = document.querySelectorAll('#floor_panel polygon');

  for (var i = 0; i < allPolygons.length; i++) {

  polygonItem = allPolygons[i];



  polygonItem.removeAttribute("data-flatId");
  polygonItem.removeAttribute("points");
  polygonItem.removeAttribute("class");

  var new_polygon = polygonItem.cloneNode(true);
  polygonItem.parentNode.replaceChild(new_polygon, polygonItem);
};
};

// Get data by REST API
// console.log(langENG);
if (langENG) {
  // console.log('Start english switch');
    var request = new XMLHttpRequest();
    var apiUrl = 'https://mateczny.com/wp-json/wp/v2/pages/5';
    request.open('GET', apiUrl, true);
    request.onload = function() {
      var data = JSON.parse(this.response);
      console.log('REST API ENG SWITCHER RUN');

      var header_catalog_content = data.acf.header_download_cat_eng;
      // console.log(header_catalog_content);
      var header_catalog = document.getElementById("header_catalog");
      header_catalog.setAttribute("href", header_catalog_content);

      var standard_catalog_content = data.acf.standard_file_eng;
      // console.log(standard_catalog_content);
      var standard_catalog = document.getElementById("standard_catalog");
      standard_catalog.setAttribute("href", standard_catalog_content)


    }
    request.send();
}

// Activate floor shema and get Api content
function activateFloor_shema(post_id) {
  var request = new XMLHttpRequest();
  var apiUrl = 'https://mateczny.com/'+lang+'wp-json/wp/v2/floor/'+ post_id;
  // console.log(apiUrl);
  request.open('GET', apiUrl, true);
  request.onload = function() {
    var data = JSON.parse(this.response);
    // console.log(data.id);
    renderFloorPanel(data);

  }
  request.send();
}




// Render single floor
function renderFloorPanel(data) {

  history.pushState(null, null, location.href);
      window.onpopstate = function () {
          history.go(1);
          closeFloorPanel();
      };

  floor_title.innerHTML = data.title.rendered;
  floor_desc.innerHTML = data.content.rendered;
  floor_size.innerHTML = data.acf.floor_area;
  if (langENG) {
    floor_pdf.setAttribute("href", data.acf.document_pdf_eng);
  } else {
    floor_pdf.setAttribute("href", data.acf.document_pdf);
  }
  floor_img.setAttribute("href", data.acf.floor_img);
  floor_img.setAttribute("xlink:href", data.acf.floor_img);
  floor_img.setAttribute("x:href", data.acf.floor_img);
  floor_img.setAttribute("src", data.acf.floor_img);
  floor_panel.classList.add('active');
  var flatArray = data.acf.flat_loop;
  var counter = 0;

  flatArray.forEach(function(flatData){
    counter++;

    renderFlatPolygon(flatData, counter);


  });


}




// Render single flat
function renderFlatPolygon(flatData, id){

  var currentFlatPolygon = document.getElementById('lp_'+id);
  var currentFlatID = flatData.local_id;


  // console.log(currentFlatPolygon);
  currentFlatPolygon.setAttribute("data-flatId", flatData.local_id);
  currentFlatPolygon.setAttribute("points", flatData.flat_coordinates);
  currentFlatPolygon.classList.add("flat_shape");
  currentFlatPolygon.classList.add(flatData.local_status);

  importcurrentFlatData(currentFlatID, currentFlatPolygon);

  currentFlatPolygon.addEventListener("mousemove", renderTooltop=function(event) {
    tooltipBox.style.display = "none";
    tooltipBox.innerHTML = '';

            // RENDR TOOLTIP
            var flatContent = currentFlatPolygon.getAttribute("data-content");
            var flatTitle = currentFlatPolygon.getAttribute("data-title");
            var flatSize = currentFlatPolygon.getAttribute("data-size");

            var statusName = flatData.local_status;
            if (window.location.toString().includes("en")) {

              if (flatData.local_status == 'Wolny') {statusName = 'free'}
              if (flatData.local_status == 'Zarezerwowany') {statusName = 'reserved'}
              if (flatData.local_status == 'Sprzedany') {statusName = 'sold'}

            }

            var tooltipContentStatus = '<div class="status '+flatData.local_status+'">'+statusName+'</div>';
            var tooltipContent = '<div class="content">'+flatContent+'</div><h6>'+flatTitle+'</h6>';
            var tooltipContent2 = '<strong>('+flatSize+')</strong>';

            tooltipBox.insertAdjacentHTML('beforeend', tooltipContentStatus);
            tooltipBox.insertAdjacentHTML('beforeend', tooltipContent);
            tooltipBox.insertAdjacentHTML('beforeend', tooltipContent2);
            tooltipBox.style.display = "block";



    var x = event.clientX,
      y = event.clientY;
    tooltipBox.style.top = (y + 30) + 'px';
    tooltipBox.style.left = (x - 70) + 'px';

  });

  currentFlatPolygon.addEventListener("mouseleave", function(event) {
          tooltipBox.style.display = "none";
          tooltipBox.innerHTML = '';
          // console.log('hidetooltip2');
      }, false);


}

function importcurrentFlatData(flat_id, currentPolygon) {

  var request = new XMLHttpRequest();
  var apiUrl = 'https://mateczny.com/'+lang+'wp-json/wp/v2/flat/' + flat_id;
  // console.log(apiUrl);
  request.open('GET', apiUrl, true);
  request.onload = function() {
    var currentFlatData = JSON.parse(this.response);
      currentPolygon.setAttribute("data-content", currentFlatData.content.rendered);
      currentPolygon.setAttribute("data-title", currentFlatData.title.rendered);
      currentPolygon.setAttribute("data-size", currentFlatData.acf.local_size);
    // console.log('Polygon is done');
    // console.log(currentPolygon);
  }
  request.send();
}


///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
// build_app end
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
