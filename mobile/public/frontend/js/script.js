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
