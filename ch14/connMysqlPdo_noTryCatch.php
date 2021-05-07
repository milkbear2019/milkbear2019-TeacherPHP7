<?php
//資料庫主機設定
$db_host = "localhost:3308";
$db_username = "root";
$db_password = "";
$db_name = "class1";
//錯誤處理

//連線資料庫
$db_link = @new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8", $db_username, $db_password);

?>