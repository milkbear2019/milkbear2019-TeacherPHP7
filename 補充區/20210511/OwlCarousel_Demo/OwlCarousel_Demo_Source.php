<?php
    require_once "connMysql.php"; //載入連線字串;
    $sql_query = "SELECT * FROM image2";
    $result = $db_link->query($sql_query); // 執行起來$sql_query中的sql指令
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OWL</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/
            bootstrap-theme.min.css">
            <style>
            .wrapper {
            width: 100%;
            height: auto;
            overflow: hidden;
            }
            .item {
            margin: 10px;
            }
            </style>
        </head>
        <body>
            <div class="wrapper">
                <div class="owl-carousel owl-theme">
                    <?php while ($row_result = $result->fetch_assoc()) {?>
                    <div class="item"><img src='img/<?php echo $row_result['image_name']; ?>'></div>
                    <?php }?>
                </div>
            </div>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="http://cdn.staticfile.org/jquery/1.8.3/jquery.min.js"></script>
            <!-- Owl Stylesheets&js -->
            <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
            <link rel="stylesheet" href="assets/css/animate.css">
            <script src="assets/vendors/jquery.min.js"></script>
            <script src="assets/owlcarousel/owl.carousel.js"></script>
            <script>
            $('.owl-carousel').owlCarousel({
            responsive: true,//設定RWD的效果是開啟
            autoplayHoverPause:true, // 滑鼠經過時暫停
            loop: true,//是否開啟循環播放
            margin: 10,//設定圖與圖之間的邊界
            autoplay: true,//開啟自動播放
            autoplayTimeout: 3000,//1秒播一次
            nav: true, //導航
            navText: ["上一張", "下一張"], // 導航文字
            responsive: {
            0: {
            items: 1
            },
            600: {
            items: 2
            },
            1000: {
            items: 1
            }
            }
            })
            </script>
        </body>
    </html>