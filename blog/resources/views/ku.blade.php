<!DOCTYPE html>
<html>
    <head>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="{{URL::asset('/js/ku.js') }}"></script>
    <link rel="styleSheet" href="{{URL::asset('/css/ku.css') }}" type="text/css"></link>
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
        <!--search menu-->
        <div class = "ku_search_menu" id="ku_search_menu">
            <div class= "btn_search" id ="btn_search_1">关键字</div>
            <div class= "btn_search" id ="btn_search_2">工作地区</div>
            <div class= "btn_search" id ="btn_search_3">搜索键</div><br/>
            
        </div>
        <!--choice-->
        <div class ="ku_search_choice_menu" class="ku_search_choice_menu" >
        <input id="cb1" class="wrapped">
        <span id="cb1_wrap" class="wrap checked">实习</span>
        <input id="cb2" class="wrapped">
        <span id="cb2_wrap" class="wrap unchecked">兼职</span>
        <input id="cb3" class="wrapped">
        <span id="cb3_wrap" class="wrap unchecked">全职</span>
        </div>
        <div class = "ku_user_menu" id="ku_user_menu">
        </div>
        
        <!--user menu-->
        <div class = "ku_user_menu" id="ku_user_menu">
            <div class= "user_search" id ="btn_user_search_1">拥有技能</div>
            <div class= "user_search" id ="btn_user_search_2">学历</div>
            <div class= "user_search" id ="btn_user_search_3">工作经验</div>
            <div class= "user_search" id ="btn_user_search_4">专业</div>
        </div>
        <!--main menu-->

        <div class = "ku_main_menu" id="ku_main_menu"></div>

         <!-- bottom -->
         <div class="buttom">联系我们</div>
    </body>
</html>

<script type="text/javascript">
    var wrappedCBs = document.querySelectorAll('.wrap');

    for (var i=0;i<wrappedCBs.length;(i=i+1)){
        wrappedCBs[i].onclick = cbClickHandler;
    }

    function cbClickHandler(e){
        var relatedCheckBox = document.querySelector('#'+this.id.substr(0,this.id.indexOf('_')));
        relatedCheckBox.checked = !relatedCheckBox.checked;
        this.className = 'wrap '+ (relatedCheckBox.checked ? 'checked' : 'unchecked');
        // report checkstate
        // report('#'+this.id.substr(0,this.id.indexOf('_')) +' checked state:  '+relatedCheckBox.checked);
    }

</script>

