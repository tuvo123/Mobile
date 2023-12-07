//dàn ảnh ngang ra
const numimg = document.querySelectorAll(".dacbiet .product-detail-show-bottom-left-top-img-slider a");
// for(let i = 0; i<numimg.length ; i++){
//     numimg[i].style.transform = translateX(i * 100+"%");
// }
//slider anh

const chuyentrai = document.querySelector(".dacbiet .bx-slider-ip-left");
const chuyenphai = document.querySelector(".dacbiet .bx-slider-ip-right");
let demanh = 0;
chuyentrai.addEventListener("click",function(){
    demanh = demanh - 1;
    if(demanh < 0){
        demanh = numimg.length - 1;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh+1)+"/"+numimg.length+")";
    document.querySelector(".dacbiet .product-detail-show-bottom-left-top-img-slider").style.right = demanh * 100+"%";
})
chuyenphai.addEventListener("click",function(){
    demanh = demanh + 1;
    if(demanh > numimg.length - 1 ){
        demanh = 0;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh+1)+"/"+numimg.length+")";
    document.querySelector(".dacbiet .product-detail-show-bottom-left-top-img-slider").style.right = demanh * 100+"%";
})
const numimg1 = document.querySelectorAll(".mau1 .product-detail-show-bottom-left-top-img-slider a");
// for(let i = 0; i<numimg.length ; i++){
//     numimg[i].style.transform = translateX(i * 100+"%");
// }
//slider anh

const chuyentrai1 = document.querySelector(".mau1 .bx-slider-ip-left");
const chuyenphai1 = document.querySelector(".mau1 .bx-slider-ip-right");
let demanh1 = 0;
chuyentrai1.addEventListener("click",function(){
    demanh1 = demanh1 - 1;
    if(demanh1 < 0){
        demanh1 = numimg1.length - 1;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh1+1)+"/"+numimg1.length+")";
    document.querySelector(".mau1 .product-detail-show-bottom-left-top-img-slider").style.right = demanh1 * 100+"%";
})
chuyenphai1.addEventListener("click",function(){
    demanh1 = demanh1 + 1;
    if(demanh1 > numimg1.length - 1 ){
        demanh1 = 0;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh1+1)+"/"+numimg1.length+")";
    document.querySelector(".mau1 .product-detail-show-bottom-left-top-img-slider").style.right = demanh1 * 100+"%";
})

const numimg2 = document.querySelectorAll(".mau1 .product-detail-show-bottom-left-top-img-slider a");
// for(let i = 0; i<numimg.length ; i++){
//     numimg[i].style.transform = translateX(i * 100+"%");
// }
//slider anh

const chuyentrai2 = document.querySelector(".mau2 .bx-slider-ip-left");
const chuyenphai2 = document.querySelector(".mau2 .bx-slider-ip-right");
let demanh2 = 0;
chuyentrai2.addEventListener("click",function(){
    demanh2 = demanh2 - 1;
    if(demanh2 < 0){
        demanh2 = numimg2.length - 1;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh2+1)+"/"+numimg2.length+")";
    document.querySelector(".mau2 .product-detail-show-bottom-left-top-img-slider").style.right = demanh2 * 100+"%";
})
chuyenphai2.addEventListener("click",function(){
    demanh2 = demanh2 + 1;
    if(demanh2 > numimg2.length - 1 ){
        demanh2 = 0;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh2+1)+"/"+numimg2.length+")";
    document.querySelector(".mau2 .product-detail-show-bottom-left-top-img-slider").style.right = demanh2 * 100+"%";
})

const numimg3 = document.querySelectorAll(".mau3 .product-detail-show-bottom-left-top-img-slider a");
// for(let i = 0; i<numimg.length ; i++){
//     numimg[i].style.transform = translateX(i * 100+"%");
// }
//slider anh

const chuyentrai3 = document.querySelector(".mau3 .bx-slider-ip-left");
const chuyenphai3 = document.querySelector(".mau3 .bx-slider-ip-right");
let demanh3 = 0;
chuyentrai3.addEventListener("click",function(){
    demanh3 = demanh3 - 1;
    if(demanh3 < 0){
        demanh3 = numimg3.length - 1;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh3+1)+"/"+numimg3.length+")";
    document.querySelector(".mau3 .product-detail-show-bottom-left-top-img-slider").style.right = demanh3 * 100+"%";
})
chuyenphai3.addEventListener("click",function(){
    demanh3 = demanh3 + 1;
    if(demanh3 > numimg3.length - 1 ){
        demanh3 = 0;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh3+1)+"/"+numimg3.length+")";
    document.querySelector(".mau3 .product-detail-show-bottom-left-top-img-slider").style.right = demanh3 * 100+"%";
})

const numimg4 = document.querySelectorAll(".mau4 .product-detail-show-bottom-left-top-img-slider a");
// for(let i = 0; i<numimg.length ; i++){
//     numimg[i].style.transform = translateX(i * 100+"%");
// }
//slider anh

const chuyentrai4 = document.querySelector(".mau4 .bx-slider-ip-left");
const chuyenphai4 = document.querySelector(".mau4 .bx-slider-ip-right");
let demanh4 = 0;
chuyentrai4.addEventListener("click",function(){
    demanh4 = demanh4 - 1;
    if(demanh4 < 0){
        demanh4 = numimg4.length - 1;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh4+1)+"/"+numimg4.length+")";
    document.querySelector(".mau4 .product-detail-show-bottom-left-top-img-slider").style.right = demanh4 * 100+"%";
})
chuyenphai4.addEventListener("click",function(){
    demanh4 = demanh4 + 1;
    if(demanh4 > numimg4.length - 1 ){
        demanh4 = 0;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh4+1)+"/"+numimg4.length+")";
    document.querySelector(".mau4 .product-detail-show-bottom-left-top-img-slider").style.right = demanh4 * 100+"%";
})
const openkt = document.querySelector(".openkt");
const opentt = document.querySelector(".opentt");
const opentskt = document.querySelector(".product-detail-show-tskt");
const closetskt = document.querySelector(".product-detail-show-tskt-dong");

closetskt.addEventListener("click", function(){
    opentskt.style.display = "none";
})

const btntskt = document.querySelector("#btn-tskt");
const btnttsp = document.querySelector("#btn-ttsp");
btnttsp.addEventListener("click", function(){
    btntskt.classList.remove("active");
    btnttsp.classList.add("active");
    document.querySelector(".product-detail-show-tskt-chtsp-bottom-tskt").style.display = "none";
    document.querySelector(".product-detail-show-tskt-chtsp-bottom-ttsp").style.display = "block";
})
btntskt.addEventListener("click", function(){
    btnttsp.classList.remove("active");
    btntskt.classList.add("active");
    document.querySelector(".product-detail-show-tskt-chtsp-bottom-ttsp").style.display = "none";
    document.querySelector(".product-detail-show-tskt-chtsp-bottom-tskt").style.display = "block";
})
document.querySelector(".sp-right").innerHTML = document.querySelector(".sp-right").innerHTML.replace(",","<br>");
opentt.addEventListener("click",function(){
    opentskt.style.display = "flex";
    btntskt.classList.remove("active");
    btnttsp.classList.add("active");
})
openkt.addEventListener("click", function(){
    opentskt.style.display = "flex";
    btnttsp.classList.remove("active");
    btntskt.classList.add("active");
})
const btnnoibat = document.querySelector(".btn-noi-bat");
const btnmau1 = document.querySelector(".btn-mau1");
const btnmau2 = document.querySelector(".btn-mau2");
const btnmau3 = document.querySelector(".btn-mau3");
const btnmau4 = document.querySelector(".btn-mau4");
btnmau1.addEventListener("click", function(){
    document.querySelector(".dacbiet").style.display = "none";
    document.querySelector(".mau1").style.display = "block";
    document.querySelector(".mau2").style.display = "none";
    document.querySelector(".mau3").style.display = "none";
    document.querySelector(".mau4").style.display = "none";
    document.querySelector(".btn-noi-bat").classList.remove("active");
    document.querySelector(".btn-mau1").classList.add("active");
    document.querySelector(".btn-mau2").classList.remove("active");
    document.querySelector(".btn-mau3").classList.remove("active");
    document.querySelector(".btn-mau4").classList.remove("active");
    document.getElementById("vitrihinh").innerHTML = "("+(demanh1+1)+"/"+numimg1.length+")";
})
btnmau2.addEventListener("click", function(){
    document.querySelector(".dacbiet").style.display = "none";
    document.querySelector(".mau1").style.display = "none";
    document.querySelector(".mau2").style.display = "block";
    document.querySelector(".mau3").style.display = "none";
    document.querySelector(".mau4").style.display = "none";
    document.querySelector(".btn-noi-bat").classList.remove("active");
    document.querySelector(".btn-mau1").classList.remove("active");
    document.querySelector(".btn-mau2").classList.add("active");
    document.querySelector(".btn-mau3").classList.remove("active");
    document.querySelector(".btn-mau4").classList.remove("active");
    document.getElementById("vitrihinh").innerHTML = "("+(demanh2+1)+"/"+numimg2.length+")";
})
btnmau3.addEventListener("click", function(){
    document.querySelector(".dacbiet").style.display = "none";
    document.querySelector(".mau1").style.display = "none";
    document.querySelector(".mau2").style.display = "none";
    document.querySelector(".mau3").style.display = "block";
    document.querySelector(".mau4").style.display = "none";
    document.querySelector(".btn-noi-bat").classList.remove("active");
    document.querySelector(".btn-mau1").classList.remove("active");
    document.querySelector(".btn-mau2").classList.remove("active");
    document.querySelector(".btn-mau3").classList.add("active");
    document.querySelector(".btn-mau4").classList.remove("active");
    document.getElementById("vitrihinh").innerHTML = "("+(demanh3+1)+"/"+numimg3.length+")";
})
btnmau4.addEventListener("click", function(){
    document.querySelector(".dacbiet").style.display = "none";
    document.querySelector(".mau1").style.display = "none";
    document.querySelector(".mau2").style.display = "none";
    document.querySelector(".mau3").style.display = "none";
    document.querySelector(".mau4").style.display = "block";
    document.querySelector(".btn-noi-bat").classList.remove("active");
    document.querySelector(".btn-mau1").classList.remove("active");
    document.querySelector(".btn-mau2").classList.remove("active");
    document.querySelector(".btn-mau3").classList.remove("active");
    document.querySelector(".btn-mau4").classList.add("active");
    document.getElementById("vitrihinh").innerHTML = "("+(demanh4+1)+"/"+numimg4.length+")";
})
btnnoibat.addEventListener("click", function(){
    document.querySelector(".dacbiet").style.display = "block";
    document.querySelector(".mau1").style.display = "none";
    document.querySelector(".mau2").style.display = "none";
    document.querySelector(".mau3").style.display = "none";
    document.querySelector(".mau4").style.display = "none";
    document.querySelector(".btn-noi-bat").classList.add("active");
    document.querySelector(".btn-mau1").classList.remove("active");
    document.querySelector(".btn-mau2").classList.remove("active");
    document.querySelector(".btn-mau3").classList.remove("active");
    document.querySelector(".btn-mau4").classList.remove("active");
    document.getElementById("vitrihinh").innerHTML = "("+(demanh+1)+"/"+numimg.length+")";
})