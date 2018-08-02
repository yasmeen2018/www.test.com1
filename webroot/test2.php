<html>
<head>
<title>Sound Map</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://mm1.ellieirons.com/sm2.js"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
var audio2 = document.createElement('audio');
audio2.src = 'sound.mp3' ;

var audio1 = document.createElement('audio');
audio1.src = 'sound.mp3';
      // This example adds a red rectangle to a map.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: {lat: 33.678, lng: -116.243},
          mapTypeId: 'terrain'
        });

        var rectangle = new google.maps.Rectangle({
          strokeColor: '#FF0000',
          strokeOpacity: 0.8,
          strokeWeight: 2,
          fillColor: '#FF0000',
          fillOpacity: 0.35,
          map: map,
          bounds: {
            north: 33.685,
            south: 33.671,
            east: -116.234,
            west: -116.251
          }
        });
      }
		
function markerClick() {
audio1.pause();
audio2.play();
} 
google.maps.event.addListener(rectangle, 'mouseover', markerClick);
google.maps.event.addListener(rectangle, 'mouseover', 'mouseover', function markerClick() {
audio1.pause();
audio2.play();
} );
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjhqpO7rKX1LvXJoaG4xq9hul7FIFLlcU&callback=initMap">
    </script>
  </body>
</html>


