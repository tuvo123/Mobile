
// slider
let index = 0;
const imgNumbLi = document.querySelectorAll(".slider-content-left-bottom li");
const imgNuber = document.querySelectorAll(".slider-content-left-top img");
const leftbtn = document.querySelector(".bx-chevron-left");
const rightbtn = document.querySelector(".bx-chevron-right");
rightbtn.addEventListener("click",function(){
        index = index + 1;
        if(index > imgNuber.length-1){
            index = 0;
        }
        removeactive();
        document.querySelector(".slider-content-left-top").style.right = index *  100+"%";
        imgNumbLi[index].classList.add("active");
    })
    leftbtn.addEventListener("click",function(){
        index = index - 1;
        if(index < 0){
            index = imgNuber.length - 1;
        }
        removeactive();
        document.querySelector(".slider-content-left-top").style.right = index *  100+"%";
        imgNumbLi[index].classList.add("active");
    })

//slider1


imgNumbLi.forEach(function(image,index){
    image.addEventListener("click",function(){
        removeactive();
        document.querySelector(".slider-content-left-top").style.right = index *  100+"%";
        
        image.classList.add("active");
    })
    
})
function removeactive(){
    let imgactive = document.querySelector(".active");
    imgactive.classList.remove("active");
}
function imgAuto (){
    index = index + 1;
    if(index > imgNuber.length - 1){
        index = 0;
    }
    removeactive();
    document.querySelector(".slider-content-left-top").style.right = index *  100+"%";
    imgNumbLi[index].classList.add("active");
}
setInterval(imgAuto,5000);

