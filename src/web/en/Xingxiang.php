<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Environment</title>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/global_all.css">
    <style>
        #xingxiang a{
            color: grey;
        }
    </style>
</head>
<body>
<?php require_once('./component/head.php') ?>
<div class="top_2">
   <img src="images/5c29c7f91fe28.png" >
</div>
<div class="clear"></div>
<div class="main_box">

    <div class="swiper-container swiper9" style="height:500px">
        <div class="swiper-wrapper">
		<div class="swiper-slide sab"><img src="images/b_5bcec5dccd208.jpg">
			 <div class="images_bx">
				<strong>TECHNOLOGY</strong>
				<p>                 QIAOYI has introduced advanced injection-blowing technology and equipment. At present, we have over 100 sets fully automatic machinery. QIAOYI integrates all the process of production from raw materials to finished packaging products, using color treatment or metalizing, spray plating, UV coating and soft touch. Besides, we provide customers with a series of printing techniques, such as hot stamping, silk screen, heat transfer printing and ultrasonic welding.</p>
			</div>
			</div><div class="swiper-slide sab"><img src="images/b_5bcec5f19ed68.jpg">
			 <div class="images_bx">
				<strong>SALES & MARKETING</strong>
				<p>         QIAOYI has taken part in several exhibition fairs since 2003, including CosmoProf Bologna, CosmoProf Asia, CBE, HBA Global Expo New York, CosmoProf Las Vegas, resulting in expanding business scope and market shares. QIAOYI has also gained the award of CBE TOP BEAUTY SUPPPLIER for years. As the company continues innovation and development, our businesses have expanded all over the world and also shared good reputation among the industry.</p>
			</div>
			</div><div class="swiper-slide sab"><img src="images/b_5bcec5ff589f8.jpg">
			 <div class="images_bx">
				<strong>ENTERPRISE CULTURE</strong>
				<p>         Our company focuses on team building and enterprise culture development. We also make efforts to create a present working environment for our employees by offering good welfare and benefits, abundant leisure activities, birthday gifts, annual travel plans, annual parties and so on.
In addition, QIAOYI also actively participates in the public welfare activities. Its contributions on the education cause in the society are highly recognized by the public.</p>
			</div>
			</div>            
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
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
          spaceBetween: 30,
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