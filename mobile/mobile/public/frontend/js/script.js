const adressbtn = document.querySelector("#adress-form");
const adressclose = document.querySelector("#adress-close");

// console.log(rightbtn);
//Mở đóng form adress
adressbtn.addEventListener("click",function(){
    document.querySelector(".adress-form").style.display = "flex";
});
adressclose.addEventListener("click",function(){
    document.querySelector(".adress-form").style.display = "none";
});

// hiện xem thêm ở footer
const btnxemthemfooter = document.querySelector(".footer-top-left-items-btn");
btnxemthemfooter.addEventListener("click", function(){
    document.querySelector(".footer-top-left-items-bottom").style.display = "block";
    document.querySelector(".footer-top-left-items-btn").style.display = "none";
})
const btndn = document.querySelector("#btn-dangnhap");
btndn.addEventListener("click",function(){
    document.querySelector(".form-dang-nhap").style.display = "flex";
    document.querySelector(".form-dang-nhap-content").style.display = "block";
})
const btndk = document.querySelector("#btn-dang-ki");
btndk.addEventListener("click",function(){
    document.querySelector(".form-dang-nhap-content").style.display  = "none";
    document.querySelector(".form-dang-ki-content").style.display = "block";
})
const btndongdn = document.querySelector(".form-dang-nhap-content-dong");
const btndongdk = document.querySelector(".form-dang-ki-content-dong");
btndongdn.addEventListener("click",function(){
    document.querySelector(".form-dang-nhap").style.display = "none";
    document.querySelector(".form-dang-nhap-content").style.display = "none";
})
btndongdk.addEventListener("click",function(){
    document.querySelector(".form-dang-nhap-content").style.display  = "none";
    document.querySelector(".form-dang-ki-content").style.display = "none";
    document.querySelector(".form-dang-nhap").style.display = "none";
})
const openformuser = document.querySelector(".chinh-sua-user");
let ktopenformuser = "false";
openformuser.addEventListener("click", function(){
    if(ktopenformuser){
        document.querySelector(".formuser").style.display = "block";
    }
    else{
        document.querySelector(".formuser").style.display = "none";
    }
    ktopenformuser = ! ktopenformuser;
})
const chinhsuatk = document.querySelector(".chinh-sua-tk");
const chinhsuamk = document.querySelector(".chinh-sua-mk");
chinhsuatk.addEventListener("click", function(){
    document.querySelector(".formuser").style.display = "block";
    document.querySelector(".formuser-edit").style.display = "block";
    document.querySelector(".formuser-bottom").style.display = "none";
    document.querySelector(".formuser-edit-password").style.display = "none";
    chinhsuatk.style.display = "none";
    chinhsuamk.style.display = "none";
    document.querySelector(".chinh-sua-ql").style.display = "flex";
    document.querySelector(".chinh-sua-luu").style.display = "flex";
})

chinhsuamk.addEventListener("click", function(){
    document.querySelector(".formuser").style.display = "block";
    document.querySelector(".formuser-edit").style.display = "none";
    document.querySelector(".formuser-edit-password").style.display = "block";
    document.querySelector(".formuser-bottom").style.display = "none";
    chinhsuatk.style.display = "none";
    chinhsuamk.style.display = "none";
    document.querySelector(".chinh-sua-ql").style.display = "flex";
    document.querySelector(".chinh-sua-luu").style.display = "flex";
})
document.querySelector(".chinh-sua-ql").addEventListener("click",function(){
    document.querySelector(".formuser").style.display = "block";
    document.querySelector(".formuser-edit").style.display = "none";
    document.querySelector(".formuser-bottom").style.display = "block";
    document.querySelector(".formuser-edit-password").style.display = "none";
    chinhsuatk.style.display = "flex";
    chinhsuamk.style.display = "flex";
    document.querySelector(".chinh-sua-ql").style.display = "none";
    document.querySelector(".chinh-sua-luu").style.display = "none";
})
document.querySelector(".dang-xuat").addEventListener("click", function(){
    document.querySelector(".formuser").style.display = "none";
    document.querySelector(".trang-thai-dang-nhap").style.display = "none";
    btndn.style.display = "flex";
    document.querySelector(".form-dang-nhap").style.display = "flex";
    document.querySelector(".form-dang-nhap-content").style.display = "block";
})
// document.querySelector(".login-btn").addEventListener("click", function(){
//     document.querySelector(".formuser").style.display = "none";
//     document.querySelector(".trang-thai-dang-nhap").style.display = "flex";
//     btndn.style.display = "none";
//     document.querySelector(".form-dang-nhap").style.display = "none";
//     document.querySelector(".form-dang-nhap-content").style.display = "none";
// })
