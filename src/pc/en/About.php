<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>乔艺</title>

    <link rel="stylesheet" href="css/en_css.css">
    <style>
        /*当前的menu激活项*/
        #about{
            color: #EBDFB5;
        }
    </style>
</head>

<body>

<?php include_once('./component/nav.php')?>
<div class="banner banner_bg3" style="background:url(images/5bd2ac3918768.jpg) no-repeat center;">
    <div class="about_top">
        <strong>ABOUT QIAOYI<span></span></strong>
        <p>Guangdong QIAOYI PLASTIC CO., LTD is one of the leading manufactories for cosmetic packaging in China. <br>
            With 30 years’ experience in the field, QIAOYI has developed strong quality control system, <br>
            as well as advanced R&D capabilities and professional service for worldwide markets. </p>
    </div>
</div>
<div class="abotu_1">
    <strong>MILESTONES<span></span></strong>
    <p>In 1988, Mr Feiyan Huang, the founder and chairman of QIAOYI, originated a printing company named FEIYING
        Printing Factory. <Br>
        After 10 years’ workmanship and hard-work, <Br>
        Mr Feiyan Huang expanded the business into the packaging industry and established QIAOYI as an injection company
        in 1999. <Br>
        In 2007, QIAOYI moved to a brand-new factory which covers the land of 16000 square meters.<Br>
        As the new factory was soon fulfilled with expanding businesses, QIAOYI invested in a second factory in 2016. As
        a result,<Br>
        the production capacity would double the existing one. </p>
</div>
<div class="line_box">
    <div class="row_1_1">FEIYING Printing Factory was founded</div>
    <div class="row_1_2">1988</div>
    <div class="row_1_3">The company has received good cooperation and support from its customers</div>
    <div class="row_2_1"><img src="images/yuan_1.png"></div>
    <div class="row_2_2"><img src="images/yuan_1.png"></div>
    <div class="row_2_3"><img src="images/yuan_1.png"></div>
    <div class="row_3_1">1988</div>
    <div class="row_3_2">QIAOYI was founded and began to produce plastic injection</div>
    <div class="row_3_3">2018</div>

</div>
<div class="clear"></div>
<div class="banner banner_bg4" style="background:url(images/5bd2ace4e4138.jpg) no-repeat center;">
    <div class="about_top">
        <strong>BUSINESS CULTURE<span></span></strong>
        <p> QIAOYI focuses on business culture building and actively participates in public activities.</p>
    </div>
    <div class="img_box">
        <!-- <img src="images/5c676080150b8.jpg" class="pt1">		<img src="images/5bd2ace4e4138.jpg" class="pt2">						-->
    </div>
</div>

<div class="abotu_1">
    <strong>Partner<span></span></strong>
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