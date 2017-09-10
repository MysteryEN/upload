<html>

<head>

<title>
Import CSV page
</title>

</head>


<body>

<form action="insertToDB.php" enctype="multipart/form-data" method = "post" >
<br><br>
<h3><label>Insert to DB</label><h3>
<table>
	<tr>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td><label>Select File:</label></td>
		<td><input type="file" name="filecsv1" id="myFile"></td>
	</tr>
	<tr></tr><tr></tr><tr></tr><tr></tr>
	<tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td><input type = "submit" value="Insert file to DB"></td>
	</tr>
<table>
</form>

</body>

</html>
