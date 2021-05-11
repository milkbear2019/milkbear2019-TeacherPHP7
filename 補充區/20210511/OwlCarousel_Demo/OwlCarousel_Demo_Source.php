﻿<!DOCTYPE html>
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
                    <div class="item"><img src="img/owl1.jpg"></div>
                    <div class="item"><img src="img/owl2.jpg"></div>
                    <div class="item"><img src="img/owl3.jpg"></div>
                    <div class="item"><img src="img/owl4.jpg"></div>
                    <div class="item"><img src="img/owl5.jpg"></div>
                    <div class="item"><img src="img/owl6.jpg"></div>
                    <div class="item"><img src="img/owl7.jpg"></div>
                    <div class="item"><img src="img/owl8.jpg"></div>
                    <div class="item"><img src="img/owl11.jpg"></div>
                    <div class="item"><img src="img/owl12.jpg"></div>
                    <div class="item"><img src="img/owl13.jpg"></div>
                    <div class="item"><img src="img/owl14.jpg"></div>
                    <div class="item"><img src="img/owl15.jpg"></div>
                    <div class="item"><img src="img/owl16.jpg"></div>
                    <div class="item"><img src="img/owl17.jpg"></div>
                    <div class="item"><img src="img/owl18.jpg"></div>
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
            autoplayTimeout: 1000,//1秒播一次
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
            items: 3
            }
            }
            })
            </script>
        </body>
    </html>