var infowindow = null;

function initialize() {
  var mapOptions = {
      center: new google.maps.LatLng(54.897569, 23.909954),
      zoom: 16
  };
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  setMarkers(map, vendors);
  infowindow = new google.maps.InfoWindow({
    content: "loading..."
  });
}

var vendors = [
  ['Vendor 1', 54.897243, 23.917481, 1, 'This is vendor 1. Some information about him/her.','Food'],
  ['Vendor 2', 54.897223, 23.917621, 2, 'This is vendor 2. Some information about him/her.','Food'],
  ['Vendor 3', 54.897213, 23.917801, 3, 'This is vendor 3. Some information about him/her.','Clothes'],
  ['Vendor 4', 54.897203, 23.918101, 4, 'This is vendor 4. Some information about him/her.','Food'],
  ['Vendor 5', 54.897193, 23.918301, 5, 'This is vendor 5. Some information about him/her.','Crafts'],
  ['Vendor 6', 54.897173, 23.918601, 6, 'This is vendor 6. Some information about him/her.','Crafts'],
  ['Vendor 7', 54.897173, 23.918701, 7, 'This is vendor 7. Some information about him/her.','Crafts'],
  ['Vendor 8', 54.897163, 23.918901, 8, 'This is vendor 8. Some information about him/her.','Drinks'],
  ['Vendor 9', 54.897143, 23.919301, 9, 'This is vendor 9. Some information about him/her.','Clothes'],
  ['Vendor 10', 54.897133, 23.919601, 10, 'This is vendor 10. Some information about him/her.','Drinks']
];

function setMarkers(map, markers) {
  for(var i=0; i<markers.length; i++){
    var vendors = markers[i];
    var siteLatLng = new google.maps.LatLng(vendors[1], vendors[2]);
    var marker = new google.maps.Marker({
        position: siteLatLng,
        map: map,
        title: vendors[0],
        zIndex: vendors[3],
        html: vendors[4]
    });

    var contentString = "Some content";

    google.maps.event.addListener(marker, "click", function () {
        infowindow.setContent(this.html);
        infowindow.open(map, this);
    });
  }
}

google.maps.event.addDomListener(window, 'load', initialize);