
<!DOCTYPE>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
<title>QIAOYI</title>
<link rel="stylesheet" href="css/mdsSlide.css">

 <link rel="stylesheet" href="css/en_css.css">
    <style>
        /*当前的menu激活项*/
        #products{
            color: #EBDFB5;
        }
    </style>
</head>

<body>

<?php include_once('./component/nav.php')?>

     <div class="wrap">
        <div id="slide">
            <ul class="list">
			<li><img src="images/s_5d8eda67c9409.jpg"></li>
               <!-- <li><img src="images/desc_1.png"></li>
                <li><img src="images/pro_1.png"></li>
                <li><img src="images/desc_1.png"></li>-->
                
            </ul>
        </div>
        <div class="desc_box">
               ES-234        </div>
    </div>
<div class="footer_box">
    <?php require_once('./component/footer.php');?>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/Mds.onePic.1.0.js"></script>
<script>
    function changeLanguage() {
        var currentLanguage= /\/en\//i.test(location.pathname)?'en':'zh';
        var changeLanguage =currentLanguage=='en'?'zh':'en';
        location.pathname=location.pathname.replace(currentLanguage,changeLanguage);
    }
        $(".search").mousemove(function () {
            $(this).removeClass("search_off");
        }).mouseout(function(){
            $(this).addClass("search_off");
        })
    $('#slide').MdsSlideFade({


        _width: 500, //设置图轮播图大小
        _height: 500,
        page: 'page', //是否启用导航图标,有值时启用，值为导航图标列表的样式类，为空时不启用导航列表
        btn: true, //是否启用上下一页按钮，true为启用,false或者空为不启用。如果启用，请在下面的四个属性中赋值，为按钮添加样式类和按钮文字
        nextClass: 'next', //下一张 按钮样式类
        prevClass: 'prev',//上一张 按钮样式类
        nextText: '<img src="images/right.png" class="btn_lr">',
        prevText: '<img src="images/left.png" class="btn_lr">',
        fade: 'normal', //图片切换速度 可能的值slow/normal/fast/毫秒(比如 1500)
        time: '3000', //可能的值(毫秒)1000\2000...
        pageNum: true, //是否启用数字做轮播导航 true为启用,false不启用
        pagelocat: true //轮播导航图标是否要居中 true/fasle 默认为居中
    });


            $().ready(function () {
                $(".cat_ul li").mouseover(function () {
                    //通过 .index()方法获取元素下标，从0开始，赋值给某个变量
                    var _index = $(this).index();
                    //让内容框的第 _index 个显示出来，其他的被隐藏
                    $(".list_box>div").eq(_index).show().siblings().hide();
                    //改变选中时候的选项框的样式，移除其他几个选项的样式
                    $(this).addClass("active").siblings().removeClass("active");
                });
            });

</script>
</body>
</html>