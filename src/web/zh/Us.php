<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>公司简介</title>
    <link rel="stylesheet" href="css/global_all.css">
    <style>
        #us a{
            color:grey;
        }
    </style>
</head>
<body>
<?php require_once('./component/head.php') ?>
<div class="top_2" >
        <img src="images/5c29c8005de58.png" >
</div>
<div class="main_box">

    <div class="join">
        <dl class="active">
            <dt>销售经理</dt>
            <dd>
                <strong>工作职责：</strong>
                <span>
                    <b></b>1、帮助业务经理处理订单的相关内容。<Br>
                    <b></b>2、解答客户的提问。<Br>
                    <b></b>3、跟进订单。<Br>
                    <b></b>4、每年有1~2次到上海等地出差。<Br>
                </span>
                <strong>任职要求：</strong>
                <span>
                    <b></b>1、本科以上，20-35岁，英语专业者优先<Br>
                    <b></b>2、形象气质佳，善于沟通，有团队精神。<Br>
                    <b></b>3、公司提供免费食宿，薪资面议。<Br>
                </span>
            </dd>
        </dl>
        <dl>
            <dt>文案策划（2名）</dt>
            <dd>
                <strong>工作职责：</strong>
                <span>
                    <b></b>1、 协助公司各类宣传策划方案的设计和撰写；<Br>
                    <b></b>2、 负责宣传推广文案及宣传资料文案的撰写；<Br>
                    <b></b>3、 负责公司对外媒体和广告表现文字的撰写；<Br>
                    <b></b>4、 协助公司各类刊物的采编工作；<Br>
                </span>
                <strong>任职要求：</strong>
                <span>
                    <b></b>1、 大专以上，20-35岁，有经验者优先。<Br>
                    <b></b>2、 工作细心，认真负责。<Br>
                    <b></b>3、 形象气质佳，有亲和力，善于沟通。<Br>
                    <b></b>4、 公司提供免费食宿，薪资面议。<Br>
                </span>
            </dd>
        </dl>
        <dl>
            <dt>机械技术员（4名）</dt>
            <dd>
                <strong>工作职责：</strong>
                <span>
                    <b></b>1、 协助工程师完成车间机器的维修。<Br>
                    <b></b>2、 制作机械手治具，产品治具。<Br>
                    <b></b>3、 研发、革新机械设备。<Br>
                </span>
                <strong>任职要求：</strong>
                <span>
                    <b></b>1、 大专以上，20-45岁，机械技术底子深厚，有创新精神。<Br>
                    <b></b>2、 公司提供免费食宿，薪资面议。<Br>
                </span>
            </dd>
        </dl>
        <dl>
            <dt>研发经理 （4名）</dt>
            <dd>
                <strong>工作职责：</strong>
                <span>
                    <b></b>1、 关注市场，发现行业新鲜资讯。<Br>
                    <b></b>2、 与时俱进，开发设计适应市场需求的产品。<Br>
                </span>
                <strong>任职要求：</strong>
                <span>
                    <b></b>1、 本科以上，20-45岁，模具设计类专业，有经验者优先。<Br>
                    <b></b>2、 时尚敏感度、市场洞察力强，善于发现行业新鲜资讯。<Br>
                    <b></b>3、 公司提供免费食宿，薪资面议。<Br>
                </span>
            </dd>
        </dl>
        <dl>
            <dt>生产主管（2名）</dt>
            <dd>
                <strong>工作职责：</strong>
                <span>
                    <b></b>1、 车间日常生产管理。<Br>
                    <b></b>2、 合理调配安排生产，完善车间体制，简化生产流程。<Br>
                </span>
                <strong>任职要求：</strong>
                <span>
                    <b></b>1、 本科以上，25-45岁，注塑类相关专业。<Br>
                    <b></b>2、 有两年以上相关行业的工作经验。<Br>
                    <b></b>3、 有较强的管理能力和协调能力。<Br>
                    <b></b>4、 有较强的重任感和事业心。<Br>
                    <b></b>5、 有较强的组织能力和逻辑思维能力。<Br>
                </span>
            </dd>
        </dl>
    </div>
</div>


<?php require_once('./component/footer.php') ?>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/swiper.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script>
        $().ready(function () {
            $(".join dl").mouseover(function () {
                //通过 .index()方法获取元素下标，从0开始，赋值给某个变量
                var _index = $(this).index();
                //让内容框的第 _index 个显示出来，其他的被隐藏
                //$(".list_box>div").eq(_index).show().siblings().hide();
                //改变选中时候的选项框的样式，移除其他几个选项的样式
                $(this).addClass("active").siblings().removeClass("active");
            });
        });

        </script>
</body>
</html>
