<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
        height: 600px;
        margin: 0 auto;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script src="scripts/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhDoMmm8hJNWr0XRFSMGN2T5spmJSqegQ&callback=initMap" async defer></script>

  </body>
</html>