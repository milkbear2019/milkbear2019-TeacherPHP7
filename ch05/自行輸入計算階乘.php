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
		function showResult($Num){
			if ($Num >= 0){
				if ($Num == 0){
					return 1;
				}else{
					$resultNum = 1;
					for($n=$Num;$n>0;$n--){ //n = n -1
						$resultNum *= $n; //$resultNum = $resultNum * n
					}
					return $resultNum;
				}
			}
		}
		if(isset($_GET['num'])) echo $_GET['num']." 的階乘為：" . showResult($_GET['num']);
		?>
		<form action="" method="get" accept-charset="utf-8">
			<input type="text" name="num" placeholder="輸入所要計算階乘數字" min="0" pattern="[0-9]" title='請輸入正整數' required>
			<input type="submit" value="送出">
		</form>
	</body>
</html>