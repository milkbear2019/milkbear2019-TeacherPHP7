<?php 
	$course = array("國文","英文","數學");
	$score= array(96,100,100);
	$C_S = array_combine($course,$score);
	$TotalScore = 0;//設定變數儲存總分
	foreach ($C_S as $key => $value) {
		echo $key."的分數為:".$value."<br>";
		$TotalScore+=$value;
	}
	echo "<hr>總分為:".$TotalScore."<br>";
	//echo count($C_S);//計算陣阿列元素個數
	echo "平均為:".round($TotalScore/count($C_S),1);
 ?>