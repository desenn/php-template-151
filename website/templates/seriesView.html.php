<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Series</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3><?=$data[0]['name'] ?></h3>
		<div style="height = 10px; text-align: right;">
			<form method="post">
				<input type="hidden" name="id" value="<?=$data[0]['id'] ?>">
				<input type="submit" name="favourite" value="Add to favourites">
			</form>
		</div>
		<b>What's it about:</b>
		<br>
		<?=$data[0]['summary'] ?>
		<br><br>
		<b>Genre:</b> <br>
		<?=$data[0]['genre'] ?>
		<br><br>
		<b>Number of seasons:</b> <br>
		<?=$data[0]['seasons'] ?>
		<br><br>
		<b>Episodes in total:</b> <br>
		<?=$data[0]['episodes'] ?>
		<br>
		<!-- evtl verlinkung zu schauspielern -->
	</body>
</html>