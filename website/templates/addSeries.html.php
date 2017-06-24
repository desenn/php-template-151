<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Add Series</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once("../web/header.php");
?>
	<h3>Add Series</h3>
	<form method="POST">
		Name: <input type="text" name="name">
		<br>
		Number of seasons: <input type="number" name="seasons">
		<br>
		Number of episodes over all: <input type="number" name="episodes">
		<br>
		Summary: <input type="textarea" name="summary">
		<br>
		Genere: <input type="text" name="genre">
		<br>
		<input type="submit" name="addSeries" value="AddSeries" />
	</form>
</body>
</html>