<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>广东乔艺塑胶有限公司</title>
    <link href="css/css.css" rel="stylesheet">
    <style>
        /*当前的menu激活项*/
        #about{
            color: #EBDFB5;
        }
    </style>
</head>
<body>
<div class="top">
    <?php include_once('./component/nav.php')?>
</div>
<div class="banner banner_bg3" style="background:url(images/5bd2ac3918768.jpg) no-repeat center;">
    <div class="about_top">
        <strong>关于我们<span></span></strong>
        <p> 乔艺塑胶公司位于广东省汕头市，是一家具有先进技术的化妆品包材制造厂商。 <Br>
            公司团队30年来积极探索、研发、创作，秉承精益求精的工匠精神，为打造彩妆包材第一品牌倾力奉献。<br>
            公司致力于培养精英团队，拥有专业的技术型人才，健全的质量检测体系和售后服务。</p>
    </div>
</div>
<div class="abotu_1">
    <strong>发展历程<span></span></strong>
    <p>1988年，黄飞燕董事长创办飞英烫金厂，研发了全潮汕地区第一台自动烫印机。<Br> 经过了十余年的专研奋斗，他于1999年成立了乔艺塑胶有限公司，开始制造化妆品包材。<Br>
        2007年，公司乔迁到位于广东省汕头市的新厂房，建筑面积1.6万平方米。2016年，乔艺投资建立第二个新厂房。</p>
</div>
<div class="line_box">
    <div class="row_1_1">飞鹰工厂成立</div>
    <div class="row_1_2">1988</div>
    <div class="row_1_3">公司得到了客户的良好合作和支持</div>
    <div class="row_2_1"><img src="images/yuan_1.png"></div>
    <div class="row_2_2"><img src="images/yuan_1.png"></div>
    <div class="row_2_3"><img src="images/yuan_1.png"></div>
    <div class="row_3_1">1988</div>
    <div class="row_3_2">QIAOYI公司成立，开始注塑生产</div>
    <div class="row_3_3">2018</div>

</div>
<div class="clear"></div>
<div class="banner banner_bg4" style="background:url(images/5bd2ace4e4138.jpg) no-repeat center;">
    <div class="about_top">
        <strong>公司文化<span></span></strong>
        <p> 公司注重团队建设和企业文化培养，关心教育事业的发展，并积极参与公益活动。</p>
    </div>
    <div class="img_box">
    </div>
</div>

<div class="abotu_1">
    <strong>合作伙伴<span></span></strong>
</div>
<div class="friend_list">
    <ul>
        <li><img src="images/b_5c490d0c89288.jpg"></li>
        <li><img src="images/b_5c490d143dab8.jpg"></li>
        <li><img src="images/b_5c490d1faba18.jpg"></li>
        <li><img src="images/b_5c490d2605208.jpg"></li>
        <li><img src="images/b_5c490d2bd4a58.jpg"></li>
        <li><img src="images/b_5c490d318dbf8.jpg"></li>
        <li><img src="images/b_5c490d39b4848.jpg"></li>
        <li><img src="images/b_5c490d403f868.jpg"></li>

    </ul>


</div>


<!-- 底部 -->
<div class="clear"></div>

<div class="footer_box">
    <?php include_once('./component/footer.php'); ?>
</div>
<script>
    function changeLanguage() {
        var currentLanguage= /\/en\//i.test(location.pathname)?'en':'zh';
        var changeLanguage =currentLanguage=='en'?'zh':'en';
        location.pathname=location.pathname.replace(currentLanguage,changeLanguage);
    }
</script>
</body>
</html>
