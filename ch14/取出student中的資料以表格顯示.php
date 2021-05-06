<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");
	$seldb = @mysqli_select_db($db_link, "class");
	if (!$seldb) die("資料庫選擇失敗！");
	$sql_query = "SELECT * FROM students";
	$result = mysqli_query($db_link, $sql_query);
	$record=0;//記錄有幾筆資料的變數
	$field =0;//記錄總共有幾個欄位	
?>
<!--上面的式子一直做到把所有student資料表中的資料抓到$result陣列中 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用表格顯示student資料表的內容</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1" width="95%" align="center">
		<caption>學生資料表</caption>
		<thead>
			<tr>
				<th>座號</th><th>姓名</th><th>性別</th><th>生日</th><th>電子郵件</th><th>電話</th><th>住址</th><th>身高</th><th>體重</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row_result=mysqli_fetch_row($result)){ $record++;?>
			<!--一次抓取一列(記錄)的的資料列放入$row_result陣列 -->
			<tr>				
			<?php foreach($row_result as $value){ ?>
				<td><?php echo $value;$field++;?></td>
					
			<?php }?>				
			</tr>
		<?php }?>
		</tbody>
	</table>
	<!--<?php echo "共有 ".$field/$record." 個欄位，".$record." 筆資料";?>-->
	<?php echo "共有 ".$field/$record." 個欄位，".mysqli_num_rows($result)." 筆資料";?>
</body>
</html>

