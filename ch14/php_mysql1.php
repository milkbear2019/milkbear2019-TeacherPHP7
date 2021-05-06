<?php 
	header("Content-Type: text/html; charset=utf-8");
	$db_link = mysqli_connect("localhost:3308", "root", "");
	if (!$db_link) {
		echo "資料連結失敗";
	}else{
		echo "資料連結成功";
	}
?>