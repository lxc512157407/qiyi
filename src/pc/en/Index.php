<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>乔艺</title>
    <link rel="stylesheet" href="css/jquery.fullPage.css">

    <link rel="stylesheet" href="css/Cooldog.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="css/en_css.css">
    <style>
        /*当前的menu激活项*/
        #index{
            color: #EBDFB5;
        }
        .top{
            background:rgba(0,0,0,0.4);
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 999;
        }
        .section+.section .top{
            display: none;
        }
    </style>
</head>

<body style="overflow: hidden; height: 100%; font-size: 12px;">
<div id="dowebok">
    <div class="section">
        <div class="top">
            <?php require ('./component/nav.php'); ?>
        </div>

        <div class="slide">
            <img class="img_1" src="images/b_5d9d29cc34779.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5d577b13c2cea.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5c4bf9154d4b8.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5d7e06ff6e38e.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5d9e9e7468f0f.jpg" style="width:100%">
        </div>


    </div>
    <div class="section bg_2">
        <div class="top" style="height:50px;">
            <?php require ('./component/menu.php'); ?>
        </div>
        <div class="i_title" style="margin-top:40px;">
            ABOUT QIAOYI
            <span></span>
        </div>
        <div class="i_desc">
            Guangdong QIAOYI PLASTIC CO., LTD is one of the leading manufactories for cosmetic packaging in China. With
            30 years’ experience in the field, QIAOYI has developed strong quality control system, as well as advanced
            R&D capabilities and professional service for worldwide markets.
        </div>

        <div class="i_video" id="i_video">
            <video controls height="100%" width="100%" id="myvideo"
                   poster="images/b_5bcec1e3d5ea8.jpg">
                <source src="video/video.mp4"
                        type="video/mp4"/>
            </video>
        </div>
    </div>

    <div class="section">
        <div class="top" style="height:50px;">
            <?php require ('./component/menu.php'); ?>
        </div>
        <div class="i_title" style="margin-top:60px;">
            <img src="images/index11.png" class="cplb">
        </div>
        <div class="pro_list">

            <a href="Products.php?id=63">
                <dl>
                    <dt>LIPSTICK</dt>
                    <dd><img class="p_img" src="images/b_5bd17ed7b94d8.jpg"></dd>
                    <dd class="add"></dd>
                </dl>
            </a><a href="Products.php?id=59">
            <dl>
                <dt>LIP GLOSS</dt>
                <dd><img class="p_img" src="images/b_5bd17ee41fb08.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=61">
            <dl>
                <dt>EYELINER</dt>
                <dd><img class="p_img" src="images/b_5bd17eed3e738.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=64">
            <dl>
                <dt>MASCARA</dt>
                <dd><img class="p_img" src="images/b_5bd17efb9fd08.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=53">
            <dl>
                <dt>LIP BALM</dt>
                <dd><img class="p_img" src="images/b_5bd17f04ab888.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=60">
            <dl>
                <dt>COMPACT</dt>
                <dd><img class="p_img" src="images/b_5bd17f0f40678.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a>

        </div>
    </div>
    <div class="section bg_3">
        <div class="top" style="height:50px;">
            <?php require ('./component/menu.php'); ?>
        </div>
        <div class="i_title">
            <img src="images/index22.png" class="ryzz" style="margin-top:40px;">
        </div>
        <div class="r_memu">
            <strong class="active">QUALIFICATION CERTIFICATES & AWARDS<span></span></strong>
            <strong>Qualification Certificate<span></span></strong>
        </div>
        <div class="lunbo">
            <div class="Cooldog_container Cooldog_container_1">
                <div class="Cooldog_content Cooldog_content_1">
                    <ul>
                        <li class="p1">
                            <img src="images/r1.png" alt="">
                            <p>China First-Class Beauty Supplier</p>
                        </li>
                        <li class="p2">
                            <img src="images/r2.png" alt="">
                            <p>Jinping Industrial Area Advanced Unit</p>
                        </li>
                        <li class="p3">
                            <img src="images/r3.png" alt="">
                            <p>Guangdong Province High-Tech Enterprise</p>
                        </li>
                        <li class="p4">
                            <img src="images/r4.png" alt="">
                            <p>First-Class Innovation Technology Enterprise</p>
                        </li>
                        <li class="p5">
                            <img src="images/r5.png" alt="">
                            <p>Charity Award for Needy Children in 2012</p>
                        </li>


                    </ul>
                </div>
                <a href="javascript:;" class="btn_left">
                    <i class="iconfont icon-zuoyoujiantou"></i>
                </a>
                <a href="javascript:;" class="btn_right">
                    <i class="iconfont icon-zuoyoujiantou-copy-copy"></i>
                </a>
            </div>
            <div class="Cooldog_container_2">
                <div class="zgzs">
                    <ul>
                        <li class="p8">
                            <img src="images/z1.jpg" alt="">
                        </li>
                        <li class="p9">
                            <img src="images/z2.jpg" alt="">
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="section">
        <div class="top" style="height:50px;">
            <?php require ('./component/menu.php'); ?>
        </div>
        <div class="i_title">
            <img src="images/index33.png" class="qyxx" style="margin-top:40px">
        </div>
        <div class="ab_box">
            <div class="list">
                <ul>
                    <ul>
                        <a href="Xingxiang">
                            <li class="pd4"><img src="images/b_5bcec1b1511a8.jpg" alt=""/><span>QIAOYI</span></li>
                        </a> <a href="Xingxiang">
                        <li class="pd3"><img src="images/b_5bc9933f07918.jpg" alt=""/><span>ENVIRONMENT</span></li>
                    </a> <a href="Xingxiang">
                        <li class="pd2"><img src="images/b_5bcec1e3d5ea8.jpg" alt=""/><span>TECHNOLOGY</span></li>
                    </a>
                    </ul>
                </ul>
            </div>
            <a href="javascript:;" class="prev btn">PREV<b></b></a>
            <a href="javascript:;" class="next btn"><b></b>NEXT</a>
            <div class="buttons">
                <a href="javascript:;"><span class="blue"></span></a>
                <a href="javascript:;"><span></span></a>
                <a href="javascript:;"><span></span></a>
            </div>
        </div>

    </div>
    <div class="section bg_4">
        <div class="top index_top" style="height:50px;">
            <?php require('./component/menu.php');?>
        </div>
        <img src="images/5bd7b0b0efcb8.jpg" height="45%" style="top:0px;left:0px;position:absolute">
        <?php require_once('./component/footer.php')?>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script src="js/Cooldog.js"></script>
<script>
    function changeLanguage() {
        var currentLanguage= /\/en\//i.test(location.pathname)?'en':'zh';
        var changeLanguage =currentLanguage=='en'?'zh':'en';
        location.pathname=location.pathname.replace(currentLanguage,changeLanguage);
    }
    $(function () {
        $('.section+.section .top').show();
        $('#dowebok').fullpage({
            //sectionsColor : ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],
            //'paddingTop':'210px',
            'navigation': true,
            'navigationColor': '#6d6d6d',
            slidesNavigation: true,
            controlArrows: false,  //是否隐藏左右滑块的箭头(默认为true)
            'resize': true,

        });

        $(window).resize(function () {
            autoScrolling();
        });
        setInterval(function () {
            $.fn.fullpage.moveSlideRight();
        }, 3000);

        function autoScrolling() {
            var $ww = $(window).width();
            if ($ww < 1024) {
                $.fn.fullpage.setAutoScrolling(false);
            } else {
                $.fn.fullpage.setAutoScrolling(true);
            }
        }

        autoScrolling();
    });


    $().ready(function () {
        $(".r_memu strong").mouseover(function () {
            //通过 .index()方法获取元素下标，从0开始，赋值给某个变量
            var _index = $(this).index();
            //让内容框的第 _index 个显示出来，其他的被隐藏
            $(".lunbo>div").eq(_index).show().siblings().hide();
            //改变选中时候的选项框的样式，移除其他几个选项的样式
            $(this).addClass("active").siblings().removeClass("active");
        });


        $(".i_video").click(function () {
            $(".i_video").css({"width": "960px", "height": "540px", "padding-top": "50px"});
        });

    });


</script>

</body>
</html>