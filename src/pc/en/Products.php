<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>QIAOYI</title>

    <link rel="stylesheet" href="css/en_css.css">
    <style>
            /*当前的menu激活项*/
        #products {
            color: #EBDFB5;
        }

        .page a {
            margin: 0 3px;
        }

        .page a.current {
            border: none;
            margin: 0;
        }
    </style>
</head>

<body>

<!--        导航-->
<?php require('./component/nav.php'); ?>
<div class="banner banner_bg1" style="background:url(images/5bd2b2ea2cad8.jpg) no-repeat center;">
    <div class="h5">
        <strong>Prouducts</strong>
        <span>Prouducts</span>
    </div>
</div>

<div class="cat_memu">
    <ul class="cat_ul">
        <a href="Products.php?id=">
            <li>ALL<span></span></li>

            <a href="Products.php?id=53">
                <li>LIP BALM<span></span></li>
            </a>
            <a href="Products.php?id=61">
                <li>EYELINER<span></span></li>
            </a>
            <a href="Products.php?id=63">
                <li>LIPSTICK<span></span></li>
            </a>
            <a href="Products.php?id=60">
                <li>COMPACT<span></span></li>
            </a>
            <a href="Products.php?id=59">
                <li>LIP GLOSS<span></span></li>
            </a>
            <a href="Products.php?id=64">
                <li>MASCARA<span></span></li>
            </a>
            <a href="Products.php?id=57">
                <li>LIP OIL<span></span></li>
            </a>

    </ul>
    <div class="search search_off">
        <form action="Products.php?search=" method="get" id="search_form">
            <input type="text" name="search" id="search" class="swap_value">
            <img src="images/search.png" id="search1">
            <div class="button"><input type="submit" value="" id="go"/></div>
    </div>
</div>


<div class="list_box">

    <div class="p_list active">
        <ul>
            <a href="Viewpic.php?id=1355">
                <li><img class="p_img" src="images/s_5d8eda67c9409.jpg"><!--ES-234--></li>
            </a><a href="Viewpic.php?id=1353">
                <li><img class="p_img" src="images/s_5d8eda4ae2a54.jpg"><!--ES-233--></li>
            </a><a href="Viewpic.php?id=1352">
                <li><img class="p_img" src="images/s_5d5b9aba14de0.jpg"><!--LB-100B--></li>
            </a><a href="Viewpic.php?id=1351">
                <li><img class="p_img" src="images/s_5d5b9aa8e5686.jpg"><!--LB-100A--></li>
            </a><a href="Viewpic.php?id=1350">
                <li><img class="p_img" src="images/s_5d55257f3c4ed.jpg"><!--LB-099--></li>
            </a><a href="Viewpic.php?id=1349">
                <li><img class="p_img" src="images/s_5d527dea59e47.jpg"><!--LH-043--></li>
            </a><a href="Viewpic.php?id=1347">
                <li><img class="p_img" src="images/s_5ccbe32988dd8.jpg"><!--EL-002--></li>
            </a><a href="Viewpic.php?id=1346">
                <li><img class="p_img" src="images/s_5ccbe1e7af0c8.jpg"><!--EL-302B--></li>
            </a><a href="Viewpic.php?id=1345">
                <li><img class="p_img" src="images/s_5ccbe14e4ea98.jpg"><!--EL-415--></li>
            </a><a href="Viewpic.php?id=1344">
                <li><img class="p_img" src="images/s_5ccbe136080e8.jpg"><!--EL-416--></li>
            </a><a href="Viewpic.php?id=1343">
                <li><img class="p_img" src="images/s_5ccbe06651b08.jpg"><!--ES-173--></li>
            </a><a href="Viewpic.php?id=1342">
                <li><img class="p_img" src="images/s_5ccbddcc9b398.jpg"><!--ES-174--></li>
            </a>
        </ul>
        <div class="page" id="page"></div>
    </div>
</div>
<!--底部-->
<?php require_once('./component/footer.php'); ?>
<script src="js/jquery.min.js"></script>
<script>
    function changeLanguage() {
        var currentLanguage = /\/en\//i.test(location.pathname) ? 'en' : 'zh';
        var changeLanguage = currentLanguage == 'en' ? 'zh' : 'en';
        location.pathname = location.pathname.replace(currentLanguage, changeLanguage);
    }
    $(function () {
        var searchObj=new URLSearchParams(location.search);
        var id=searchObj.get('id')||'';
        $('[href$="Products.php?id=' + id + '"]>li').addClass('active');

    });
    /**
     * currentPage 当前页码 默认为1
     * totalpage 总页数 默认为2000
     * id 当前选择的产品品类id
     *
     * */
    function productPage(currenPage,totalPage,id) {
        var pageLeft=[];
        if(currenPage!=1){
            pageLeft.push({label:'prev',value:currenPage-1});
        }
        if(currenPage>5){
            pageLeft.push(
                {label:'home',value:1},
                // {label:'上5页',value:currenPage-5}
            );
        }
        /**
         * 中间五页的第一个个位置的页面
         * @type {number}
         */
        var firstPosition=1;
        /**
         * 总页数-根据数据实时返回
         * @type {number}
         */
        var pageRight=[
            // {label:'next5page',value:currenPage+5},
            {label:'last',value:totalPage},
            {label:'next',value:currenPage+1}
            ];
        var isShowLeft=currenPage / 5>1;
        var ceilPages=Math.ceil(currenPage / 5);
        var floorPages=Math.floor(currenPage/5);
        //fixed修正，当前页如果能够整除说明是这一组的组后一个元素
        var firstPosition=(currenPage%5?floorPages:floorPages-1)*5+1;
        var isShowRight=ceilPages*5<totalPage;
        var pageArray=[];
        var temp=5,tempPage;
        while (temp>0&&firstPosition<=totalPage){
            tempPage=firstPosition++;
            pageArray.push({label:tempPage,value:tempPage});
            temp--;
        }
        var pages=[];
        if(isShowLeft){
            pages=pages.concat(pageLeft);
        }
        pages=pages.concat(pageArray);
        if(isShowRight){
            pages=pages.concat(pageRight);
        }
        var pageStr='';
        pages.forEach(function (val,ind) {
            pageStr+='<a data-value="'+val.value+'"'+(currenPage==val.value?' class="current"':'')+'>'+val.label+'</a>';
        })
        $('#page').html(pageStr)
            .off('click').on('click',onPageClick);
        function onPageClick(event) {
            var a=$(event.target).data('value');
            location.href='Products.php?id='+id+'&p='+a;
        }
    }
    var searchParams=new URLSearchParams(location.search);
    //获取不到页码则默认为第一页
    var currentPage=parseInt(searchParams.get('p'))||1;
    //获取不到id,则默认全部
    var id=searchParams.get('id')||'';

    productPage(currentPage,2000,id);
    $(".search").mousemove(function () {
        $(this).removeClass("search_off");
    }).mouseout(function () {
        $(this).addClass("search_off");
    })
    $("#search1").click(function () {
        $("#search_form").submit();
    });


    $().ready(function () {
        $(".cat_ul li").click(function () {
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