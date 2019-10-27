
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>广东乔艺塑胶有限公司</title>

 <link rel="stylesheet" href="css/css.css">
    <style>
        /*当前的menu激活项*/
        #xingxiang{
            color: #EBDFB5;
        }
    </style>
</head>

<body>

    <div class="top">
        <div class="logo"><img src="images/logo.png"></div>
        <div class="memu">
            <a href="Index.html">首页</a>
            <a href="About.html">公司简介</a>
            <a href="Products.html">产品列表</a>
            <a href="Xingxiang.html" class="now">企业形象</a>
            <a href="Us.html">加入我们</a>
            <a href="Contact.html">联系我们</a>

        </div>
        <div class="c_memu">
                        <a href="javaScript:changeLanguage()" class="now">中文</a>|

						<a href="javaScript:changeLanguage()">ENGLISH</a>
                    </div>
    </div>
    <div class="banner banner_bg2"  style="background:url(images/5bd2ac613e288.jpg) no-repeat center;">
        <div class="h5">
            <strong>企业形象</strong>
            <span>Environment</span>
        </div>
    </div>

<div class="image_box">
<div class="image_1">
        <dl>
            <dt><img src="images/b_5bcec5dccd208.jpg"></dt>
            <dd>
                <strong>工艺技术</strong>
                <span>
                          乔艺引进国际先进的注拉吹技术，并拥有100多台自动化机器。另外，我们还拥有丝印，烫金，热转印，超声波焊接等一系列工艺，并配套完整的外加工技术，包涵真空镀膜，喷漆，UV加光及其他外表面处理。研发，设计，生产一步到位。</span>
            </dd>
        </dl>
    </div>	<div class="image_1">
        <dl>
            <dd>
                <strong>销售风采</strong>
                <span>
                          公司从2003年开始相继参加中国美容博览会(CBE)，香港亚太区美容展(Cosmoprof Asia)，美国保健及美容展(HBA Global Expo），意大利博洛尼亚国际美容美发展(CosmoProf Bologna)等美容展会并取得丰硕成果。乔艺连续几年荣获中国化妆品优秀供应商奖。随着近几年乔艺公司的创新发展，其业务范围覆盖全球各地，销售业绩每年持续稳步增长。</span>
            </dd>
            <dt><img src="images/b_5bcec5f19ed68.jpg"></dt>

        </dl>
    </div>	<div class="image_1">
        <dl>
            <dt><img src="images/b_5bcec5ff589f8.jpg"></dt>
            <dd>
                <strong>企业文化</strong>
                <span>
                          乔艺公司注重团队建设和文化培养，努力为员工建立良好的工作环境，福利待遇良好，业余活动丰富，员工生日礼物、年度旅游、年终晚会、表彰优秀、职工活动月等等。另外，我司还关心教育事业的发展，热衷公益，积极参与社会公益活动，得到大众的认可。</span>
            </dd>
        </dl>
    </div>

</div>    <!-- 底部 -->
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
