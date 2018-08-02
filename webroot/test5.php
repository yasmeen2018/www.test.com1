<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<script>
	
	var go = document.getElementById('play'),
    audio = null;

go.addEventListener('mouseenter', play, false);
go.addEventListener('mouseout', stop, false);

		var audio2 = document.createElement('audio');
audio2.src = 'sound.mp3' ;
function play() {
  audio1.pause();
audio2.play();
}

function stop() {
  if (!audio.paused) {
    audio.pause();
  }
  audio = null;
}
	</script>
	
</head>

<body>
<img src="https://i.stack.imgur.com/Iy4Wr.png" usemap="#map">
<map name="map">
  <area id="play" shape="circle" coords="150,149,49" title="Play">
</map>
</body>
</html>