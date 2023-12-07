//Mở đóng form filter
const filteropen = document.querySelector(".fiter-open");
const filterclose = document.querySelector("#filter-close");
filteropen.addEventListener("click",function(){
    filteropen.classList.add("active");
    document.querySelector(".bocloc-form").style.display = "flex";
})
filterclose.addEventListener("click",function(){
    filteropen.classList.remove("active");
    document.querySelector(".bocloc-form").style.display = "none";
})

const filterhang = document.querySelector("#bocloc-hang");
let hienhang = false;
filterhang.addEventListener("click",function(){
    if(!hienhang){
        filterhang.classList.add("active");
        document.querySelector(".boloc-du-loai-hang").style.display = "flex";
    }
    else{
        filterhang.classList.remove("active");
        document.querySelector(".boloc-du-loai-hang").style.display = "none";
    }
    hienhang = !hienhang;
})
const filtergia = document.querySelector("#boloc-gia");
let hiengia = false;
filtergia.addEventListener("click",function(){
    if(!hiengia){
        filtergia.classList.add("active");
        document.querySelector(".boloc-du-loai-gia").style.display = "flex";
    }
    else{
        filtergia.classList.remove("active");
        document.querySelector(".boloc-du-loai-gia").style.display = "none";
    }
    hiengia = !hiengia;
})
const filterdt = document.querySelector("#boloc-loai-dt");
let hiendt = false;
filterdt.addEventListener("click",function(){
    if(!hiendt){
        filterdt.classList.add("active");
        document.querySelector(".boloc-du-loai-dt").style.display = "flex";
    }
    else{
        filterdt.classList.remove("active");
        document.querySelector(".boloc-du-loai-dt").style.display = "none";
    }
    hiendt = !hiendt;
})
const filternhucau = document.querySelector("#boloc-nhu-cau");
let hiennhucau = false;
filternhucau.addEventListener("click",function(){
    if(!hiennhucau){
        filternhucau.classList.add("active");
        document.querySelector(".boloc-du-loai-nhu-cau").style.display = "flex";
    }
    else{
        filternhucau.classList.remove("active");
        document.querySelector(".boloc-du-loai-nhu-cau").style.display = "none";
    }
    hiennhucau = !hiennhucau;
})
const filterram = document.querySelector("#boloc-ram");
let hienram = false;
filterram.addEventListener("click",function(){
    if(!hienram){
        filterram.classList.add("active");
        document.querySelector(".boloc-du-loai-ram").style.display = "flex";
    }
    else{
        filterram.classList.remove("active");
        document.querySelector(".boloc-du-loai-ram").style.display = "none";
    }
    hienram = !hienram;
})
const filterdungluong = document.querySelector("#boloc-dung-luong");
let hiendungluong = false;
filterdungluong.addEventListener("click",function(){
    if(!hiendungluong){
        filterdungluong.classList.add("active");
        document.querySelector(".boloc-du-loai-dung-luong").style.display = "flex";
    }
    else{
        filterdungluong.classList.remove("active");
        document.querySelector(".boloc-du-loai-dung-luong").style.display = "none";
    }
    hiendungluong = !hiendungluong;
})
const filtertcsac = document.querySelector("#boloc-tc-sac");
let hientcsac = false;
filtertcsac.addEventListener("click",function(){
    if(!hientcsac){
        filtertcsac.classList.add("active");
        document.querySelector(".boloc-du-loai-tc-sac").style.display = "flex";
    }
    else{
        filtertcsac.classList.remove("active");
        document.querySelector(".boloc-du-loai-tc-sac").style.display = "none";
    }
    hientcsac = !hientcsac;
})
const filtertndb = document.querySelector("#boloc-tn-db");
let hientndb = false;
filtertndb.addEventListener("click",function(){
    if(!hientndb){
        filtertndb.classList.add("active");
        document.querySelector(".boloc-du-loai-tn-db").style.display = "flex";
    }
    else{
        filtertndb.classList.remove("active");
        document.querySelector(".boloc-du-loai-tn-db").style.display = "none";
    }
    hientndb = !hientndb;
})

// const form = document.querySelector(".boloc-du-loai-hang");
// form.addEventListener("click", (e) => {
//     if(e.target == form){
//         form.style.display = "none";
//     }
// })