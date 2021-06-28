// STICKY NAVIGATION MENU JS
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-button a");

let val;

window.onscroll = function(){
    var ttop = document.body.scrollTop;
    if(ttop>70){
        nav.classList.add("sticky");
        scrollBtn.style.display="block";
    }
    else{
        nav.classList.remove("sticky");
        scrollBtn.style.display="none";
    }
}

let body = document.querySelector("body");
let navBar = document.querySelector(".navbar");
let menuBtn = document.querySelector(".menu-btn");
let cancleBtn = document.querySelector(".cancel-btn");
document.querySelector(".menu-btn").addEventListener("click", showActive);
document.querySelector(".cancel-btn").addEventListener("click", hideActive);

function showActive(){
    navBar.classList.add("active");
    menuBtn.style.opacity = '0';
    menuBtn.style.pointerEvents = 'none';
    body.style.overflowX = 'hidden';
}
function hideActive(){
    navBar.classList.remove("active");
    menuBtn.style.opacity = '1';
    menuBtn.style.pointerEvents = 'auto';
    body.style.overflowX = 'auto';
}

let navLinks = document.querySelectorAll(".menu li a");

navLinks.forEach(func);
function func(item){
    item.addEventListener("click",hideActive);
}