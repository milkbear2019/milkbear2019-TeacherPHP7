<?php
	function testfun1(){
		echo "目前執行自訂函式一 <br />";
	}
	function testfun2(){
		echo "目前執行自訂函式二 <br />";
	}	
	$callTest = "testfun1";
	$callTest();
	$callTest = "testfun2";
	//$callTest();
	if(function_exists($callTest)){
		echo "存在".$callTest;
	}else {
		echo "不存在".$callTest;
	}
?>