var infowindow = null;

function initialize() {
  var mapOptions = {
      center: new google.maps.LatLng(54.897441, 23.919584),
      zoom: 17,
      mapTypeControl: false,
      streetViewControl: false
  };
  var map = new google.maps.Map(document.getElementById("map"), mapOptions);

  var styles = [
    {
      "featureType": "road.local",
      "elementType": "geometry",
      "stylers": [
        { "color": "#d6ccc3" }
      ]
    },{
      "featureType": "road.local",
      "elementType": "geometry.stroke",
      "stylers": [
        { "color": "#4c372a" },
        { "weight": 1 }
      ]
    },{
    }
  ];

  map.setOptions({styles: styles});


  //call function to create markers
  setMarkers(map, vendors);
  infowindow = new google.maps.InfoWindow({
    content: "loading..."
  });
}

//Categories: 1= food, 2=clothes, 3=crafts, 4=drinks, 5=other
var categories ={
  1: ["Food", "http://maps.google.com/mapfiles/ms/micons/restaurant.png"],
  2: ["Clothes", "http://maps.google.com/mapfiles/ms/micons/convienancestore.png"],
  3: ["Crafts", "http://maps.google.com/mapfiles/ms/micons/tree.png"],
  4: ["Drinks", "http://maps.google.com/mapfiles/ms/micons/coffeehouse.png"],
  5: ["Other", "http://maps.google.com/mapfiles/ms/micons/question.png"]
};
var markerGroups = {1:[], 2:[], 3:[], 4:[], 5:[]};
var vendors = [
  ['Vendor 1', 54.897243, 23.917481, 1, 1],
  ['Vendor 2', 54.897223, 23.917621, 2, 1],
  ['Vendor 3', 54.897213, 23.917801, 3, 2],
  ['Vendor 4', 54.897203, 23.918101, 4, 1],
  ['Vendor 5', 54.897193, 23.918301, 5, 5],
  ['Vendor 6', 54.897173, 23.918601, 6, 3],
  ['Vendor 7', 54.897173, 23.918701, 7, 3],
  ['Vendor 8', 54.897163, 23.918901, 8, 4],
  ['Vendor 9', 54.897143, 23.919301, 9, 2],
  ['Vendor 10', 54.897133, 23.919601, 10, 4],
  ['Vendor 11', 54.897133, 23.919801, 11, 5],
  ['Vendor 12', 54.897133, 23.920101, 12, 5],
  ['Vendor 13', 54.897143, 23.917481, 13, 1],
  ['Vendor 14', 54.897123, 23.917621, 14, 5],
  ['Vendor 15', 54.897113, 23.917801, 15, 2],
  ['Vendor 16', 54.897103, 23.918101, 16, 2],
  ['Vendor 17', 54.897093, 23.918301, 17, 4],
  ['Vendor 18', 54.897073, 23.918601, 18, 1],
  ['Vendor 19', 54.897073, 23.918701, 19, 3],
  ['Vendor 20', 54.897063, 23.918901, 20, 5],
  ['Vendor 21', 54.897043, 23.919301, 21, 3],
  ['Vendor 22', 54.897033, 23.919601, 22, 1],
  ['Vendor 23', 54.897033, 23.919801, 23, 1],
  ['Vendor 24', 54.897033, 23.920101, 24, 5]
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
        html: vendor[0] + "<br/>Category: " + categories[vendor[4]][0] +"<br/>Click for more information",
        id: vendor[3],
        icon: categories[vendor[4]][1],
        category: categories[vendor[4]][0]
    });
    markerGroups[vendor[4]].push(marker);
    google.maps.event.addListener(marker, "mouseover", function () {
      infowindow.setContent(this.html);
      infowindow.open(map, this);
    });
    google.maps.event.addListener(marker, 'mouseout', function() {
      infowindow.close();
    });
    google.maps.event.addListener(marker, 'click', function() {
      $.fancybox.open({
        content : "<div class='infowindow'><h1>Vendor "+this.get("id")+"</h1><img src='http://farm1.staticflickr.com/93/232880228_379d2b407c_z.jpg' width='400' height='auto'/><p>Category: "+this.get("category")+"</p><p>Here is more information about the vendor</p></div>"
      });
    });
  }
}

$(document).ready(function(){
  initialize();
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
});

