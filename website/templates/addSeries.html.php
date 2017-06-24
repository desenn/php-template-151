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
			<p>Name:</p> 
			<input type="text" name="name">
			<br>
			<p>Number of seasons:</p> 
			<input type="number" name="seasons">
			<br>
			<p>Number of episodes over all:</p> 
			<input type="number" name="episodes">
			<br>
			<p>Summary:</p> 
			<input type="text" name="summary">
			<br>
			<p>Genere:</p> 
			<input type="text" name="genre">
			<br><br>
			<input type="submit" name="addSeries" value="Add Series" />
		</form>
	</body>
</html>