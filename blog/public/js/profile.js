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