<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK4ZOyA74VQeqw3DV_EzeR_tXdPzeglo8&libraries=places"
  type="text/javascript"></script> 

<h2>TEST</h2>
<div id="map"></div>


<script type="text/javascript">
    function initialize() {
    var pyrmont = new google.maps.LatLng(-33.8665, 151.1956);

    var map = new google.maps.Map(document.getElementById('map'), {
      center: pyrmont,
      zoom: 15,
      scrollwheel: false
    });

    // Specify location, radius and place types for your Places API search.
    var request = {
      location: pyrmont,
      radius: '500',
      types: ['store']
    };

    // Create the PlaceService and send the request.
    // Handle the callback with an anonymous function.
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, function(results, status) {
      if (status == google.maps.places.PlacesServiceStatus.OK) {
        for (var i = 0; i < results.length; i++) {
          var place = results[i];
          // If the request succeeds, draw the place location on
          // the map as a marker, and register an event to handle a
          // click on the marker.
          var marker = new google.maps.Marker({
            map: map,
            position: place.geometry.location
          });
        }
      }
    });
  }

  // Run the initialize function when the window has finished loading.
  google.maps.event.addDomListener(window, 'load', initialize);  
</script>
