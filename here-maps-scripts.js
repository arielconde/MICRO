

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition);
	} else { 
		alert("Geolocation is not supported by this browser.");
	}
}
				
function showPosition(position) {
	var lat = position.coords.latitude;
	var lng = position.coords.longitude;
	console.log(lng);
					console.log(lat);
				}
				
				getLocation();

	// Initialize the platform object:
      var platform = new H.service.Platform({
        'app_id': 'shP5NtdVrj4VpIgxIJRl',
        'app_code': 'mipsSAYvWnwye-CjSt-uBw'
      });


      // Obtain the default map types from the platform object
      var maptypes = platform.createDefaultLayers();
      // Instantiate (and display) a map object:
		
	// HARD CODED - FIX GET CURRENT USERS LOCATION
	myLocation = {lng: 120.992901, lat: 14.5649469}

      // Get the default map types from the Platform object:
      var defaultLayers = platform.createDefaultLayers();

      var map = new H.Map(
        document.getElementById('mapContainer'),
        defaultLayers.normal.map,
        {
          zoom: 15,
          center: myLocation
        }
      );

	// // Enable the event system on the map instance:
      var mapEvents = new H.mapevents.MapEvents(map);

	 // // Instantiate the default behavior, providing the mapEvents object, such as pan, zoom, pinch
      // // ensures that the map reacts to mouse, stylus and touch input.
      var behavior = new H.mapevents.Behavior(mapEvents);

	// // Create a marker:
      var marker = new H.map.Marker(myLocation);
      map.addObject(marker);
	  marker.addEventListener('tap', function(e) {
		  alert('Your current location.');
	  });

	// //Create default UI
      var ui = H.ui.UI.createDefault(map, maptypes);