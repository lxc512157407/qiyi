<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>企业形象</title>
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/global_all.css">
    <style>
        #xingxiang a{
            color:grey;
        }
    </style>

</head>
<body>
<?php require_once('./component/head.php') ?>
<div class="top_2" >
    <img src="images/5c29c7f91fe28.png" >
</div>
<div class="clear"></div>
<div class="main_box">

    <div class="swiper-container swiper9" style="height:500px">
        <div class="swiper-wrapper">
		<div class="swiper-slide sab"><img src="images/b_5bcec5dccd208.jpg">
			 <div class="images_bx">
				<strong>工艺技术</strong>
				<p>       乔艺引进国际先进的注拉吹技术，并拥有100多台自动化机器。另外，我们还拥有丝印，烫金，热转印，超声波焊接等一系列工艺，并配套完整的外加工技术，包涵真空镀膜，喷漆，UV加光及其他外表面处理。研发，设计，生产一步到位。</p>
			</div>
			</div><div class="swiper-slide sab"><img src="images/b_5bcec5f19ed68.jpg">
			 <div class="images_bx">
				<strong>销售风采</strong>
				<p>       公司从2003年开始相继参加中国美容博览会(CBE)，香港亚太区美容展(Cosmoprof Asia)，美国保健及美容展(HBA Global Expo），意大利博洛尼亚国际美容美发展(CosmoProf Bologna)等美容展会并取得丰硕成果。乔艺连续几年荣获中国化妆品优秀供应商奖。随着近几年乔艺公司的创新发展，其业务范围覆盖全球各地，销售业绩每年持续稳步增长。</p>
			</div>
			</div><div class="swiper-slide sab"><img src="images/b_5bcec5ff589f8.jpg">
			 <div class="images_bx">
				<strong>企业文化</strong>
				<p>       乔艺公司注重团队建设和文化培养，努力为员工建立良好的工作环境，福利待遇良好，业余活动丰富，员工生日礼物、年度旅游、年终晚会、表彰优秀、职工活动月等等。另外，我司还关心教育事业的发展，热衷公益，积极参与社会公益活动，得到大众的认可。</p>
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
