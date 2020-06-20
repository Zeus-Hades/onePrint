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

        .ku_search_choice_menu{
            position: relative;
            top: 300px;
            height: 100px;
            width: 70%;
            left: 15%;
        }
        .wrapped {
            position: relative;
            display: none;
            top: 300px;
        }

        .unchecked {
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAIAAAACUFjqAAAAK3RFWHRDcmVhdGlvbiBUaW1lAHdvIDI5IGZlYiAyMDEyIDEwOjQ4OjU2ICswMTAw9V5ZEQAAAAd0SU1FB9wCHQkxIxpw55kAAAAJcEhZcwAAEnQAABJ0Ad5mH3gAAAAEZ0FNQQAAsY8L/GEFAAAArklEQVR42j2PSxKEIAxEIYJSZbnxrlzAvRtP6kYU/M1jUjMsmqQ73QE7TVPbtvu+931/3/f7vud5Ps9De12X897HGEUECq1pmso6x9A8z/VSDUQ2xqDRYiulCONkWmsRQAQtwK7rhCl89GpVpGUFtRCuLBQxjJrvIbXKpP2tUBrLViWdujGRpq9D4KuQ9dXjOOac1Sq/Q7tt2zAMbl3XZVmO4+A/7AYJICmEkFL6AMf9gVWePPviAAAAAElFTkSuQmCC) left center no-repeat;
            padding-left: 15px;
            cursor: pointer;
            color: red; 
        }

        .checked {
        background: url(   data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAIAAAACUFjqAAAAK3RFWHRDcmVhdGlvbiBUaW1lAHdvIDI5IGZlYiAyMDEyIDEwOjQ4OjMzICswMTAwYQl/MQAAAAd0SU1FB9wCHQkxOecSHuMAAAAJcEhZcwAAEnQAABJ0Ad5mH3gAAAAEZ0FNQQAAsY8L/GEFAAAAlElEQVR42j2PCQ7FIBBC3Vr1jL3/Gapx+2/CT01K6Awg+ud5QgjnnL03mHNurZVSeu8pJVZhjOGcizHe980OXGsxAc0nFWTOiQjCggCbk+m9V7JE+CCEG/mmoNwg/E/oIiGBpBHD3SCFLJwuKD45o/d9VdMMtVamVjKE67ogmuip5uaHALXTgoPbwvlorotBZSJVwR/MKppFnb0uyQAAAABJRU5ErkJggg%3D%3D) no-repeat left center;
            padding-left: 15px;
            cursor: pointer;
            color: green;
        }

        .ku_user_menu{
            position: relative;
            background-color: blue;
            top: 250px;
            height: 300px;
            width: 70%;
            left: 15%;
        }
        .user_search{
            position: relative;
            background-color: blanchedalmond;
            top: -100px;
            height: 60px;
            width: 65%;
        }
        #btn_user_search_1{
            left:100px;
        }
        #btn_user_search_2{
            left:100px;
        }
        #btn_user_search_3{
            left:100px;
        }
        #btn_user_search_4{
            left:100px;
        }

        .ku_main_menu{
            position: relative;
            background-color: darkcyan;
            top: 300px;
            height: 300px;
            width: 70%;
            left: 15%;
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

        <div class = "ku_main_menu" id="ku_main_menu">

        </div>

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

    // function report(str){
    //     document.querySelector('#report').innerHTML = str;
    // }
</script>

