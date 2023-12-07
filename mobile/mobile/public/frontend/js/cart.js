const demsospgh = document.querySelectorAll(".cart-box-san-pham");
let slsanpham = 1;
if(slsanpham >=  10){
    document.querySelector(".tang-sl").style.display = "none";
}
if(slsanpham <= 1){
    document.querySelector(".giam-sl").style.display = "none";
}
document.querySelector(".giam-sl").addEventListener("click", function(){
    slsanpham = slsanpham - 1;
    if(slsanpham <= 1){
        document.querySelector(".giam-sl").style.display = "none";
    }else{
        document.querySelector(".giam-sl").style.display = "flex";
        document.querySelector(".tang-sl").style.display = "flex";
    }
    document.querySelector(".sl-sp").innerHTML  = slsanpham;
})
document.querySelector(".tang-sl").addEventListener("click", function(){
    slsanpham = slsanpham + 1;
    if(slsanpham >=  10){
        document.querySelector(".tang-sl").style.display = "none";
    }
    else{
        document.querySelector(".tang-sl").style.display = "flex";
        document.querySelector(".giam-sl").style.display = "flex";
    }
        
    document.querySelector(".sl-sp").innerHTML  = slsanpham;
        
})