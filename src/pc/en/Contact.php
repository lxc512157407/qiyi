
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
<title>乔艺</title>

 <link rel="stylesheet" href="css/en_css.css">
    <style>
        /*当前的menu激活项*/
        #contact{
            color: #EBDFB5;
        }
    </style>
</head>

<body>

    <?php include_once('./component/nav.php')?>
    <div class="banner banner_bg2"  style="background:url(images/5bd2af76b0b58.png) no-repeat center;">
        <div class="h5">
            <strong>Contact us</strong>
            <span style="width:300px;">Contact us</span>
        </div>
    </div>

<div class="conteact_box">
    <dl>
        <dt><img src="images/icon_7.png"></dt>
        <dd>
            <strong>Address</strong>
            <span>7A5-1,Jinxing Road, Jinping Industry Area, Chaoshan Road, Shantou 515064, Guangdong, China</span>
        </dd>
    </dl>
    <dl>
        <dt><img src="images/icon_8.png"></dt>
        <dd>
            <strong>E-mail</strong>
            <span>E-mail：stqy@qiao-yi.com</span>
        </dd>
    </dl>
    <dl>
        <dt><img src="images/icon_9.png"></dt>
        <dd>
            <strong>Tel</strong>
            <span>Tel：008675488321177</span>
            <span>Fax：（0754）88329992</span>
        </dd>
    </dl>
    <div class="map_box">

<img src="images/map.png">



    </div>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
    <div class="footer_box">
        <?php include_once('./component/footer.php'); ?>
    </div>

    <script src="js/jquery.min.js"></script>

<script>
            $().ready(function () {
                $(".us_box dl").mouseover(function () {
                    //通过 .index()方法获取元素下标，从0开始，赋值给某个变量
                    var _index = $(this).index();
                    //让内容框的第 _index 个显示出来，其他的被隐藏
                    //$(".list_box>div").eq(_index).show().siblings().hide();
                    //改变选中时候的选项框的样式，移除其他几个选项的样式
                    $(this).addClass("active").siblings().removeClass("active");
                });
            });
            function changeLanguage() {
                var currentLanguage= /\/en\//i.test(location.pathname)?'en':'zh';
                var changeLanguage =currentLanguage=='en'?'zh':'en';
                location.pathname=location.pathname.replace(currentLanguage,changeLanguage);
            }
            </script>
</body>
</html>