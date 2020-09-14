//login in
// function stopPropagation(e) {
//     var ev = e || window.event;
//     if (ev.stopPropagation) {
//         ev.stopPropagation();
//     }
// }

// function login_dialog(){
//     $("#background").show();
    
//     $("#background").click(function (e) {
//         $("#background").hide();
//         stopPropagation(e);
//     });
//     $("#login_dialog").click(function (e) {
//         stopPropagation(e);
//     });
// }

function clickHeader(headerName) {
    reset();
    switch (headerName) {
        //product
        case 0:
            let home = document.getElementById("home_id");
            home.style.backgroundColor = "rgb(103, 151, 165)";
            home.style.color = "white";
            home.style.display = "block";
            break;
        case 1:
            let product = document.getElementById("product_id");
            product.style.backgroundColor = "rgb(103, 151, 165)";
            product.style.color = "white";
            product.style.display = "block";
            break;
        case 2:
            let design = document.getElementById("design_id");
            design.style.backgroundColor = "rgb(103, 151, 165)";
            design.style.color = "white";
            design.style.display = "block";
            //console.log("good");
            break;
        case 3:
            let gallary = document.getElementById("gallary_id");
            gallary.style.backgroundColor = "rgb(103, 151, 165)";
            gallary.style.color = "white";
            gallary.style.display = "block";
            //console.log("dasd");
            break;
        case 4:
            let support = document.getElementById("support_id");
            support.style.backgroundColor = "rgb(103, 151, 165)";
            support.style.color = "white";
            support.style.display = "block";
            break;
        case 5:
            let aboutUs = document.getElementById("aboutUs_id");
            aboutUs.style.backgroundColor = "rgb(103, 151, 165)";
            aboutUs.style.color = "white";
            aboutUs.style.display = "block";
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
    document.getElementById("home_id").style.color = "black";
    document.getElementById("product_id").style.color = "black";
    document.getElementById("design_id").style.color = "black";
    document.getElementById("gallary_id").style.color = "black";
    document.getElementById("support_id").style.color = "black";
    document.getElementById("aboutUs_id").style.color = "black";
}


