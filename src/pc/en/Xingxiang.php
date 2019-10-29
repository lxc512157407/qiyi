
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 
<title>QIAOYI</title>

 <link rel="stylesheet" href="css/en_css.css">
    <style>
        /*当前的menu激活项*/
        #xingxiang{
            color: #EBDFB5;
        }
    </style>
</head>

<body>

    <?php include_once('./component/nav.php')?>
    <div class="banner banner_bg2"  style="background:url(images/5bd2ac613e288.jpg) no-repeat center;">
        <div class="h5">
            <strong>Environment</strong>
            <span>Environment</span>
        </div>
    </div>

<div class="image_box">
<div class="image_1">
        <dl>
            <dt><img src="images/b_5bcec5dccd208.jpg"></dt>
            <dd>
                <strong>TECHNOLOGY</strong>
                <span>
                                    QIAOYI has introduced advanced injection-blowing technology and equipment. At present, we have over 100 sets fully automatic machinery. QIAOYI integrates all the process of production from raw materials to finished packaging products, using color treatment or metalizing, spray plating, UV coating and soft touch. Besides, we provide customers with a series of printing techniques, such as hot stamping, silk screen, heat transfer printing and ultrasonic welding.</span>
            </dd>
        </dl>
    </div>	<div class="image_1">
        <dl>
            <dd>
                <strong>SALES & MARKETING</strong>
                <span>
                           QIAOYI has taken part in several exhibition fairs since 2003, including CosmoProf Bologna, CosmoProf Asia, CBE, HBA Global Expo New York, CosmoProf Las Vegas, resulting in expanding business scope and market shares. QIAOYI has also gained the award of CBE TOP BEAUTY SUPPPLIER for years. As the company continues innovation and development, our businesses have expanded all over the world and also shared good reputation among the industry.</span>
            </dd>
            <dt><img src="images/b_5bcec5f19ed68.jpg"></dt>

        </dl>
    </div>	<div class="image_1">
        <dl>
            <dt><img src="images/b_5bcec5ff589f8.jpg"></dt>
            <dd>
                <strong>ENTERPRISE CULTURE</strong>
                <span>
                            Our company focuses on team building and enterprise culture development. We also make efforts to create a present working environment for our employees by offering good welfare and benefits, abundant leisure activities, birthday gifts, annual travel plans, annual parties and so on.
In addition, QIAOYI also actively participates in the public welfare activities. Its contributions on the education cause in the society are highly recognized by the public.</span>
            </dd>
        </dl>
    </div></div>

    <!-- 底部 -->
    <div class="footer_box">
        <?php require_once('./component/footer.php');?>
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