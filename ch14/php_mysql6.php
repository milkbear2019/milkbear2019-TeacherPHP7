<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "class");//資料庫連線識別碼
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM students";
	$result = mysqli_query($db_link, $sql_query);//抓取出的資料放在放在$result的陣列中
	while($row_result=mysqli_fetch_row($result)){// 一次抓取一列(記錄)的的資列放入$row_result陣列
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br />";
		}
		echo "<hr />";
	}
?>