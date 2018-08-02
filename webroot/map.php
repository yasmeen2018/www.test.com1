
<?
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
$language = $_GET["language"];
//echo $language ;


$dbname = "hajj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
																	
		//echo ("test");															
																	
	$sql = "SELECT * FROM instr where language='$language'" ;
																
$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo  $row["SFile"];
		
		$php_var=$row["SFile"];
		
    }
} else {
    echo "0 results";
}
//$conn->close();
$sql2 = "SELECT * FROM instr where language='$language' and area ='mena' ";
																
$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
       // echo  $row2["SFile"];
		
		$php_var2=$row2["SFile"];
		
    }
} else {
    echo "0 results";
}
?>


<!doctype html>
<html>
<head>
	<script>
var audio = document.createElement('audio');
audio.src = "<?php echo $php_var; ?>";


</script>
<meta charset="utf-8">
<title>Untitled Document</title>
<?
	//$php_var='sound.mp3' ;
	
	?>
	
	

</head>

<body>
<img src="map.jpg" alt="" width="763" height="600" usemap="#Map"/>
<map name="Map">
	
	
	
	


  <area shape="rect" coords="474,391,628,472" href="#" onMouseOver="
																	

audio.play();" 
																	
	
																															
 onMouseOut="audio.pause();">
	
	
  <area shape="rect" coords="241,208,310,240" href="#"    onMouseOver="
																	

audio2.play();" 
																	
	
																															
 onMouseOut="audio2.pause();" >
</map>
</body>
</html>
