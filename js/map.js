var infowindow = null;

function initialize() {
  var mapOptions = {
      center: new google.maps.LatLng(54.897441, 23.919584),
      zoom: 17,
      mapTypeControl: false,
      streetViewControl: false,
      panControlOptions: {position: google.maps.ControlPosition.LEFT_CENTER},
      zoomControlOptions: {position: google.maps.ControlPosition.LEFT_CENTER}
  };
  var map = new google.maps.Map(document.getElementById("mapDiv"), mapOptions);

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

  //create markers
  $.ajax({
    type: 'GET',
    dataType: 'json',
    url: 'http://localhost/kaunasMarket/includes/vendors.php',
    success: function(data) {
      for(var i=0; i<data.length; i++){
        var siteLatLng = new google.maps.LatLng(data[i].lat,data[i].long);
        var marker = new google.maps.Marker({
          position: siteLatLng,
          map: map,
          title: data[i].name,
          html: data[i].name + "<br/>Category: " + categories[data[i].category][0] +"<br/>Click for more information",
          id: data[i].ID,
          icon: categories[data[i].category][1],
          category: categories[data[i].category][0],
          description: data[i].desc,
          name: data[i].name
        });
        markerGroups[data[i].category].push(marker);
        google.maps.event.addListener(marker, "mouseover", function () {
          infowindow.setContent(this.html);
          infowindow.open(map, this);
        });
        google.maps.event.addListener(marker, 'mouseout', function() {
          infowindow.close();
        });
        google.maps.event.addListener(marker, 'click', function() {
          $.fancybox.open({
            content : "<div class='infowindow'><h1>"+this.get("name")+"</h1><img src='http://farm1.staticflickr.com/93/232880228_379d2b407c_z.jpg' width='400' height='auto'/><p>Category: "+this.get("category")+"</p><p>"+this.get("description")+"</p></div>"
          });
        });
      }
    }
  });

  infowindow = new google.maps.InfoWindow({
    content: "loading..."
  });
}

//Categories: 1= food, 2=crafts, 3=clothes, 4=beauty, 5=toys, 6=drinks, 7=art, 8=others
var categories ={
  1: ["Food", "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"],
  2: ["Crafts", "http://maps.google.com/mapfiles/ms/icons/green-dot.png"],
  3: ["Clothes", "http://maps.google.com/mapfiles/ms/icons/ltblue-dot.png"],
  4: ["Beauty", "http://maps.google.com/mapfiles/ms/icons/orange-dot.png"],
  5: ["Toys", "http://maps.google.com/mapfiles/ms/icons/pink-dot.png"],
  6: ["Drinks", "http://maps.google.com/mapfiles/ms/icons/purple-dot.png"],
  7: ["Art", "http://maps.google.com/mapfiles/ms/icons/red-dot.png"],
  8: ["Other", "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"]
};
var markerGroups = {1:[], 2:[], 3:[], 4:[], 5:[], 6:[], 7:[], 8:[]};

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

