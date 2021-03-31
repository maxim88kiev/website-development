;

var selectedColor = "#9FEE00";

jQuery(document).ready(function () {



  jQuery('#vmap').vectorMap({
      map: 'europe_en',
      backgroundColor: null,
      enableZoom: false,
      showTooltip: true,
      color: "white",
      hoverColor: selectedColor,
      selectedColor: selectedColor,
      borderWidth: 5,
      borderColor: "#5fb1bc",
      onRegionClick: function(el, code, region){

        $("#countries-container-outter").scrollTo("#" + code, 1000);
        
      },
  });

  createGradient($('svg')[0], 'MyGradient', [{
      offset: '0%',
      'stop-color': '#23e2c6'
  },
  {
      offset: '100%',
      'stop-color': '#198c7b'
  }]);

  initializeMapColors();

});


function createGradient(svg, id, stops) {
    var svgNS = svg.namespaceURI;
    var grad = document.createElementNS(svgNS, 'linearGradient');
    grad.setAttribute("x1", "0%");
    grad.setAttribute("x2", "0%");
    grad.setAttribute("y1", "100%");
    grad.setAttribute("y2", "0%");
    grad.setAttribute('id', id);
    for (var i = 0; i < stops.length; i++) {
        var attrs = stops[i];
        var stop = document.createElementNS(svgNS, 'stop');
        for (var attr in attrs) {
            if (attrs.hasOwnProperty(attr)) stop.setAttribute(attr, attrs[attr]);
        }
        grad.appendChild(stop);
    }

    var defs = svg.querySelector('defs') || svg.insertBefore(document.createElementNS(svgNS, 'defs'), svg.firstChild);
    return defs.appendChild(grad);
};




function initializeMapColors() {

  for(var i = 0; i < $("#vmap")[0].firstChild.childNodes[1].childNodes.length; i++){
    $("#" + $("#vmap")[0].firstChild.childNodes[1].childNodes[i].id).attr('fill', 'url(#MyGradient)');
    $("#" + $("#vmap")[0].firstChild.childNodes[1].childNodes[i].id).attr('original', 'url(#MyGradient)');
  }

};