<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<title>Search</title>
</head>

<?php
require_once("../web/header.php");
?>
<body>
<h3>Search series</h3>
	<form method="POST">
		<label>
			<input type="text" name="search_s"/>
		</label>
		
		<input type="submit" name="serach" value="SearchSeries" />
	
	</form>
	
<h3>Search actors</h3>
	<form method="POST">
		<label>
			Firstname:<input type="search" name="search_a_f"/>
			Lastname:<input type="search" name="search_a_l"/>
		</label>
		<input type="submit" name="search" value="SearchActor" />
	
	</form>
</body>

</html>
