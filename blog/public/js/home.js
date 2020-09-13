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
            break;
        default :
            break;
    } 
    
}
function reset() {
    document.getElementById("product_id").style.backgroundColor = "white";
    document.getElementById("design_id").style.backgroundColor = "white";
    document.getElementById("product_id").style.color = "black";
    document.getElementById("design_id").style.color = "black";
}


