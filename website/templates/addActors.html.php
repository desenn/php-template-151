<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Add Actor</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3>Add Actor</h3>
		<form method="POST">
			<p>Lastname:</p> 
			<input type="text" name="lastname">
			<br>
			<p>Firstname:</p> 
			<input type="text" name="firstname">
			<br>
			<p>Birthdate:</p> 
			<input type="text" placeholder="jjjj-mm-dd" name="birthday">
			<br><br>
			<input type="submit" name="addActors" value="Add Actor" />
		</form>
	</body>
</html>