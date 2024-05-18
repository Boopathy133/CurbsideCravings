const header=document.querySelector("header");
window.addEventListener("scroll",function () {
    header.classList.toggle("sticky",this.window.scroll > 80);
});
let menu = document.querySelector('#menu-icon');
let navlist = document.querySelector('.navlist');
menu.onclick=()=>{
    menu.classList.toggle('bx-x')
    navlist.classList.toggle('open')
}

// register popup
let popup=document.getElementById("popup");
function openPopup() {
    popup.classList.add("sectionPopup");
}