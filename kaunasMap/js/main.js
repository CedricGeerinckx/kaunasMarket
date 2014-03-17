var vendors = new Array();
vendors.push(new Object());

// console.log(vendors);
    function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(54.897243, 23.917481),
          zoom: 16
        };
        var map = new google.maps.Map(document.getElementById("map"),
            mapOptions);

        var marker = new google.maps.Marker({
		    position: new google.maps.LatLng(54.897103, 23.920111),
		    map: map,
		    title:"Hello World!"
		});

		google.maps.event.addListener(marker, 'click', function() {

		});

      }
      google.maps.event.addDomListener(window, 'load', initialize);