<?php
session_start();//啟用session
if(!isset($_SESSION["countOK"])){//如果不存在$_SESSION["countOK"]變數
	$dateStr = date("Y-m-d 23:59:59");
	if(isset($_COOKIE["counter"])){//如果存在$_COOKIE["counter"]變數
		$counter = $_COOKIE["counter"];
		$counter++;
		setcookie("counter", $counter, strtotime($dateStr));//設定$_COOKIE["counter"]變數且到期日為$dateStr
		//setcookie("counter", $counter,time()-100);
	}else{
		setcookie("counter", "0", strtotime($dateStr));//設定$_COOKIE["counter"]變數且初值為0且到期日為$dateStr
		header("Location: php_cookie2.php");
	}
	$_SESSION["countOK"] = 1;
}else{
	$counter = $_COOKIE["counter"];
}
?>
<html>
<head>
	<title>今日瀏覽次數</title>
</head>
<body>
<?php
echo "您今日瀏覽本頁的次數為".$counter."次";
?>
</body>
</html>