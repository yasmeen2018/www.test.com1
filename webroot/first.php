<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?
$language = $_POST["language"];	
	if($language=="English"){
		
	header('Location:english.php');	
		
		
	}
	
	if($language=="Arabic"){
		
	header('Location:arabic.php');	
		
		
	}
	
	
	?>
	

	
	
	
<table width="531" border="0" align="center">
  <tbody><form action="first.php" method="post">
    <tr>
      <td width="122"><label for="select">Hajj language</label></td>
      <td width="399"><select name="language" id="select">
        <option>Arabic</option>
        <option>English</option>
        <option>china</option>
      </select></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button" id="button" value="Send"></td>
    </tr></form>
  </tbody>
</table>
</body>
</html>