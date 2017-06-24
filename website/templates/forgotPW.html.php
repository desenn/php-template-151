<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	    <title>Reset Password</title>
	    <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			require_once("../web/header.php");
		?>
		<h3>Reset Password</h3>
		<form method="POST">
		    <p>Email:</p>
		    <input type="email" name="email" value="<?= (isset($email)) ? $email: "" ?>"/>
		    <br>
		    <p>New Password:</p>
		    <input type="password" name="pw" />
		    <br><br>
		    <input type="submit" name="forgotPW" value="Reset" />
		</form>
	</body>
</html>