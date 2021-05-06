<?php 
	//資料庫主機設定
	$db_host = "localhost:3308";
	$db_username = "root";
	$db_password = "";
	//連線伺服器
	$db_link = @mysqli_connect($db_host, $db_username, $db_password);//mysql伺服器連線識別碼
	if (!$db_link) die("資料連結失敗！");
	//設定字元集與編碼
	mysqli_query($db_link, "SET NAMES utf8");
?>