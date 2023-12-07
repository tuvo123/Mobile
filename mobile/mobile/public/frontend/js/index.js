let index1 = 0;
const imgNubertwo = document.querySelectorAll(".slider-product-one-content-items");
const leftbtntwo = document.querySelector(".bx-chevron-left-two");
const rightbtntwo = document.querySelector(".bx-chevron-right-two");
rightbtntwo.addEventListener("click",function(){
    index1 = index1 + 1;
    if(index1 > imgNubertwo.length-1){
        index1 = 0;
    }
    document.querySelector(".slider-product-one-content-items-content").style.right = index1 *  100+"%";
})
leftbtntwo.addEventListener("click",function(){
    index1 = index1 - 1;
    if(index1 < 0){
        index1 = imgNubertwo.length - 1;
    }
    document.querySelector(".slider-product-one-content-items-content").style.right = index1 *  100+"%";
})
//slider thương hiệu
let index2 =0;
const imgNumberthree = document.querySelectorAll(".thuong-hieu-content-slider-img");
const leftbtnthree = document.querySelector(".bx-chevron-left-three");
const rightbtnthree = document.querySelector(".bx-chevron-right-three");
rightbtnthree.addEventListener("click",function(){
    index2 = index2 + 1;
    if(index2 > imgNumberthree.length - 1){
        index2 = 0;
    }
    document.querySelector(".thuong-hieu-content-slider-imgs").style.right = index2 * 400+"px";
})
leftbtnthree.addEventListener("click",function(){
    index2 = index2-1;
    if(index2<0){
        index2 = imgNumberthree.length - 1;
    }
    document.querySelector(".thuong-hieu-content-slider-imgs").style.right = index2 * 400+"px";
})
let indexfour =0;
const imgNumberfour = document.querySelectorAll(".chuoi-deal-content-slider-imgs");
const leftbtnfour = document.querySelector(".bx-chevron-left-four");
const rightbtnfour = document.querySelector(".bx-chevron-right-four");

rightbtnfour.addEventListener("click",function(){
    indexfour = indexfour + 1;
    if(indexfour > imgNumberfour.length - 1){
        indexfour = 0;
    }
    document.querySelector(".chuoi-deal-content-slider-container").style.right = indexfour * 100+"%";
})
leftbtnfour.addEventListener("click",function(){
    indexfour = indexfour-1;
    if(indexfour<0){
        indexfour = imgNumberfour.length - 1;
    }
    document.querySelector(".chuoi-deal-content-slider-container").style.right = indexfour * 100+"%";
})
function autoChuoiDeal(){
    indexfour = indexfour + 1;
    if(indexfour > imgNumberfour.length - 1){
        indexfour = 0;
    }
    document.querySelector(".chuoi-deal-content-slider-container").style.right = indexfour * 100+"%";
}
setInterval(autoChuoiDeal,5000);