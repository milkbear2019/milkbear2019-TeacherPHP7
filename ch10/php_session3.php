<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 
	session_start();//啟用session
	echo "你的帳號是:".$_SESSION["membername"];
 ?>
</body>
</html>