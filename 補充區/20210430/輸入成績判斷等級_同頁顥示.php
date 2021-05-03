<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form action="" method="get" accept-charset="utf-8">
			<label for="i_score">請輸入成績</label>
			<input type="text" id="i_score" name="i_score">
			<input type="submit" value="送出">
		</form>
		<?php
		if(isset($_GET['i_score'])) {
			$i_score = $_GET['i_score'];
				if ($i_score >= 60 && $i_score < 70) {
					echo '丙等';
				} elseif ($i_score >= 70 && $i_score < 80) {
					echo '乙等';
				} elseif ($i_score >= 80 && $i_score < 90) {
					echo '甲等';
				} elseif ($i_score >= 90 && $i_score <= 100) {
					echo '優等';
				} elseif ($i_score > 100 or $i_score <0) {
					echo '成績有誤，請重新輸入';					
				} else {
					echo '不及格';
				}
			}
		?>
	</body>
</html>