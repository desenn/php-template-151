<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<?php
require_once("../web/header.php");
?>
<body>
On this page you can search for series and actors.
When you're registerd you can add series to your favourites.
<br>
<?php 

$salt = "deborah.senn.89@outlook.com";

$saltHash = hash('sha256', "Passw0rd!", $salt);



echo $saltHash;
?>
</body>

</html>