<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        .top{
            position: absolute;
            top: 0;
            width:100%;
            height:50px;
            background-color: aqua;
        }
        .btn_top{
            position: relative;
            top: 0;
            left:50px;
            height:50px;
            width:100px;
            font-size: larger;
            color: black;
            text-align: center;
            line-height: 15px;
        }
        #btn_top_login{
            position: absolute;
            top: 0;
            right:100px;
            height:50px;
            width:80px;
            font-size: large;
            color: black;
            line-height: 15px;
            border-radius:5px;
        }
        #btn_top_login:hover{
            background-color: black;
            color: white;
            border-radius:5px;
        }
        .home_menu{
            position: absolute;
            top: 150px;
            width: 66%;
            height: 100px;
            left: 17%;
            background-color: aqua;
        }
        .btn_menu{
            position: absolute;
            background-color: black;
            color: white;
            width: 200px;
            height: 50px;
            top: 25px;
            margin: auto 0px;
            font-size: large;
        }
        #btn_menu_1{
            left:40px
        }
        #btn_menu_2{
            left:280px
        }
        #btn_menu_3{
            left:520px
        }
        #btn_menu_4{
            left:760px
        }

        .ku_search_menu{
            position: relative;
            background-color: darkcyan;
            top: 300px;
            height: 100px;
            width: 70%;
            left: 15%;
        }
        .btn_search{
            position: absolute;
            background-color: blanchedalmond;
            top: 20px;
            height: 60px;
            width: 180px;
        }
        #btn_search_1{
            left:100px;
        }
        #btn_search_2{
            left:320px;
        }
        #btn_search_3{
            left:540px;
        }
        #btn_search_4{
            left:760px;
        }

        .ku_main_menu{
            position: relative;
            background-color: darkcyan;
            top: 300px;
            height: 300px;
            width: 70%;
            left: 15%;
        }

        .topnav {
            background-color: #333;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 19px 50px;
            text-decoration: none;
            font-size: 17px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }
        .buttom{
            position: relative;
            background-color: darkcyan;
            height: 100px;
            width: 100%;
            margin: auto 0px;
            top: 500px;
        }
    </style>
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