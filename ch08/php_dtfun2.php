<?php
date_default_timezone_set('Asia/Taipei');//設定成亞洲台北時區間GMT+8)
$date_server = date("Y-m-d H:i:s");
echo "伺服器時間: $date_server <br>";
$date_gmt = gmdate("Y-m-d H:i:s");
echo "格林威治時間: $date_gmt <br>";
?>