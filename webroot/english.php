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
																	
	$sql = "SELECT * FROM instr where language= 'English' and area='arafat'" ;
																
$result = $conn->query($sql);
		if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo  $row["SFile"];
		
		$php_var=$row["SFile"];
		
    }
} else {
    //echo "0 results";
}
//$conn->close();
$sql2 = "SELECT * FROM instr where language='English' and area ='mena' ";
																
$result2 = $conn->query($sql2);
		if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
       // echo  $row2["SFile"];
		
		$php_var2=$row2["SFile"];
		
    }
} else {
    //echo "0 results";
}
?>


<html>
<head>
<title>Untitled-7</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<script>
var audio = document.createElement('audio');
audio.src = "<?php echo $php_var; ?>";


</script>
	
	
	
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (Untitled-7) -->
<table id="Table_01" width="1024" height="1460" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr bgcolor="#f5f8f8">
		<td height="227">
			<img src="images/app2_01.png" width="1024" height="209" alt=""></td>
	</tr>
	<tr bgcolor="#f5f8f8">
		<td height="18" align="center"><p>
		<img src="map.jpg" alt="" width="763" height="458" usemap="#Map"/>
<map name="Map">
	
	
	
	


  <area shape="rect" coords="474,297,628,359" href="#" onMouseOver="
																	

audio.play();" 
																	
	
																															
 onMouseOut="audio.pause();">
	
	
  <area shape="rect" coords="241,158,310,182" href="#"    onMouseOver="
																	

audio2.play();" 
																	
	
																															
 onMouseOut="audio2.pause();" >
</map></p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p></td>
	</tr>
	<tr bgcolor="#F5F8F8" >
		<td></td></td>
		<tdb gcolor="#F5F8F8">&nbsp;	</tr>
	<tr>
	</tr>
</table>
<!-- End Save for Web Slices -->
</body>
</html>