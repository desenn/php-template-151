<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<title>Search series</title>
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3>Search series</h3>
		<form method="POST">
			<label>
				<input type="text" name="search_s"/>
			</label>
			<input type="submit" name="serach" value="SearchSeries" />
		</form>
	</body>
</html>
