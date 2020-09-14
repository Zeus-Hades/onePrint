function initPage() {

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
    document.getElementById("home_id").style.color = "black";
    document.getElementById("product_id").style.color = "black";
    document.getElementById("design_id").style.color = "black";
    document.getElementById("gallary_id").style.color = "black";
    document.getElementById("support_id").style.color = "black";
    document.getElementById("aboutUs_id").style.color = "black";
    document.getElementById("contact_id").style.color = "black";
    document.getElementById("home_div_id").style.display = "none";
    document.getElementById("product_div_id").style.display = "none";
    document.getElementById("design_div_id").style.display = "none";
    document.getElementById("gallary_div_id").style.display = "none";
    document.getElementById("support_div_id").style.display = "none";
    document.getElementById("aboutUs_div_id").style.display = "none";
    document.getElementById("contact_div_id").style.display = "none";
}



 
