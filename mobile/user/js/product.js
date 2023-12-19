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

const form = document.querySelector(".boloc-du-loai-hang");
form.addEventListener("click", (e) => {
    if(e.target == form){
        form.style.display = "none";
    }
})