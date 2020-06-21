//login in
function stopPropagation(e) {
    var ev = e || window.event;
    if (ev.stopPropagation) {
        ev.stopPropagation();
    }
}

function login_dialog(){
    $("#background").show();
    
    $("#background").click(function (e) {
        $("#background").hide();
        stopPropagation(e);
    });
    $("#login_dialog").click(function (e) {
        stopPropagation(e);
    });
}
function login(){
    let username = $("#login_username").val();
    let password = $("#login_password").val();
    switch(username){
        case 'admin':
            if(password = 'admin'){
                alert("666");
            }else{
                alert("密码错误");
            }
            break;
        case 'user':
            if(password = 'user'){
                alert("用户登录成功");
            }else{
                alert("密码错误");
            }
            break;
        case 'company':
            if(password = 'company'){
                window.location = "/Demo1/blog/public/company";
            }else{
                alert("密码错误");
            }
            break;
        default:
            alert("用户名错误");
    }
}
function turnPage(num){
    switch(num){
        case 1:
        //跳转到首页
            window.location = "/Demo1/blog/public/";
            break;
        case 2:
        //跳转到人才库  //resources\\views\\ku.blade.php
            window.location = "/Demo1/blog/public/ku";
            //$.get("/Demo1/blog/public/ku");
            break;
        case 3:
        //跳转到 我的
            window.location = "/Demo1/blog/public/profile";
            //$.get("/Demo1/blog/public/profile");
            break;
        default:
            break;
    }
}
