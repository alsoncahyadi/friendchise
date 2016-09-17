<style>
  #map-canvas{
    width: 100%;
    height: 100%;
  }
</style>

<style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>

<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
    <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var franchisee = {!! json_encode($franchiseeInput->toArray()) !!};

      var map;
      var infowindow;

      var position = {lat: -6.402484, lng: 106.794241};
      var positionDB = {lat: -6.402484, lng: 106.794241};
      var stringPlace = new String("test");

      function initMap() {
        //var pyrmont = {lat: -33.867, lng: 151.195};
        //console.log(franchisee[0]['alamat']);
        //console.log(position);
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          //center: pyrmont,
          center: position,
          zoom: 20
        });

        //createMarker(positionDB);

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          //location: pyrmont,
          location: position,
          radius: 1000,
          type: ['store']
        }, callback);

        var geocoder = new google.maps.Geocoder();

        geocodeAddress2(geocoder);

        document.getElementById('submit').addEventListener('click', function() {
          var address = document.getElementById('address');
          console.log(address.geometry);
          //geocodeAddress(geocoder);
        });
      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }          
          /*
          for (var i = 0; i < jumlahmitra; i++) {
              var marker = new google.maps.Marker({
                map: map,
                position: arrayposisi[i];
              });    
          }
          */
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location,
          icon: image
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }    

      function geocodeAddress(geocoder) {
        var geocoder = new google.maps.Geocoder();
        //console.log(position);
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            console.log('status OK');
            position = results[0].geometry.location;
            initMap();
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

      function geocodeAddress2(geocoder) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({'address' : stringPlace.toString()}, function(results, status) {
          if (status === 'OK') {
            console.log('status OK 2');
            positionDB = results[0].geometry.location;
            createMarker(results[0]);
            console.log(results.address_components[0].long_name);
          } else {
            alert('Geocode 2 was not successful for the following reason: ' + status);
          }
        });
      }

    </script>
  </head>
  <body>
    <div id="floating-panel">
      <input id="address" class="controls" type="text">
      <input id="submit" type="button" value="Geocode">
    </div>
    <div id="map-canvas"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK4ZOyA74VQeqw3DV_EzeR_tXdPzeglo8&libraries=places&callback=initMap" async defer></script>
  </body>
</html>