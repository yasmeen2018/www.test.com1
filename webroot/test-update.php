<!DOCTYPE html>
<html>
<head>
<title>Sound Map</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://mm1.ellieirons.com/sm2.js"></script>

<style>
/* CSS to define the size and style of the map: */
#map {
  width: 600px;
  height: 550px;
  padding: 15px;
  margin: 15px;
}

</style>
</head>
<body>
<!-- HTML creating a div to hold the map: -->
<div id="map"></div>
<!-- JavaScript to pull in the Google Maps API: -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<!-- JavaScript to create the variable "map", and set its zoom, location and map type -->
<script>

var audio2 = document.createElement('audio');
audio2.src = 'sound.mp3' ;

var audio1 = document.createElement('audio');
audio1.src = 'sound.mp3' ;

var map = new google.maps.Map(document.getElementById('map'), {
zoom: 13,
center: new google.maps.LatLng(21.393623, 39.933792), // Center the map at this lat/lng point
mapTypeId: google.maps.MapTypeId.ROADMAP //Also takes ROADMAP
});
var offIcon = new google.maps.MarkerImage("http://fri.ellieirons.com/wp-content/uploads/2012/03/marker_sound_off_y.png");
var onIcon = new google.maps.MarkerImage("http://fri.ellieirons.com/wp-content/uploads/2012/03/marker_sound_on_y.png");
var marker1_edm = new google.maps.Marker({
position: new google.maps.LatLng(40.821523, -73.949661),
map: map,
icon: offIcon
});

marker1_edm.mp3 = 'http://fri.ellieirons.com/wp-content/uploads/2012/03/suction.mp3';
function markerClick1() {
audio1.play();
}
var marker2_nac = new google.maps.Marker({  
position: new google.maps.LatLng(30.819834, -73.950455),
map: map,
icon: offIcon
});
marker2_nac.mp3 = 'http://fri.ellieirons.com/wp-content/uploads/2012/03/machine.mp3';

function markerStop1() {
audio1.pause();
} 	
	
	
	
google.maps.event.addListener(marker1_edm, 'mouseover', markerClick1);
	google.maps.event.addListener(marker1_edm, 'mouseout', markerStop1);
</script>       
</body>
</html>
	
	
	
	
