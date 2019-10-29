<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>公司简介</title>
    <link href="css/global_all.css" rel="stylesheet">

</head>
<style>
    .page a {
        padding: 0 5px;
        background: #ffffff;
        line-height: 30px;
        color: #606060;
        font-size: 14px;
        display: inline-block;
        border: 1px solid #CCCCCC;
    }

    /*searchBar*/
    .searchBar {
        padding: 10px;
        border-bottom: .01rem solid #DDD;
    }

    .searchBar .searchRect {
        width: 100%;
        height: 42px;
        background: #F2F2F2;
        border: .01rem solid #CCCCCC;
        border-radius: 1rem;
        display: flex;
        justify-content: space-between;
    }

    .searchBar .searchRect input {
        box-sizing: border-box;
        width: 100%;
        height: 42px;
        padding-left: 10px;
        background: none;
        border: none;
        border-radius: 1rem;
        font-size: 14px;
        color: #555;
        outline: none;
    }

    .searchBar .searchRect button {
        background: none;
        border: none;
        outline: none;
    }

    .searchBar .searchRect button img {
        width: 30px;
        height: 30px;
        padding-top: .04rem;
        margin-right: .01rem;
    }
     #products a{
         color:grey;
     }
</style>
<body>
<?php require_once('./component/head.php') ?>
<div class="top_2">
    <img src="images/5c29c7f108598.png">
</div>


<div class="main_box">
    <!--searchBar-->
    <div class="searchBar">
        <form action="Products.php?search=" method="post">
            <div class="searchRect">

                <input name="search" placeholder="搜索关键字" type="text" value=""/>
                <button style="margin-right:10px" type="submit"><img src="images/search-ICON.png"/></button>
            </div>
    </div>
    <div class="pro_nav">
        <ul>
            <li><a href="Products.php?id=">全部产品</a></li>
            <li><a href="Products.php?id=53">润唇膏系列</a></li>
            <li><a href="Products.php?id=61">眼线系列</a></li>
            <li><a href="Products.php?id=63">口红系列</a></li>
            <li><a href="Products.php?id=60">粉盒系列</a></li>
            <li><a href="Products.php?id=59">唇彩系列</a></li>
            <li><a href="Products.php?id=64">睫毛膏系列</a></li>
            <li><a href="Products.php?id=57">唇油系列</a></li>
        </ul>
    </div>
    <div class="probox_list">
        <ul class="active">
            <a href="Viewpic.php?id=1355">
                <li>
                    <div class="pro_img"><img src="images/s_5d8eda67c9409.jpg"></div>
                </li>
            </a><a href="Viewpic.php?id=1353">
            <li>
                <div class="pro_img"><img src="images/s_5d8eda4ae2a54.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1352">
            <li>
                <div class="pro_img"><img src="images/s_5d5b9aba14de0.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1351">
            <li>
                <div class="pro_img"><img src="images/s_5d5b9aa8e5686.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1350">
            <li>
                <div class="pro_img"><img src="images/s_5d55257f3c4ed.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1349">
            <li>
                <div class="pro_img"><img src="images/s_5d527dea59e47.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1347">
            <li>
                <div class="pro_img"><img src="images/s_5ccbe32988dd8.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1346">
            <li>
                <div class="pro_img"><img src="images/s_5ccbe1e7af0c8.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1345">
            <li>
                <div class="pro_img"><img src="images/s_5ccbe14e4ea98.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1344">
            <li>
                <div class="pro_img"><img src="images/s_5ccbe136080e8.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1343">
            <li>
                <div class="pro_img"><img src="images/s_5ccbe06651b08.jpg"></div>
            </li>
        </a><a href="Viewpic.php?id=1342">
            <li>
                <div class="pro_img"><img src="images/s_5ccbddcc9b398.jpg"></div>
            </li>
        </a>
        </ul>
        <div class="page" id="page"></div>

    </div>

</div>


<?php require_once('./component/footer.php') ?>


<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/swiper.min.js"></script>
<script src="js/common.js" type="text/javascript"></script>
<script>
    $().ready(function () {
        $(".pro_nav li").click(function () {
            //通过 .index()方法获取元素下标，从0开始，赋值给某个变量
            var _index = $(this).index();
            //让内容框的第 _index 个显示出来，其他的被隐藏
            $(".probox_list>ul").eq(_index).show().siblings().hide();
            //改变选中时候的选项框的样式，移除其他几个选项的样式
            $(this).addClass("active").siblings().removeClass("active");
        });
    });
    $(function () {
        var searchObj=new URLSearchParams(location.search);
        var id=searchObj.get('id')||'';
        $('[href$="Products.php?id=' + id + '"]').parent('li').addClass('active');

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
            pageLeft.push({label:'pre',value:currenPage-1});
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
            // {label:'下5页',value:currenPage+5},
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

</script>
</body>
</html>
