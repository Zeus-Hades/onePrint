window.onload=function(){
    var oDiv  =  document.getElementById('div1');
    var oUl = document.getElementsByTagName('ul')[0];
    var Li = oUl.getElementsByTagName('li');
    oUl.innerHTML = oUl.innerHTML+oUl.innerHTML;
    oUl.style.width = Li[0].offsetWidth*Li.length+'px';
    var speed = 2
    function move(){
        if(oUl.offsetLeft<-oUl.offsetWidth/speed){
            oUl.style.left = '0'
        }
        if(oUl.offsetLeft>0){
            oUl.style.left = -oUl.offsetWidth/speed+'px';
        }
        //oUl.style.left = oUl.offsetLeft-2+'px';//左
        oUl.style.left = oUl.offsetLeft+speed+'px';//右
    }    
    var timer = setInterval(move,30)
    oDiv.onmouseover=function(){
        clearInterval(timer);
    }	
    oDiv.onmouseout=function(){
         timer = setInterval(move,30)
    }   
}

function initPage() {

    footerPosition();
    $(window).resize(footerPosition);

    //二级菜单
    $("#product_id").hover(function() {  
            $("#product_ul").show(200);  
        } ,
        function() {
            $("#product_ul").hide(200); 
        }
    ); 
    
    $("#design_id").hover(function() {  
        $("#design_ul").show(200);  
    } ,
        function() {
            $("#design_ul").hide(200); 
        }
    ); 

    $("#gallary_id").hover(function() {  
        $("#gallary_ul").show(200);  
    } ,
        function() {
            $("#gallary_ul").hide(200); 
        }
    ); 

    window.onload;
}

function clickHeader(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            let home = document.getElementById("home_id");
            home.style.backgroundColor = "rgb(103, 151, 165)";
            home.style.color = "white";
            document.getElementById("home_div_id").style.display = "block";
            break;
        case 1:
            let product = document.getElementById("product_id");
            product.style.backgroundColor = "rgb(103, 151, 165)";
            product.style.color = "white";
            document.getElementById("product_div_id").style.display = "block";
            break;
        case 2:
            let design = document.getElementById("design_id");
            design.style.backgroundColor = "rgb(103, 151, 165)";
            design.style.color = "white";
            document.getElementById("design_div_id").style.display = "block";
            //console.log("good");
            break;
        case 3:
            let gallary = document.getElementById("gallary_id");
            gallary.style.backgroundColor = "rgb(103, 151, 165)";
            gallary.style.color = "white";
            document.getElementById("gallary_div_id").style.display = "block";
            //console.log("dasd");
            break;
        case 4:
            let support = document.getElementById("support_id");
            support.style.backgroundColor = "rgb(103, 151, 165)";
            support.style.color = "white";
            document.getElementById("support_div_id").style.display = "block";
            break;
        case 5:
            let aboutUs = document.getElementById("aboutUs_id");
            aboutUs.style.backgroundColor = "rgb(103, 151, 165)";
            aboutUs.style.color = "white";
            document.getElementById("aboutUs_div_id").style.display = "block";
            break;    
        case 6:
            let contact = document.getElementById("contact_id");
            contact.style.backgroundColor = "rgb(103, 151, 165)";
            contact.style.color = "white";
            document.getElementById("contact_div_id").style.display = "block";
            break; 
        case 7:
            let cart = document.getElementById("cart_id");
            cart.style.backgroundColor = "rgb(103, 151, 165)";
            cart.style.color = "white";
            document.getElementById("cart_div_id").style.display = "block";
            break;
        case 8:
            let login = document.getElementById("login_id");
            login.style.backgroundColor = "rgb(103, 151, 165)";
            login.style.color = "white";
            document.getElementById("login_div_id").style.display = "block";
            break;
        case 9:
            let register = document.getElementById("register_id");
            register.style.backgroundColor = "rgb(103, 151, 165)";
            register.style.color = "white";
            document.getElementById("register_div_id").style.display = "block";
            break;  
        default :
            break;
    } 
    
}
function reset() {
    document.getElementById("home_id").style.backgroundColor = "white";
    document.getElementById("product_id").style.backgroundColor = "white";
    document.getElementById("design_id").style.backgroundColor = "white";
    document.getElementById("gallary_id").style.backgroundColor = "white";
    document.getElementById("support_id").style.backgroundColor = "white";
    document.getElementById("aboutUs_id").style.backgroundColor = "white";
    document.getElementById("contact_id").style.backgroundColor = "white";
    document.getElementById("login_id").style.backgroundColor = "white";
    document.getElementById("register_id").style.backgroundColor = "white";
    document.getElementById("home_id").style.color = "black";
    document.getElementById("product_id").style.color = "black";
    document.getElementById("design_id").style.color = "black";
    document.getElementById("gallary_id").style.color = "black";
    document.getElementById("support_id").style.color = "black";
    document.getElementById("aboutUs_id").style.color = "black";
    document.getElementById("contact_id").style.color = "black";
    document.getElementById("login_id").style.color = "black";
    document.getElementById("register_id").style.color = "black";
    document.getElementById("home_div_id").style.display = "none";
    document.getElementById("product_div_id").style.display = "none";
    document.getElementById("design_div_id").style.display = "none";
    document.getElementById("gallary_div_id").style.display = "none";
    document.getElementById("support_div_id").style.display = "none";
    document.getElementById("aboutUs_div_id").style.display = "none";
    document.getElementById("contact_div_id").style.display = "none";
    document.getElementById("login_div_id").style.display = "none";
    document.getElementById("register_div_id").style.display = "none";
}


function footerPosition(){
        $("footer").removeClass("fixed-bottom");
        var contentHeight = document.body.scrollHeight,//网页正文全文高度
            winHeight = window.innerHeight;//可视窗口高度，不包括浏览器顶部工具栏
        if(!(contentHeight > winHeight)){
            //当网页正文高度小于可视窗口高度时，为footer添加类fixed-bottom
            $("footer").addClass("fixed-bottom");
        }
}


 

