<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>

    <style type="text/css">
     
      #map {
        height: 500px;
       
        width: 900px;
       
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 23.88346494828029, lng: 90.36764764022483 }; 
        const badda = { lat: 23.780546, lng: 90.426659 }; 
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 17,
          center: uluru,
          destination: badda,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,badda,
          //position: badda,
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBE7lwFmQCg-b_e8dOPiSPqrn47xUgY-2o&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>