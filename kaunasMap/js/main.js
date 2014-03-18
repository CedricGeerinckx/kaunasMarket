var infowindow = null;

function initialize() {
  var mapOptions = {
      center: new google.maps.LatLng(54.897569, 23.909954),
      zoom: 16,
      mapTypeControl: false,
      streetViewControl: false
  };
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  //call function to create markers
  setMarkers(map, vendors);
  infowindow = new google.maps.InfoWindow({
    content: "loading..."
  });
}


//Categories: 1= food, 2=clothes, 3=crafts, 4=drinks, 5=other

var markerGroups = { 1: [], 2: [], 3: [], 4: [], 5: []};
var vendors = [
  ['Vendor 1', 54.897243, 23.917481, 1, 'This is vendor 1.<br/> Click for more information.',1],
  ['Vendor 2', 54.897223, 23.917621, 2, 'This is vendor 2.<br/> Click for more information.',1],
  ['Vendor 3', 54.897213, 23.917801, 3, 'This is vendor 3.<br/> Click for more information.',2],
  ['Vendor 4', 54.897203, 23.918101, 4, 'This is vendor 4.<br/> Click for more information.',1],
  ['Vendor 5', 54.897193, 23.918301, 5, 'This is vendor 5.<br/> Click for more information.',5],
  ['Vendor 6', 54.897173, 23.918601, 6, 'This is vendor 6.<br/> Click for more information.',3],
  ['Vendor 7', 54.897173, 23.918701, 7, 'This is vendor 7.<br/> Click for more information.',3],
  ['Vendor 8', 54.897163, 23.918901, 8, 'This is vendor 8.<br/> Click for more information.',4],
  ['Vendor 9', 54.897143, 23.919301, 9, 'This is vendor 9.<br/> Click for more information.',2],
  ['Vendor 10', 54.897133, 23.919601, 10, 'This is vendor 10.<br/> Click for more information.',4],
  ['Vendor 11', 54.897133, 23.919801, 11, 'This is vendor 11.<br/> Click for more information.',5],
  ['Vendor 12', 54.897133, 23.920101, 12, 'This is vendor 12.<br/> Click for more information.',5],
  ['Vendor 13', 54.897143, 23.917481, 13, 'This is vendor 13.<br/> Click for more information.',1],
  ['Vendor 14', 54.897123, 23.917621, 14, 'This is vendor 14.<br/> Click for more information.',5],
  ['Vendor 15', 54.897113, 23.917801, 15, 'This is vendor 15.<br/> Click for more information.',3],
  ['Vendor 16', 54.897103, 23.918101, 16, 'This is vendor 16.<br/> Click for more information.',5],
  ['Vendor 17', 54.897093, 23.918301, 17, 'This is vendor 17.<br/> Click for more information.',1],
  ['Vendor 18', 54.897073, 23.918601, 18, 'This is vendor 18.<br/> Click for more information.',2],
  ['Vendor 19', 54.897073, 23.918701, 19, 'This is vendor 19.<br/> Click for more information.',3],
  ['Vendor 20', 54.897063, 23.918901, 20, 'This is vendor 20.<br/> Click for more information.',5],
  ['Vendor 21', 54.897043, 23.919301, 21, 'This is vendor 21.<br/> Click for more information.',3],
  ['Vendor 22', 54.897033, 23.919601, 22, 'This is vendor 22.<br/> Click for more information.',1],
  ['Vendor 23', 54.897033, 23.919801, 23, 'This is vendor 23.<br/> Click for more information.',1],
  ['Vendor 24', 54.897033, 23.920101, 24, 'This is vendor 24.<br/> Click for more information.',5]
];

//function creates markers
function setMarkers(map, markers) {
  for(var i=0; i<markers.length; i++){
    var vendor = markers[i];
    var siteLatLng = new google.maps.LatLng(vendor[1], vendor[2]);
    var marker = new google.maps.Marker({
        position: siteLatLng,
        map: map,
        title: vendor[0],
        zIndex: vendor[3],
        html: vendor[4]
    });

    markerGroups[vendor[5]].push(marker);

    google.maps.event.addListener(marker, "mouseover", function () {
      infowindow.setContent(this.html);
      infowindow.open(map, this);
    });
    google.maps.event.addListener(marker, 'mouseout', function() {
      infowindow.close();
    });
    google.maps.event.addListener(marker, 'click', function() {
      $.fancybox.open({
        content : "<div id='infowindow'><h1>Vendor</h1><img src='http://farm1.staticflickr.com/93/232880228_379d2b407c_z.jpg' width='400' height='auto'/><p>Here is more information about the vendor</p></div>"
      });
    });
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

$("#controlpanel :checkbox").change(function(){
  var $this = $(this);
  var type = $this.val();
  if($this.attr('checked')){
    for (var i = 0; i < markerGroups[type].length; i++) {
      var marker = markerGroups[type][i];
      marker.setVisible(true);
    } 
  } else {
    for (var i = 0; i < markerGroups[type].length; i++) {
      var marker = markerGroups[type][i];
      marker.setVisible(false);
    } 
  }

})