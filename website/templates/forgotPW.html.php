<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
require_once("../web/header.php");
?>

<h3>Change Password</h3>
<form method="POST">
    <label>
        Email:
        <input type="email" name="email" value="<?= (isset($email)) ? $email: "" ?>"/>
    </label>
    <label>
        New Password:
        <input type="password" name="pw" />
    </label>
    <input type="submit" name="forgotPW" value="forgotPW" />

</form>
</body>
</html>