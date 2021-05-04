<?php
$season = array('春', '夏', '秋', '冬'); 

echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){
	echo '$season陣列的第 '.($key+1)."元素內容是: ".$value."<br>";
}
?>