<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/profile.js') }}"></script>
    <link rel="styleSheet" href="{{URL::asset('/css/profile.css') }}" type="text/css"></link>
    </head>

    <body>
        <!-- top -->
        <div class="top" id="home_top">
            <div class="btn_top"><p>公司logo</p></div>
            <div id="btn_top_login" onclick="login_dialog()"><p>登录/注册</p></div>
        </div>
        <!-- menu -->
        <div class = "home_menu" id="home_menu">
            <div class = "btn_menu" id="btn_menu_1" onclick="turnPage(1)">首页</div>
            <div class = "btn_menu" id="btn_menu_2" onclick="turnPage(2)">人才库</div>
            <div class = "btn_menu" id="btn_menu_3" onclick="turnPage(3)">我的</div>
        </div>
        <div class = "ku_main_menu" id="ku_main_menu">
        <div class="topnav">
            <a class="active" href="#message">消息中心</a>
            <a href="#profile">我的简历</a>
            <a href="#sent">投递管理</a>
            <a href="#favourite">我的收藏</a>
            <a href="#setting">账号设置</a>
        </div>
        </div>
        </div>

         <!-- bottom -->
         <div class="buttom">联系我们</div>
    </body>
</html>
