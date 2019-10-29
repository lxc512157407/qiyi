<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>公司简介</title>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/global_all.css">
    <style>
        #products a{
            color:grey;
        }
    </style>

</head>
<body>
<?php require_once('./component/head.php') ?>
<div class="clear"></div>
<div class="main_box">

    <div class="swiper-container swiper4">
        <div class="swiper-wrapper" style="height:400px;">
		<div class="swiper-slide sab"><img src="images/s_5d8eda67c9409.jpg"></div>
        </div>
        <!-- Add Pagination -->
       <!-- <div class="swiper-button-next" id="next4"></div>
        <div class="swiper-button-prev" id="prev4"></div>-->
    </div>

    <div class="desc_box">
        <strong>ES-234</strong>
    </div>


</div>
<?php require_once('./component/footer.php') ?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>

<script>
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 'auto',
          centeredSlides: true,
          spaceBetween: 300,
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
        });



      </script>
</body>
</html>
