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
		$i_score = $_GET['i_score'];

		if ($i_score >= 60 && $i_score < 70) {
			echo '丙等';
		} elseif ($i_score >= 70 && $i_score < 80) {
			echo '乙等';
		} elseif ($i_score >= 80 && $i_score < 90) {
			echo '甲等';
		} elseif ($i_score >= 90 && $i_score <= 100) {
			echo '優等';
		} else {
			echo '不及格';
		}
	 ?>
</body>
</html>