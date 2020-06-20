<!DOCTYPE html>
<html>
    <head>
    <link rel="styleSheet" href="{{URL::asset('/css/home.css') }}" type="text/css"></link>
    <script type="text/javascript" src="{{URL::asset('/js/home.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
            <div class = "btn_menu" id="btn_menu_2" onclick="turnPage(2)">论坛</div>
            <div class = "btn_menu" id="btn_menu_3" onclick="turnPage(3)">我的</div>
        </div>
        <!--search menu-->
        <div class = "home_search_menu">
            <div class= "btn_search" id ="btn_search_1">关键字</div>
            <div class= "btn_search" id ="btn_search_2">工作地区</div>
            <div class= "btn_search" id ="btn_search_3">工作类型</div>
            <div class= "btn_search" id ="btn_search_4">搜索键</div>
        </div>
        <!-- main space -->
        <div class="home_main">热门工作</div>
        <!-- bottom -->
        <div class="buttom">联系我们</div>
        <!--login dialog-->
        <div id="background" style="display:none">
            <div id="login_dialog">
                <div class="dialog_username">
                    <p>username:</p><input type="text" id="login_username">
                </div>
                <div class="dialog_password">
                    <p>password:</p><input type="text" id="login_password">
                </div>
                <div id="login_in" onclick="login()"><p>登录</p></div>
            </div>
        </div>
    </body>
</html>