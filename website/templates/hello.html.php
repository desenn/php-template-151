<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
  <title>My Hello Site</title>
</head>
<body>
    <h3>Say Hello</h3>	
	Das kommt aus meinem ersten Template<br />
	Hallo <span id="greeting-name"><?= htmlspecialchars($name)?></span>
	<a href="https://google.ch" >Mehr Infos auf Google</a>
</body>

</html>
