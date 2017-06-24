<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<title>Search actor</title>
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3>Search actors</h3>
		<form method="POST">
			<p>Firstname:</p>
			<input type="search" name="search_a_f"/>
			<br>
			<p>Lastname:</p>
			<input type="search" name="search_a_l"/>
			<br><br>
			<input type="submit" name="search" value="Search Actor" />
		</form>
	</body>
</html>
