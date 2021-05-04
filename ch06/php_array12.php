<?php
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
sort($fruits);
echo "sort<br>";
foreach ($fruits as $key => $val) {
    echo "$key = $val <br />";
}
echo "<hr />";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
echo "asort<br>";
foreach ($fruits as $key => $val) {
    echo "$key = $val <br />";
}
echo "<hr />";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
echo "arsort<br>";
foreach ($fruits as $key => $val) {
    echo "$key = $val <br />";
}
echo "<hr />";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
ksort($fruits);
echo "ksort<br>";
foreach ($fruits as $key => $val) {
    echo "$key = $val <br />";
}
echo "<hr />";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
krsort($fruits);
echo "krsort<br>";
foreach ($fruits as $key => $val) {
    echo "$key = $val <br />";
}
?> 