<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>广东乔艺塑胶有限公司</title>
    <link href="css/jquery.fullPage.css" rel="stylesheet">
    <link href="css/Cooldog.css" rel="stylesheet">
    <link href="css/iconfont.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
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
        <!--        导航-->
        <div class="top">
            <?php require ('./component/nav.php'); ?>
        </div>


        <div class="slide">
            <img class="img_1" src="images/b_5d9d297fc0bf6.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5d577ac4e4478.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5bc9887c282f8.jpg" style="width:100%">
        </div>
        <div class="slide">
            <img class="img_1" src="images/b_5d7e07094bf5f.jpg" style="width:100%">
        </div>
    </div>
    <div class="section bg_2">
        <div class="top" style="height:50px;">
           <?php require ('./component/menu.php'); ?>
        </div>
        <div class="i_title" style="margin-top:40px;">
            关于乔艺塑胶
            <span></span>
        </div>
        <div class="i_desc">
            广东乔艺塑胶有限公司位于广东省汕头市，是一家具有先进技术的化妆品包材制造厂商。 <br>
            公司团队30年来积极探索、研发、创作，秉承精益求精的工匠精神，为打造彩妆包材第一品牌倾力奉献。 <br>
            公司致力于培养精英团队，拥有专业的技术型人才，健全的质量检测体系和售后服务。
        </div>

        <div class="i_video" id="i_video">
            <video controls="controls" height="100%" id="myvideo" poster="images/b_5bcec1e3d5ea8.jpg"
                   width="100%">
                <source src="video/video.mp4"
                        type="video/mp4"/>
            </video>
        </div>
    </div>
<!--    产品列表-->
    <div class="section">
        <div class="top" style="height:50px;">
            <?php require ('./component/menu.php'); ?>
        </div>
        <div class="i_title" style="margin-top:60px;">
            <img class="cplb" src="images/cplb.png">
        </div>
        <div class="pro_list">
            <a href="Products.php?id=63">
                <dl>
                    <dt>口红系列</dt>

                    <dd><img class="p_img" src="images/b_5bd17ed7b94d8.jpg"></dd>
                    <dd class="add"></dd>
                </dl>
            </a><a href="Products.php?id=59">
            <dl>
                <dt>唇彩系列</dt>

                <dd><img class="p_img" src="images/b_5bd17ee41fb08.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=61">
            <dl>
                <dt>眼线系列</dt>

                <dd><img class="p_img" src="images/b_5bd17eed3e738.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=64">
            <dl>
                <dt>睫毛膏系列</dt>

                <dd><img class="p_img" src="images/b_5bd17efb9fd08.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=53">
            <dl>
                <dt>润唇膏系列</dt>

                <dd><img class="p_img" src="images/b_5bd17f04ab888.jpg"></dd>
                <dd class="add"></dd>
            </dl>
        </a><a href="Products.php?id=60">
            <dl>
                <dt>粉盒系列</dt>

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
        <div class="i_title" style="margin-top:40px;">
            <img class="ryzz" src="images/ryzz.png">
        </div>
        <div class="r_memu">
            <strong class="active">荣誉资质<span></span></strong>
            <strong>资格证书<span></span></strong>
        </div>
        <div class="lunbo">
            <div class="Cooldog_container Cooldog_container_1">
                <div class="Cooldog_content Cooldog_content_1">
                    <ul>
                        <li class="p1">
                            <img alt="" src="images/r1.png">
                            <p>中国化妆品优秀供应商</p>
                        </li>
                        <li class="p2">
                            <img alt="" src="images/r2.png">
                            <p>金平区科技创新工作先进单位</p>
                        </li>
                        <li class="p3">
                            <img alt="" src="images/r3.png">
                            <p>广东省高新技术企业</p>
                        </li>
                        <li class="p4">
                            <img alt="" src="images/r4.png">
                            <p>金平工业区管理先进单位</p>
                        </li>
                        <li class="p5">
                            <img alt="" src="images/r5.png">
                            <p>金平区爱心工作委员会优秀组织奖</p>
                        </li>


                    </ul>
                </div>
                <a class="btn_left" href="javascript:;">
                    <i class="iconfont icon-zuoyoujiantou"></i>
                </a>
                <a class="btn_right" href="javascript:;">
                    <i class="iconfont icon-zuoyoujiantou-copy-copy"></i>
                </a>
            </div>
            <div class="Cooldog_container_2">
                <div class="zgzs">
                    <ul>
                        <li class="p8">
                            <img alt="" src="images/z1.jpg">
                        </li>
                        <li class="p9">
                            <img alt="" src="images/z2.jpg">
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="section">
        <div class="top" style="height:50px;">

            <?php require('./component/menu.php');?>

        </div>
        <div class="i_title" style="margin-top:40px">
            <img class="qyxx" src="images/qyxx.png">
        </div>
        <div class="ab_box">
            <div class="list">
                <ul>
                    <a href="Xingxiang.php">
                        <li class="pd4"><img alt="" src="images/b_5bcec1b1511a8.jpg"/><span>乔艺</span>
                        </li>
                    </a> <a href="Xingxiang.php">
                    <li class="pd3"><img alt="" src="images/b_5bc9933f07918.jpg"/><span>乔艺车间</span></li>
                </a> <a href="Xingxiang.php">
                    <li class="pd2"><img alt="" src="images/b_5bcec1e3d5ea8.jpg"/><span>乔艺艺术</span></li>
                </a>
                </ul>
            </div>
            <a class="prev btn" href="javascript:;">PREV<b></b></a>
            <a class="next btn" href="javascript:;"><b></b>NEXT</a>
            <div class="buttons">
                <a href="javascript:;"><span class="blue"></span></a>
                <a href="javascript:;"><span></span></a>
                <a href="javascript:;"><span></span></a>
            </div>
        </div>

    </div>
    <div class="section bg_4">
        <div class="top" style="height:50px;">
            <?php require('./component/menu.php');?>
        </div>
        <img height="45%" src="images/5bd7b0b0efcb8.jpg" style="top:0px;left:0px;position:absolute">
        <?php require_once('./component/footer.php');?>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script src="js/Cooldog.js"></script>
<script>

    $(function () {
        $('.section+.section .top').show();
        $('#dowebok').fullpage({
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

    function changeLanguage() {
        var currentLanguage= /\/en\//i.test(location.pathname)?'en':'zh';
        var changeLanguage =currentLanguage=='en'?'zh':'en';
        location.pathname=location.pathname.replace(currentLanguage,changeLanguage);
    }
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
