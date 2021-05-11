var menuBars = document.querySelector('.fa-bars');
var menuTimes = document.querySelector('.close-menu');
var menu = document.querySelector('.menu');

menuBars.onclick = ()=> {
    menu.style.left = "0px";
}

menuTimes.onclick = ()=> {
    menu.style.left = "-350px";
}