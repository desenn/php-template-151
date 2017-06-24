<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3>Register</h3>
		<form method="POST">
			<p><?=  (isset($msg)) ? $msg: "" ?></p>
			<p>Email:</p>
			<input type="email" name="email" />
			<br>
			<p>Password:</p>
			<input type="password" name="pw" />
			<br><br>
			<input type="submit" name="register" value="Register" />
		</form>
	</body>
</html>