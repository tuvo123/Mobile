//dàn ảnh ngang ra
const numimg = document.querySelectorAll(".product-detail-show-bottom-left-top-img-slider a");
// for(let i = 0; i<numimg.length ; i++){
//     numimg[i].style.transform = translateX(i * 100+"%");
// }
//slider anh
const chuyentrai = document.querySelector(".bx-slider-ip-left");
const chuyenphai = document.querySelector(".bx-slider-ip-right");
let demanh = 0;
chuyentrai.addEventListener("click",function(){
    demanh = demanh - 1;
    if(demanh < 0){
        demanh = numimg.length - 1;
    }
    document.querySelector(".product-detail-show-bottom-left-top-img-slider").style.right = demanh * 100+"%";
})
chuyenphai.addEventListener("click",function(){
    demanh = demanh + 1;
    if(demanh > numimg.length - 1 ){
        demanh = 0;
    }
    document.querySelector(".product-detail-show-bottom-left-top-img-slider").style.right = demanh * 100+"%";
})