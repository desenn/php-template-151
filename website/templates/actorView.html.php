<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Actor</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3><?=$data[0]['firstname'] . ' ' . $data[0]['lastname'] ?></h3>
		<b>Birthdate:</b> <?=$data[0]['birthdate'] ?> <br>
		<form method="POST">
			<!-- serien verlinken -->
		</form>
	</body>
</html>