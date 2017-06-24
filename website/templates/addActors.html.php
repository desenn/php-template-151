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
		Lastname: <input type="text" name="lastname">
		<br>
		Firstname: <input type="text" name="firstname">
		<br>
		Birthdate: <input type="text" name="birthday">
		<br>
		<input type="submit" name="login" value="Login" />
	</form>
</body>
</html>