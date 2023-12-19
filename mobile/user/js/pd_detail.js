
let demanh_somau = [];
const demdoitmau = document.querySelectorAll(".product-detail-show-bottom-left-top-menu li");
for(let somau = 0; somau<=demdoitmau.length-3;somau++){
demanh_somau[somau]=0;
document.querySelector(".mau"+somau+" .bx-slider-ip-left").addEventListener("click",function(){
    demanh_somau[somau] = demanh_somau[somau] - 1;
    if(demanh_somau[somau] < 0){
        demanh_somau[somau] = document.querySelectorAll(".mau"+somau+" .product-detail-show-bottom-left-top-img-slider a").length - 1;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh_somau[somau]+1)+"/"+document.querySelectorAll(".mau"+somau+" .product-detail-show-bottom-left-top-img-slider a").length+")";
    document.querySelector(".mau"+somau+" .product-detail-show-bottom-left-top-img-slider").style.right = demanh_somau[somau] * 100+"%";
})
document.querySelector(".mau"+somau+" .bx-slider-ip-right").addEventListener("click",function(){
    demanh_somau[somau] = demanh_somau[somau] + 1;
    if(demanh_somau[somau] > document.querySelectorAll(".mau"+somau+" .product-detail-show-bottom-left-top-img-slider a").length - 1 ){
        demanh_somau[somau] = 0;
    }
    document.getElementById("vitrihinh").innerHTML = "("+(demanh_somau[somau]+1)+"/"+document.querySelectorAll(".mau"+somau+" .product-detail-show-bottom-left-top-img-slider a").length+")";
    document.querySelector(".mau"+somau+" .product-detail-show-bottom-left-top-img-slider").style.right = demanh_somau[somau] * 100+"%";
})
}
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
let tenbtn = [];
for(let iclick=0;iclick<=demdoitmau.length-3;iclick++){
    tenbtn[0] =document.querySelector(".btn-mau"+iclick);
    tenbtn[0].addEventListener("click",function(){
        for(let ihienthi=0;ihienthi<=demdoitmau.length-3;ihienthi++){
            if(ihienthi==iclick){
                document.querySelector(".mau"+ihienthi).style.display="block";
                document.querySelector(".btn-mau"+ihienthi).classList.add("active");
            }else{
                document.querySelector(".mau"+ihienthi).style.display="none";
                document.querySelector(".btn-mau"+ihienthi).classList.remove("active");
            }
        }
        document.getElementById("vitrihinh").innerHTML = "("+((demanh_somau[iclick])+1)+"/"+document.querySelectorAll(".mau"+iclick+" .product-detail-show-bottom-left-top-img-slider a").length+")";
    })
}
