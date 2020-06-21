<!DOCTYPE html>
<html>
    <head>
    <link rel="styleSheet" href="{{URL::asset('/css/company.css') }}" type="text/css"></link>
    <script type="text/javascript" src="{{URL::asset('/js/company.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <!-- top -->
        <div class="top" id="home_top">
            <div class="btn_top"><p>公司logo</p></div>
        </div>
        <!-- menu -->
        <div class = "home_menu" id="home_menu">
            <div class = "btn_menu" id="btn_menu_1" onclick="turnPage(1)">首页</div>
            <div class = "btn_menu" id="btn_menu_2" onclick="turnPage(2)">人才库</div>
            <div class = "btn_menu" id="btn_menu_3" onclick="turnPage(3)">我的</div>
        </div>
        <!-- company main space -->
        <div class="company_menu">
            <div class="company_menu1"><p>消息中心</p></div>
            <div class="company_menu2"><p>账号设置</p></div>
            <div class="company_menu3"><p>我的发布</p></div>
            <div class="company_menu4"><p>我的收藏</p></div>
        </div>
        <div class="company_main">公司主页信息</div>
        

        <!-- bottom -->
        <div class="buttom">联系我们</div>
    </body>
</html>