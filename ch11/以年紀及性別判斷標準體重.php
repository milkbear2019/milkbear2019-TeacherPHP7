<?php
header("Content-Type: text/html; charset=utf-8");
require("php_class13.php");
class Adult_WomenCalc extends AdultCalc{
	//女性標準體重 ＝（身高－80）× 0.6
	public function calcAdult_WomenWeight(){
			return round(($this->int_Height-70)*0.6);
	}
}
$myObject = new Adult_WomenCalc();
$myObject->setData("James","男",20,170,68);
if($myObject->int_Age<16){
	echo $myObject->str_Name." 的標準體重為：";
	echo $myObject->calcWeight();
}elseif($myObject->str_Sex=="男"){
	echo $myObject->str_Name." 的標準體重為：";
	echo $myObject->calcAdultWeight();
}else{
	echo $myObject->str_Name." 的標準體重為：";
	echo $myObject->calcAdult_WomenWeight();
	}
?>