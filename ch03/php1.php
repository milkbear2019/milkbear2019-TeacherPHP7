<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PHP1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		echo $_SERVER['PHP_SELF']."<br>";
		echo $_SERVER['SERVER_NAME']."<br>";
		echo $_SERVER['REMOTE_ADDR'];
	?>
</body>
</html>